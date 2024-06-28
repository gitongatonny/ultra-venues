const { DataTypes } = require("sequelize");
const db = require("../config/database");
const bcrypt = require("bcrypt");

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
        unique: true, // Ensure email is unique
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
        defaultValue: null
    },
    isActive: {
        type: DataTypes.BOOLEAN,
        allowNull: false,
        defaultValue: false
    },
    password: {
        type: DataTypes.STRING,
        allowNull: false,
    },
    price: {
        type: DataTypes.INTEGER,
        defaultValue: 0
    },
    licenseNumber: {
        type: DataTypes.STRING
    },
    kraPin: {
        type: DataTypes.STRING
    }
}, {
    timestamps: false,
    hooks: {
        beforeCreate: async (venue) => {
            if (venue.password) {
                const hashedPassword = await bcrypt.hash(venue.password, 10);
                venue.password = hashedPassword;
            }
        },
        beforeUpdate: async (venue) => {
            if (venue.changed('password')) {
                const hashedPassword = await bcrypt.hash(venue.password, 10);
                venue.password = hashedPassword;
            }
        }
    }
});

module.exports = Venue;
