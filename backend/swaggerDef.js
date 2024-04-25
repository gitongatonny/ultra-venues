/**
 * @swagger
 * openapi: 3.0.0
 * info:
 *  title: Ultra Venues Api Docs
 *  version: 1.0.0
 * 
 * servers:
 *  - url: http://localhost:5000
 */
/**
 * @swagger
 * components:
 *   schemas:
 *     Venue:
 *       type: object
 *       properties:
 *         venueType:
 *           type: string
 *         venueName:
 *           type: string
 *         address:
 *           type: string
 *         location:
 *           type: string
 *         postalCode:
 *           type: string
 *         description:
 *           type: string
 *         facilities:
 *           type: string
 *         phoneNumber:
 *           type: string
 *         email:
 *           type: string
 *           format: email
 *         websiteUrl:
 *           type: string
 *           format: url
 *         rating:
 *           type: number
 *         isActive:
 *           type: boolean
 */

/**
 * @swagger
 * /register:
 *   post:
 *     summary: Register a new venue
 *     description: Register a new venue in the system.
 *     parameters:
 *       - name: venueData
 *         in: body
 *         required: true
 *         schema:
 *           $ref: '#/components/schemas/Venue'
 *     responses:
 *       '201':
 *         description: Created
 *       '400':
 *         description: Bad request
 *       '500':
 *         description: Internal server error
 */
