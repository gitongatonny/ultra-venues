const express = require("express");
const router = express.Router();
const { Op } = require('sequelize');
const { generateAccessToken, generateRefreshToken } = require("../middleware/authMiddleware");
const Venue = require("../models/venueModel");
const Booking = require("../models/bookingModel");
const Payment = require("../models/paymentModel");
const bcrypt = require("bcrypt");
const db = require('../config/database');

// endpoint to register a venue
router.post("/register", async (req, res) => {
    // #swagger.tags = ['Vendor']
    // #swagger.summary = 'Register a new venue'
    // #swagger.description = 'This endpoint allows a new venue to register by providing details such as venue type, name, address, location, postal code, description, facilities, phone number, email, website URL, and password.'
    /* #swagger.parameters['obj'] = {
        in: 'body',
        description: 'Venue registration details',
        required: true,
        schema: {
            $venueType: 'Conference Hall',
            $venueName: 'Grand Conference Center',
            $address: '123 Main St',
            $location: 'Cityville',
            $postalCode: '12345',
            $description: 'A spacious conference hall',
            $facilities: 'WiFi, Parking, AV Equipment',
            $phoneNumber: '1234567890',
            $email: 'venue@example.com',
            $websiteUrl: 'http://venue.com',
            $password: 'securepassword'
        }
    } */
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
        password
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

// endpoint to login a venue
router.post("/login", async (req, res) => {
    // #swagger.tags = ['Vendor']
    // #swagger.summary = 'Venue login'
    // #swagger.description = 'This endpoint allows a venue to login by providing their email and password.'
    /* #swagger.parameters['obj'] = {
        in: 'body',
        description: 'Venue login details',
        required: true,
        schema: {
            $email: 'venue@example.com',
            $password: 'securepassword'
        }
    } */
    const { email, password } = req.body;

    try {
        const vendor = await Venue.findOne({ where: { email } });
        if (!vendor) {
            return res.status(401).json({ error: "User does not exist" });
        }

        const isPasswordValid = await bcrypt.compare(password, vendor.password);

        if (!isPasswordValid) {
            return res.status(401).json({ error: "Invalid credentials" });
        }

        const accessToken = generateAccessToken({
            email: vendor.email,
            name: vendor.venueName,
            id: vendor.id,
        });

        const refreshToken = generateRefreshToken({
            email: vendor.email,
            name: vendor.venueName,
            id: vendor.id,
        });

        return res.status(200).json({
            message: "Login successful",
            tokens: {
                access: accessToken,
                refresh: refreshToken
            },
            details: {
                email: vendor.email,
                venueName: vendor.venueName,
            }
        });

    } catch (error) {
        console.error(error);
        return res.status(500).json({ error: "Could not login at this moment" });
    }
});

// Route to fetch venue details and statistics
router.get('/dashboard/:venueEmail', async (req, res) => {
    // #swagger.tags = ['Vendor']
    // #swagger.summary = 'Fetch venue dashboard data'
    // #swagger.description = 'This endpoint provides venue details and statistics, including total revenue, total visitors, upcoming bookings, and visitor counts by month.'
    // #swagger.parameters['venueEmail'] = { description: 'Email address of the venue' }
    const venueEmail = req.params.venueEmail;

    try {
        const totalRevenue = await Booking.sum('price', { where: { venueEmailAddress: venueEmail } });
        const totalVisitors = await Booking.sum('numberOfGuests', { where: { venueEmailAddress: venueEmail } });

        const upcomingBookings = await Booking.findAll({
            where: {
                venueEmailAddress: venueEmail,
                startDate: { [Op.gt]: new Date() }
            },
            order: [['startDate', 'ASC']]
        });

        const visitorCountsByMonth = await Booking.findAll({
            attributes: [
                [db.fn('MONTH', db.col('startDate')), 'month'],
                [db.fn('YEAR', db.col('startDate')), 'year'],
                [db.fn('SUM', db.col('numberOfGuests')), 'visitorCount']
            ],
            where: { venueEmailAddress: venueEmail },
            group: [db.fn('YEAR', db.col('startDate')), db.fn('MONTH', db.col('startDate'))],
            raw: true
        });

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

// Endpoint to get all transactions for a specific email
router.get('/transactions/:email', async (req, res) => {
    // #swagger.tags = ['Vendor']
    // #swagger.summary = 'Fetch transactions for a specific email'
    // #swagger.description = 'This endpoint provides all transactions for a specific email, including total revenue, current month revenue, and previous month revenue.'
    // #swagger.parameters['email'] = { description: 'Email address of the venue' }
    const email = req.params.email;

    try {
        const transactions = await Payment.findAll({ where: { to: email } });
        const totalRevenue = await Payment.sum('amount', { where: { to: email } });

        const currentMonthStart = new Date(new Date().getFullYear(), new Date().getMonth(), 1);
        const currentMonthRevenue = await Payment.sum('amount', {
            where: {
                to: email,
                date: { [Op.gte]: currentMonthStart }
            }
        });

        const previousMonthStart = new Date(new Date().getFullYear(), new Date().getMonth() - 1, 1);
        const previousMonthEnd = new Date(new Date().getFullYear(), new Date().getMonth(), 0);
        const previousMonthRevenue = await Payment.sum('amount', {
            where: {
                to: email,
                date: {
                    [Op.gte]: previousMonthStart,
                    [Op.lt]: currentMonthStart
                }
            }
        });

        res.status(200).json({
            transactions,
            totalRevenue,
            currentMonthRevenue,
            previousMonthRevenue
        });
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: "Server error" });
    }
});

module.exports = router;
