<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Vendor Dash | Ultra Venues</title>

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

	

        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>