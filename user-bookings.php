<!DOCTYPE html>
<html lang="en">

    <head>
        <title>My Bookings | Ultra Venues</title>

        <!-- Head Content -->
        <?php include "includes/head-content.php";?>



    </head>

    <body>
        <!-- Header START -->
        <?php include "includes/header-main.php";?>
        <!-- Header END -->

        <main>

<!-- =======================
Content START -->
<section class="pt-3">
	<div class="container">
		<div class="row">

        <!-- Profile Sidebar START -->
        <?php $activeTab = 'my-bookings'; ?>
        <?php include "includes/user-profile-sidebar.php";?>
        <!-- Profile Sidebar END -->

			<!-- Main content START -->
			<div class="col-lg-8 col-xl-9 ps-xl-5">

				<!-- Offcanvas menu button -->
				<div class="d-grid mb-0 d-lg-none w-100">
					<button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
						<i class="fas fa-sliders-h"></i> Menu
					</button>
				</div>

				<div class="card border bg-transparent">
					<!-- Card header -->
					<div class="card-header bg-transparent border-bottom">
						<h4 class="card-header-title">My Bookings</h4>
					</div>

					<!-- Card body START -->
					<div class="card-body p-0">

						<!-- Tabs -->
						<ul class="nav nav-tabs nav-bottom-line nav-responsive nav-justified">
							<li class="nav-item"> 
								<a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1"><i class="bi bi-briefcase-fill fa-fw me-1"></i>Upcoming Bookings</a> 
							</li>
							<li class="nav-item">
								<a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-2"><i class="bi bi-x-octagon fa-fw me-1"></i>Canceled Booking</a> 
								</li>
							<li class="nav-item"> 
								<a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3"><i class="bi bi-patch-check fa-fw me-1"></i>Previous Bookings</a> 
							</li>
						</ul>

						<!-- Tabs content START -->
						<div class="tab-content p-2 p-sm-4" id="nav-tabContent">

							<!-- Tab content item START -->
							<div class="tab-pane fade show active" id="tab-1">
								<h6>Upcoming bookings (2)</h6>
                                <!-- Card item START -->
								<div class="card border mb-4">
									<!-- Card header -->
									<div class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
										<!-- Icon and Title -->
										<div class="d-flex align-items-center">
											<div class="icon-lg bg-light rounded-circle flex-shrink-0"><i class="fa-solid fa-hotel"></i></div>	
											<!-- Title -->
											<div class="ms-2">
												<h6 class="card-title mb-0">Green Hills Hotel</h6>
												<ul class="nav nav-divider small">
													<li class="nav-item">Booking ID: CGDSUAHA12548</li>
													<li class="nav-item">Wedding</li>
												</ul>
											</div>
										</div>
	
										<!-- Button -->
										<div class="mt-2 mt-md-0">
											<a href="venue-details.php" class="btn btn-primary-soft mb-0">View Venue</a>
										</div>
									</div>
	
									<!-- Card body -->
									<div class="card-body">
										<div class="row g-3">
											<div class="col-sm-6 col-md-4">
												<span>Start Date</span>
												<h6 class="mb-0">Tue 05 May 2024</h6>
											</div>
	
											<div class="col-sm-6 col-md-4">
												<span>End Date</span>
												<h6 class="mb-0">Tue 06 May 2024</h6>
											</div>
	
											<div class="col-md-4">
												<span>Booked by</span>
												<h6 class="mb-0">Con Williams</h6>
											</div>
										</div>
									</div>
								</div>
								<!-- Card item END -->

								<!-- Card item START -->
								<div class="card border">
									<!-- Card header -->
									<div class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
										<!-- Icon and Title -->
										<div class="d-flex align-items-center">
											<div class="icon-lg bg-light rounded-circle flex-shrink-0"><i class="fa-solid fa-hotel"></i></div>	
											<!-- Title -->
											<div class="ms-2">
												<h6 class="card-title mb-0">The White Rhino Hotel</h6>
												<ul class="nav nav-divider small">
													<li class="nav-item">Booking ID: AZKWEVHA58395</li>
													<li class="nav-item">Graduation Party</li>
												</ul>
											</div>
										</div>
	
										<!-- Button -->
										<div class="mt-2 mt-md-0">
											<a href="venue-details.php" class="btn btn-primary-soft mb-0">View Venue</a>
										</div>
									</div>
	
									<!-- Card body -->
									<div class="card-body">
										<div class="row g-3">
											<div class="col-sm-6 col-md-4">
												<span>Start Date</span>
												<h6 class="mb-0">Sat 21 June 2024</h6>
											</div>
	
											<div class="col-sm-6 col-md-4">
												<span>End Date</span>
												<h6 class="mb-0">Sat 21 June 2024</h6>
											</div>
	
											<div class="col-md-4">
												<span>Booked by</span>
												<h6 class="mb-0">Con Williams</h6>
											</div>
										</div>
									</div>
								</div>
								<!-- Card item END -->
							</div>
							<!-- Tabs content item END -->

							<!-- Tab content item START -->
							<div class="tab-pane fade" id="tab-2">
								<h6>Cancelled Bookings (1)</h6>
	
								<!-- Card item START -->
								<div class="card border">
									<!-- Card header -->
									<div class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
										<!-- Icon and Title -->
										<div class="d-flex align-items-center">
											<div class="icon-lg bg-light rounded-circle flex-shrink-0"><i class="fa-solid fa-hotel"></i></div>
												<!-- Title -->
											<div class="ms-2">
												<h6 class="card-title mb-0">Oriental Palace</h6>
												<ul class="nav nav-divider small">
													<li class="nav-item">Booking ID: CGDSUAHA12548</li>
													<li class="nav-item">Corporate Seminar</li>
												</ul>
											</div>
										</div>
	
										<!-- Button -->
										<div class="mt-2 mt-md-0">
											<a href="venue-details.php" class="btn btn-primary-soft mb-0">View Venue</a>
											<p class="text-danger text-md-end mb-0">Booking cancelled</p>
										</div>
									</div>
	
									<!-- Card body -->
									<div class="card-body">
										<div class="row g-3">
											<div class="col-sm-6 col-md-4">
												<span>Start Date</span>
												<h6 class="mb-0">Sat 21 June</h6>
											</div>
	
											<div class="col-sm-6 col-md-4">
												<span>End Date</span>
												<h6 class="mb-0">Sat 21 June</h6>
											</div>
	
											<div class="col-md-4">
												<span>Booked by</span>
												<h6 class="mb-0">Con Williams</h6>
											</div>
										</div>
									</div>
								</div>
								<!-- Card item END -->
							</div>
							<!-- Tabs content item END -->
	
							<!-- Tab content item START -->
							<div class="tab-pane fade" id="tab-3">
                            <div class="bg-mode shadow p-4 rounded overflow-hidden">

								<!-- Card item START -->
								<div class="card border">
									<!-- Card header -->
									<div class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
										<!-- Icon and Title -->
										<div class="d-flex align-items-center">
											<div class="icon-lg bg-light rounded-circle flex-shrink-0"><i class="fa-solid fa-hotel"></i></div>	
											<!-- Title -->
											<div class="ms-2">
												<h6 class="card-title mb-0">Legacy Gardens</h6>
												<ul class="nav nav-divider small">
													<li class="nav-item">Booking ID: SJFNVAQE58395</li>
													<li class="nav-item">Ruracio</li>
												</ul>
											</div>
										</div>
	
										<!-- Button -->
										<div class="mt-2 mt-md-0">
											<a href="venue-details.php" class="btn btn-primary-soft mb-0">View Venue</a>
										</div>
									</div>
	
									<!-- Card body -->
									<div class="card-body">
										<div class="row g-3">
											<div class="col-sm-6 col-md-4">
												<span>Start Date</span>
												<h6 class="mb-0">Fri 07 Aug 2023</h6>
											</div>
	
											<div class="col-sm-6 col-md-4">
												<span>End Date</span>
												<h6 class="mb-0">Fri 07 Aug 2023</h6>
											</div>
	
											<div class="col-md-4">
												<span>Booked by</span>
												<h6 class="mb-0">Con Williams</h6>
											</div>
										</div>
									</div>
								</div>
								<!-- Card item END -->

								</div>
								
							</div>
							<!-- Tabs content item END -->
						</div>

					</div>
					<!-- Card body END -->
				</div>

			</div>
			<!-- Main content END -->




        </div>
	</div>
</section>
<!-- =======================
Content END -->


        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>