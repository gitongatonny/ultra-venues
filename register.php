<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register | Ultra Venues</title>

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
        <section class="vh-xxl-200">
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
                                    <div class="p-4 p-sm-6">
                                        <!-- Logo -->
                                        <a href="index.php">
                                            <img class="h-50px mb-4" src="assets/images/logo.svg" alt="logo">
                                        </a>
                                        <!-- Title -->
                                        <h1 class="mb-2 h3">Create new account</h1>
                                        <p class="mb-0">Already a member?<a href="login.php"> Log in</a></p>

                                        <!-- Form START -->
                                        <form class="mt-4 text-start" id="registerForm">
                                            <!-- Name -->
                                            <div class="mb-3">
                                                <label class="form-label">Enter your Full Name</label>
                                                <input type="text" class="form-control" id="fullName" required>
                                            </div>
                                            <!-- Email -->
                                            <div class="mb-3">
                                                <label class="form-label">Enter email address</label>
                                                <input type="email" class="form-control" id="email" required>
                                            </div>
                                            <!-- Phone Number -->
                                            <div class="mb-3">
                                                <label class="form-label">Enter your Phone Number</label>
                                                <input type="text" class="form-control" id="phoneNumber" placeholder="+254 7--" required>
                                            </div>
                                            <!-- Password -->
                                            <div class="mb-3 position-relative">
                                                <label class="form-label">Enter your password</label>
                                                <input class="form-control fakepassword" type="password" id="password" required>
                                                <span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
                                                    <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                                </span>
                                            </div>
                                            <!-- Confirm Password -->
                                            <div class="mb-3 position-relative">
                                                <label class="form-label">Confirm your password</label>
                                                <input class="form-control fakepassword" type="password" id="confirmPassword" required>
                                                <span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
                                                    <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                                </span>
                                            </div>
                                            <!-- Remember me -->
                                            <div class="mb-3">
                                                <input type="checkbox" class="form-check-input" id="rememberCheck">
                                                <label class="form-check-label" for="rememberCheck">Keep me signed in</label>
                                            </div>
                                            <!-- Button -->
                                            <div>
                                                <button type="submit" class="btn btn-primary w-100 mb-0">Register</button>
                                            </div>
                                            <!-- Divider -->
                                            <div class="position-relative my-4">
                                                <hr>
                                                <p class="small position-absolute top-50 start-50 translate-middle bg-mode px-1 px-sm-2">Or</p>
                                            </div>

                                            <!-- Google and facebook button -->
                                            <div class="vstack gap-3">
                                                <a href="#" class="btn btn-light mb-0"><i class="fab fa-fw fa-google text-google-icon me-2"></i>Register with your Google Account</a>
                                            </div>

                                            <!-- Copyright -->
                                            <div class="text-primary-hover mt-3 text-center"> Copyrights ©2024 Ultra Venues. <br> Built by <a href="#">Dev-KE</a>. </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const registerForm = document.getElementById('registerForm');

            registerForm.addEventListener('submit', async (event) => {
                event.preventDefault();

                const fullName = document.getElementById('fullName').value;
                const email = document.getElementById('email').value;
                const phoneNumber = document.getElementById('phoneNumber').value;
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirmPassword').value;

                if (password !== confirmPassword) {
                    alert("Passwords do not match!");
                    return;
                }

                const payload = {
                    fullName,
                    email,
                    phoneNumber,
                    password
                };

                try {
                    const response = await fetch('http://localhost:5000/api/customer/register', { // Update with your backend API URL
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(payload)
                    });

                    if (response.ok) {
                        const result = await response.json();
                        alert('Registration successful!');
                        window.location.href = "login.php"; // Redirect to login after successful registration
                    } else {
                        const error = await response.json();
                        alert(`Registration failed: ${error.message || error.error}`);
                    }
                } catch (error) {
                    console.error('Error during registration:', error);
                    alert('An error occurred during registration. Please try again later.');
                }
            });
        });
    </script>

</body>

</html>
