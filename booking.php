<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book a Venue | Ultra Venues</title>

    <!-- Head Content -->
    <?php include "includes/head-content.php"; ?>
</head>

<body>
    <!-- Header START -->
    <?php include "includes/header-main.php"; ?>
    <!-- Header END -->

    <main>
        <br>
        <!-- Booking form START -->
        <form id="bookingForm" class="card border col-md-8 col-sm-10 mx-auto" action="booking.php" method="POST">
            <!-- Card header -->
            <div class="card-header border-bottom px-4">
                <h3 class="card-title mb-0">Booking Details - Green Hills Hotel</h3>
            </div>

            <!-- Card body START -->
            <div class="card-body py-4">
                <!-- Badge with content -->
                <div class="bg-danger bg-opacity-10 rounded-2 p-3 mb-3">
                    <p class="h6 fw-light small mb-0"><span class="badge bg-danger me-2">New</span>Please make sure you enter the correct details below</p>
                </div>

                <!-- Form START -->
                <div class="row g-4">
                    <!-- Select item -->
                    <div class="col-md-6">
                        <label class="form-label" for="eventType">Event Type</label>
                        <select id="eventType" name="eventType" class="form-select js-choice">
                            <option>Wedding</option>
                            <option>Graduation</option>
                            <option>Corporate Meeting</option>
                            <option>Custom</option>
                        </select>
                    </div>

                    <!-- Input item -->
                    <div class="col-md-6">
                        <label class="form-label" for="startDate">Start Date</label>
                        <input type="date" id="startDate" name="startDate" class="form-control">
                    </div>

                    <!-- Input item -->
                    <div class="col-md-6">
                        <label class="form-label" for="endDate">End Date</label>
                        <input type="date" id="endDate" name="endDate" class="form-control">
                    </div>

                    <!-- Input item -->
                    <div class="col-md-6">
                        <label class="form-label" for="numberOfGuests">Number of Guests Attending</label>
                        <input type="number" id="numberOfGuests" name="numberOfGuests" class="form-control" placeholder="Number of Guests">
                    </div>

                    <!-- Input item -->
                    <div class="col-md-6">
                        <label class="form-label" for="price">Price</label>
                        <input type="number" id="price" name="price" class="form-control" placeholder="Enter price" readonly>
                    </div>
                </div>
                <!-- Form END -->

                <!-- Button -->
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary mb-0">Proceed To Payment</button>
                </div>
            </div>
            <!-- Card body END -->
        </form>
        <!-- Booking form END -->

        <br>
        <br>
    </main>

    <script>
        // Function to calculate the number of days between two dates
        function calculateNumberOfDays(startDate, endDate) {
            const start = new Date(startDate);
            const end = new Date(endDate);
            const diffTime = Math.abs(end - start);
            return Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1; // Adding 1 to include both start and end date
        }

        // Function to update the price field based on the number of days
        function updatePrice() {
            const venuePrice = parseFloat(localStorage.getItem('venuePrice'));
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;

            if (startDate && endDate) {
                const numberOfDays = calculateNumberOfDays(startDate, endDate);
                const totalPrice = venuePrice * numberOfDays;
                document.getElementById('price').value = totalPrice.toFixed(2);
            }
        }

        // Event listeners to update the price when dates are changed
        document.getElementById('startDate').addEventListener('change', updatePrice);
        document.getElementById('endDate').addEventListener('change', updatePrice);

        document.getElementById('bookingForm').addEventListener('submit', async function(event) {
            event.preventDefault();

            // Collect form data
            const formData = {
                customerFullName: document.getElementById('customerFullName').value,
                eventType: document.getElementById('eventType').value,
                startDate: document.getElementById('startDate').value,
                endDate: document.getElementById('endDate').value,
                customerEmailAddress: document.getElementById('customerEmailAddress').value,
                customerPhoneNumber: document.getElementById('customerPhoneNumber').value,
                venuePhoneNumber: document.getElementById('venuePhoneNumber').value,
                numberOfGuests: document.getElementById('numberOfGuests').value,
                venueEmailAddress: document.getElementById('venueEmailAddress').value,
                price: document.getElementById('price').value,
                paymentStatus: 0 // Default value for payment status
            };

            console.log(formData);
            try {
                // Send POST request to create booking endpoint
                const response = await fetch('http://localhost:5000/api/customer/bookings/create', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(formData)
                });

                if (!response.ok) {
                    throw new Error('Failed to create booking');
                }

                // Handle success (redirect or show confirmation)
                const result = await response.json();
                console.log('Booking created:', result);
                alert('Booking created successfully!'); // Example confirmation

                // Reset form or redirect user
                // window.location.href = '/thank-you.html';  // Example redirect

            } catch (error) {
                console.error('Error creating booking:', error);
                alert('Failed to create booking. Please try again.'); // Example error handling
            }
        });

        // Initial call to update the price field
        updatePrice();
    </script>

    <!-- Footer START -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer END -->
</body>
</html>
