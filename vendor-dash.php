<!DOCTYPE html>
<html lang="en">

<head>
	<title>Vendor Dash | Ultra Venues</title>

	<!-- Head Content -->
	<?php include "includes/head-content.php"; ?>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>




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

									<li class="nav-item"> <a class="nav-link active" href="vendor-dash.php"><i class="bi bi-house-door fa-fw me-1"></i>Dashboard</a> </li>

									<li class="nav-item"> <a class="nav-link" href="vendor-bookings.php"><i class="bi bi-bookmark-heart fa-fw me-1"></i>Bookings</a> </li>

									<li class="nav-item"> <a class="nav-link" href="vendor-notifications.php"><i class="bi bi-bell fa-fw me-1"></i>Activities</a> </li>

									<li class="nav-item"> <a class="nav-link" href="vendor-earnings.php"><i class="bi bi-graph-up-arrow fa-fw me-1"></i>Earnings</a> </li>

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
						<h1 class="fs-4 mb-0"><i class="bi bi-house-door fa-fw me-1"></i>Dashboard</h1>
					</div>
				</div>
				<!-- Title END -->

				<!-- Counter START -->
				<div class="row g-4" id="counterSection">
					<!-- Counter item -->
					<div class="col-sm-6 col-xl-3">
						<div class="card card-body border">
							<div class="d-flex align-items-center">
								<!-- Icon -->
								<div class="icon-xl bg-success rounded-3 text-white">
									<i class="bi bi-journals"></i>
								</div>
								<!-- Content -->
								<div class="ms-3">
									<h4 id="totalBookings">Loading...</h4>
									<span>Total Bookings</span>
								</div>
							</div>
						</div>
					</div>

					<!-- Counter item -->
					<div class="col-sm-6 col-xl-3">
						<div class="card card-body border">
							<div class="d-flex align-items-center">
								<!-- Icon -->
								<div class="icon-xl bg-info rounded-3 text-white">
									<i class="bi bi-graph-up-arrow"></i>
								</div>
								<!-- Content -->
								<div class="ms-3">
									<h4 id="totalEarnings">Loading...</h4>
									<span>Earnings</span>
								</div>
							</div>
						</div>
					</div>

					<!-- Counter item -->
					<div class="col-sm-6 col-xl-3">
						<div class="card card-body border">
							<div class="d-flex align-items-center">
								<!-- Icon -->
								<div class="icon-xl bg-warning rounded-3 text-white">
									<i class="bi bi-bar-chart-line-fill"></i>
								</div>
								<!-- Content -->
								<div class="ms-3">
									<h4 id="totalVisitors">Loading...</h4>
									<span>Visitors</span>
								</div>
							</div>
						</div>
					</div>

					<!-- Counter item -->
					<div class="col-sm-6 col-xl-3">
						<div class="card card-body border">
							<div class="d-flex align-items-center">
								<!-- Icon -->
								<div class="icon-xl bg-primary rounded-3 text-white">
									<i class="bi bi-star"></i>
								</div>
								<!-- Content -->
								<div class="ms-3">
									<h4 id="totalReviews">Loading...</h4>
									<span>Total Reviews</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Counter END -->

				<!-- Graph START -->
				<div class="row g-4" id="graphSection">
					<!-- Booking Chart START -->
					<div class="col-lg-7 col-xl-8">
						<!-- Chart START -->
						<div class="card border h-100">
							<!-- Card header -->
							<div class="card-header border-bottom">
								<h5 class="card-header-title">Booking stats</h5>
							</div>
							<!-- Card body -->
							<div class="card-body">
								<!-- Apex chart -->
								<div id="apexChartTrafficStats1" class="mt-2"></div>
							</div>
						</div>
						<!-- Chart END -->
					</div>
					<!-- Booking Chart END -->

					<!-- Booking graph START -->
					<div class="col-lg-4">
						<div class="card border h-100">
							<!-- Card header -->
							<div class="card-header border-bottom d-flex justify-content-between align-items-center">
								<h5 class="card-header-title">Event Categories</h5>
								<a href="#" class="btn btn-link p-0 mb-0">View all</a>
							</div>

							<!-- Card body START -->
							<div class="card-body p-3">
								<!-- Chart -->
								<div class="">
									<div class="d-flex justify-content-center" id="ChartTrafficViews1"></div>
								</div>

								<!-- Content -->
								<ul class="list-group list-group-borderless align-items-center mt-3" id="eventCategories">
									<!-- Event categories will be dynamically added here -->
								</ul>
							</div>
						</div>
					</div>
					<!-- Booking graph END -->
				</div>
				<!-- Graph END -->


				<!-- Booking table START -->
				<div class="row">
					<div class="col-12">
						<div class="card border rounded-3">
							<!-- Card header START -->
							<div class="card-header border-bottom">
								<div class="d-sm-flex justify-content-between align-items-center">
									<h5 class="mb-2 mb-sm-0">Upcoming Bookings</h5>
									<a href="#" class="btn btn-sm btn-primary mb-0">View All</a>
								</div>
							</div>
							<!-- Card header END -->

							<!-- Card body START -->
							<div class="card-body">
								<!-- Search and select START -->
								<div class="row g-3 align-items-center justify-content-between mb-3">
									<!-- Search -->
									<div class="col-md-8">
										<form class="rounded position-relative">
											<input class="form-control pe-5" type="search" placeholder="Search" aria-label="Search">
											<button class="btn border-0 px-3 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6"></i></button>
										</form>
									</div>

									<!-- Select option -->
									<div class="col-md-3">
										<!-- Short by filter -->
										<form>
											<select class="form-select js-choice" aria-label=".form-select-sm">
												<option value="">Sort by</option>
												<option>Free</option>
												<option>Newest</option>
												<option>Oldest</option>
											</select>
										</form>
									</div>
								</div>
								<!-- Search and select END -->

								<!-- Hotel room list START -->
								<div class="table-responsive border-0">
									<table class="table align-middle p-4 mb-0 table-hover table-shrink" id="upcomingBookingsTable">
										<!-- Table head -->
										<thead class="table-light">
											<tr>
												<th scope="col" class="border-0 rounded-start">#</th>
												<th scope="col" class="border-0">Name</th>
												<th scope="col" class="border-0">Type</th>
												<th scope="col" class="border-0">Date</th>
												<th scope="col" class="border-0">Status</th>
												<th scope="col" class="border-0">Payment</th>
												<th scope="col" class="border-0 rounded-end">Action</th>
											</tr>
										</thead>

										<!-- Table body START -->
										<tbody class="border-top-0" id="upcomingBookingsBody">
											<!-- Placeholder for upcoming bookings -->
										</tbody>
										<!-- Table body END -->
									</table>
								</div>
								<!-- Hotel room list END -->
							</div>
							<!-- Card body END -->

							<!-- Card footer START -->
							<div class="card-footer pt-0">
								<!-- Pagination and content -->
								<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
									<!-- Content -->
									<p class="mb-sm-0 text-center text-sm-start" id="bookingPagination">Loading...</p>
									<!-- Pagination -->
									<nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
										<ul class="pagination pagination-sm pagination-primary-soft mb-0" id="bookingPaginationList">
											<!-- Pagination items will be dynamically added here -->
										</ul>
									</nav>
								</div>
							</div>
							<!-- Card footer END -->
						</div>
					</div>
				</div>
				<!-- Booking table END -->

			</div>
		</section>
		<!-- =======================
