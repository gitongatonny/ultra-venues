const express = require("express");
const router = express.Router();
const bcrypt = require("bcrypt");
const Customer = require("../models/customerModel");
const { generateAccessToken, generateRefreshToken, authenticateToken}  = require("../middleware/authMiddleware.js");


router.post("/register", async (req, res) => {
    const {fullName, email, phoneNumber, password} = req.body;

    try {
        const existingCustomer = await Customer.findOne({where: {email}});
        if (existingCustomer) {
            return res.status(400).json({error: "Email already exists"});
        }

        const hashedPassword = await bcrypt.hash(password, 10);

        const newCustomer = await Customer.create({
            fullName,
            email,
            phoneNumber,
            password: hashedPassword
        });

        return res.status(201).json(newCustomer);
    } catch (error) {
        console.error(error);
        return res.status(500).json({error: "Could not create user at this moment"});
    }
});

router.post("/login", async (req, res) => {
    const {email, password} = req.body;

    try {
        const customer = await Customer.findOne({where: {email}});
        if (!customer) {
            return res.status(401).json({error: "User does not exist"});
        }

        const isPasswordValid = await bcrypt.compare(password, customer.password);

        if (!isPasswordValid) {
            return res.status(401).json({error: "Invalid credentials"});
        }

        const accessToken = generateAccessToken({
            email: customer.email,
            name: customer.fullName,
        });

        const refreshToken = generateRefreshToken({
            email: customer.email,
            name: customer.fullName,
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

router.post("/refresh-token", async (req, res) => {
    const {refreshToken} = req.body;
    if (!refreshToken) {
        return res.status(401).json({error: "Refresh token not provided"});
    }

    try {
        const decoded = jwt.verify(refreshToken, process.env.REFRESH_TOKEN_SECRET);

        const accessToken = jwt.sign({
            email: decoded.email,
            name: decoded.fullName
        }, process.env.ACCESS_TOKEN_SECRET, 
    {expiresIn: "2h"});

    return res.status(200).json({accessToken});
    } catch (error) {
        console.error(error);
        return res.status(403).json({error: "Could not validate refresh token"});
    }
});

module.exports = router;