const express = require("express");
const router = express.Router();
const {generateAccessToken, generateRefreshToken} = require("../middleware/authMiddleware");
const Venue = require("../models/venueModel");
const bcrypt = require("bcrypt");


// endpoint to register a venue
router.post("/register", async (req, res) => {
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
        });

        return res.status(201).json({message: "Venue registration request created"});
    } catch (error) {
        console.error(error);
        return res.status(500).json({ error: "Could not create venue at this moment"});
    }
});

router.post("/login", async (req, res) => {
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

        if (!vendor.isActive) {
            return res.status(401).json({ error: "Your account has been disabled"});
        }

        const accessToken = generateAccessToken({
            email: vendor.emailAddress,
            name: vendor.venueName,
        });

        const refreshToken = generateRefreshToken({
            email: vendor.emailAddress,
            name: vendor.venueName,
        });

        return res.status(200).json({message: "Login successful", tokens: {
            access: accessToken,
            refresh: refreshToken
        }});

    } catch (error) {
        console.error(error);
        return res.status(500).json({error: "Could not login at this moment"});
    }
});

module.exports = router;