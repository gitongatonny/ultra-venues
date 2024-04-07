<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Vendor Registration | Ultra Venues</title>

        <!-- Head Content -->
        <?php include "includes/head-content.php";?>



    </head>

    <body>
        <!-- Header START -->
        <?php include "includes/header-main.php";?>
        <!-- Header END -->

        <main>

            <!-- Main Content START -->
            <section class="vh-xxl-200">
                <div class="container h-100 d-flex px-0 px-sm-4">
                    <div class="row justify-content-center align-items-center m-auto">
                        <div class="col-12">
                            <div class="bg-mode shadow rounded-3 overflow-hidden">
                                <div class="row g-0">
                                    <!-- Information -->
                                    <div class="col-lg-12">
                                        <div class="p-4 p-sm-6">
                                            <!-- Logo -->
                                            <a href="index.php">
                                                <img class="h-50px mb-4" src="assets/images/logo.svg" alt="logo">
                                            </a>
                                            <!-- Title -->
                                            <h1 class="mb-2 h3">Register Venue</h1>
                                            <p class="mb-0">Already a member?<a href="login.php"> Log in</a></p>
                                            
                                            <!-- Form START -->
                                            <form class="mt-4 text-start row">
                                                <!-- Left Column -->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Venue Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Venue Type</label>
                                                        <select class="form-select">
                                                            <option>Hotel</option>
                                                            <option>Resort</option>
                                                            <option>Garden</option>
                                                            <option>Palace</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Address</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">City</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Postal Code</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <!-- Right Column -->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Description</label>
                                                        <textarea class="form-control" rows="3"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Facilities</label>
                                                        <textarea class="form-control" rows="3"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Phone Number</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Email Address</label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Website</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <!-- Button -->
                                                <div class="col-12">
                                                    <button type="button" class="btn btn-primary w-100 mb-0" onclick="redirectToDash()">Register Venue</button>
                                                </div>
                                            </form>
                                            <!-- Form END -->
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main Content END -->


        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>