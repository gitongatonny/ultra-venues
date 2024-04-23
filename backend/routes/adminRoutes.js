const express = require("express");
const router = express.Router();
const {isAdmin} = require("../middleware/authMiddleware.js");

const Customer = require("../models/customerModel");

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
