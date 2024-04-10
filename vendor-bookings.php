<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Vendor Bookings | Ultra Venues</title>

        <!-- Head Content -->
        <?php include "includes/head-content.php";?>



    </head>

    <body>
        <!-- Header START -->
        <?php include "includes/header-main.php";?>
        <!-- Header END -->

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
				<a href="add-listing.html" class="btn btn-sm btn-primary-soft mb-0 ms-auto flex-shrink-0"><i class="bi bi-plus-lg fa-fw me-2"></i>Edit Listing</a>
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

							<li class="nav-item"> <a class="nav-link" href="#"><i class="bi bi-house-door fa-fw me-1"></i>Dashboard</a>	</li>

							<li class="nav-item"> <a class="nav-link active" href="#"><i class="bi bi-bookmark-heart fa-fw me-1"></i>Bookings</a> </li>

							<li class="nav-item"> <a class="nav-link" href="#"><i class="bi bi-bell fa-fw me-1"></i>Activities</a> </li>
		
							<li class="nav-item"> <a class="nav-link" href="#"><i class="bi bi-graph-up-arrow fa-fw me-1"></i>Earnings</a>	</li>

							<li class="nav-item"> <a class="nav-link" href="#"><i class="bi bi-star fa-fw me-1"></i>Reviews</a></li>
							
							<li> <a class="nav-link" href="#"><i class="bi bi-gear fa-fw me-1"></i>Settings</a></li>
		
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
				<h1 class="fs-4 mb-0"><i class="bi bi-bookmark-heart fa-fw me-1"></i>Bookings</h1>
			</div>
		</div>
		<!-- Title END -->

		<!-- Booking table START -->
		<div class="row">
			<div class="col-12">
				<div class="card border">
					<!-- Card header START -->
					<div class="card-header border-bottom">
						<h5 class="card-header-title">Clients<span class="badge bg-primary bg-opacity-10 text-primary ms-2">3</span></h5>
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

						<!-- Hotel room list START -->
						<div class="table-responsive border-0">
							<table class="table align-middle p-4 mb-0 table-hover table-shrink">
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
								<tbody class="border-top-0">
									<!-- Table item -->
									<tr>
										<td> <h6 class="mb-0">01</h6> </td>
										<td> <h6 class="mb-0"><a href="#">Finish Us Junior</a></h6> </td>
										<td> Wedding </td>
										<td> <h6 class="mb-0 fw-light">April 22 - 23</h6> </td>
										<td> <div class="badge text-bg-success">Upcoming</div> </td>
										<td> <div class="badge bg-success bg-opacity-10 text-success">Paid</div> </td> 
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>

									<!-- Table item -->
									<tr>
										<td> <h6 class="mb-0">02</h6> </td>
										<td> <h6 class="mb-0"><a href="#">Kingslay Conman</a></h6> </td>
										<td> Corporate Seminar </td>
										<td> <h6 class="mb-0 fw-light">Jan 04 - 05</h6> </td>
										<td> <div class="badge text-bg-success">Done</div> </td>
										<td> <div class="badge bg-orange bg-opacity-10 text-orange">Paid</div> </td>
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>

									<!-- Table item -->
									<tr>
										<td> <h6 class="mb-0">03</h6> </td>
										<td> <h6 class="mb-0"><a href="#">Post Maloan</a></h6> </td>
										<td> Birthday Party </td>
										<td> <h6 class="mb-0 fw-light">Feb 24 - 24</h6> </td>
										<td> <div class="badge text-bg-info">Done</div> </td>
										<td> <div class="badge bg-info bg-opacity-10 text-info">Paid</div> </td>
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>

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
							<p class="mb-sm-0 text-center text-sm-start">Showing 1 to 1 of 3 entries</p>
							<!-- Pagination -->
							<nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
								<ul class="pagination pagination-sm pagination-primary-soft mb-0">
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active"><a class="page-link" href="#">2</a></li>
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
		<!-- Booking table END -->
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