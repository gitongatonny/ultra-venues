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
        <form class="card border col-md-8 col-sm-10 mx-auto" method="GET" action="payment.php">
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
                    <!-- Input item for Full Name -->
                    <div class="col-md-6">
                        <label class="form-label">Full name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="full_name" placeholder="Full name" required>
                        </div>
                    </div>

                    <!-- Select item for Event Type -->
                    <div class="col-md-6">
                        <label class="form-label">Event Type</label>
                        <select class="form-select js-choice" name="event_type" required>
                            <option value="">Select Event Type</option>
                            <option value="Wedding">Wedding</option>
                            <option value="Graduation">Graduation</option>
                            <option value="Corporate Meeting">Corporate Meeting</option>
                            <option value="Custom">Custom</option>
                        </select>
                    </div>

                    <!-- Select group for Start Date -->
                    <div class="col-md-6">
                        <label class="form-label">Start Date</label>
                        <div class="row g-0">
                            <div class="col-4">
                                <select class="form-select js-choice z-index-9 rounded-start" name="start_date_day" required>
                                    <option value="">Date</option>
                                    <?php for ($i = 1; $i <= 31; $i++): ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select choice-radius-0 js-choice z-index-9 border-0 bg-light" name="start_date_month" required>
                                    <option value="">Month</option>
                                    <?php foreach (['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'] as $month): ?>
                                        <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select js-choice z-index-9 border-0 bg-light" name="start_date_year" required>
                                    <option value="">Year</option>
                                    <?php for ($year = 2024; $year <= 2034; $year++): ?>
                                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Select group for End Date -->
                    <div class="col-md-6">
                        <label class="form-label">End Date</label>
                        <div class="row g-0">
                            <div class="col-4">
                                <select class="form-select js-choice z-index-9 rounded-start" name="end_date_day" required>
                                    <option value="">Date</option>
                                    <?php for ($i = 1; $i <= 31; $i++): ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select choice-radius-0 js-choice z-index-9 border-0 bg-light" name="end_date_month" required>
                                    <option value="">Month</option>
                                    <?php foreach (['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'] as $month): ?>
                                        <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select js-choice z-index-9 border-0 bg-light" name="end_date_year" required>
                                    <option value="">Year</option>
                                    <?php for ($year = 2024; $year <= 2034; $year++): ?>
                                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Input item for Email Address -->
                    <div class="col-md-6">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
                    </div>

                    <!-- Input item for Mobile Number -->
                    <div class="col-md-6">
                        <label class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" name="phone_number" placeholder="Enter your mobile number" required>
                    </div>

                    <!-- Input item for Number of Guests Attending -->
                    <div class="col-md-9">
                        <label class="form-label">Number of Guests Attending</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="adults" placeholder="Adults">
                            <input type="number" class="form-control" name="children" placeholder="Children">
                        </div>
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

    <!-- Footer START -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer END -->
</body>

</html>
