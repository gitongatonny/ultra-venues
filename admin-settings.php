<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Admin Settings | Ultra Venues</title>

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
					<li class="nav-item"><a href="admin-dash.php" class="nav-link">Dashboard</a></li>
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
					<li class="nav-item"> <a class="nav-link" href="admin-earnings.php">Earnings</a></li>
	
					<!-- Menu item -->
					<li class="nav-item"> <a class="nav-link active" href="admin-settings.php">Admin Settings</a></li>
	
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
					<h1 class="h3 mb-0">Settings</h1>
				</div>
			</div>

			<div class="row g-4">

				<!-- Profile setting -->
				<div class="col-lg-6">
					<div class="card shadow">
						<div class="card-header border-bottom">
							<h5 class="card-header-title">Admin Profile</h5>
						</div>
						<div class="card-body">
							<!-- Full name -->
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" class="form-control" value="Ultra Venues Admin" placeholder="Name">
							</div>
							<!-- Profile picture -->
							<div class="mb-3">
								<label class="form-label">Profile picture</label>
								<!-- Avatar upload START -->
								<div class="d-flex align-items-center">
									<label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
										<!-- Avatar place holder -->
										<span class="avatar avatar-xl">
											<img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/user.png" alt="">
										</span>
									</label>
									<!-- Upload button -->
									<label class="btn btn-sm btn-primary-soft mb-0" for="uploadfile-1">Change</label>
									<input id="uploadfile-1" class="form-control d-none" type="file">
								</div>
								<!-- Avatar upload END -->
							</div>
							<!-- Email id -->
							<div class="mb-3">
								<label class="form-label">Email Address</label>
								<input type="email" class="form-control" value="admin@ultra-venues.com" placeholder="Enter your email address">
							</div>
							<!-- Mobile number -->
							<div class="mb-3">
								<label class="form-label">Mobile number</label>
								<input type="text" class="form-control" value="+254 712 345 678" placeholder="Enter your mobile number">
							</div>
							<!-- Location -->
							<div class="mb-3">
								<label class="form-label">Location</label>
								<input class="form-control" type="text" value="The Cloud">
							</div>
							<!-- Website's Birthday -->
							<div>
								<label class="form-label">Website Birthday</label>
								<input type="text" class="form-control flatpickr flatpickr-input" value="1 Feb 2024" placeholder="Enter Ultra-Venue's birth-date" data-date-format="d M Y" readonly="readonly">
							</div>
							<!-- Save button -->
							<div class="d-flex justify-content-end mt-4">
								<a href="#" class="btn text-secondary border-0 me-2">Discard</a>
								<a href="#" class="btn btn-primary">Save change</a>
							</div>
						</div>
					</div>
				</div>


				<!-- Website settings -->
					<div class="col-lg-6">
					<div class="card shadow">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="card-header-title">Website Settings</h5>
						</div>

						<!-- Card body START -->
						<div class="card-body">
							<form class="row g-4 align-items-center">
	
								<!-- Input item -->
								<div class="col-xl-6">
									<label class="form-label">Site Name</label>
									<input type="text" class="form-control" placeholder="Ultra-Venues">
								</div>

								<!-- Input item -->
								<div class="col-xl-6">
									<label class="form-label">Site Copyrights</label>
									<input type="text" class="form-control" placeholder="legal@ultra-venues.com">
								</div>

								<!-- Input item -->
								<div class="col-12">
									<label class="form-label">Site Email</label>
									<input type="email" class="form-control" placeholder="info@ultra-venues.com"">
									<div class="form-text">Main contact email for the website</div>
								</div>
	
								<!-- Textarea item -->
								<div class="col-12">
									<label class="form-label">Site Description</label>
									<textarea class="form-control" rows="3">Ultra-Venues is a venue booking and management website that integrates intelligent recommendations. It provides a beautiful interface for users to book venues for their personal/corporate events. It also caters for venue owners by providing exposure to their platforms and providing an efficient way to manage their bookings and drive traffic leading to more revenue.</textarea>
								</div>

								<!-- Input item -->
								<div class="col-lg-6">
									<label class="form-label">Contact Phone</label>
									<input type="text" class="form-control" placeholder="Contact Phone">
								</div>

								<!-- Input item -->
								<div class="col-lg-6">
									<label class="form-label">Support Email</label>
									<input type="email" class="form-control" placeholder="Support Email">
								</div>

								<!-- Radio items -->
								<div class="col-lg-6">
									<label class="form-label">Allow Registration</label>
									<div class="d-sm-flex">
										<!-- Radio -->
										<div class="form-check radio-bg-light me-4">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
											<label class="form-check-label" for="flexRadioDefault1">
												Enable
											</label>
										</div>
									<!-- Radio -->
										<div class="form-check radio-bg-light me-4">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
											<label class="form-check-label" for="flexRadioDefault2">
												Disable
											</label>
										</div>
									<!-- Radio -->
										<div class="form-check radio-bg-light">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
											<label class="form-check-label" for="flexRadioDefault3">
												On Request
											</label>
										</div>
									</div>
								</div>

								<!-- Textarea item -->
								<div class="col-12">
									<label class="form-label">Contact Address</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
	
								<!-- Save button -->
								<div class="d-sm-flex justify-content-end">
									<button type="button" class="btn btn-primary mb-0">Update</button>
								</div>
							</form>
						</div>
						<!-- Card body END -->
					</div>
				</div>
</div>
		<!-- Page main content END -->
	</div>
	<!-- Page content END -->

</main>

    <!-- Footer START -->
        <?php include "includes/admin-dash-scripts.php";?>
    <!-- Footer END -->

    </body>


</html>