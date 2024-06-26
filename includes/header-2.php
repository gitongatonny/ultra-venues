<!-- Header START -->
<header class="navbar-light py-3">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container d-block">
			<div class="row align-items-center">
				<div class="col-4">
					<!-- Logo START -->
					<a class="navbar-brand" href="index.php">
						<img class="light-mode-item navbar-brand-item d-inline h-40px h-md-60px" src="assets/images/" alt="ultra-venues-logo">
						<img class="dark-mode-item navbar-brand-item d-inline h-40px h-md-60px" src="assets/images/" alt="ultra-venues-logo">
					</a>
					<!-- Logo END -->
				</div>

				<div class="col-8">
					<!-- Navbar top Right-->
					<div class="align-items-center justify-content-end d-none d-lg-flex">
						<ul class="nav border-bottom">
							<li class="nav-item"> <a href="customer-bookings.php" class="nav-link small pb-2"><i class="bi bi-briefcase me-2"></i>My Bookings</a> </li>
							<li class="nav-item"> <a href="help-center.php" class="nav-link small pb-2"><i class="bi bi-info-circle me-2"></i>Help</a> </li>
							<li class="nav-item"> <a href="login.php" class="nav-link small pb-2"><i class="far fa-user me-2"></i>Login/Register</a> </li>
							<!-- Dark mode option START -->
							<li class="nav-item dropdown">
								<button class="btn btn-link text-warning lh-3 p-0 mb-0" id="bd-theme"
								type="button"
								aria-expanded="false"
								data-bs-toggle="dropdown"
								data-bs-display="static">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-circle-half theme-icon-active fa-fw" viewBox="0 0 16 16">
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
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
												<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
												<use href="#"></use>
											</svg>Auto
										</button>
									</li>
								</ul>
							</li>
							<!-- Dark mode option END -->
						</ul>
					</div>	

					<div class="d-sm-flex align-items-center justify-content-end">
						<!-- Main navbar START -->
						<div class="navbar-collapse collapse" id="navbarCollapse">
							<ul class="navbar-nav navbar-nav-scroll ms-auto">
								<!-- Nav item Find Venue -->
								<li class="nav-item dropdown dropdown-fullwidth">
									<a class="nav-link dropdown-toggle" href="venues.php" id="hotelMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Find a Venue</a>
									<div class="dropdown-menu" aria-labelledby="hotelMenu">
										<div class="container">
											<div class="row g-4 justify-content-between p-lg-3">
												<!-- Locations -->
												<div class="col-lg-5">
													<h6 class="mb-3"><i class="bi bi-pin-map-fill text-primary me-2"></i>Locations</h6>
													<hr class="my-2">
													<div class="row">
														<div class="col-lg-6">
															<ul class="list-unstyled">
																<li> <a class="dropdown-item" href="venue-details.php">Nyeri</a> </li>
																<li> <a class="dropdown-item" href="venue-details.php">Nanyuki</a> </li>
																<li> <a class="dropdown-item" href="venue-details.php">Embu</a> </li>
																<li> <a class="dropdown-item" href="venue-details.php">Meru</a> </li>
																<li> <a class="dropdown-item" href="venue-details.php">Mwea</a> </li>
															</ul>
														</div>
	
														<div class="col-lg-6">
															<ul class="list-unstyled">
																<li> <a class="dropdown-item" href="venue-details.php">Naromoru</a> </li>
																<li> <a class="dropdown-item" href="venue-details.php">Runyenjes</a> </li>
																<li> <a class="dropdown-item" href="venue-details.php">Nyahururu</a> </li>
																<li> <a class="dropdown-item" href="venue-details.php">Timau</a> </li>
															</ul>
														</div>
													</div>
												</div>
	
												<!-- Venue type -->
												<div class="col-lg-3">
													<h6 class="mb-3"><i class="bi bi-list-ul text-primary me-2"></i>Hotel type</h6>
													<hr class="my-2">
													<ul class="list-unstyled">
														<li> <a class="dropdown-item" href="venues.php">All</a> </li>
														<li> <a class="dropdown-item" href="venues.php">Hotels</a> </li>
														<li> <a class="dropdown-item" href="venues.php">Villas</a> </li>
														<li> <a class="dropdown-item" href="venues.php">Palace</a> </li>
														<li> <a class="dropdown-item" href="venues.php">Resorts</a> </li>
														<li> <a class="dropdown-item" href="venues.php">Restaurants</a> </li>
													</ul>
												</div>
	
												<!-- Event Category -->
												<div class="col-lg-3">
													<h6 class="mb-3"><i class="bi bi-grid-3x3-gap text-primary me-2"></i>Event Category</h6>
													<hr class="my-2">
													<ul class="list-unstyled">
														<li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-umbrella-beach fa-fw me-2"></i>Wedding</a> </li>
														<li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-city fa-fw me-2"></i>Personal Custom Event</a> </li>
														<li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-spa fa-fw me-2"></i>Family Gathering</a> </li>
														<li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-mountain-sun fa-fw me-2"></i>Graduation</a> </li>
														<li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-golf-ball-tee fa-fw me-2"></i>Symposium</a> </li>
														<li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-gopuram fa-fw me-2"></i>Staff Retreat</a> </li>
                                                        <li> <a class="dropdown-item" href="venues.php"><i class="fa-solid fa-mountain-sun fa-fw me-2"></i>Corporate Meeting</a> </li>

													</ul>
												</div>
	
												<!-- Action box -->
												<div class="col-12">
													<div class="card overflow-hidden" style="background-image:url(assets/images/bg/05.jpg); background-position: center left; background-size: cover;">
														<div class="bg-overlay bg-dark opacity-5"></div>
														<div class="card-body d-lg-flex justify-content-between align-items-center position-relative z-index-9">
															<!-- Meta -->
															<div class="mb-3 mb-lg-0">
																<h5 class="text-white">Host an unforgetaable event with us</h5>
																<ul class="list-inline">
																	<li class="list-inline-item text-white me-2"> <i class="bi bi-patch-check-fill me-1"></i>Get 1000 bonus points on every booking</li>
																	<li class="list-inline-item text-white me-2"> <i class="bi bi-patch-check-fill me-1"></i>Earn through April 15</li>
																	<li class="list-inline-item text-white"> <i class="bi bi-patch-check-fill me-1"></i>Redeem for free supplementary services</li>
																</ul>
															</div>
															<!-- Button -->
															<a href="venues.php" class="btn btn-white mb-0">Book a Venue Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
	
								<!-- Nav item Find Venue -->
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="venues.php" id="pagesFacilities" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Venue Facilities</a>
									<ul class="dropdown-menu" aria-labelledby="pagesFacilities">
	
										<li> <a class="dropdown-item" href="venues.php">Banquet</a></li>
										<li> <a class="dropdown-item" href="venues.php">Conference and Meeting</a></li>
										<li> <a class="dropdown-item" href="venues.php">Open Garden Space</a></li>
										<li> <a class="dropdown-item" href="venues.php">Large Parking Area</a></li>
										<li> <a class="dropdown-item" href="venues.php">Food & Drinks Available</a></li>
										<li> <a class="dropdown-item" href="venues.php">Luggage Storage</a></li>
										<li> <a class="dropdown-item" href="venues.php">Summer Terrace</a></li>
										<li> <a class="dropdown-item" href="venues.php">DJs and MCs Available</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<!-- Main navbar END -->

						<!-- Toggler button and stay button -->
						<div class="d-flex align-items-center justify-content-end">
							<!-- Responsive navbar toggler -->
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-animation">
									<span></span>
									<span></span>
									<span></span>
								</span>
								<span class="d-none d-sm-inline-block small">Menu</span>
							</button>
		
							<!-- Booking form dropdown START -->
							<div class="nav-item dropdown form-control-bg-light">
								<!-- Stay button -->
								<a class="btn btn-sm btn-primary mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
									Book a Venue <i class="fa-solid fa-angle-down"></i>
								</a>

								<!-- Form START -->
								<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 mt-2">
									<!-- Card START -->
									<div class="card">
										<!-- Card header -->
										<div class="card-header border-bottom">
											<h6 class="mb-0">Search your Destination</h6>
										</div>

										<!-- Card body -->
										<div class="card-body">
											<div class="row g-3">
												<!-- Venue -->
												<div class="col-12">
													<label class="form-label mb-0">Venue</label>
													<select class="form-select js-choice" data-search-enabled="true" aria-label=".form-select-sm">
														<option value="">Select location</option>
														<option>Nyeri</option>
														<option>Nanyuki</option>
														<option>Meru</option>
													</select>
												</div>
					
												<!-- Date -->
												<div class="col-md-6">
													<label class="form-label mb-0">Start Date</label>
													<input type="text" class="form-control flatpickr" data-date-format="d M Y" placeholder="Select date">
												</div>
												
												<!-- Date -->
												<div class="col-md-6">
													<label class="form-label mb-0">End Date</label>
													<input type="text" class="form-control flatpickr" data-date-format="d M Y" placeholder="Select date">
												</div>
					
												<!-- Capacity -->
												<div class="col-12">
													<!-- Dropdown input -->
													<label class="form-label mb-0">Guests Capacity</label>
													<div class="dropdown guest-selector me-2">
														<input type="text" class="form-guest-selector form-control selection-result" value="2 Guests 1 Room" data-bs-auto-close="outside" data-bs-toggle="dropdown">
													
														<!-- dropdown items -->
														<ul class="dropdown-menu guest-selector-dropdown">
															<!-- Adult -->
															<li class="d-flex justify-content-between">
																<div>
																	<h6 class="mb-0">Adults</h6>
																	<small>Ages 13 or above</small>
																</div>
					
																<div class="hstack gap-1 align-items-center">
																	<button type="button" class="btn btn-link adult-remove p-0 mb-0"><i class="bi bi-dash-circle fs-5 fa-fw"></i></button>
																	<h6 class="guest-selector-count mb-0 adults">2</h6>
																	<button type="button" class="btn btn-link adult-add p-0 mb-0"><i class="bi bi-plus-circle fs-5 fa-fw"></i></button>
																</div>
															</li>
					
															<!-- Divider -->
															<li class="dropdown-divider"></li>
					
															<!-- Child -->
															<li class="d-flex justify-content-between">
																<div>
																	<h6 class="mb-0">Child</h6>
																	<small>Ages 13 below</small>
																</div>
					
																<div class="hstack gap-1 align-items-center">
																	<button type="button" class="btn btn-link child-remove p-0 mb-0" ><i class="bi bi-dash-circle fs-5 fa-fw"></i></button>
																	<h6 class="guest-selector-count mb-0 child">0</h6>
																	<button type="button" class="btn btn-link child-add p-0 mb-0" ><i class="bi bi-plus-circle fs-5 fa-fw"></i></button>
																</div>
															</li>
					
															<!-- Divider -->
															<li class="dropdown-divider"></li>
					
															<!-- Rooms -->
															<li class="d-flex justify-content-between">
																<div>
																	<h6 class="mb-0">Capacity</h6>
																	<small>Max capacity is 350 guests</small>
																</div>
					
																<div class="hstack gap-1 align-items-center">
																	<button type="button" class="btn btn-link room-remove p-0 mb-0" ><i class="bi bi-dash-circle fs-5 fa-fw"></i></button>
																	<h6 class="guest-selector-count mb-0 rooms">1</h6>
																	<button type="button" class="btn btn-link room-add p-0 mb-0" ><i class="bi bi-plus-circle fs-5 fa-fw"></i></button>
																</div>
															</li>
														</ul>
													</div>
												</div>
					
												<!-- Buttons -->
												<div class="col-12 text-center">
													<a href="#" class="text-primary-hover text-decoration-underline">Have a promo code?</a>
													<button class="btn btn-primary-soft w-100 mt-3 mb-0">Check Availability</button>
												</div>
					
											</div>	
										</div>
									</div>
									<!-- Card END -->
								</div>
								<!-- Form END -->
							</div>
							<!-- Booking form dropdown END -->
						</div>	


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
										<a href="#" class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
											<h6 class="mb-2">New! Booking flights from New York ✈️</h6>
											<p class="mb-0 small">Find the flexible ticket on flights around the world. Start searching today</p>
											<span>Wednesday</span>
										</a>
									</li>
									<!-- Notification item -->
									<li>
										<a href="#" class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
											<h6 class="mb-2">Sunshine saving are here 🌞 save 30% or more on a stay</h6>
											<span>15 Nov 2022</span>
										</a>
									</li>
								</ul>
							</div>
							<!-- Card body END -->

							<!-- Card footer -->
							<div class="card-footer bg-transparent text-center border-top">
								<a href="#" class="btn btn-sm btn-link mb-0 p-0">See all incoming activity</a>
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
						<img class="avatar-img rounded-2" src="assets/images/avatar/01.jpg" alt="avatar">
					</a>

					<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
						<!-- Profile info -->
						<li class="px-3 mb-3">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar me-3">
									<img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
								</div>
								<div>
									<a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
									<p class="small m-0">example@gmail.com</p>
								</div>
							</div>
						</li>

						<!-- Links -->
						<li> <hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-bookmark-check fa-fw me-2"></i>My Bookings</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help Center</a></li>
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
				</div>
			</div>
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->