<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Admin Earnings | Ultra Venues</title>

        <!-- Head Content -->
        <?php include "includes/head-content.php";?>



    </head>

    <body>


        <main>

	<!-- Sidebar START -->
	<nav class="navbar sidebar navbar-expand-xl navbar-light">
		<!-- Navbar brand for xl START -->
		<div class="d-flex align-items-center">
			<a class="navbar-brand" href="index.php">
				<img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
			</a>
		</div>
		<!-- Navbar brand for xl END -->
		
		<div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
			<div class="offcanvas-body sidebar-content d-flex flex-column pt-4">
	
				<!-- Sidebar menu START -->
				<ul class="navbar-nav flex-column" id="navbar-sidebar">
					<!-- Menu item -->
					<li class="nav-item"><a href="admin-dash.php" class="nav-link">Admin Dashboard</a></li>
                    <hr>

					<!-- Title -->
					<li class="nav-item ms-2 my-2">Pages</li>

					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#collapsebooking" role="button" aria-expanded="false" aria-controls="collapsebooking">
						Bookings
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="collapsebooking" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="admin-booking-list.php">Booking List</a></li>
							<li class="nav-item"> <a class="nav-link" href="admin-booking-details.php">Booking Details</a></li>
						</ul>
					</li>
	
					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#collapseguest" role="button" aria-expanded="false" aria-controls="collapseguest">
						Customers
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="collapseguest" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="admin-customer-list.php">Customer List</a></li>
							<li class="nav-item"> <a class="nav-link" href="admin-customer-details.php">Customer Details</a></li>
						</ul>
					</li>

					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#collapseagent" role="button" aria-expanded="false" aria-controls="collapseagent">
						Venues
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="collapseagent" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="admin-venues-list.php">Venues List</a></li>
							<li class="nav-item"> <a class="nav-link" href="admin-venue-details.php">Venue Details</a></li>
						</ul>
					</li>
					
	
					<!-- Menu item -->
					<li class="nav-item"> <a class="nav-link active" href="admin-earnings.php">Earnings</a></li>
	
					<!-- Menu item -->
					<li class="nav-item"> <a class="nav-link" href="admin-settings.php">Admin Settings</a></li>
	
				</ul>
				<!-- Sidebar menu end -->
	
				<!-- Sidebar footer START -->
				<div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
					<a class="h6 fw-light mb-0 text-body" href="vendor-login.php" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Sign out">
						<i class="fa-solid fa-arrow-right-from-bracket"></i> Log out
					</a>
					<a class="h6 mb-0 text-body" href="admin-settings.php" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Settings">
						<i class="bi bi-gear-fill"></i>
					</a>
				</div>
				<!-- Sidebar footer END -->
				
			</div>
		</div>
	</nav>
	<!-- Sidebar END -->

	<!-- Page content START -->
	<div class="page-content">
	
		<!-- Top bar START -->
		<nav class="navbar top-bar navbar-light py-0 py-xl-3">
			<div class="container-fluid p-0">
				<div class="d-flex align-items-center w-100">
	
					<!-- Logo START -->
					<div class="d-flex align-items-center d-xl-none">
						<a class="navbar-brand" href="index.html">
							<img class="navbar-brand-item h-40px" src="assets/images/logo-icon.svg" alt="">
						</a>
					</div>
					<!-- Logo END -->
	
					<!-- Toggler for sidebar START -->
					<div class="navbar-expand-xl sidebar-offcanvas-menu">
						<button class="navbar-toggler me-auto p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
							<i class="bi bi-list text-primary fa-fw" data-bs-target="#offcanvasMenu"></i>
						</button>
					</div>
					<!-- Toggler for sidebar END -->
					
					<!-- Top bar left -->
					<div class="navbar-expand-lg ms-auto ms-xl-0">
						<!-- Toggler for menubar START -->
						<button class="navbar-toggler ms-auto p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopContent" aria-controls="navbarTopContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="bi bi-search"></i>
						</button>
						<!-- Toggler for menubar END -->
	
						<!-- Topbar menu START -->
						<div class="collapse navbar-collapse w-100 z-index-1" id="navbarTopContent">
							<!-- Top search START -->
							<div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
								<div class="nav-item w-100">
									<form class="position-relative">
										<input class="form-control bg-light pe-5" type="search" placeholder="Search" aria-label="Search">
										<button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
									</form>
								</div>
							</div>
							<!-- Top search END -->
						</div>
						<!-- Topbar menu END -->
					</div>
					<!-- Top bar left END -->
					
					<!-- Top bar right START -->
					<ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">
						<!-- Dark mode options START -->
						<li class="nav-item dropdown ms-3">
							<button class="nav-notification lh-0 btn btn-light p-0 mb-0" id="bd-theme"
							type="button"
							aria-expanded="false"
							data-bs-toggle="dropdown"
							data-bs-display="static">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw theme-icon-active" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
									<use href="#"></use>
								</svg>
							</button>

							<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
								<li class="mb-1">
									<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
										<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
											<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
											<use href="#"></use>
										</svg>Light						
									</button>
								</li>
								<li class="mb-1">
									<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
											<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
											<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
											<use href="#"></use>
										</svg>Dark
									</button>
								</li>
								<li>
									<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
											<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
											<use href="#"></use>
										</svg>Auto
									</button>
								</li>
							</ul>
						</li>
						<!-- Dark mode options END-->

				<!-- Notification dropdown START -->
				<li class="nav-item dropdown ms-0 ms-md-3">
					<!-- Notification button -->
					<a class="nav-notification btn btn-light p-0 mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
						<i class="bi bi-bell fa-fw"></i>
					</a>
					<!-- Notification dote -->
					<span class="notif-badge animation-blink"></span>

					<!-- Notification dropdown menu START -->
					<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md shadow-lg p-0">
						<div class="card bg-transparent">
							<!-- Card header -->
							<div class="card-header bg-transparent d-flex justify-content-between align-items-center border-bottom">
								<h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">2 new</span></h6>
								<a class="small" href="#">Clear all</a>
							</div>

							<!-- Card body START -->
							<div class="card-body p-0">
								<ul class="list-group list-group-flush list-unstyled p-2">
									<!-- Notification item -->
									<li>
										<a href="user-bookings.php" class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
											<h6 class="mb-2">Booking Confirmed for Green Hills Hotel 🏨</h6>
											<p class="mb-0 small">Customer: Finish Us Junior</p>
											<span>12th May 2024 - 13th May 2024</span>
										</a>
									</li>
									<!-- Notification item -->
									<li>
										<a href="user-bookings.php" class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
											<h6 class="mb-2">Green Hills Hotel Payment Confirmed</h6>
											<span>8th May 2024</span>
										</a>
									</li>
								</ul>
							</div>
							<!-- Card body END -->

							<!-- Card footer -->
							<div class="card-footer bg-transparent text-center border-top">
								<a href="user-bookings.php" class="btn btn-sm btn-link mb-0 p-0">See all incoming activities</a>
							</div>
						</div>
					</div>
					<!-- Notification dropdown menu END -->
				</li>
				<!-- Notification dropdown END -->
		
				<!-- Profile dropdown START -->
				<li class="nav-item ms-3 dropdown">
					<!-- Avatar -->
					<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="avatar-img rounded-2" src="assets/images/user.png" alt="avatar">
					</a>

					<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
						<!-- Profile info -->
						<li class="px-3 mb-3">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar me-3">
									<img class="avatar-img rounded-circle shadow" src="assets/images/user.png" alt="avatar">
								</div>
								<div>
									<a class="h6 mt-2 mt-sm-0" href="#">Admin</a>
									<p class="small m-0">admin@ultra-venues.com</p>
								</div>
							</div>
						</li>

						<!-- Links -->
						<li> <hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="admin-booking-details.php"><i class="bi bi-calendar-check fa-fw me-2"></i>Bookings</a></li>
						<li><a class="dropdown-item" href="admin-customer-list.php"><i class="bi bi-people fa-fw me-2"></i>Customers</a></li>
						<li><a class="dropdown-item" href="admin-venues-list.php"><i class="bi bi-building fa-fw me-2"></i>Venues</a></li>
						<li><a class="dropdown-item" href="admin-earnings.php"><i class="bi bi-cash-stack fa-fw me-2"></i>Earnings</a></li>
						<li><a class="dropdown-item" href="admin-settings.php"><i class="bi bi-gear fa-fw me-2"></i>Settings</a></li>
						<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
					</ul>
				</li>
				<!-- Profile dropdown END -->
					</ul>
					<!-- Top bar right END -->
				</div>
			</div>
		</nav>
		<!-- Top bar END -->

		<!-- Page main content START -->
		<div class="page-content-wrapper p-xxl-4">
	
			<!-- Title -->
			<div class="row">
				<div class="col-12 mb-4 mb-sm-5">
					<h1 class="h3 mb-0">Total Earnings for All Venues</h1>
				</div>
			</div>

			<!-- Earning block START -->
			<div class="row g-4">
				<!-- Block item -->
				<div class="col-sm-6 col-xxl-4">
					<div class="card card-body bg-light p-4 h-100">
						<h6 class="mb-0">Average daily earnings</h6>
						<h3 class="mb-2 mt-2">18,000</h3>
						<p class="mt-auto mb-0">Increase <span class="badge bg-success bg-opacity-10 text-success">10% <i class="bi bi-graph-up"></i></span></p>
					</div>
				</div>

				<!-- Block item -->
				<div class="col-sm-6 col-xxl-4">
					<div class="card card-body bg-light p-4 h-100">
						<h6 class="mb-0">Revenue this month</h6>
						<h3 class="mb-2 mt-2">500,000</h3>
						<p class="mt-auto mb-0">Increase from last month <span class="badge bg-success bg-opacity-10 text-success">21% <i class="bi bi-graph-up"></i></span></p>
					</div>
				</div>
	
				<!-- Block item -->
				<div class="col-sm-6 col-xxl-4">
					<div class="card card-body bg-light p-4 h-100">
						<h6>Exoected Revenue this Year
							<a tabindex="0" class="h6 mb-0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="After US royalty withholding tax">
								<i class="bi bi-info-circle-fill small"></i>
							</a>
						</h6>
						<h3>6,500,000</h3>
						<p class="mb-0 mt-auto">*This is just an estimation</p>
					</div>
				</div>
	
			</div>
			<!-- Earning block END -->

			<!-- Payment history START -->
			<div class="card shadow mt-5">
				<!-- Card header -->
				<div class="card-header border-bottom">
					<h5 class="card-title mb-0">Payment History</h5>
				</div>

				<!-- Card body START -->
				<div class="card-body">
					<!-- Table head -->
					<div class="bg-light rounded p-3 d-none d-sm-block">
						<div class="row row-cols-7 g-4">
							<div class="col"><h6 class="mb-0">Booking ID</h6></div>
							<div class="col"><h6 class="mb-0">Date</h6></div>
							<div class="col"><h6 class="mb-0">Amount</h6></div>
							<div class="col"><h6 class="mb-0">Status</h6></div>
							<div class="col"><h6 class="mb-0">Action</h6></div>
						</div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 g-4 align-items-sm-center border-bottom px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Booked by:</small>
							<h6 class="fw-light mb-0">#0245896</h6>
						</div>	

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2024</h6>
						</div>

						<!-- Data item -->
						<div class="col position-relative">
							<small class="d-block d-sm-none">Amount:</small>

							<div class="d-flex">
								<h6 class="mb-0 me-1">45,000</h6>
								<!-- Dropdown icon -->
								<a href="#" class="h6 mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-info-circle-fill"></i>
								</a>
								<!-- Dropdown items -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
									<li>
										<div class="d-flex justify-content-between">
											<span class="small">Commission</span>
											<span class="h6 mb-0 small ms-2">2,500</span>
										</div>
										<hr class="my-1"> <!-- Divider -->
									</li>
	
									<li>
										<div class="d-flex justify-content-between">
											<span class="me-4 small">Tax</span>
											<span class="text-danger small ms-2">-500</span>
										</div>
										<hr class="my-1"> <!-- Divider -->
									</li>
									
									<li>
										<div class="d-flex justify-content-between">
											<span class="small">Earning</span>
											<span class="h6 mb-0 small ms-2">2,000</span>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Status:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Paid</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="#" class="btn btn-light btn-round mb-0"><i class="bi bi-cloud-download"></i></a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 g-4 align-items-sm-center border-bottom px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Booked by:</small>
							<h6 class="fw-light mb-0">#0245896</h6>
						</div>	

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2024</h6>
						</div>

						<!-- Data item -->
						<div class="col position-relative">
							<small class="d-block d-sm-none">Amount:</small>

							<div class="d-flex">
								<h6 class="mb-0 me-1">45,000</h6>
								<!-- Dropdown icon -->
								<a href="#" class="h6 mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-info-circle-fill"></i>
								</a>
								<!-- Dropdown items -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
									<li>
										<div class="d-flex justify-content-between">
											<span class="small">Commission</span>
											<span class="h6 mb-0 small ms-2">2,500</span>
										</div>
										<hr class="my-1"> <!-- Divider -->
									</li>
	
									<li>
										<div class="d-flex justify-content-between">
											<span class="me-4 small">Tax</span>
											<span class="text-danger small ms-2">-500</span>
										</div>
										<hr class="my-1"> <!-- Divider -->
									</li>
									
									<li>
										<div class="d-flex justify-content-between">
											<span class="small">Earning</span>
											<span class="h6 mb-0 small ms-2">2,000</span>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Status:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Paid</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="#" class="btn btn-light btn-round mb-0"><i class="bi bi-cloud-download"></i></a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 g-4 align-items-sm-center border-bottom px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Booked by:</small>
							<h6 class="fw-light mb-0">#0245896</h6>
						</div>	

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2024</h6>
						</div>

						<!-- Data item -->
						<div class="col position-relative">
							<small class="d-block d-sm-none">Amount:</small>

							<div class="d-flex">
								<h6 class="mb-0 me-1">45,000</h6>
								<!-- Dropdown icon -->
								<a href="#" class="h6 mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-info-circle-fill"></i>
								</a>
								<!-- Dropdown items -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
									<li>
										<div class="d-flex justify-content-between">
											<span class="small">Commission</span>
											<span class="h6 mb-0 small ms-2">2,500</span>
										</div>
										<hr class="my-1"> <!-- Divider -->
									</li>
	
									<li>
										<div class="d-flex justify-content-between">
											<span class="me-4 small">Tax</span>
											<span class="text-danger small ms-2">-500</span>
										</div>
										<hr class="my-1"> <!-- Divider -->
									</li>
									
									<li>
										<div class="d-flex justify-content-between">
											<span class="small">Earning</span>
											<span class="h6 mb-0 small ms-2">2,000</span>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Status:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Paid</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="#" class="btn btn-light btn-round mb-0"><i class="bi bi-cloud-download"></i></a></div>
					</div>


					<!-- Table data -->
					<div class="row row-cols-xl-7 g-4 align-items-sm-center border-bottom px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Booked by:</small>
							<h6 class="fw-light mb-0">#0245896</h6>
						</div>	

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2024</h6>
						</div>

						<!-- Data item -->
						<div class="col position-relative">
							<small class="d-block d-sm-none">Amount:</small>

							<div class="d-flex">
								<h6 class="mb-0 me-1">45,000</h6>
								<!-- Dropdown icon -->
								<a href="#" class="h6 mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-info-circle-fill"></i>
								</a>
								<!-- Dropdown items -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
									<li>
										<div class="d-flex justify-content-between">
											<span class="small">Commission</span>
											<span class="h6 mb-0 small ms-2">2,500</span>
										</div>
										<hr class="my-1"> <!-- Divider -->
									</li>
	
									<li>
										<div class="d-flex justify-content-between">
											<span class="me-4 small">Tax</span>
											<span class="text-danger small ms-2">-500</span>
										</div>
										<hr class="my-1"> <!-- Divider -->
									</li>
									
									<li>
										<div class="d-flex justify-content-between">
											<span class="small">Earning</span>
											<span class="h6 mb-0 small ms-2">2,000</span>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Status:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Paid</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="#" class="btn btn-light btn-round mb-0"><i class="bi bi-cloud-download"></i></a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 g-4 align-items-sm-center border-bottom px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Booked by:</small>
							<h6 class="fw-light mb-0">#0245896</h6>
						</div>	

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2024</h6>
						</div>

						<!-- Data item -->
						<div class="col position-relative">
							<small class="d-block d-sm-none">Amount:</small>

							<div class="d-flex">
								<h6 class="mb-0 me-1">45,000</h6>
								<!-- Dropdown icon -->
								<a href="#" class="h6 mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-info-circle-fill"></i>
								</a>
								<!-- Dropdown items -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
									<li>
										<div class="d-flex justify-content-between">
											<span class="small">Commission</span>
											<span class="h6 mb-0 small ms-2">2,500</span>
										</div>
										<hr class="my-1"> <!-- Divider -->
									</li>
	
									<li>
										<div class="d-flex justify-content-between">
											<span class="me-4 small">Tax</span>
											<span class="text-danger small ms-2">-500</span>
										</div>
										<hr class="my-1"> <!-- Divider -->
									</li>
									
									<li>
										<div class="d-flex justify-content-between">
											<span class="small">Earning</span>
											<span class="h6 mb-0 small ms-2">2,000</span>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Status:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Paid</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="#" class="btn btn-light btn-round mb-0"><i class="bi bi-cloud-download"></i></a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 g-4 align-items-sm-center border-bottom px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Booked by:</small>
							<h6 class="fw-light mb-0">#0245896</h6>
						</div>	

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2024</h6>
						</div>

						<!-- Data item -->
						<div class="col position-relative">
							<small class="d-block d-sm-none">Amount:</small>

							<div class="d-flex">
								<h6 class="mb-0 me-1">45,000</h6>
								<!-- Dropdown icon -->
								<a href="#" class="h6 mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-info-circle-fill"></i>
								</a>
								<!-- Dropdown items -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
									<li>
										<div class="d-flex justify-content-between">
											<span class="small">Commission</span>
											<span class="h6 mb-0 small ms-2">2,500</span>
										</div>
										<hr class="my-1"> <!-- Divider -->
									</li>
	
									<li>
										<div class="d-flex justify-content-between">
											<span class="me-4 small">Tax</span>
											<span class="text-danger small ms-2">-500</span>
										</div>
										<hr class="my-1"> <!-- Divider -->
									</li>
									
									<li>
										<div class="d-flex justify-content-between">
											<span class="small">Earning</span>
											<span class="h6 mb-0 small ms-2">2,000</span>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-sm-none">Status:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Paid</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="#" class="btn btn-light btn-round mb-0"><i class="bi bi-cloud-download"></i></a></div>
					</div>
				</div>
				<!-- Card body END -->

				<!-- Card footer START -->
				<div class="card-footer pt-0">
					<!-- Pagination and content -->
					<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
						<!-- Content -->
						<p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
						<!-- Pagination -->
						<nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
							<ul class="pagination pagination-sm pagination-primary-soft mb-0">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1">Prev</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item active"><a class="page-link" href="#">2</a></li>
								<li class="page-item disabled"><a class="page-link" href="#">..</a></li>
								<li class="page-item"><a class="page-link" href="#">15</a></li>
								<li class="page-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- Card footer END -->
			</div>
			<!-- Payment history END -->

		</div>
		<!-- Page main content END -->

</div>

</main>

    <!-- Footer START -->
        <?php include "includes/admin-dash-scripts.php";?>
    <!-- Footer END -->

    </body>


</html>