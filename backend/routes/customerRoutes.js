const express = require("express");
const router = express.Router();
const bcrypt = require("bcrypt");
const Customer = require("../models/customerModel");
const Booking = require("../models/bookingModel.js");
const { generateAccessToken, generateRefreshToken, authenticateToken } = require("../middleware/authMiddleware.js");

// endpoint to register a new customer
router.post("/register", async (req, res) => {
    // #swagger.tags = ['Customers']
	// #swagger.summary = 'Register a new customer'
	// #swagger.description = 'This endpoint allows a new customer to register by providing their full name, email, phone number, and password.'
	/* #swagger.parameters['obj'] = {
		in: 'body',
		description: 'Customer registration details',
		required: true,
		schema: {
			$fullName: 'John Doe',
			$email: 'john.doe@example.com',
			$phoneNumber: '1234567890',
			$password: 'password123'
		}
	} */
    const { fullName, email, phoneNumber, password } = req.body;

    try {
        const existingCustomer = await Customer.findOne({ where: { email } });
        if (existingCustomer) {
            return res.status(400).json({ error: "Email already exists" });
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
        return res.status(500).json({ error: "Could not create user at this moment" });
    }
});

// endpoint to login a customer
router.post("/login", async (req, res) => {
    // #swagger.tags = ['Customers']
	// #swagger.summary = 'Customer login'
	// #swagger.description = 'This endpoint allows a customer to login by providing their email and password.'
	/* #swagger.parameters['obj'] = {
		in: 'body',
		description: 'Customer login details',
		required: true,
		schema: {
			$email: 'john.doe@example.com',
			$password: 'password123'
		}
	} */
    const { email, password } = req.body;

    try {
        const customer = await Customer.findOne({ where: { email } });
        if (!customer) {
            return res.status(401).json({ error: "User does not exist" });
        }

        const isPasswordValid = await bcrypt.compare(password, customer.password);

        if (!isPasswordValid) {
            return res.status(401).json({ error: "Invalid credentials" });
        }

        const accessToken = generateAccessToken({
            email: customer.email,
            name: customer.fullName,
        });

        const refreshToken = generateRefreshToken({
            email: customer.email,
            name: customer.fullName,
        });

        return res.status(200).json({
            message: "Login successful",
            tokens: {
                access: accessToken,
                refresh: refreshToken
            }
        });

    } catch (error) {
        console.error(error);
        return res.status(500).json({ error: "Could not login at this moment" });
    }
});

// Endpoint to create a new booking
router.post('/bookings/create', async (req, res) => {
    // #swagger.tags = ['Booking']
	// #swagger.summary = 'Create a new booking'
	// #swagger.description = 'This endpoint allows a customer to create a new booking by providing the necessary details.'
	/* #swagger.parameters['obj'] = {
		in: 'body',
		description: 'Booking details',
		required: true,
		schema: {
			$eventType: 'Wedding',
			$startDate: '2024-07-20T00:00:00.000Z',
			$endDate: '2024-07-21T00:00:00.000Z',
			$customerEmailAddress: 'john.doe@example.com',
			$customerPhoneNumber: '1234567890',
			$venuePhoneNumber: '0987654321',
			$numberOfGuests: 150,
			$venueEmailAddress: 'venue@example.com',
			$price: 5000
		}
	} */
    try {
        const {
            eventType,
            startDate,
            endDate,
            customerEmailAddress,
            customerPhoneNumber,
            venuePhoneNumber,
            numberOfGuests,
            venueEmailAddress,
            price
        } = req.body;

        // Create booking in the database
        const newBooking = await Booking.create({
            eventType,
            startDate,
            endDate,
            customerEmailAddress,
            customerPhoneNumber,
            venuePhoneNumber,
            numberOfGuests,
            venueEmailAddress,
            price
        });

        // Respond with success message or new booking data
        res.status(201).json(newBooking);
    } catch (error) {
        console.error('Error creating booking:', error);
        res.status(500).json({ error: 'Failed to create booking' });
    }
});

// endpoint to refresh token
router.post("/refresh-token", async (req, res) => {
    // #swagger.tags = ['Customers']
	// #swagger.summary = 'Refresh access token'
	// #swagger.description = 'This endpoint allows a customer to refresh their access token using a refresh token.'
	/* #swagger.parameters['obj'] = {
		in: 'body',
		description: 'Refresh token',
		required: true,
		schema: {
			$refreshToken: 'your-refresh-token-here'
		}
	} */
    const { refreshToken } = req.body;
    if (!refreshToken) {
        return res.status(401).json({ error: "Refresh token not provided" });
    }

    try {
        const decoded = jwt.verify(refreshToken, process.env.REFRESH_TOKEN_SECRET);

        const accessToken = jwt.sign({
            email: decoded.email,
            name: decoded.fullName
        }, process.env.ACCESS_TOKEN_SECRET,
        { expiresIn: "2h" });

        return res.status(200).json({ accessToken });
    } catch (error) {
        console.error(error);
        return res.status(403).json({ error: "Could not validate refresh token" });
    }
});

module.exports = router;
