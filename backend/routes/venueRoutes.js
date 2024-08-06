const express = require('express');
const router = express.Router();
const Venue = require("../models/venueModel");
const Booking = require("../models/bookingModel");
// const upload = require("../config/multer");
const multer = require('multer');
const path = require('path');
const { v4: uuidv4 } = require('uuid');

const storage = multer.diskStorage({
    destination: function (req, file, cb) {
        cb(null, 'uploads/'); // Directory to store uploaded files
    },
    filename: function (req, file, cb) {
        const ext = path.extname(file.originalname);
        cb(null, uuidv4() + ext); // Unique filename
    }
});

const upload = multer({ storage: storage });

// Endpoint to list all venues
router.get("/venues", async (req, res) => {
    // #swagger.tags = ['Venue']
    // #swagger.summary = 'List all venues with pagination'
    // #swagger.description = 'This endpoint retrieves a list of all venues, excluding sensitive information like password and isActive status. Supports pagination.'

    try {
        // Default values for page and limit
        const page = parseInt(req.query.page, 10) || 1;
        const limit = parseInt(req.query.limit, 10) || 4;

        // Calculate offset
        const offset = (page - 1) * limit;

        // Fetch venues with pagination
        const { count, rows: venues } = await Venue.findAndCountAll({
            attributes: { exclude: ["password", "isActive"]},
            limit: limit,
            offset: offset
        });

        // Get the base URL from the request
        const baseUrl = `${req.protocol}://${req.get('host')}`;

        // Map venues to include image URLs
        const venuesWithImagePaths = venues.map(venue => {
            // Parse pictures JSON string if needed
            const pictures = JSON.parse(venue.pictures || '[]');
            return {
                ...venue.toJSON(),
                pictures: pictures.map(picture => `${baseUrl}/${picture}`) // Full URL
            };
        });

        // Calculate total pages
        const totalPages = Math.ceil(count / limit);

        res.status(200).json({
            venues: venuesWithImagePaths,
            pagination: {
                totalItems: count,
                totalPages: totalPages,
                currentPage: page,
                itemsPerPage: limit
            }
        });
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: "Could not fetch venues at this moment" });
    }
});
// Endpoint to get venue details
router.get("/venues/:id", async (req, res) => {
    // #swagger.tags = ['Venue']
    // #swagger.summary = 'Get venue details'
    // #swagger.description = 'This endpoint retrieves details of a specific venue by its ID, excluding sensitive information like password and isActive status.'
    // #swagger.parameters['id'] = { description: 'ID of the venue to retrieve details for' }
    const id = req.params.id;
    try {
        const venue = await Venue.findOne({ where: {id: id}, attributes: { exclude: ["password", "isActive"]}});
        if (!venue) {
            return res.status(404).json({ error: "Venue not found" });
        }

        // Get the base URL from the request
        const baseUrl = `${req.protocol}://${req.get('host')}`;

        // Parse pictures JSON string if needed
        const pictures = JSON.parse(venue.pictures || '[]');

        // Include image paths in the response
        const venueWithImagePaths = {
            ...venue.toJSON(),
            pictures: pictures.map(picture => `${baseUrl}/${picture}`) // Full URL
        };

        res.status(200).json(venueWithImagePaths);
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: "Could not fetch venue details!" });
    }
});



// Endpoint to update venue details including pictures
router.put("/venues/:id", upload.array('pictures'), async (req, res) => {
    const id = req.params.id;
    const { name, type, email, mobile, location, website, services, price } = req.body;

    try {
        const venue = await Venue.findOne({ where: { id: id } });
        if (!venue) {
            return res.status(404).json({ error: "Venue not found" });
        }

        venue.venueName = name;
        venue.venueType = type;
        venue.email = email;
        venue.phoneNumber = mobile;
        venue.location = location;
        venue.websiteUrl = website;
        venue.facilities = services;
        venue.price = price;

        if (req.files.length > 0) {
            const pictures = req.files.map(file => file.path);
            venue.pictures = pictures;
        }

        await venue.save();
        res.status(200).json(venue);
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: "Could not update venue details!" });
    }
});

// Endpoint to update venue email
router.post("/venues/update-email/:id", async (req, res) => {
    // #swagger.tags = ['Venue']
    // #swagger.summary = 'Update venue email'
    // #swagger.description = 'This endpoint updates the email address of a specific venue by its ID.'
    // #swagger.parameters['id'] = { description: 'ID of the venue to update email for' }
    // #swagger.parameters['newEmail'] = { in: 'body', description: 'New email address of the venue', required: true, type: 'string' }
    const { newEmail } = req.body;
    const venueId = req.params.id;

    try {
        const venue = await Venue.findOne({ where: { id: venueId } });
        if (!venue) {
            return res.status(404).json({ error: "Venue not found" });
        }
        venue.email = newEmail;
        await venue.save();
        res.status(200).json({ message: "Email updated successfully" });
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: "Could not update email!" });
    }
});

router.get('/venues/reports', async (req, res) => {
    // #swagger.tags = ['Analytics']
    // #swagger.summary = 'Generate performance reports for venues'
    // #swagger.description = 'This endpoint generates performance reports, including metrics like total bookings, revenue, and visitor counts, for the specified date range.'
    // #swagger.parameters['startDate'] = { description: 'Start date for the report', required: true, type: 'string', format: 'date' }
    // #swagger.parameters['endDate'] = { description: 'End date for the report', required: true, type: 'string', format: 'date' }
    const { startDate, endDate } = req.query;

    try {
        const bookings = await Booking.findAll({
            attributes: [
                [db.fn('SUM', db.col('price')), 'totalRevenue'],
                [db.fn('COUNT', db.col('id')), 'totalBookings'],
                [db.fn('SUM', db.col('numberOfGuests')), 'totalVisitors']
            ],
            where: {
                startDate: { [Op.between]: [new Date(startDate), new Date(endDate)] }
            },
            raw: true
        });

        console.log(bookings);
        res.status(200).json(bookings[0]);
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: 'Failed to generate report' });
    }
});


module.exports = router;
