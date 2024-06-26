<!-- Header START -->
<header class="navbar-light header-sticky">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.php">
				<img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="ultra-venues-logo" style="height: 80px; width: 120px;">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="ultra-venues-logo" style="height: 80px; width: 120px;">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto ms-sm-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
        <span class="d-none d-sm-inline-block small">Menu</span>
			</button>

			<!-- Responsive category toggler -->
			<button class="navbar-toggler ms-sm-auto mx-3 me-md-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCategoryCollapse" aria-controls="navbarCategoryCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<i class="bi bi-grid-3x3-gap-fill fa-fw"></i><span class="d-none d-sm-inline-block small">Category</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll me-auto">

					<!-- Nav item Locations -->
					<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="locations.php" id="pagesFacilities" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Locations</a>
							<ul class="dropdown-menu" aria-labelledby="pagesFacilities">
								<h6 class="mb-3"><i class="bi bi-pin-map-fill text-primary me-2"></i>Locations</h6>
								<hr class="my-2">
								<ul class="list-unstyled">
									<li> <a class="dropdown-item" href="location-detail.php"> <i class="bi bi-geo-alt-fill fa-fw me-2"></i> Nyeri</a> </li>
									<li> <a class="dropdown-item" href="location-detail.php"> <i class="bi bi-geo-alt-fill fa-fw me-2"></i> Nanyuki</a> </li>
									<li> <a class="dropdown-item" href="location-detail.php"> <i class="bi bi-geo-alt-fill fa-fw me-2"></i> Embu</a> </li>
									<li> <a class="dropdown-item" href="location-detail.php"> <i class="bi bi-geo-alt-fill fa-fw me-2"></i> Meru</a> </li>
									<li> <a class="dropdown-item" href="location-detail.php"> <i class="bi bi-geo-alt-fill fa-fw me-2"></i> Mwea</a> </li>
									<li> <a class="dropdown-item" href="location-detail.php"> <i class="bi bi-geo-alt-fill fa-fw me-2"></i> Naromoru</a> </li>
									<li> <a class="dropdown-item" href="location-detail.php"> <i class="bi bi-geo-alt-fill fa-fw me-2"></i> Runyenjes</a> </li>
									<li> <a class="dropdown-item" href="location-detail.php"> <i class="bi bi-geo-alt-fill fa-fw me-2"></i> Nyahururu</a> </li>
									<li> <a class="dropdown-item" href="location-detail.php"> <i class="bi bi-geo-alt-fill fa-fw me-2"></i> Timau</a> </li>
								</ul>
							</ul>
					</li>
					<!-- Nav item Locations -->



					<!-- Nav item Venue Types -->
					<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="venues.php" id="pagesFacilities" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Venue Types</a>
							<ul class="dropdown-menu" aria-labelledby="pagesFacilities">
							<h6 class="mb-3"><i class="bi bi-list-ul text-primary me-2"></i>Venue Types</h6>
								<hr class="my-2">
								<ul class="list-unstyled">
									<li> <a class="dropdown-item" href="venues.php"> <i class="fa-solid fa-globe fa-fw me-2"></i> All</a> </li>
									<li> <a class="dropdown-item" href="venues.php"> <i class="fa-solid fa-building fa-fw me-2"></i> Hotels</a> </li>
									<li> <a class="dropdown-item" href="venues.php"> <i class="fa-solid fa-home fa-fw me-2"></i> Villas</a> </li>
									<li> <a class="dropdown-item" href="venues.php"> <i class="fa-solid fa-landmark fa-fw me-2"></i> Palace</a> </li>
									<li> <a class="dropdown-item" href="venues.php"> <i class="fa-solid fa-tree fa-fw me-2"></i> Resorts</a> </li>
									<li> <a class="dropdown-item" href="venues.php"> <i class="fa-solid fa-leaf fa-fw me-2"></i> Gardens</a> </li>
								</ul>
							</ul>
					</li>
					<!-- Nav item Venue Types -->



					<!-- Nav item Venue Types -->
					<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="venues.php" id="pagesFacilities" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Event Types</a>
							<ul class="dropdown-menu" aria-labelledby="pagesFacilities">
							<h6 class="mb-3"><i class="bi bi-grid-3x3-gap text-primary me-2"></i>Event Categories</h6>
								<hr class="my-2">
								<ul class="list-unstyled">
									<li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-ring fa-fw me-2"></i>Wedding</a> </li>
									<li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-calendar-alt fa-fw me-2"></i>Personal Custom Event</a> </li>
									<li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-users fa-fw me-2"></i>Family Gathering</a> </li>
									<li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-graduation-cap fa-fw me-2"></i>Graduation</a> </li>
									<li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-microphone fa-fw me-2"></i>Symposium</a> </li>
									<li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-plane fa-fw me-2"></i>Staff Retreat</a> </li>
									<li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-briefcase fa-fw me-2"></i>Corporate Meeting</a> </li>
								</ul>
							</ul>
					</li>
					<!-- Nav item Venue Types -->


					<!-- Nav item About Us -->
					<li class="nav-item">
						<a class="nav-link" href="about-us.php">About Us</a>
					</li>
					<!-- Nav item About Us -->


					<!-- Nav item Contact Us -->
					<li class="nav-item">
						<a class="nav-link" href="contact-us.php">Contact Us</a>
					</li>
					<!-- Nav item Contact Us -->
	

							
				</ul>
			</div>
			<!-- Main navbar END -->


			<!-- Profile and Notification START -->
			<ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

		
				<!-- Google Translate Functionality -->
				<div id="google_translate_element"></div> 

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
								<h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
								<a class="small" href="#">Clear all</a>
							</div>

							<!-- Card body START -->
							<div class="card-body p-0">
								<ul class="list-group list-group-flush list-unstyled p-2">
									<!-- Notification item -->
									<li>
										<a href="user-bookings.php" class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
											<h6 class="mb-2">Booking Confirmed for Green Hills Hotel 🏨</h6>
											<p class="mb-0 small">Your 2-Day Venue for a Company Retreat has been booked</p>
											<span>12th May 2024 - 13th May 2024</span>
										</a>
									</li>
									<!-- Notification item -->
									<li>
										<a href="user-bookings.php" class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
											<h6 class="mb-2">Reminder! Your Event is 1 week away.</h6>
											<span>12th May 2024</span>
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
					<a class="avatar avatar-sm p-0" href="user-profile.php" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
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
									<a class="h6 mt-2 mt-sm-0" href="user-profile.php">Con Williams</a>
									<p class="small m-0">zakayo@ke.com</p>
								</div>
							</div>
						</li>

						<!-- Links -->
						<li> <hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="user-profile.php"><i class="bi bi-person fa-fw me-2"></i>My Profile</a></li>
						<li><a class="dropdown-item" href="user-bookings.php"><i class="bi bi-bookmark-check fa-fw me-2"></i>My Bookings</a></li>
						<li><a class="dropdown-item" href="user-wishlist.php"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a></li>
						<li><a class="dropdown-item" href="user-payment-details.php"><i class="bi bi-cash-stack fa-fw me-2"></i>Payment Details</a></li>
						<li><a class="dropdown-item" href="faq.php"><i class="bi bi-info-circle fa-fw me-2"></i>Help Center</a></li>
						<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
						<li> <hr class="dropdown-divider"></li>

						<!-- Dark mode options START -->
						<li>
							<div class="nav-pills-primary-soft theme-icon-active d-flex justify-content-between align-items-center p-2 pb-0">
								<span>Mode:</span>
								<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0" data-bs-theme-value="light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Light">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
										<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
										<use href="#"></use>
									</svg>
								</button>
								<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0" data-bs-theme-value="dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Dark">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
										<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
										<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
										<use href="#"></use>
									</svg>
								</button>
								<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0 active" data-bs-theme-value="auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
										<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
										<use href="#"></use>
									</svg>
								</button>
							</div>
						</li> 
						<!-- Dark mode options END-->
					</ul>
				</li>
				<!-- Profile dropdown END -->
			</ul>
			<!-- Profile and Notification START -->

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->