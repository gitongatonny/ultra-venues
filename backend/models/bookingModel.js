const {DataTypes} = require("sequelize");
const db = require("../config/database");
const Customer = require("./customerModel");
const Venue = require("./venueModel");

const Booking = db.define("Booking", {
    customerFullName: {
        type: DataTypes.STRING,
        allowNull: false,
    },
    eventType: {
        type: DataTypes.STRING,
        allowNull: false

    },
    startDate: {
        type: DataTypes.DATE,
        allowNull: false
    },
    endDate: {
        type: DataTypes.DATE,
        allowNull: false,
    },
    customerEmailAddress: {
        type: DataTypes.STRING,
        allowNull: false,
        validate: {
            isEmail: true
        }
    },
    customerPhoneNumber: {
        type: DataTypes.STRING,
        allowNull: false
    },
    venuePhoneNumber: {
        type: DataTypes.STRING,
        allowNull: false
    },
    numberOfGuests: {
        type: DataTypes.INTEGER,
        allowNull: false
    },
    venueEmailAddress: {
        type: DataTypes.STRING,
        allowNull: false,
        validate: {
            isEmail: true
        }
    }

});

// Set up association
Customer.hasMany(Booking, { foreignKey: 'customerEmailAddress', sourceKey: 'email' });
Booking.belongsTo(Customer, { foreignKey: 'customerEmailAddress', targetKey: 'email' });

Booking.belongsTo(Venue, { foreignKey: 'venueEmailAddress', targetKey: 'email' });
Venue.hasMany(Booking, { foreignKey: 'venueEmailAddress', sourceKey: 'email' });

module.exports = Booking;