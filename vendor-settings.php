<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edit Venue Details | Ultra Venues</title>

	<!-- Head Content -->
	<?php include "includes/head-content.php"; ?>



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
						<h4 class="mb-2 mb-sm-0 ms-sm-3" id="welcome-message"><span class="fw-light">Welcome Back, </span></h4>
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

									<li class="nav-item"> <a class="nav-link" href="vendor-dash.php"><i class="bi bi-house-door fa-fw me-1"></i>Dashboard</a> </li>

									<li class="nav-item"> <a class="nav-link" href="vendor-bookings.php"><i class="bi bi-bookmark-heart fa-fw me-1"></i>Bookings</a> </li>

									<li class="nav-item"> <a class="nav-link" href="vendor-notifications.php"><i class="bi bi-bell fa-fw me-1"></i>Activities</a> </li>

									<li class="nav-item"> <a class="nav-link" href="vendor-earnings.php"><i class="bi bi-graph-up-arrow fa-fw me-1"></i>Earnings</a> </li>

									<li> <a class="nav-link active" href="vendor-settings.php"><i class="bi bi-gear fa-fw me-1"></i>Settings</a></li>

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
													<input type="text" id="venueName" class="form-control" placeholder="Name">
												</div>

												<!-- Venue Type -->
												<div class="mb-3">
													<label class="form-label">Venue Type</label>
													<select id="venueType" class="form-select">
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
													<input type="file" id="venuePicturesInput" class="form-control" multiple>
													<div class="d-flex align-items-center mt-2" id="venuePicturesPreview">
														<!-- Dynamic image previews will be inserted here -->
													</div>
												</div>

												<!-- Email Address -->
												<div class="mb-3">
													<label class="form-label">Email Address</label>
													<input type="email" id="venueEmail" class="form-control" placeholder="Enter your email address">
												</div>
												<!-- Mobile Number -->
												<div class="mb-3">
													<label class="form-label">Mobile Number</label>
													<input type="text" id="venueMobile" class="form-control" placeholder="Enter your mobile number">
												</div>
												<!-- Location -->
												<div class="mb-3">
													<label class="form-label">Location (Detailed)</label>
													<input type="text" id="venueLocation" class="form-control" placeholder="Location">
												</div>

												<!-- Website -->
												<div class="mb-3">
													<label class="form-label">Website</label>
													<input type="text" id="venueWebsite" class="form-control" placeholder="Website">
												</div>

												<!-- Government License Number -->
												<div class="mb-3">
													<label class="form-label">Government License Number</label>
													<input type="text" id="venueLicense" class="form-control" placeholder="License Number">
												</div>

												<!-- KRA PIN -->
												<div class="mb-3">
													<label class="form-label">KRA PIN</label>
													<input type="text" id="venueKraPin" class="form-control" placeholder="KRA PIN">
												</div>

												<!-- Venue Price Per Day -->
												<div class="mb-3">
													<label class="form-label">Venue Price Per Day (KES)</label>
													<input type="text" id="venuePrice" class="form-control" placeholder="Price Per Day">
												</div>

												<!-- Venue Services -->
												<div class="mb-3">
													<label class="form-label">Venue Services</label>
													<textarea id="venueServices" class="form-control" rows="5" placeholder="Enter a description"></textarea>
												</div>

												<!-- Additional Services -->
												<div class="mb-3">
													<label class="form-label">Additional Services</label>
													<textarea id="venueAdditionalServices" class="form-control" rows="5" placeholder="Enter a description"></textarea>
												</div>

												<!-- Save button -->
												<div class="d-flex justify-content-end mt-4">
													<a href="#" class="btn text-secondary border-0 me-2">Discard</a>
													<a href="#" class="btn btn-primary" id="saveChangesButton">Save change</a>
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
												<p class="mb-0 small">Your current email address is <span class="text-primary" id="currentEmail">info@greenhillshotel.com</span></p>
											</div>
											<form class="card-body" id="updateEmailForm">
												<!-- Email -->
												<label class="form-label">Enter your new email Address</label>
												<input type="email" id="newEmail" class="form-control" placeholder="Enter your email address">
												<div class="text-end mt-3">
													<button type="submit" class="btn btn-primary mb-0">Save Email</button>
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
											<form class="card-body" id="updatePasswordForm">
												<!-- Current password -->
												<div class="mb-3">
													<label class="form-label">Current password</label>
													<input type="password" id="currentPassword" class="form-control" placeholder="Enter current password">
												</div>
												<!-- New password -->
												<div class="mb-3">
													<label class="form-label"> Enter new password</label>
													<div class="input-group">
														<input type="password" id="newPassword" class="form-control fakepassword" placeholder="Enter new password">
														<span class="input-group-text p-0 bg-transparent">
															<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
														</span>
													</div>
												</div>

												<!-- Confirm password -->
												<div class="mb-3">
													<label class="form-label"> Confirm new password</label>
													<div class="input-group">
														<input type="password" id="confirmPassword" class="form-control fakepassword" placeholder="Confirm new password">
														<span class="input-group-text p-0 bg-transparent">
															<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
														</span>
													</div>
												</div>

												<div class="text-end mt-3">
													<button type="submit" class="btn btn-primary mb-0">Change Password</button>
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
		</section>
		<!-- =======================