Content END -->


	</main>

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
		// Function to fetch dashboard data for a venue
		async function fetchDashboardData() {
			try {
				// Retrieve user details from local storage
				const userDetails = JSON.parse(localStorage.getItem('userDetails'));
				if (!userDetails || !userDetails.email) {
					throw new Error('Venue email not found in user details in local storage');
				}

				// Extract venue email from user details
				const venueEmail = userDetails.email;

				const response = await fetch(`http://localhost:5000/api/vendor/dashboard/${venueEmail}`);
				if (!response.ok) {
					throw new Error('Failed to fetch data');
				}
				const data = await response.json();
				console.log(data);

				// Update total bookings
				document.getElementById('totalBookings').textContent = data.totalBookings || 0;

				// Update total earnings
				document.getElementById('totalEarnings').textContent = `Ksh. ${data.totalRevenue}` || 'Ksh. 0.00';

				// Update total visitors
				document.getElementById('totalVisitors').textContent = data.totalVisitors || 0;

				// Update total reviews
				document.getElementById('totalReviews').textContent = data.totalReviews || 0;

				// Update event categories list
				const eventCategories = document.getElementById('eventCategories');
				eventCategories.innerHTML = ''; // Clear existing categories
				const eventTypes = [];
				const eventCounts = [];
				if (data.eventCategories) {
					const colors = ['primary', 'success', 'warning', 'danger'];
					data.eventCategories.forEach((category, index) => {
						const listItem = document.createElement('li');
						listItem.className = "list-group-item";
						listItem.innerHTML = `<i class="text-${colors[index % colors.length]} fas fa-circle me-2"></i>${category.eventType} (${category.count})`;
						// eventCategories.appendChild(listItem);
						eventTypes.push(category.eventType);
						eventCounts.push(category.count);
					});
				}

				// Render event categories chart
				const eventCategoryChartOptions = {
					chart: {
						type: 'pie'
					},
					series: eventCounts,
					labels: eventTypes
				};

				const eventCategoryChart = new ApexCharts(document.getElementById('ChartTrafficViews1'), eventCategoryChartOptions);
				eventCategoryChart.render();

				// Update visitor counts by month chart
				const months = [];
				const visitors = [];
				data.visitorCountsByMonth.forEach((item) => {
					months.push(`${item.year}-${item.month}`);
					visitors.push(item.visitorCount);
				});

				// Update upcoming bookings table
				const upcomingBookingsBody = document.getElementById('upcomingBookingsBody');
				upcomingBookingsBody.innerHTML = '';
				if (data.upcomingBookings) {
					data.upcomingBookings.forEach((booking, index) => {
						const row = `
                    <tr>
                        <td><h6 class="mb-0">${index + 1}</h6></td>
                        <td><h6 class="mb-0"><a href="#">${booking.customerEmailAddress}</a></h6></td>
                        <td>${booking.eventType}</td>
                        <td>${formatDateRange(booking.startDate, booking.endDate)}</td>
                        <td><div class="badge text-bg-${booking.status === 'Upcoming' ? 'success' : booking.status === 'Done' ? 'info' : 'danger'}">${new Date(booking.endDate) < new Date() ? "Done" : new Date(booking.endDate) > new Date() ? "Upcoming" : "In progress"}</div></td>
                        <td><div class="badge bg-${booking.paymentStatus === 0 ? 'success' : 'orange'} bg-opacity-10 text-${booking.paymentStatus === 0 ? 'success' : 'orange'}">${booking.paymentStatus === 0 ? "Pending": "Paid"}</div></td>
                        <td><a href="#" class="btn btn-sm btn-light mb-0">View</a></td>
                    </tr>
                `;
						upcomingBookingsBody.insertAdjacentHTML('beforeend', row);
					});
				}

				const visitorChartOptions = {
					chart: {
						type: 'bar'
					},
					series: [{
						name: 'Visitors',
						data: visitors
					}],
					xaxis: {
						categories: months
					}
				};

				const visitorChart = new ApexCharts(document.getElementById('apexChartTrafficStats1'), visitorChartOptions);
				visitorChart.render();

			} catch (error) {
				console.error('Error fetching dashboard data:', error);
				// Handle error scenario (e.g., display error message to user)
			}
		}


		// Helper function to format date range
		function formatDateRange(startDate, endDate) {
			const start = new Date(startDate).toLocaleDateString();
			const end = new Date(endDate).toLocaleDateString();
			return `${start} - ${end}`;
		}

		// Example usage: Fetch dashboard data using venue email retrieved from user details in local storage
		fetchDashboardData();
	</script>
	<!-- Footer START -->
	<?php include "includes/admin-dash-scripts.php"; ?>
	<!-- Footer END -->
</body>


</html>