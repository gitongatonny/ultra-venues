const express = require('express');
const router = express.Router();
const Venue = require("../models/venueModel");

// endpoint to list all venues
router.get("/venues", async (req, res) => {
    // #swagger.tags = ['Venue']
    try {
        const venues = await Venue.findAll({ attributes: { exclude: ["password", "isActive"]}});
        res.status(200).json(venues);
    } catch (error) {
        console.error(error);
        res.status(500).json({error: "Could not fetch venues at this moment"});
    }
});

// endpoint to get venue details
router.get("/venues/:id", async (req, res) => {
    // #swagger.tags = ['Venue']
    const id = req.params.id;
    try {
        const venue = await Venue.findOne({ where : {id: id}, attributes: { exclude: ["password", "isActive"]}});
        if (!venue) {
            return res.status(404).json({ error: "Venue not found"});
        }
        res.status(200).json(venue);
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: "Cound not fetch venue details!"});
    }
});

router.put("/venues/:id", async (req, res) => {
    // #swagger.tags = ['Venue']
    const id = req.params.id;
    const {
        name, type, email, mobile, location, website, license, kraPin, services, additionalServices
    } = req.body;
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
        // venue.license = license;
        // venue.kraPin = kraPin;
        venue.facilities = services;
        // venue.additionalServices = additionalServices;
        // venue.pictures = pictures; // Ensure pictures handling logic is in place

        await venue.save();
        res.status(200).json(venue);
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: "Could not update venue details!" });
    }
});

router.post("/venues/update-email/:id", async (req, res) => {
    // #swagger.tags = ['Venue']
    const { newEmail } = req.body;
    const venueId = req.params.id; // Replace with actual venue ID retrieval logic
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


module.exports = router;