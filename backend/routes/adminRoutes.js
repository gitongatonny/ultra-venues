const express = require("express");
const router = express.Router();
const bcrypt = require("bcrypt");
const {isAdmin, generateAccessToken, generateRefreshToken} = require("../middleware/authMiddleware.js");

const Customer = require("../models/customerModel");
const Admin = require("../models/adminModel");

// endpoint to login
router.post("/login", async (req, res) => {
    const {email, password} = req.body;

    try {
        const admin = await Admin.findOne({where: {email}});
        if (!admin) {
            return res.status(401).json({error: "User does not exist"});
        }

        const isPasswordValid = await bcrypt.compare(password, admin.password);

        if (!isPasswordValid) {
            return res.status(401).json({error: "Invalid credentials"});
        }

        const accessToken = generateAccessToken({
            email: admin.email,
            name: admin.fullName,
            isAdmin: admin.isAdmin,
        });

        const refreshToken = generateRefreshToken({
            email: admin.email,
            name: admin.fullName,
            isAdmin: admin.isAdmin
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

router.post("/register", async (req, res) => {
    const {fullName, email, phoneNumber, password} = req.body;

    try {
        const existingAdmin = await Admin.findOne({where: {email}});
        if (existingAdmin) {
            return res.status(400).json({error: "Email already exists"});
        }

        const hashedPassword = await bcrypt.hash(password, 10);

        const newAdmin = await Admin.create({
            fullName,
            email,
            phoneNumber,
            password: hashedPassword
        });

        return res.status(201).json({message: "Created admin successfully!"});
    } catch (error) {
        console.error(error);
        return res.status(500).json({error: "Could not create user at this moment"});
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
            name: decoded.fullName,
            isAdmin: decoded.isAdmin
        }, process.env.ACCESS_TOKEN_SECRET, 
    {expiresIn: "2h"});

    return res.status(200).json({accessToken});
    } catch (error) {
        console.error(error);
        return res.status(403).json({error: "Could not validate refresh token"});
    }
});

router.use(isAdmin);

// endpoint to view all availabel customers
router.get("/customers", async (req, res) => {
    try {
        const customers = await Customer.findAll({attributes: { exclude: ["password"]}});
        res.status(200).json(customers);
    } catch (error) {
        console.error(error);
        res.status(500).json({error: "Could not fetch customers!"});
    }
});

// endpoint to view the details of a particular customer by their email address
router.get("/customers/:id", async (req, res) => {
    const id = req.params.id;
    try {
        const customer = await Customer.findOne({ where : {id: id}, attributes: { exclude: ['password']}});
        if (!customer) {
            return res.status(404).json({error: "Customer not found!"});
        }
        res.status(200).json(customer);
    } catch (error) {
        console.error(error);
        res.status(500).json({error: "Cannot fetch customer details!"});
    }
});

module.exports = router;