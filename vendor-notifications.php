<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Venue Notifications | Ultra Venues</title>

        <!-- Head Content -->
        <?php include "includes/head-content.php";?>



    </head>

    <body>


        <main>

<!-- =======================
Menu item START -->
<section class="pt-4">
	<div class="container">
		<div class="card rounded-3 border p-3 pb-2">
			<!-- Avatar and info START -->
			<div class="d-sm-flex align-items-center">
				<div class="avatar avatar-xl mb-2 mb-sm-0">
					<img class="avatar-img rounded-circle" src="assets/images/user.png" alt="">
				</div>
				<h4 class="mb-2 mb-sm-0 ms-sm-3"><span class="fw-light">Welcome Back, </span> Green Hills Hotel</h4>
			</div>
			<!-- Avatar and info START -->
			
			<!-- Responsive navbar toggler -->
			<button class="btn btn-primary w-100 d-block d-xl-none mt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#dashboardMenu" aria-controls="dashboardMenu">
				<i class="bi bi-list"></i> Dashboard Menu
			</button>

			<!-- Nav links START -->
			<div class="offcanvas-xl offcanvas-end mt-xl-3" tabindex="-1" id="dashboardMenu">
				<div class="offcanvas-header border-bottom p-3">
					<h5 class="offcanvas-title">Menu</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#dashboardMenu" aria-label="Close"></button>
				</div>
				<!-- Offcanvas body -->
				<div class="offcanvas-body p-3 p-xl-0">
					<!-- Nav item -->
					<div class="navbar navbar-expand-xl">
						<ul class="navbar-nav navbar-offcanvas-menu">

							<li class="nav-item"> <a class="nav-link" href="vendor-dash.php"><i class="bi bi-house-door fa-fw me-1"></i>Dashboard</a>	</li>

							<li class="nav-item"> <a class="nav-link" href="vendor-bookings.php"><i class="bi bi-bookmark-heart fa-fw me-1"></i>Bookings</a> </li>

							<li class="nav-item"> <a class="nav-link active" href="vendor-notifications.php"><i class="bi bi-bell fa-fw me-1"></i>Activities</a> </li>
		
							<li class="nav-item"> <a class="nav-link" href="vendor-earnings.php"><i class="bi bi-graph-up-arrow fa-fw me-1"></i>Earnings</a>	</li>
							
							<li> <a class="nav-link" href="vendor-settings.php"><i class="bi bi-gear fa-fw me-1"></i>Settings</a></li>

							<li> <a class="nav-link" href="index.php"><i class="bi bi-house fa-fw me-1"></i>Homepage</a></li>

		
						</ul>
					</div>
				</div>
			</div>
			<!-- Nav links END -->
		</div>
	</div>
</section>
<!-- =======================
Menu item END -->

