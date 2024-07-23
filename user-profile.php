<!DOCTYPE html>
<html lang="en">

    <head>
        <title>User Profile | Ultra Venues</title>

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
        <?php $activeTab = 'my-profile'; ?>
        <?php include "includes/user-profile-sidebar.php";?>
        <!-- Profile Sidebar END -->

			<!-- Main content START -->
			<div class="col-lg-8 col-xl-9">

				<!-- Offcanvas menu button -->
				<div class="d-grid mb-0 d-lg-none w-100">
					<button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
						<i class="fas fa-sliders-h"></i> Menu
					</button>
				</div>


					<!-- Personal info START -->
					<div class="card border">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h4 class="card-header-title">Personal Information</h4>
						</div>

						<!-- Card body START -->
						<div class="card-body">
							<!-- Form START -->
							<form class="row g-3">
								<!-- Profile photo -->
								<div class="col-12">
									<label class="form-label">Upload your profile photo<span class="text-danger">*</span></label>
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
								</div>

								<!-- Name -->
								<div class="col-md-6">
									<label class="form-label">Full Name<span class="text-danger">*</span></label>
									<input type="text" class="form-control" value="Con Williams" placeholder="Enter your full name">
								</div>

								<!-- Email -->
								<div class="col-md-6">
									<label class="form-label">Email Address<span class="text-danger">*</span></label>
									<input type="email" class="form-control" value="zakayo@ke.com" placeholder="Enter your email address">
								</div>

								<!-- Mobile -->
								<div class="col-md-6">
									<label class="form-label">Mobile Number<span class="text-danger">*</span></label>
									<input type="text" class="form-control" value="+254 123 456 789" placeholder="Enter your mobile number">
								</div>

								<!-- Gender -->
								<div class="col-md-6">
									<label class="form-label">Select Gender<span class="text-danger">*</span></label>
									<div class="d-flex gap-4">
										<div class="form-check radio-bg-light">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
											<label class="form-check-label" for="flexRadioDefault1">
												Male
											</label>
										</div>
										<div class="form-check radio-bg-light">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
											<label class="form-check-label" for="flexRadioDefault2">
												Female
											</label>
										</div>
										<div class="form-check radio-bg-light">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
											<label class="form-check-label" for="flexRadioDefault3">
												Others
											</label>
										</div>
									</div>
								</div>


								<!-- Button -->
								<div class="col-12 text-end">
									<a href="#" class="btn btn-primary mb-0">Save Changes</a>
								</div>
							</form>
							<!-- Form END -->
						</div>
						<!-- Card body END -->
					</div>
					<!-- Personal info END -->

					<!-- Update email START -->
					<div class="card border">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h4 class="card-header-title">Update email</h4>
							<p class="mb-0">Your current email address is <span class="text-primary">zakayo@ke.com</span></p>
						</div>

						<!-- Card body START -->
						<div class="card-body">
							<form>
								<!-- Email -->
								<label class="form-label">Enter your new email address<span class="text-danger">*</span></label>
								<input type="email" class="form-control" placeholder="Enter your email address">

								<div class="text-end mt-3">
									<a href="#" class="btn btn-primary mb-0">Save Email</a>
								</div>
							</form>	
						</div>
						<!-- Card body END -->
					</div>
					<!-- Update email END -->

					<!-- Update Password START -->
					<div class="card border">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h4 class="card-header-title">Update Password</h4>
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
									<input class="form-control fakepassword" placeholder="Enter new password" type="password" id="psw-input">
									<span class="input-group-text p-0 bg-transparent">
										<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
									</span>
								</div>
							</div>
                            <!-- Confirm New password -->
							<div class="mb-3">
								<label class="form-label"> Confirm new password</label>
								<div class="input-group">
									<input class="form-control fakepassword" placeholder="Confirm new password" type="password" id="psw-input">
									<span class="input-group-text p-0 bg-transparent">
										<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
									</span>
								</div>
							</div>

							<div class="text-end">
								<a href="#" class="btn btn-primary mb-0">Change Password</a>
							</div>
						</form>
						<!-- Card body END -->
					</div>
					<!-- Update Password END -->
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