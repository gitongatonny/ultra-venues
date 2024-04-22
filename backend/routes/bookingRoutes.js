const express = require("express");
const router = express.Router();
const Booking = require("../models/bookingModel");

// route to list all bookings
router.get("/bookings", async (req, res) => {
    try {
        const bookings = await Booking.findAll();
        res.status(200).json(bookings);
    } catch (error) {
        console.error(error);
        res.status(500).json({error: "Server error"});
    }
});

// endpoint to list all bookings for a particular venue by venue email address
router.get("/bookings/venue/:venueEmailAddress", async (req, res) => {
    const venueEmailAddress = req.params.venueEmailAddress;
    try {
        const bookings = await Booking.findAll({where: {venueEmailAddress}});
        res.status(200).json(bookings);
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: "Server error"});
    }
});

// endpoint to list all bookings for a particular user by their email address
router.get("/bookings/user/:userEmailAddress", async (req, res) => {
    const userEmailAddress = req.params.userEmailAddress;
    try {
        const bookings = await Booking.findAll({where : {userEmailAddress}});
        res.status(200).json(bookings);
    } catch (error) {
        console.error(error);
        res.status(500).json({error: "Server error"});
    }
});

module.exports = router;