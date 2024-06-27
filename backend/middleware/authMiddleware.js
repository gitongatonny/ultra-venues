const jwt = require('jsonwebtoken');
const { Admin } = require('../models/adminModel');  // Import the Admin model

// Function to generate access token
function generateAccessToken(payload) {
    return jwt.sign({payload}, process.env.ACCESS_TOKEN_SECRET, {expiresIn: '2h'});
}

// Function to generate refresh token
function generateRefreshToken(payload) {
    return jwt.sign({payload}, process.env.REFRESH_TOKEN_SECRET);
}

// Middleware to authenticate access token
function authenticateToken(req, res, next) {
    const authHeader = req.headers["authorization"];
    const token = authHeader && authHeader.split(" ")[1];

    if(!token) {
        return res.status(401).json({error: "Access token not provided"});
    }

    jwt.verify(token, process.env.ACCESS_TOKEN_SECRET, (err, user) => {
        if (err) {
            return res.status(403).json({error: "Invalid access token"});
        }

        req.user = user.payload;
        next();
    });
}

// Middleware to check if the user is an admin
async function isAdmin(req, res, next) {
    try {
        const admin = await Admin.findOne({ where: { email: req.user.email } });
        if (!admin) {
            return res.status(403).json({
                error: "Unauthorized"
            });
        }
        next();
    } catch (err) {
        console.error(err);
        return res.status(500).json({ error: "Internal server error" });
    }
}

module.exports = { generateAccessToken, generateRefreshToken, authenticateToken, isAdmin };
