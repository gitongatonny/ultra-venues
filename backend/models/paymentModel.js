const { DataTypes} = require("sequelize");
const db = require("../config/database");

const Payment = db.define("Payment", {
    from: {
        type: DataTypes.STRING,

    },
    to: {
        type: DataTypes.STRING,
    },
    paymentType: {
        type: DataTypes.STRING
    },
    data: {
        type: DataTypes.DATE,
        defaultValue: DataTypes.NOW
    },
    amount: {
        type: DataTypes.INTEGER,
    },
    status: {
        type: DataTypes.INTEGER,
    }
}, {
    timestamps: false
});

module.exports = Payment;