<!DOCTYPE html>
<html lang="en">

    <head>
        <title>My Wishlist | Ultra Venues</title>

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
        <?php $activeTab = 'wishlist'; ?>
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

				<!-- Wishlist START -->
				<div class="card border bg-transparent">
					<!-- Card header -->
					<div class="card-header bg-transparent border-bottom">
						<h4 class="card-header-title">My Wishlist</h4>
					</div>

					<!-- Card body START -->
					<div class="card-body vstack gap-4">
						<!-- Select and button -->
						<form class="d-flex justify-content-between">
							<div class="col-6 col-xl-3">
								<select class="form-select form-select-sm js-choice border-0">
									<option value="">Sort by</option>
									<option>Rating</option>
									<option>Price</option>
									<option>Recent</option>
								</select>
							</div>
							<!-- Button -->
							<button class="btn btn-danger-soft mb-0"><i class="fas fa-trash me-2"></i>Remove all</button>
						</form>

						<!-- Wishlist item START -->
						<div class="card shadow p-2">
							<div class="row g-0">
								<!-- Card img -->
								<div class="col-md-3">
									<img src="assets/images/mt-kenya.jpg" class="card-img rounded-2" alt="Card image">
								</div>
	
								<!-- Card body -->
								<div class="col-md-9">
									<div class="card-body py-md-2 d-flex flex-column h-100">
	
										<!-- Rating and buttons -->
										<div class="d-flex justify-content-between align-items-center">
											<ul class="list-inline small mb-0">
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
											</ul>
	
											<ul class="list-inline mb-0">
												<!-- Heart icon -->
												<li class="list-inline-item">
													<a href="#" class="btn btn-sm btn-round btn-danger mb-0"><i class="fa-solid fa-fw fa-heart"></i></a>
												</li>
												<!-- Share icon -->
												<li class="list-inline-item dropdown">
													<!-- Share button -->
													<a href="#" class="btn btn-sm btn-round btn-light mb-0" role="button" id="dropdownShare2" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-solid fa-fw fa-share-alt"></i>
													</a>
													<!-- dropdown button -->
													<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare2">
														<li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
													</ul>
												</li>
											</ul>
										</div>
	
										<!-- Title -->
										<h5 class="card-title mb-1"><a href="hotel-detail.html">FK Resort</a></h5>
										<small><i class="bi bi-geo-alt me-2"></i>Nyeri - Nairobi Highway</small>
										
										<!-- Price and Button -->
										<div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
											<!-- Button -->
											<div class="d-flex align-items-center">
												<h5 class="fw-bold mb-0 me-1">Ksh. 20,000</h5>
												<span class="mb-0 me-2">/day</span>
											</div>
											<!-- Price -->
											<div class="mt-3 mt-sm-0">
												<a href="hotel-detail.html" class="btn btn-sm btn-dark w-100 mb-0">View Venue</a>    
											</div>                  
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Wishlist item END -->

						<!-- Wishlist item START -->
						<div class="card shadow p-2">
							<div class="row g-0">
								<!-- Card img -->
								<div class="col-md-3">
									<img src="assets/images/mt-kenya.jpg" class="card-img rounded-2" alt="Card image">
								</div>
	
								<!-- Card body -->
								<div class="col-md-9">
									<div class="card-body d-flex flex-column h-100 py-md-2">
	
										<!-- Rating and buttons -->
										<div class="d-flex justify-content-between align-items-center">
											<ul class="list-inline small mb-0">
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
											</ul>
	
											<ul class="list-inline mb-0">
												<!-- Heart icon -->
												<li class="list-inline-item">
													<a href="#" class="btn btn-sm btn-round btn-danger mb-0"><i class="fa-solid fa-fw fa-heart"></i></a>
												</li>
												<!-- Share icon -->
												<li class="list-inline-item dropdown">
													<a href="#" class="btn btn-sm btn-round btn-light mb-0" role="button" id="dropdownShare3" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-solid fa-fw fa-share-alt"></i>
													</a>
													<!-- dropdown button -->
													<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare3">
														<li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
													</ul>
												</li>
											</ul>
										</div>
	
										<!-- Title -->
										<h5 class="card-title mb-1"><a href="hotel-detail.html">Legacy Gardens</a></h5>
										<small><i class="bi bi-geo-alt me-2"></i>Mweiga, Nyeri</small>
										
										<!-- Price and Button -->
										<div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
											<!-- Button -->
											<div class="d-flex align-items-center">
												<h5 class="fw-bold mb-0 me-1">Ksh. 9,500</h5>
												<span class="mb-0 me-2">/day</span>
											</div>
											<!-- Price -->
											<div class="mt-3 mt-sm-0">
												<a href="hotel-detail.html" class="btn btn-sm btn-dark w-100 mb-0">View Venue</a>    
											</div>                  
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Wishlist item END -->

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