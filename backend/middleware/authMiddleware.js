const jwt = require('jsonwebtoken');

// function to generate access token
function generateAccessToken(payload) {
    return jwt.sign({payload}, process.env.ACCESS_TOKEN_SECRET, {expiresIn: '2h'});
}

// function to generate refresh token
function generateRefreshToken(payload) {
    return jwt.sign({payload}, process.env.REFRESH_TOKEN_SECRET);
}

// middleware to authenticate access token
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

// middleware to check if the user s an admin
function isAdmin(req, res, next) {
    const isAdmin = req.user.isAdmin;
    if (!isAdmin) {
        return res.status(403).json({
            error: "Unauthorized"
        });
    }
    next();
}

module.exports = { generateAccessToken, generateRefreshToken, authenticateToken, isAdmin};