Content END -->

	</main>

	<!-- Footer START -->
	<?php include "includes/admin-dash-scripts.php"; ?>
	<!-- Footer END -->

	<script>
		document.addEventListener('DOMContentLoaded', () => {
			// Get the user details from localStorage
			const userDetails = localStorage.getItem("userDetails");
			if (userDetails) {
				const user = JSON.parse(userDetails);
				const venueName = user.venueName || "Guest"; // Fallback to "Guest" if venueName is not available

				// Update the welcome message
				const welcomeMessageElement = document.getElementById('welcome-message');
				welcomeMessageElement.innerHTML = `<span class="fw-light">Welcome Back, </span>${venueName}`;
			}
		});
		document.getElementById('venuePicturesInput').addEventListener('change', (e) => {
			const files = e.target.files;
			const venuePicturesPreview = document.getElementById('venuePicturesPreview');
			venuePicturesPreview.innerHTML = ''; // Clear previous previews

			Array.from(files).forEach(file => {
				const reader = new FileReader();
				reader.onload = function(event) {
					const img = document.createElement('img');
					img.src = event.target.result;
					img.className = 'avatar-img rounded-circle border border-white border-3 shadow';
					img.width = 100;
					img.height = 100;
					venuePicturesPreview.appendChild(img);
				};
				reader.readAsDataURL(file);
			});
		});

		const venueDetails = JSON.parse(localStorage.getItem("userDetails"));
		const venueId = venueDetails.id; // Replace with the actual venue ID
		document.addEventListener('DOMContentLoaded', async () => {
			try {
				const response = await fetch(`http://localhost:5000/api/venues/${venueId}`);
				if (!response.ok) {
					throw new Error('Network response was not ok ' + response.statusText);
				}
				const venue = await response.json();
				updateVenueDetails(venue);
			} catch (error) {
				console.error('There was a problem with the fetch operation:', error);
			}
		});

		function updateVenueDetails(venue) {
			document.getElementById('venueName').value = venue.venueName;
			document.getElementById('venueType').value = venue.venueType;
			document.getElementById('venueEmail').value = venue.email;
			document.getElementById('venueMobile').value = venue.phoneNumber;
			document.getElementById('venueLocation').value = venue.location;
			document.getElementById('venueWebsite').value = venue.websiteUrl;
			document.getElementById('venueLicense').value = venue.license ?? "";
			document.getElementById('venueKraPin').value = venue.kraPin ?? "";
			document.getElementById('venueServices').value = venue.facilities;
			document.getElementById('venueAdditionalServices').value = venue.additionalServices ?? "";
			document.getElementById('currentEmail').innerText = venue.email;
			document.getElementById('venuePrice').value = venue.price;

			const venuePictures = document.getElementById('venuePictures');
			// venue.pictures.forEach(picture => {
			// 	const img = document.createElement('img');
			// 	img.src = picture;
			// 	img.className = 'avatar-img rounded-circle border border-white border-3 shadow';
			// 	img.alt = '';
			// 	img.width = 100;
			// 	img.height = 100;
			// 	venuePictures.appendChild(img);
			// });
		}

		// Handle form submissions
		document.getElementById('saveChangesButton').addEventListener('click', async (e) => {
			e.preventDefault();
			const formData = new FormData();
			formData.append('name', document.getElementById('venueName').value);
			formData.append('type', document.getElementById('venueType').value);
			formData.append('email', document.getElementById('venueEmail').value);
			formData.append('mobile', document.getElementById('venueMobile').value);
			formData.append('location', document.getElementById('venueLocation').value);
			formData.append('website', document.getElementById('venueWebsite').value);
			formData.append('license', document.getElementById('venueLicense').value);
			formData.append('kraPin', document.getElementById('venueKraPin').value);
			formData.append('services', document.getElementById('venueServices').value);
			formData.append('additionalServices', document.getElementById('venueAdditionalServices').value);
			formData.append('price', document.getElementById('venuePrice').value);

			const picturesInput = document.getElementById('venuePicturesInput').files;
			Array.from(picturesInput).forEach(file => {
				formData.append('pictures', file);
			});

			try {
				const response = await fetch(`http://localhost:5000/api/venues/${venueId}`, {
					method: 'PUT',
					body: formData
				});
				if (!response.ok) {
					throw new Error('Network response was not ok ' + response.statusText);
				}
				const result = await response.json();
				console.log('Venue updated successfully!');
				window.location.reload();
			} catch (error) {
				console.error('There was a problem with the fetch operation:', error);
			}
		});


		document.getElementById('updateEmailForm').addEventListener('submit', async (e) => {
			e.preventDefault();
			const newEmail = document.getElementById('newEmail').value;
			try {
				const response = await fetch(`http://localhost:5000/api/venues/update-email/${venueId}`, {
					method: 'POST',
					headers: {
						'Content-Type': 'application/json'
					},
					body: JSON.stringify({
						newEmail
					})
				});
				if (!response.ok) {
					throw new Error('Network response was not ok ' + response.statusText);
				}
				const result = await response.json();
				console.log('Email updated successfully!');
				window.location.reload();
			} catch (error) {
				console.error('There was a problem with the fetch operation:', error);
			}
		});

		document.getElementById('updatePasswordForm').addEventListener('submit', async (e) => {
			e.preventDefault();
			const currentPassword = document.getElementById('currentPassword').value;
			const newPassword = document.getElementById('newPassword').value;
			const confirmPassword = document.getElementById('confirmPassword').value;
			if (newPassword !== confirmPassword) {
				alert('New passwords do not match');
				return;
			}
			try {
				const response = await fetch(`http://localhost:5000/api/venues/update-password`, {
					method: 'POST',
					headers: {
						'Content-Type': 'application/json'
					},
					body: JSON.stringify({
						currentPassword,
						newPassword
					})
				});
				if (!response.ok) {
					throw new Error('Network response was not ok ' + response.statusText);
				}
				const result = await response.json();
				console.log('Password updated successfully:', result);
			} catch (error) {
				console.error('There was a problem with the fetch operation:', error);
			}
		});
	</script>
</body>


</html>