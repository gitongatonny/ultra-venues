const swaggerAutogen = require("swagger-autogen")();

const doc = {
    info: {
        title: "Ultra Venues API Docs",
        description: "Description",
    },
    host: "localhost:5000",
    components: {
        securitySchemes: {
            bearerAuth: {
                type: "http",
                scheme: "bearer",
            },
        },
    },
    security: [
        {
            bearerAuth: []
        }
    ],
    schemes: [
        "http", "https"
    ],
};

const outputFile = "./swagger-output.json";
const routes = ["./app.js"];

swaggerAutogen(outputFile, routes, doc);
