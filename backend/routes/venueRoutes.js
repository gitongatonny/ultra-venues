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

module.exports = router;