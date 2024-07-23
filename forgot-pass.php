<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Forgot Password | Ultra Venues</title>

        <!-- Head Content -->
        <?php include "includes/head-content.php";?>



    </head>

    <body>
        <!-- Header START -->
        <?php include "includes/header-main.php";?>
        <!-- Header END -->

        <main>

                <!-- =======================
    Main Content START -->
    <section class="vh-xxl-100">
        <div class="container h-100 d-flex px-0 px-sm-4">
            <div class="row justify-content-center align-items-center m-auto">
                <div class="col-12">
                    <div class="bg-mode shadow rounded-3 overflow-hidden">
                        <div class="row g-0">
                            <!-- Vector Image -->
                            <div class="col-lg-6 d-md-flex align-items-center order-2 order-lg-1">
                                <div class="p-3 p-lg-5">
                                    <img src="assets/images/logo.svg" alt="">
                                </div>
                                <!-- Divider -->
                                <div class="vr opacity-1 d-none d-lg-block"></div>
                            </div>
            
                            <!-- Information -->
                            <div class="col-lg-6 order-1">
                                <div class="p-4 p-sm-7">
                                    <!-- Logo -->
                                    <a href="index.html">
                                        <img class="mb-4 h-50px" src="assets/images/logo.svg" alt="logo">
                                    </a>
                                    <!-- Title -->
                                    <h1 class="mb-2 h3">Forgot password?</h1>
                                    <p class="mb-sm-0">An email link will be sent to you.</p>
            
                                    <!-- Form START -->
                                    <form class="mt-sm-4 text-start">
                                        <!-- Email -->
                                        <div class="mb-3">
                                            <label class="form-label">Enter the email address associated with your account.</label>
                                            <input type="email" class="form-control">
                                        </div>

                    <div class="mb-3 text-center">
                        <p>Back to <a href="login.php">Sign in</a></p>
                    </div>

                                        <!-- Button -->
                                        <div class="d-grid"><button type="submit" class="btn btn-primary">Reset Password</button></div>
            
                                        <!-- Divider -->
                                        <div class="position-relative my-4">
                                            <hr>
                                            <p class="small position-absolute top-50 start-50 translate-middle bg-mode px-2">Or sign in with</p>
                                        </div>
            
                                        <!-- Google and facebook button -->
                                        <div class="vstack gap-3">
                                            <a href="#" class="btn btn-light mb-0"><i class="fab fa-fw fa-google text-google-icon me-2"></i>Sign in with Google</a>
                                        </div>
            
                                        <!-- Copyright -->
                                        <div class="text-primary-hover mt-3 text-center"> Copyrights ©2024 Ultra Venues <br> Built by <a href="#">Dev-KE</a>. </div>
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
    <!-- =======================
    Main Content END -->

        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>