<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Location Detail | Ultra Venues</title>

        <!-- Head Content -->
        <?php include "includes/head-content.php";?>



    </head>

    <body>
        <!-- Header START -->
        <?php include "includes/header-main.php";?>
        <!-- Header END -->

        <main>




<!-- =======================
Image gallery START -->
<section class="card-grid pt-0">
	<div class="container">
		<div class="row g-2">
			<!-- Image -->
			<div class="col-md-6">
				<a data-glightbox data-gallery="gallery" href="assets/images/mt-kenya.jpg">
					<div class="card card-grid-lg card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(assets/images/mt-kenya.jpg); background-position: center left; background-size: cover;">
						<!-- Card hover element -->
						<div class="hover-element position-absolute w-100 h-100">
							<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
						</div>
					</div>
				</a>
			</div>

			<div class="col-md-6">
				<!-- Card item START -->
				<div class="row g-2"> 
					<!-- Image -->
					<div class="col-12">
						<a data-glightbox data-gallery="gallery" href="assets/images/Locations/Nyeri.jpg">
							<div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(assets/images/Locations/Nyeri.jpg); background-position: center left; background-size: cover;">
								<!-- Card hover element -->
								<div class="hover-element position-absolute w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>	
					</div>

					<!-- Image -->
					<div class="col-md-6">
						<a data-glightbox data-gallery="gallery" href="assets/images/mt-kenya.jpg">
							<div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(assets/images/mt-kenya.jpg); background-position: center left; background-size: cover;">
								<!-- Card hover element -->
								<div class="hover-element position-absolute w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>	
					</div>

					<!-- Images -->
					<div class="col-md-6">
						<div class="card card-grid-sm overflow-hidden" style="background-image:url(assets/images/Locations/Nyeri.jpg); background-position: center left; background-size: cover;">
							<!-- Background overlay -->
							<div class="bg-overlay bg-dark opacity-7"></div>

							<!-- Popup Images -->
							<a data-glightbox="" data-gallery="gallery" href="assets/images/mt-kenya.jpg" class="stretched-link z-index-9"></a>
							<a data-glightbox="" data-gallery="gallery" href="assets/images/Locations/Nyeri.jpg"></a>
							<a data-glightbox="" data-gallery="gallery" href="assets/images/mt-kenya.jpg"></a>

							<!-- Overlay text -->
							<div class="card-img-overlay d-flex h-100 w-100">
								<h6 class="card-title m-auto fw-light text-decoration-underline"><a href="#" class="text-white">View all</a></h6>
							</div>
						</div>
					</div>
				</div>
				<!-- Card item END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Image gallery END -->

        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>