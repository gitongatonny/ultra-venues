<!DOCTYPE html>
<html lang="en">

<head>
	<title>Venue Earnings | Ultra Venues</title>

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

									<li class="nav-item"> <a class="nav-link active" href="vendor-earnings.php"><i class="bi bi-graph-up-arrow fa-fw me-1"></i>Earnings</a> </li>

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
				<h1 class="fs-4 mb-0"><i class="bi bi-graph-up-arrow fa-fw me-1"></i>Earnings</h1>
			</div>
		</div>	
		<!-- Title END -->

		<!-- Counter START -->
		<div class="row g-4">
			<!-- Sales this month -->
			<div class="col-md-6 col-lg-3">
				<div class="card card-body border p-4 h-100">
					<h6 class="mb-0">Sales this month</h6>
					<h3 class="mb-2 mt-2" id="salesThisMonth">0</h3>
					<a href="#" class="mt-auto">View transaction</a>
				</div>
			</div>

			<!-- Total Earnings -->
			<div class="col-md-6 col-lg-3">
				<div class="card card-body border p-4 h-100">
					<h6>Total Earnings
						<a tabindex="0" class="h6 mb-0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="After US royalty withholding tax">
							<i class="bi bi-info-circle-fill small"></i>
						</a>
					</h6>
					<h3 id="totalEarnings">0</h3>
					<p class="mb-0 mt-auto">Since registration</p>
				</div>
			</div>
		</div>
		<!-- Counter END -->

		<!-- Chart START -->
		<div class="row">
			<div class="col-12">
				<div class="card card-body border overflow-hidden">
					<div class="row g-4">
						<!-- Current Month Revenue -->
						<div class="col-sm-6 col-md-4">
							<span class="badge text-bg-dark">Current Month</span>
							<h4 class="text-primary my-2" id="currentMonthRevenue">0</h4>
							<p class="mb-0"><span id="currentMonthChange" class="text-success me-1">0.00%<i class="bi bi-arrow-up"></i></span>vs Last Month</p>
						</div>

						<!-- Last Month Revenue -->
						<div class="col-sm-6 col-md-4">
							<span class="badge text-bg-dark">Last Month</span>
							<h4 class="my-2" id="lastMonthRevenue">0</h4>
							<p class="mb-0"><span id="lastMonthChange" class="text-danger me-1">0.00%<i class="bi bi-arrow-down"></i></span>vs. Prev Month</p>
						</div>
					</div>

					<!-- Apex chart -->
					<div id=""></div>
				</div>
			</div>
		</div>


		<!-- Invoice history START -->
		<div class="row">
			<div class="col-12">
				<div class="card border rounded-3">
					<!-- Card header START -->
					<div class="card-header border-bottom">
						<h5 class="card-header-title">Invoice History</h5>
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
										<option>Newest</option>
										<option>Oldest</option>
									</select>
								</form>
							</div>
						</div>
						<!-- Search and select END -->

						<!-- Invoice list START -->
						<div class="table-responsive border-0">
							<table class="table align-middle p-4 mb-0 table-hover table-shrink">
								<!-- Table head -->
								<thead class="table-light">
									<tr>
										<th scope="col" class="border-0 rounded-start">Invoice ID</th>
										<th scope="col" class="border-0">Date</th>
										<th scope="col" class="border-0">Amount</th>
										<th scope="col" class="border-0">Status</th>
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<tbody class="border-top-0" id="invoiceHistoryBody">
									<!-- Dynamic content will be inserted here -->
								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- invoice list END -->
					</div>
					<!-- Card body END -->

					<!-- Card footer START -->
					<div class="card-footer pt-0">
						<!-- Pagination and content -->
						<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
							<!-- Content -->
							<p class="mb-sm-0 text-center text-sm-start">Showing <span id="invoiceCount">0</span> entries</p>
							<!-- Pagination -->
							<nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
								<ul class="pagination pagination-sm pagination-primary-soft mb-0">
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item disabled"><a class="page-link" href="#">..</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- Card footer END -->
				</div>
			</div>
		</div>
		<!-- Invoice history END -->
		</div>
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
		document.addEventListener('DOMContentLoaded', async () => {
			let email = localStorage.getItem('userDetails');
			email = JSON.parse(email).email;
			if (!email) {
				console.error('No email found in localStorage');
				return;
			}

			try {
				const response = await fetch(`http://localhost:5000/api/vendor/transactions/${email}`);
				if (!response.ok) {
					throw new Error('Network response was not ok ' + response.statusText);
				}
				const data = await response.json();
				updateDashboard(data);
			} catch (error) {
				console.error('There was a problem with the fetch operation:', error);
			}
		});

		function updateDashboard(data) {
			// Update Sales this month
			const salesThisMonth = data.currentMonthRevenue || 0;
			document.getElementById('salesThisMonth').innerText = formatCurrency(salesThisMonth);

			// Update Total Earnings
			const totalEarnings = data.totalRevenue || 0;
			document.getElementById('totalEarnings').innerText = formatCurrency(totalEarnings);

			// Update Current Month and Last Month Revenue
			const currentMonthRevenue = data.currentMonthRevenue || 0;
			const lastMonthRevenue = data.previousMonthRevenue || 0;
			document.getElementById('currentMonthRevenue').innerText = formatCurrency(currentMonthRevenue);
			document.getElementById('lastMonthRevenue').innerText = formatCurrency(lastMonthRevenue);

			// Calculate percentage change
			const percentageChange = ((currentMonthRevenue - lastMonthRevenue) / (lastMonthRevenue || 1)) * 100;
			const currentMonthChange = document.getElementById('currentMonthChange');
			const lastMonthChange = document.getElementById('lastMonthChange');
			currentMonthChange.innerText = `${percentageChange.toFixed(2)}%`;
			currentMonthChange.className = `text-${percentageChange >= 0 ? 'success' : 'danger'} me-1`;
			currentMonthChange.innerHTML += `<i class="bi bi-arrow-${percentageChange >= 0 ? 'up' : 'down'}"></i>`;
			lastMonthChange.innerText = `${(-percentageChange).toFixed(2)}%`;
			lastMonthChange.className = `text-${percentageChange < 0 ? 'success' : 'danger'} me-1`;
			lastMonthChange.innerHTML += `<i class="bi bi-arrow-${percentageChange < 0 ? 'up' : 'down'}"></i>`;

			// Update Invoice History
			const tableBody = document.querySelector('.table-responsive tbody');
			tableBody.innerHTML = ''; // Clear any existing rows
			data.transactions.forEach(transaction => {
				const tr = document.createElement('tr');
				tr.innerHTML = `
            <td> #${transaction.id} </td>
            <td> ${new Date(transaction.data).toLocaleDateString()}</td>
            <td>${formatCurrency(transaction.amount)}
                <a href="#" class="h6 mb-0" role="button" id="dropdownShare${transaction.id}" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-info-circle-fill"></i>
                </a>
                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare${transaction.id}">
                    <li>
                        <div class="d-flex justify-content-between">
                            <span class="small">Cut</span>
                            <span class="h6 mb-0 small">2,000</span>
                        </div>
                        <hr class="my-1"> <!-- Divider -->
                    </li>
                    <li>
                        <div class="d-flex justify-content-between">
                            <span class="me-4 small">Tax</span>
                            <span class="text-danger small">200</span>
                        </div>
                        <hr class="my-1"> <!-- Divider -->
                    </li>
                    <li>
                        <div class="d-flex justify-content-between">
                            <span class="small">Bal</span>
                            <span class="h6 mb-0 small">${formatCurrency(transaction.amount)}</span>
                        </div>
                    </li>
                </ul>
            </td>
            <td> <div class="badge ${transaction.status === 1 ? 'bg-success' : 'bg-danger'} bg-opacity-10 text-${transaction.status === 1 ? 'success' : 'danger'}">${transaction.status === 1 ? 'Paid' : 'Unpaid'}</div> </td>
            <td> <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download"><i class="bi bi-cloud-download"></i></a> </td>
        `;
				tableBody.appendChild(tr);
			});
		}

		function formatCurrency(amount) {
			return amount.toLocaleString('en-US', {
				style: 'currency',
				currency: 'Ksh'
			});
		}
	</script>

	<script>
		document.addEventListener('DOMContentLoaded', () => {
			const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
			tooltipTriggerList.map(function(tooltipTriggerEl) {
				return new bootstrap.Tooltip(tooltipTriggerEl)
			})

			const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
			popoverTriggerList.map(function(popoverTriggerEl) {
				return new bootstrap.Popover(popoverTriggerEl)
			})
		});
	</script>


</body>


</html>