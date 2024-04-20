require("dotenv").config();
const express = require("express");
const bodyParser = require("body-parser");
const customerRoutes = require("./routes/customerRoutes");
const db = require("./config/database");
const Customer = require("./models/customerModel");

const app = express();

db.authenticate()
	.then(() => console.log("Database connected"))
	.catch((err) => console.error("Error: " + err));

db.sync()
	.then(() => console.log("Models synchronized"))
	.catch((err) => console.error("Error synchronizing models: " + err));

app.use(bodyParser.json());

app.use("/api/customer", customerRoutes);

const PORT = process.env.PORT || 5000;
app.listen(PORT, () => console.log(`Server is running on port ${PORT}`));
