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
                    <!-- Input item -->
                    <div class="col-md-6">
                        <label class="form-label" for="customerFullName">Full name</label>
                        <div class="input-group">
                            <input type="text" id="customerFullName" name="customerFullName" class="form-control" placeholder="Full name">
                        </div>
                    </div>

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
                        <label class="form-label" for="customerEmailAddress">Email Address</label>
                        <input type="email" id="customerEmailAddress" name="customerEmailAddress" class="form-control" placeholder="Enter your email address">
                    </div>

                    <!-- Input item -->
                    <div class="col-md-6">
                        <label class="form-label" for="customerPhoneNumber">Mobile Number</label>
                        <input type="text" id="customerPhoneNumber" name="customerPhoneNumber" class="form-control" placeholder="Enter your mobile number">
                    </div>

                    <!-- Input item -->
                    <div class="col-md-6">
                        <label class="form-label" for="venuePhoneNumber">Venue Phone Number</label>
                        <input type="text" id="venuePhoneNumber" name="venuePhoneNumber" class="form-control" placeholder="Enter venue phone number">
                    </div>

                    <!-- Input item -->
                    <div class="col-md-6">
                        <label class="form-label" for="numberOfGuests">Number of Guests Attending</label>
                        <input type="number" id="numberOfGuests" name="numberOfGuests" class="form-control" placeholder="Number of Guests">
                    </div>

                    <!-- Input item -->
                    <div class="col-md-6">
                        <label class="form-label" for="venueEmailAddress">Venue Email Address</label>
                        <input type="email" id="venueEmailAddress" name="venueEmailAddress" class="form-control" placeholder="Enter venue email address">
                    </div>

                    <!-- Input item -->
                    <div class="col-md-6">
                        <label class="form-label" for="price">Price</label>
                        <input type="number" id="price" name="price" class="form-control" placeholder="Enter price">
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
    </script>

    <!-- Footer START -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer END -->
</body>


</html>