<!-- =======================
Content START -->
<section class="pt-0">
	<div class="container vstack gap-4">
		<!-- Title START -->
		<div class="row">
			<div class="col-12">
				<h1 class="fs-4 mb-0"><i class="bi bi-bell fa-fw me-1"></i>Notifications</h1>
			</div>
		 </div> 
		<!-- Title END -->

			<!-- Activities START -->
		<div class="row">
			<div class="col-12">

				<div class="card border">
					<!-- Card header -->
					<div class="card-header border-bottom">
						<h5 class="card-header-title">Recent Notifications</h5>
					</div>

					<!-- Card body START -->
					<div class="card-body">
						
						<!-- Activity item START -->
						<div class="d-sm-flex justify-content-between align-items-center">
							<div class="d-flex align-items-sm-center me-4 ms-sm-0">
								<!-- Avatar -->
								<div class="avatar flex-shrink-0">
									<div class="avatar-img rounded-circle text-bg-success">
										<span class="position-absolute top-50 start-50 translate-middle fw-bold"><i class="bi bi-check-lg fs-5"></i></span>
									</div>
								</div>
								<!-- Title -->
								<div class="ms-3">
									<h6 class="fw-light m-0">Your payment was received successfully</h6>
									<small class="me-3">April 22</small>
								</div>
							</div>
							<!-- Buttons -->
							<div class="d-flex gap-2 mt-2 mt-sm-0">
								<a href="#" class="btn btn-sm btn-danger-soft"><i class="bi bi-trash"></i></a>
							</div>
						</div>
						<!-- Activity item END -->

						<hr> <!-- Divider -->

						<!-- Activity item START -->
						<div class="d-sm-flex justify-content-between align-items-center">
							<!-- Avatar image -->
							<div class="d-flex align-items-sm-center me-4 ms-sm-0">
								<div class="avatar flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/user.png" alt="">
								</div>
								<!-- Title -->
								<div class="ms-3">
									<h6 class="fw-light m-0">Finish Us Junior booked your venue on <span class="fw-bold">April 22 </span>
								</div>
							</div>
							<!-- Buttons -->
							<div class="d-flex gap-2 mt-2 mt-sm-0">
								<a href="#" class="btn btn-sm btn-danger-soft"><i class="bi bi-trash"></i></a>
							</div>
						</div>
						<!-- Activity item END -->

						<hr> <!-- Divider -->

						<!-- Activity item START -->
						<div class="d-sm-flex justify-content-between align-items-center">
							<div class="d-flex align-items-sm-center me-4 ms-sm-0">
								<!-- Avatar -->
								<div class="avatar flex-shrink-0">
									<div class="avatar-img rounded-circle text-bg-info">
										<span class="position-absolute top-50 start-50 translate-middle fw-bold"><i class="bi bi-chat fs-5"></i></span>
									</div>
								</div>
								<!-- Title -->
								<div class="ms-3">
									<h6 class="fw-light m-0">Someone left a review on <span class="fw-bold">Park Plaza Lodge Hotel </span> listing</h6>
									<small class="me-3">March 03</small>
								</div>
							</div>
							<!-- Buttons -->
							<div class="d-flex gap-2 mt-2 mt-sm-0">
								<a href="#" class="btn btn-sm btn-danger-soft"><i class="bi bi-trash"></i></a>
							</div>
						</div>
						<!-- Activity item END -->

						<hr> <!-- Divider -->

						<!-- Activity item START -->
						<div class="d-sm-flex justify-content-between align-items-center">
							<!-- Avatar image -->
							<div class="d-flex align-items-sm-center me-4 ms-sm-0">
								<div class="avatar flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/user.png" alt="">
								</div>
								<!-- Title -->
								<div class="ms-3">
									<h6 class="fw-light m-0">Kingslay Conman booked your venue on <span class="fw-bold">Jan 04 </span>
								</div>
							</div>
							<!-- Buttons -->
							<div class="d-flex gap-2 mt-2 mt-sm-0">
								<a href="#" class="btn btn-sm btn-danger-soft"><i class="bi bi-trash"></i></a>
							</div>
						</div>
						<!-- Activity item END -->

						<hr> <!-- Divider -->

						<!-- Activity item START -->
						<div class="d-sm-flex justify-content-between align-items-center">
							<div class="d-flex align-items-sm-center me-4 ms-sm-0">
								<!-- Avatar -->
								<div class="avatar flex-shrink-0">
									<div class="avatar-img rounded-circle text-bg-success">
										<span class="position-absolute top-50 start-50 translate-middle fw-bold"><i class="bi bi-check-lg fs-5"></i></span>
									</div>
								</div>
								<!-- Title -->
								<div class="ms-3">
									<h6 class="fw-light m-0">Your payment was received successfully</h6>
									<small class="me-3">Feb 24</small>
								</div>
							</div>
							<!-- Buttons -->
							<div class="d-flex gap-2 mt-2 mt-sm-0">
								<a href="#" class="btn btn-sm btn-danger-soft"><i class="bi bi-trash"></i></a>
							</div>
						</div>
						<!-- Activity item END -->

						<hr> <!-- Divider -->

						<!-- Activity item START -->
						<div class="d-sm-flex justify-content-between align-items-center">
							<!-- Avatar image -->
							<div class="d-flex align-items-sm-center me-4 ms-sm-0">
								<div class="avatar flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/user.png" alt="">
								</div>
								<!-- Title -->
								<div class="ms-3">
									<h6 class="fw-light m-0">Post Maloan booked your venue on <span class="fw-bold">Feb 24 </span>
								</div>
							</div>
							<!-- Buttons -->
							<div class="d-flex gap-2 mt-2 mt-sm-0">
								<a href="#" class="btn btn-sm btn-danger-soft"><i class="bi bi-trash"></i></a>
							</div>
						</div>
						<!-- Activity item END -->

						<hr> <!-- Divider -->


						<!-- Activity item START -->
						<div class="d-sm-flex justify-content-between align-items-center">
							<div class="d-flex align-items-sm-center me-4 ms-sm-0">
								<!-- Avatar -->
								<div class="avatar flex-shrink-0">
									<div class="avatar-img rounded-circle text-bg-success">
										<span class="position-absolute top-50 start-50 translate-middle fw-bold"><i class="bi bi-check-lg fs-5"></i></span>
									</div>
								</div>
								<!-- Title -->
								<div class="ms-3">
									<h6 class="fw-light m-0">Your listing <a href="#" class="text-primary">Green Hills Hotel </a>has been approved & an account created </h6>
									<small>5 Months Ago</small>
								</div>
							</div>
							<!-- Buttons -->
							<div class="d-flex gap-2 mt-2 mt-sm-0">
								<a href="#" class="btn btn-sm btn-danger-soft"><i class="bi bi-trash"></i></a>
							</div>
						</div>
						<!-- Activity item END -->

					</div>
					<!-- Card body END -->
				</div>
			</div>
		</div>
		<!-- Activities END -->
	</div>
</section>
<!-- =======================
Content END -->	

        </main>

        <!-- Footer START -->
		<?php include "includes/admin-dash-scripts.php";?>
        <!-- Footer END -->
    </body>


</html>