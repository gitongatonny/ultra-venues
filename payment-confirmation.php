<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Thank You | Ultra Venues</title>

        <!-- Head Content -->
        <?php include "includes/head-content.php";?>



    </head>

    <body>
        <!-- Header START -->
        <?php include "includes/header-main.php";?>
        <!-- Header END -->

        <main>

            <!-- =======================
            Main content START -->
            <section class="pt-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-xl-8 mx-auto">

                            <!-- Alert box -->
                            <div class="alert alert-success" role="alert">
                                Your booking has been confirmed.<strong class="mx-1"> Thank you.</strong>
                            </div>

                            <br>

                            <div class="card shadow">

                                <!-- Image -->
                                <div class="d-flex justify-content-center">
                                    <img src="assets/images/logo.svg" class="rounded-top" alt="" style="width: 200px; height: 200px;">
                                </div>

                                <!-- Card body -->
                                <div class="card-body text-center p-4">
                                    <!-- Title -->
                                    <h1 class="card-title fs-3">Congratulations!</h1>
                                    <p class="lead mb-3">Your venue has been booked</p>

                                    <!-- Second title -->
                                    <h5 class="text-primary mb-4" style="color: darkorange !important;">Green Hills Hotel</h5>

                                    <!-- List -->
                                    <div class="row justify-content-between text-start mb-4">
                                        <div class="col-lg-5">
                                            <ul class="list-group list-group-borderless">
                                                <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                                    <span class="mb-0"><i class="bi bi-vr fa-fw me-2"></i>Email:</span>
                                                    <span class="h6 fw-normal mb-0">conwilliams@gov.com</span>
                                                </li>
                                                <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                                    <span class="mb-0"><i class="bi bi-person fa-fw me-2"></i>Booked by:</span>
                                                    <span class="h6 fw-normal mb-0">Con Williams</span>
                                                </li>
                                                <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                                    <span class="mb-0"><i class="bi bi-wallet2 fa-fw me-2"></i>Payment Method:</span>
                                                    <span class="h6 fw-normal mb-0">M-Pesa</span>
                                                </li>
                                                <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                                    <span class="mb-0"><i class="bi bi-cash-stack fa-fw me-2"></i>Total Price:</span>
                                                    <span class="h6 fw-normal mb-0">Ksh. 17,500</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-5">
                                            <ul class="list-group list-group-borderless">
                                                <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                                    <span class="mb-0"><i class="bi bi-calendar fa-fw me-2"></i>Date:</span>
                                                    <span class="h6 fw-normal mb-0">8 April 2024</span>
                                                </li>
                                                <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                                    <span class="mb-0"><i class="bi bi-calendar fa-fw me-2"></i>Tour Date:</span>
                                                    <span class="h6 fw-normal mb-0">16 - 18 April 2024</span>
                                                </li>
                                                <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                                    <span class="mb-0"><i class="bi bi-people fa-fw me-2"></i>Guests:</span>
                                                    <span class="h6 fw-normal mb-0">85</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="d-sm-flex justify-content-sm-end d-grid">
                                        <!-- Share button with dropdown -->
                                        <a href="venues.php" class="btn btn-light mb-0 w-50 me-2" role="button">
                                            <i class="bi bi-eye-fill me-2"></i>Explore More Venues
                                        </a>
                                        <a href="#" class="btn btn-primary mb-0 w-50"><i class="bi bi-file-pdf me-2"></i>Download PDF</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- =======================
            Main content START -->

        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>