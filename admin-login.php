<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Admin Login | Ultra Venues</title>

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
                                    <div class="col-lg-6 d-flex align-items-center order-2 order-lg-1">
                                        <div class="p-3 p-lg-5">
                                            <img src="assets/images/logo.svg" alt="ultra-venues-banner">
                                        </div>
                                        <!-- Divider -->
                                        <div class="vr opacity-1 d-none d-lg-block"></div>
                                    </div>
                    
                                    <!-- Information -->
                                    <div class="col-lg-6 order-1">
                                        <div class="p-4 p-sm-7">
                                            <!-- Logo -->
                                            <a href="index.php">
                                                <img class="h-50px mb-4" src="assets/images/logo.svg" alt="ultra-venues-logo">
                                            </a>
                                            <!-- Title -->
                                            <h1 class="mb-2 h3">Welcome Admin</h1>
                    
                                            <!-- Form START -->
                                            <form class="mt-4 text-start">
                                                <div class="mb-3">
                                                    <label class="form-label">Enter your email address</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                                <div class="mb-3 position-relative">
                                                    <label class="form-label">Enter your password</label>
                                                    <input class="form-control fakepassword" type="password" id="psw-input">
                                                    <span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
                                                    <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn btn-primary w-100 mb-0" onclick="window.location.href='admin-dash.php'">Login</button>

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