<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vendor Login | Ultra Venues</title>

    <!-- Head Content -->
    <?php include "includes/head-content.php"; ?>



</head>

<body>
    <!-- Header START -->
    <?php include "includes/header-main.php"; ?>
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
                                        <h1 class="mb-2 h3">Welcome back</h1>
                                        <p class="mb-0">New here?<a href="vendor-register.php"> Register for a Vendor Account</a></p>

                                        <!-- Form START -->
                                        <form class="mt-4 text-start" id="loginForm">
                                            <div class="mb-3">
                                                <label class="form-label">Enter your email address</label>
                                                <input type="email" class="form-control" id="emailInput">
                                            </div>
                                            <div class="mb-3 position-relative">
                                                <label class="form-label">Enter your password</label>
                                                <input class="form-control fakepassword" type="password" id="passwordInput">
                                                <span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
                                                    <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                                </span>
                                            </div>
                                            <div class="mb-3 d-sm-flex justify-content-between">
                                                <div>
                                                    <input type="checkbox" class="form-check-input" id="rememberCheck">
                                                    <label class="form-check-label" for="rememberCheck">Remember me?</label>
                                                </div>
                                                <a href="forgot-pass.php">Forgot password?</a>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-primary w-100 mb-0" onclick="login()">Login</button>
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
        <!-- =======================
            Main Content END -->

    </main>
    <script>
        // Function to handle login
        // Function to display an alert message
        function showAlert(message) {
            const alertContainer = document.createElement('div');
            alertContainer.classList.add('alert', 'alert-danger', 'mt-3');
            alertContainer.setAttribute('role', 'alert');
            alertContainer.textContent = message;

            const form = document.getElementById('loginForm');
            form.appendChild(alertContainer);

            setTimeout(() => {
                alertContainer.remove();
            }, 3000); // Remove alert after 3 seconds
        }

        // Function to handle login
        async function login() {
            const email = document.getElementById('emailInput').value;
            const password = document.getElementById('passwordInput').value;

            try {
                const response = await fetch('http://localhost:5000/api/vendor/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        email,
                        password
                    })
                });

                if (!response.ok) {
                    showAlert('Login failed. Please check your credentials.');
                    throw new Error('Login failed');
                }

                const data = await response.json();

                // Store details and tokens in local storage
                localStorage.setItem('accessToken', data.tokens.access);
                localStorage.setItem('refreshToken', data.tokens.refresh);
                localStorage.setItem('userDetails', JSON.stringify(data.details));

                // Redirect to dashboard or perform any other actions after successful login
                window.location.href = 'vendor-dash.php'; // Replace with your actual dashboard URL

            } catch (error) {
                console.error('Login error:', error);
                // Handle error scenario (e.g., display error message to user)
            }
        }
    </script>
    <!-- Footer START -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer END -->
</body>


</html>