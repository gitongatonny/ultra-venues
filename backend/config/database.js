const { Sequelize } = require("sequelize");

const sequelize = new Sequelize("ultra-venues", "root", "", {
	host: "localhost",
	dialect: "mysql",
});

module.exports = sequelize;
