<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Venues Listing | Ultra Venues</title>

        <!-- Head Content -->
        <?php include "includes/head-content.php";?>



    </head>

    <body>
        <!-- Header START -->
        <?php include "includes/header-main.php";?>
        <!-- Header END -->

        <main>

                <!-- =======================
                Main Banner START -->
                <section class="pt-0">
                    <div class="container">
                        <!-- Background image -->
                        <div class="rounded-3 p-3 p-sm-5" style="background-image: url(assets/images/Locations/Nyeri.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                            <!-- Banner title -->
                            <div class="row my-2 my-xl-5"> 
                                <div class="col-md-8 mx-auto"> 
                                    <h1 class="text-center text-white">Venues</h1>
                                </div>
                            </div>

                            <!-- Booking from START -->
                            <form class="bg-mode shadow rounded-3 position-relative p-4 pe-md-5 pb-5 pb-md-4 mb-4">
                                <div class="row g-4 align-items-center">
                                    <!-- Location -->
                                    <div class="col-lg-4">
                                        <div class="form-control-border form-control-transparent form-fs-md d-flex">
                                            <!-- Icon -->
                                            <i class="bi bi-geo-alt fs-3 me-2 mt-2"></i>
                                            <!-- Select input -->
                                            <div class="flex-grow-1">
                                                <label class="form-label">Location</label>
                                                <select class="form-select js-choice" data-search-enabled="true">
                                                    <option value="">Select location</option>
                                                    <option selected>Nyeri</option>
                                                    <option>Meru</option>
                                                    <option>Nanyuki</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Check in -->
                                    <div class="col-lg-4">
                                        <div class="d-flex">
                                            <!-- Icon -->
                                            <i class="bi bi-calendar fs-3 me-2 mt-2"></i>
                                            <!-- Date input -->
                                            <div class="form-control-border form-control-transparent form-fs-md">
                                                <label class="form-label">Start/End Date</label>
                                                <input type="text" class="form-control flatpickr" data-mode="range" placeholder="Select date" value="19 Sep to 21 Sep">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Guest -->
                                    <div class="col-lg-4">
                                        <div class="form-control-border form-control-transparent form-fs-md d-flex">
                                            <!-- Icon -->
                                            <i class="bi bi-person fs-3 me-2 mt-2"></i>
                                            <!-- Dropdown input -->
                                            <div class="w-100">
                                                <label class="form-label">Guests</label>
                                                <div class="dropdown guest-selector me-2">
                                                    <input type="number" class="form-guest-selector form-control selection-result" value="50" id="dropdownShare" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="btn-position-md-middle">
                                    <a  class="icon-lg btn btn-round btn-primary mb-0" href="#"><i class="bi bi-search fa-fw"></i></a>
                                </div>
                            </form>
                            <!-- Booking from END -->
                        </div>
                    </div>
                </section>
                <!-- =======================
                Main Banner END -->
        
        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>