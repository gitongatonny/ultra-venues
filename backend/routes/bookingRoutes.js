const express = require("express");
const router = express.Router();
const Booking = require("../models/bookingModel");

// route to list all bookings
router.get("/bookings", async (req, res) => {
    // #swagger.tags = ['Booking']
    try {
        const bookings = await Booking.findAll();
        res.status(200).json(bookings);
    } catch (error) {
        console.error(error);
        res.status(500).json({error: "Server error"});
    }
});

// endpoint to list all bookings for a particular venue by venue id
router.get("/bookings/venue/:id", async (req, res) => {
    // #swagger.tags = ['Booking']
    const id = req.params.id;
    try {
        const bookings = await Booking.findAll({where: {id: id}});
        res.status(200).json(bookings);
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: "Server error"});
    }
});

// endpoint to list all bookings for a particular user by their user id
router.get("/bookings/user/:id", async (req, res) => {
    // #swagger.tags = ['Booking']
    const id = req.params.id;
    try {
        const bookings = await Booking.findAll({where : {id: id}});
        res.status(200).json(bookings);
    } catch (error) {
        console.error(error);
        res.status(500).json({error: "Server error"});
    }
});


module.exports = router;