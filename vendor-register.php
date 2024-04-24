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



        <!-- Alert box START -->
        <div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show mb-4 rounded-3 pe-2" role="alert" style="width: 60%; margin: 0 auto;">
            <div class="d-flex">
                <span class="alert-heading h5 mb-0 me-2"><i class="bi bi-exclamation-octagon-fill"></i></span>
                <span><stroYou class="alert-heading me-2">You'll receive an email from <strong>vendor-reg@ultravenues.com</strong> within 2 business days to approve your registration on Ultra-Venues. The email will contain login credentials.</a></span>
            </div>
            <button type="button" class="btn btn-link text-primary-hover pb-0 text-end" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
        </div>
        <!-- Alert box END -->

<!-- Main Content START -->
<section class="vh-xxl-200" style="margin-top: -50px;">
    <div class="container h-100 d-flex px-0 px-sm-4">
        <div class="row justify-content-center align-items-center m-auto">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="bg-mode shadow rounded-3 overflow-hidden" style="width: 1000px;">
                        <div class="row g-0">
                            <!-- Information -->
                            <div class="col-lg-12">
                                <div class="p-4 p-sm-6">
                                    <!-- Logo -->
                                    <a href="index.php">
                                        <img class="h-50px mb-4" src="assets/images/logo.svg" alt="logo">
                                    </a>
                                    <!-- Title -->
                                    <h1 class="mb-2 h3">Register your Venue with Us</h1>
                                    <p class="mb-0">Already an approved vendor?<a href="vendor-login.php"> Log in</a></p>
                                    
                                    <!-- Form START -->
                                    <form class="mt-6 text-start row">
                                        <!-- Single Column -->
                                        <div class="col-md-12">
                                            <div class="mb-6">
                                                <label class="form-label">Venue Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-6">
                                                <label class="form-label">Venue Type</label>
                                                <select class="form-select">
                                                    <option>Hotel</option>
                                                    <option>Resort</option>
                                                    <option>Garden</option>
                                                    <option>Palace</option>
                                                </select>
                                            </div>
                                            <div class="mb-6">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-6">
                                                <label class="form-label">Location (Be Detailed)</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-6">
                                                <label class="form-label">Postal Code</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-6">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                            <div class="mb-6">
                                                <label class="form-label">Facilities</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                            <div class="mb-6">
                                                <label class="form-label">Phone Number</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-6">
                                                <label class="form-label">Email Address</label>
                                                <input type="email" class="form-control">
                                            </div>
                                            <div class="mb-6">
                                                <label class="form-label">Website</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-6">
                                                <label class="form-label">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" id="password" name="password">
                                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword" onclick="togglePasswordVisibility('password')">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mb-6">
                                                <label class="form-label">Confirm Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                                                    <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword" onclick="togglePasswordVisibility('confirmPassword')">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary w-100 mb-0" onclick="window.location.href='vendor-reg-confirm.php'">Register Venue</button>
                                            </div>
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
    </div>
</section>
<!-- Main Content END -->


        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
        <script>
            function togglePasswordVisibility(inputId) {
                const input = document.getElementById(inputId);
                const button = document.getElementById(`toggle${inputId.charAt(0).toUpperCase() + inputId.slice(1)}`);
                
                if (input.type === "password") {
                    input.type = "text";
                    button.innerHTML = '<i class="bi bi-eye-slash"></i>';
                } else {
                    input.type = "password";
                    button.innerHTML = '<i class="bi bi-eye"></i>';
                }
            }
        </script>
    </body>


</html>