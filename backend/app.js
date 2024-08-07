require("dotenv").config();
const express = require("express");
const bodyParser = require("body-parser");
const db = require("./config/database");
const cors = require('cors');

const swaggerUi = require("swagger-ui-express");
const swaggerFile = require("./swagger-output.json");

const path = require('path');
const customerRoutes = require("./routes/customerRoutes");
const venueRoutes = require("./routes/venueRoutes");
const bookingRoutes = require("./routes/bookingRoutes");
const adminRoutes = require("./routes/adminRoutes");
const vendorRoutes = require("./routes/vendorRoutes");
const paymentRoutes = require("./routes/paymentRoutes");

const app = express();

 // Use CORS middleware
 app.use(cors());

// Serve static files from the 'uploads' directory

app.use('/uploads', express.static(path.join(__dirname, 'uploads')));
db.authenticate()
	.then(() => console.log("Database connected"))
	.catch((err) => console.error("Error: " + err));

db.sync()
	.then(() => console.log("Models synchronized"))
	.catch((err) => console.error("Error synchronizing models: " + err));

app.use(bodyParser.json());
app.use("/api/api-docs", swaggerUi.serve, swaggerUi.setup(swaggerFile));

app.use("/api/customer", customerRoutes);
app.use("/api", venueRoutes);
app.use("/api", paymentRoutes);
app.use("/api", bookingRoutes);
app.use("/api/admin", adminRoutes);
app.use("/api/vendor", vendorRoutes);

const PORT = process.env.PORT || 5000;
app.listen(PORT, () => console.log(`Server is running on port ${PORT}`));
