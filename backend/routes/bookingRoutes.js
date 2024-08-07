const express = require("express");
const router = express.Router();
const Booking = require("../models/bookingModel");
const Venue = require("../models/venueModel");
const Customer = require("../models/customerModel");

// route to list all bookings
router.get("/bookings", async (req, res) => {
    // #swagger.tags = ['Booking']
	// #swagger.summary = 'Get all bookings'
	// #swagger.description = 'This endpoint returns all bookings available in the system.'
    try {
        const bookings = await Booking.findAll();
        res.status(200).json(bookings);
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: "Server error" });
    }
});

// endpoint to list all bookings for a particular venue by venue email
router.get("/bookings/venue/:email", async (req, res) => {
    // #swagger.tags = ['Booking']
	// #swagger.summary = 'Get all bookings for a particular venue'
	// #swagger.description = 'This endpoint returns all bookings for a specific venue identified by its email address.'
	/* #swagger.parameters['email'] = {
		in: 'path',
		description: 'Email address of the venue',
		required: true,
		type: 'string'
	} */
    const email = req.params.email;
    try {
        const bookings = await Booking.findAll({ where: { venueEmailAddress: email } });
        res.status(200).json(bookings);
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: "Server error" });
    }
});

// endpoint to list all bookings for a particular user by their user id
router.get("/bookings/user/:id", async (req, res) => {
    // #swagger.tags = ['Booking']
	// #swagger.summary = 'Get all bookings for a particular user'
	// #swagger.description = 'This endpoint returns all bookings for a specific user identified by their user ID. The response includes user details and their bookings.'
	/* #swagger.parameters['id'] = {
		in: 'path',
		description: 'ID of the user',
		required: true,
		type: 'integer'
	} */
    const userId = req.params.id;

    try {
        // Fetch user details
        const user = await Customer.findByPk(userId);

        if (!user) {
            return res.status(404).json({ error: "User not found" });
        }

        // Fetch bookings associated with the user
        const bookings = await Booking.findAll({
            where: { customerEmailAddress: user.email },
        });

        // Combine user details and bookings into a single response object
        const userData = {
            id: user.id,
            fullName: user.fullName,
            email: user.email,
            phoneNumber: user.phoneNumber,
            bookings: bookings // Include bookings data here
        };

        // Send combined data as JSON response
        res.status(200).json(userData);
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: "Server error" });
    }
});

module.exports = router;
