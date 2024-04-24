const { DataTypes} = require("sequelize");
const db = require("../config/database");

const Venue = db.define("Venue", {
    venueType: {
        type: DataTypes.STRING,
        allowNull: false
    },
    venueName: {
        type: DataTypes.STRING,
        allowNull: false
    },
    address: {
        type: DataTypes.STRING,
        allowNull: false
    },
    location: {
        type: DataTypes.STRING,
        allowNull: false
    },
    postalCode: {
        type: DataTypes.STRING,
        allowNull: false
    },
    description: {
        type: DataTypes.TEXT,
        allowNull: false
    },
    facilities: {
        type: DataTypes.TEXT,
        allowNull: false
    },
    phoneNumber: {
        type: DataTypes.STRING,
        allowNull: false
    },
    email: {
        type: DataTypes.STRING,
        allowNull: false,
        validate: {
            isEmail: true
        }
    },
    websiteUrl: {
        type: DataTypes.STRING,
        allowNull: false,
        validate: {
            isUrl: true
        }
    },
    rating: {
        type: DataTypes.FLOAT,
        allowNull: true,
        default: null
    },
    isActive: {
        type: DataTypes.BOOLEAN,
        allowNull: false,
        defaultValue: false
    },
    password: {
        type: DataTypes.STRING,
        allowNull: false,
        defaultValue: "inactive"
    }
}, {
    timestamps: false
});

module.exports = Venue;