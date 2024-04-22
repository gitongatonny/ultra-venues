require("dotenv").config();
const express = require("express");
const bodyParser = require("body-parser");
const db = require("./config/database");
const Customer = require("./models/customerModel");

const customerRoutes = require("./routes/customerRoutes");
const venueRoutes = require("./routes/venueRoutes");
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

const PORT = process.env.PORT || 5000;
app.listen(PORT, () => console.log(`Server is running on port ${PORT}`));
