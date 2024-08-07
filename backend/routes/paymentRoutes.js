const express = require("express");
const router = express.Router();
const { Op } = require('sequelize');
const { generateAccessToken, generateRefreshToken } = require("../middleware/authMiddleware");
const Venue = require("../models/venueModel");
const Booking = require("../models/bookingModel");
const Payment = require("../models/paymentModel");
const bcrypt = require("bcrypt");
const db = require('../config/database');

router.get('/payments/:email/history', async (req, res) => {
    // #swagger.tags = ['Payment']
    // #swagger.summary = 'Fetch payment history for a specific vendor'
    // #swagger.description = 'This endpoint retrieves all payment transactions for a specific vendor based on their email address.'
    // #swagger.parameters['email'] = { description: 'Email address of the vendor', required: true, type: 'string' }
    const email = req.params.email;

    try {
        const payments = await Payment.findAll({ where: { to: email } });
        res.status(200).json(payments);
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: 'Failed to fetch payment history' });
    }
});

router.get('/payments/summary/:email', async (req, res) => {
    // #swagger.tags = ['Payment']
    // #swagger.summary = 'Payment summary for a specific vendor'
    // #swagger.description = 'This endpoint provides a summary of payments for a vendor, including total revenue, current month’s revenue, and previous month’s revenue.'
    // #swagger.parameters['email'] = { description: 'Email address of the vendor', required: true, type: 'string' }
    const email = req.params.email;

    try {
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
            totalRevenue,
            currentMonthRevenue,
            previousMonthRevenue
        });
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: 'Failed to retrieve payment summary' });
    }
});

module.exports = router;