const express = require("express");
const router = express.Router();
const { Op } = require('sequelize');
const {generateAccessToken, generateRefreshToken} = require("../middleware/authMiddleware");
const Venue = require("../models/venueModel");
const Booking = require("../models/bookingModel");
const bcrypt = require("bcrypt");
const db = require('../config/database');


// endpoint to register a venue
router.post("/register", async (req, res) => {
    // #swagger.tags = ['Vendor']
    const {
        venueType,
        venueName,
        address,
        location,
        postalCode,
        description,
        facilities,
        phoneNumber,
        email,
        websiteUrl,
        password, // Assuming you are handling password hashing securely
    } = req.body;

    try {
        await Venue.create({
            venueType,
            venueName,
            address,
            location,
            postalCode,
            description,
            facilities,
            phoneNumber,
            email,
            websiteUrl,
            password
        });

        return res.status(201).json({ message: "Venue registration request created" });
    } catch (error) {
        console.error(error);
        return res.status(500).json({ error: "Could not create venue at this moment" });
    }
});


router.post("/login", async (req, res) => {
    // #swagger.tags = ['Vendor']
    const {email, password} = req.body;

    try {
        const vendor = await Venue.findOne({where: {email}});
        if (!vendor) {
            return res.status(401).json({error: "User does not exist"});
        }

        const isPasswordValid = await bcrypt.compare(password, vendor.password);

        if (!isPasswordValid) {
            return res.status(401).json({error: "Invalid credentials"});
        }

        // if (!vendor.isActive) {
        //     return res.status(401).json({ error: "Your account has been disabled"});
        // }

        const accessToken = generateAccessToken({
            email: vendor.email,
            name: vendor.venueName,
        });

        const refreshToken = generateRefreshToken({
            email: vendor.email,
            name: vendor.venueName,
        });

        return res.status(200).json({message: "Login successful", tokens: {
            access: accessToken,
            refresh: refreshToken
        }, 
        details: {
            email: vendor.email,
            venueName: vendor.venueName,
        }});

    } catch (error) {
        console.error(error);
        return res.status(500).json({error: "Could not login at this moment"});
    }
});

// Route to fetch venue details and statistics
router.get('/dashboard/:venueEmail', async (req, res) => {
    const venueEmail = req.params.venueEmail;

    try {
        // Total revenue
        const totalRevenue = await Booking.sum('price', { where: { venueEmailAddress: venueEmail } });

        // Total number of visitors
        const totalVisitors = await Booking.sum('numberOfGuests', { where: { venueEmailAddress: venueEmail } });

        // Upcoming bookings
        const upcomingBookings = await Booking.findAll({
            where: {
                venueEmailAddress: venueEmail,
                startDate: { [Op.gt]: new Date() } // Filter for bookings with start date in the future
            },
            order: [['startDate', 'ASC']] // Order by ascending start date
        });

        // Visitor counts by month
        const visitorCountsByMonth = await Booking.findAll({
            attributes: [
                [db.fn('MONTH', db.col('startDate')), 'month'],
                [db.fn('YEAR', db.col('startDate')), 'year'],
                [db.fn('SUM', db.col('numberOfGuests')), 'visitorCount']
            ],
            where: {
                venueEmailAddress: venueEmail
            },
            group: [db.fn('YEAR', db.col('startDate')), db.fn('MONTH', db.col('startDate'))],
            raw: true
        });

        // Format response
        const dashboardData = {
            totalRevenue: totalRevenue || 0,
            totalVisitors: totalVisitors || 0,
            upcomingBookings,
            visitorCountsByMonth
        };

        res.status(200).json(dashboardData);
    } catch (error) {
        console.error('Error fetching dashboard data:', error);
        res.status(500).json({ error: 'Failed to fetch dashboard data' });
    }
});

module.exports = router;