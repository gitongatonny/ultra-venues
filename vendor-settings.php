<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Edit Venue Details | Ultra Venues</title>

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

							<li class="nav-item"> <a class="nav-link" href="vendor-notifications.php"><i class="bi bi-bell fa-fw me-1"></i>Activities</a> </li>
		
							<li class="nav-item"> <a class="nav-link" href="vendor-earnings.php"><i class="bi bi-graph-up-arrow fa-fw me-1"></i>Earnings</a>	</li>
							
							<li> <a class="nav-link active" href="vendor-settings.php"><i class="bi bi-gear fa-fw me-1"></i>Settings</a></li>
		
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
				<h1 class="fs-4 mb-0"><i class="bi bi-gear fa-fw me-1"></i>Settings</h1>
			</div>
		</div>
		<!-- Title END -->

		<!-- Tabs START -->
		<div class="row g-4">
			<div class="col-12">
				<div class="bg-light pb-0 px-2 px-lg-0 rounded-top">
					<ul class="nav nav-tabs nav-bottom-line nav-responsive border-0 nav-justified" role="tablist">
						<li class="nav-item"> <a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1"><i class="fas fa-cog fa-fw me-2"></i>Edit Venue Profile</a> </li>
					</ul>
				</div>
			</div>
		</div>	
		<!-- Tabs END -->

		<!-- Tabs Content START -->
		<div class="row g-4">
			<div class="col-12">
				<div class="tab-content">
					<!-- Tab content  START -->
					<div class="tab-pane show active" id="tab-1">
						<div class="row g-4">
							<!-- Edit profile START -->
							<div class="col-12">
								<div class="card border">
									<div class="card-header border-bottom">
										<h5 class="card-header-title">Edit Venue</h5>
									</div>
									<div class="card-body">
										<!-- Venue name -->
										<div class="mb-3">
											<label class="form-label">Venue Name</label>
											<input type="text" class="form-control" value="Green Hills Hotel" placeholder="Name">
										</div>

                                        <!-- Venue Type -->
                                        <div class="mb-3">
                                            <label class="form-label">Venue Type</label>
                                            <select class="form-select">
                                                <option selected disabled>Select Venue Type</option>
                                                <option value="hotel">Hotel</option>
                                                <option value="resort">Resort</option>
                                                <option value="garden">Garden</option>
                                                <option value="conference-room">Conference Room</option>
                                                <option value="palace">Palace</option>
                                            </select>
                                        </div>

                                        <!-- Venue Pictures -->
                                        <div class="mb-3">
                                            <label class="form-label">Venue Pictures</label>
                                            <div class="d-flex align-items-center">

                                                <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                                                    <span class="avatar avatar-xl">
                                                        <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/mt-kenya.jpg" alt="">
                                                    </span>
                                                </label>
                                                <label class="btn btn-sm btn-primary-soft mb-0" for="uploadfile-2">Change</label>
                                                <input id="uploadfile-2" class="form-control d-none" type="file">
                                                
                                                <div class="mx-2"></div> 

                                                <label class="position-relative me-4" for="uploadfile-2" title="Replace this pic">
                                                    <span class="avatar avatar-xl">
                                                        <img id="uploadfile-2-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/01.jpg" alt="">
                                                    </span>
                                                </label>
                                                <label class="btn btn-sm btn-primary-soft mb-0" for="uploadfile-1">Change</label>
                                                <input id="uploadfile-1" class="form-control d-none" type="file">

                                                <div class="mx-2"></div> 

                                                <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                                                    <span class="avatar avatar-xl">
                                                        <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/mt-kenya.jpg" alt="">
                                                    </span>
                                                </label>
                                                <label class="btn btn-sm btn-primary-soft mb-0" for="uploadfile-2">Change</label>
                                                <input id="uploadfile-2" class="form-control d-none" type="file">

                                                <div class="mx-2"></div> 

                                                <label class="position-relative me-4" for="uploadfile-2" title="Replace this pic">
                                                    <span class="avatar avatar-xl">
                                                        <img id="uploadfile-2-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/01.jpg" alt="">
                                                    </span>
                                                </label>
                                                <label class="btn btn-sm btn-primary-soft mb-0" for="uploadfile-1">Change</label>
                                                <input id="uploadfile-1" class="form-control d-none" type="file">

                                                <div class="mx-2"></div> 

                                                <div class="mx-2"></div> 

                                                <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                                                    <span class="avatar avatar-xl">
                                                        <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/mt-kenya.jpg" alt="">
                                                    </span>
                                                </label>
                                                <label class="btn btn-sm btn-primary-soft mb-0" for="uploadfile-2">Change</label>
                                                <input id="uploadfile-2" class="form-control d-none" type="file">

                                            </div>
                                        </div>
										<!-- Email Address -->
										<div class="mb-3">
											<label class="form-label">Email Adress</label>
											<input type="email" class="form-control" value="info@greenhillshotel.com" placeholder="Enter your email address">
										</div>
										<!-- Mobile Number -->
										<div class="mb-3">
											<label class="form-label">Mobile Number</label>
											<input type="text" class="form-control" value="712-345-678" placeholder="Enter your mobile number">
										</div>
										<!-- Location -->
										<div class="mb-3">
											<label class="form-label">Location (Detailed)</label>
											<input class="form-control" type="text" value="Nyeri">
										</div>

                                        <!-- Website -->
										<div class="mb-3">
											<label class="form-label">Website</label>
											<input class="form-control" type="text" value="greenhillshotel.com">
										</div>

                                        <!-- Facilities -->
                                        <div class="mb-3">
                                            <label class="form-label">Facilities</label>
                                            <textarea class="form-control" rows="5" placeholder="Enter a description"></textarea>
                                        </div>

										<!-- Save button -->
										<div class="d-flex justify-content-end mt-4">
											<a href="#" class="btn text-secondary border-0 me-2">Discard</a>
											<a href="#" class="btn btn-primary">Save change</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Edit profile END -->

							<!-- Update Email START -->
							<div class="col-md-6">
								<div class="card border">
									<div class="card-header border-bottom">
										<h5 class="card-header-title">Update Email</h5>
										<p class="mb-0 small">Your current email address is <span class="text-primary">info@greenhillshotel.com</span></p>
									</div>
									<form class="card-body">
										<!-- Email -->
										<label class="form-label">Enter your new email Address</label>
										<input type="email" class="form-control" placeholder="Enter your email address">
				
										<div class="text-end mt-3">
											<a href="#" class="btn btn-primary mb-0">Save Email</a>
										</div>
									</form>
								</div>
							</div>
							<!-- Update Email END -->

							<!-- Update Password START -->
							<div class="col-md-6">
								<div class="card border">
									<div class="card-header border-bottom">
										<h5 class="card-header-title">Update Password</h5>
									</div>
									<!-- Card body START -->
									<form class="card-body">
										<!-- Current password -->
										<div class="mb-3">
											<label class="form-label">Current password</label>
											<input class="form-control" type="password" placeholder="Enter current password">
										</div>
										<!-- New password -->
										<div class="mb-3">
											<label class="form-label"> Enter new password</label>
											<div class="input-group">
												<input class="form-control fakepassword" type="password" id="psw-input" placeholder="Enter new password">
												<span class="input-group-text p-0 bg-transparent">
													<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
												</span>
											</div>
										</div>

										<!-- Confirm password -->
										<div class="mb-3">
											<label class="form-label"> Confirm new password</label>
											<div class="input-group">
												<input class="form-control fakepassword" type="password" id="psw-input" placeholder="Confirm new password">
												<span class="input-group-text p-0 bg-transparent">
													<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
												</span>
											</div>
										</div>


										<div class="text-end mt-3">
											<a href="#" class="btn btn-primary mb-0">Change Password</a>
										</div>
									</form>
									<!-- Card body END -->
								</div>
							</div>
							<!-- Update Password END -->
						</div>
					</div>
					<!-- Tab content  END -->


				</div>
			</div>
		</div>
		<!-- Tabs Content END -->
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