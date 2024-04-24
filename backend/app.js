require("dotenv").config();
const express = require("express");
const bodyParser = require("body-parser");
const db = require("./config/database");

const customerRoutes = require("./routes/customerRoutes");
const venueRoutes = require("./routes/venueRoutes");
const bookingRoutes = require("./routes/bookingRoutes");
const adminRoutes = require("./routes/adminRoutes");

const app = express();

db.authenticate()
	.then(() => console.log("Database connected"))
	.catch((err) => console.error("Error: " + err));

db.sync()
	.then(() => console.log("Models synchronized"))
	.catch((err) => console.error("Error synchronizing models: " + err));

app.use(bodyParser.json());

app.use("/api/customer", customerRoutes);
app.use("/api", venueRoutes);
app.use("/api", bookingRoutes);
app.use("/api/admin", adminRoutes);

const PORT = process.env.PORT || 5000;
app.listen(PORT, () => console.log(`Server is running on port ${PORT}`));