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
        Main Title START -->
        <section class="py-0 pt-sm-5">
            <div class="container position-relative">
                <!-- Title and button START -->
                <div class="row mb-3">
                    <div class="col-12">
                        <!-- Meta -->
                        <div class="d-lg-flex justify-content-lg-between mb-1">
                            <!-- Title -->
                            <div class="mb-2 mb-lg-0">
                                <h1 class="fs-2">Nyeri </h1>
                                <!-- Location -->
                                <p class="fw-bold mb-0"><i class="bi bi-geo-alt me-2"></i>Mt. Kenya Region
                                    <a href="#" class="ms-2 text-decoration-underline" data-bs-toggle="modal" data-bs-target="#mapmodal">
                                        <i class="bi bi-eye-fill me-1"></i>View On Map
                                    </a>
                                </p>
                            </div>

                            <!-- Buttons -->
                            <ul class="list-inline text-end">
                                <!-- Heart icon -->
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-sm btn-light px-2"><i class="fa-solid fa-fw fa-heart"></i></a>
                                </li>
                                <!-- Share icon -->
                                <li class="list-inline-item dropdown">
                                    <!-- Share button -->
                                    <a href="#" class="btn btn-sm btn-light px-2" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-fw fa-share-alt"></i>
                                    </a>
                                    <!-- dropdown button -->
                                    <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
                                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Title and button END -->


            </div>
        </section>
        <!-- =======================
        Main Title END -->

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

        <!-- =======================
        About Location START -->
        <section class="py-0 py-lg-7">
            <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12">
                <h2>What Nyeri has to Offer.</h2>
                <p class="mb-0">Discover the perfect venue for your special event in Nyeri. Whether you're planning a wedding, graduation, or a corporate meeting, we have a wide range of venues to suit your needs.</p>
                </div>
            </div>

            <!-- Counters and features START -->
            <div class="row g-4">
                <!-- Counter -->
                <div class="col-xl-4">
                <div class="card card-body bg-primary bg-opacity-10 vstack gap-4 justify-content-center h-100 p-4">
                    <!-- Counter item -->
                    <div class="d-flex justify-content-between align-items-center">
                    <h3 class="purecounter text-primary mb-0" data-purecounter-start="0" data-purecounter-end="50"	data-purecounter-delay="200">0</h3>
                    <h6 class="fw-normal mb-0">Venues Available</h6>
                    </div>

                    <!-- Counter item -->
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex justify-content-center me-3">
                        <h3 class="purecounter text-primary mb-0" data-purecounter-start="0" data-purecounter-end="2000"	data-purecounter-delay="300">0</h3>
                        <span class="h3 text-primary mb-0">+</span>
                    </div>
                    <h6 class="fw-normal mb-0">Happy Customers</h6>
                    </div>

                    <!-- Counter item -->
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex justify-content-center me-3">
                        <h3 class="purecounter text-primary mb-0" data-purecounter-start="0" data-purecounter-end="20"	data-purecounter-delay="300">0</h3>
                        <span class="h3 text-primary mb-0">+</span>
                    </div>
                    <h6 class="fw-normal mb-0">Years of Experience</h6>
                    </div>

                </div>
                </div>


                <!-- Features -->
                <div class="col-md-6 col-xl-4">
                <ul class="list-group list-group-borderless">
                    <li class="list-group-item py-3">
                    <h6 class="mb-0 fw-normal">
                        <i class="bi bi-cash-coin fa-fw text-info me-2"></i>Competitive Pricing
                    </h6>
                    <br>
                    </li>

                    <li class="list-group-item py-3">
                    <h6 class="mb-0 fw-normal">
                        <i class="bi bi-credit-card-2-back fa-fw text-warning me-2"></i>Online Payment Options
                    </h6>
                    <br>
                    </li>
                    <br>

                    <li class="list-group-item py-3">
                    <h6 class="mb-0 fw-normal">
                        <i class="bi bi-tools fa-fw text-primary me-2"></i>Excellent Event Services
                    </h6>
                    <br>
                    </li>

                </ul>

                </div>

                <!-- Features Row 2 -->
                <div class="col-md-6 col-xl-4">
                <ul class="list-group list-group-borderless">

                    <li class="list-group-item py-3">
                    <h6 class="mb-0 fw-normal">
                        <i class="bi bi-tree fa-fw text-success me-2"></i>Beautiful Sceneries
                    </h6>
                    <br>
                    </li>

                    <li class="list-group-item py-3">
                    <h6 class="mb-0 fw-normal">
                        <i class="bi bi-people fa-fw text-primary me-2"></i>Professional Staff
                    </h6>
                    <br>
                    </li>

                    <li class="list-group-item pt-3 pb-0">
                    <h6 class="mb-0 fw-normal">
                        <i class="bi bi-check-circle fa-fw text-success me-2"></i>Excellent Customer Service
                    </h6>
                    <br>
                    </li>
                </ul>

                </div>

            </div>
            <!-- Counters and features END -->
            </div>
        </section>
        <!-- =======================
        About Location END -->


        <!-- =======================
        Recommended Venues START -->
        <section>
            <div class="container">

                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="mb-0">Top Recommendations </h2>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Hotel item -->
                    <div class="col-sm-6 col-xl-3">
                        <!-- Card START -->
                        <div class="card card-img-scale overflow-hidden bg-transparent">
                            <!-- Image and overlay -->
                            <div class="card-img-scale-wrapper rounded-3">
                                <!-- Image -->
                                <img src="assets/images/mt-kenya.jpg" class="card-img" alt="hotel image">
                                <!-- Badge -->
                                <div class="position-absolute bottom-0 start-0 p-3">
                                    <div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="bi bi-geo-alt me-2"></i>Kiganjo</div>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-2">
                                <!-- Title -->
                                <h5 class="card-title"><a href="venue-details.html" class="stretched-link">Green Hills Hotel</a></h5>
                                <!-- Price and rating -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-success mb-0">Ksh. 14,500 </h6>
                                    <h6 class="mb-0">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>

                    <!-- Hotel item -->
                    <div class="col-sm-6 col-xl-3">
                        <!-- Card START -->
                        <div class="card card-img-scale overflow-hidden bg-transparent">
                            <!-- Image and overlay -->
                            <div class="card-img-scale-wrapper rounded-3">
                                <!-- Image -->
                                <img src="assets/images/mt-kenya.jpg" class="card-img" alt="hotel image">
                                <!-- Badge -->
                                <div class="position-absolute bottom-0 start-0 p-3">
                                    <div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="bi bi-geo-alt me-2"></i>Nyeri Town</div>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-2">
                                <!-- Title -->
                                <h5 class="card-title"><a href="venue-details.html" class="stretched-link">White Rhino Hotel</a></h5>
                                <!-- Price and rating -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-success mb-0">Ksh. 19,999 </h6>
                                    <h6 class="mb-0">4.8<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>

                    <!-- Hotel item -->
                    <div class="col-sm-6 col-xl-3">
                        <!-- Card START -->
                        <div class="card card-img-scale overflow-hidden bg-transparent">
                            <!-- Image and overlay -->
                            <div class="card-img-scale-wrapper rounded-3">
                                <!-- Image -->
                                <img src="assets/images/mt-kenya.jpg" class="card-img" alt="hotel image">
                                <!-- Badge -->
                                <div class="position-absolute bottom-0 start-0 p-3">
                                    <div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="bi bi-geo-alt me-2"></i>Chaka</div>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-2">
                                <!-- Title -->
                                <h5 class="card-title"><a href="venue-details.html" class="stretched-link">Bulls Eye Resort</a></h5>
                                <!-- Price and rating -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-success mb-0">Ksh. 15,000 </h6>
                                    <h6 class="mb-0">4.6<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>

                    <!-- Hotel item -->
                    <div class="col-sm-6 col-xl-3">
                        <!-- Card START -->
                        <div class="card card-img-scale overflow-hidden bg-transparent">
                            <!-- Image and overlay -->
                            <div class="card-img-scale-wrapper rounded-3">
                                <!-- Image -->
                                <img src="assets/images/mt-kenya.jpg" class="card-img" alt="hotel image">
                                <!-- Badge -->
                                <div class="position-absolute bottom-0 start-0 p-3">
                                    <div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="bi bi-geo-alt me-2"></i>Mweiga</div>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-2">
                                <!-- Title -->
                                <h5 class="card-title"><a href="venue-details.html" class="stretched-link">Helios Gardens</a></h5>
                                <!-- Price and rating -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-success mb-0">Ksh. 12,999 </h6>
                                    <h6 class="mb-0">4.8<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
        Recommended Venues END -->

        <!-- =======================
        Action box START -->
        <section>
            <div class="container">
                <div class="row g-4">
                    <div class="col-12">
                        <!-- Action box START -->
                        <div class="card card-body shadow p-4">
                            <div class="row g-4 justify-content-between align-items-center">
                                <!-- Image -->
                                <div class="col-sm-3 col-lg-2">
                                    <img src="assets/images/Locations/location.svg" alt="" style="height: 80px; width: 80px;">
                                </div>

                                <!-- Title and content -->
                                <div class="col-sm-9 col-lg-6 col-xl-7">
                                    <h4>Get the Best Venues with Us.</h4>
                                    <p class="mb-0">Didn't find a nice pick in the recommendations?</p>
                                </div>

                                <!-- Button -->
                                <div class="col-lg-3 col-xxl-2 d-grid">
                                    <a href="venues.php" class="btn btn-primary mb-0">View All Venues</a>
                                </div>
                            </div>
                        </div>
                        <!-- Action box END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Action box END -->

        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->

        <!-- Map modal START -->
        <div class="modal fade" id="mapmodal" tabindex="-1" aria-labelledby="mapmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <!-- Title -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="mapmodalLabel">View the Location Area</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Map -->
                    <div class="modal-body p-0">
                        <iframe class="w-100" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31917.605763308555!2d36.932101652261515!3d-0.4399118570035528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18285dfed09e0ebf%3A0x829716f702f65e9e!2sNyeri!5e0!3m2!1sen!2ske!4v1712362123253!5m2!1sen!2ske"  style="border:0;" aria-hidden="false" tabindex="0"></iframe>	
                    </div>
                    <!-- Button -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary mb-0"><i class="bi fa-fw bi-pin-map-fill me-2"></i>View In Google Map</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map modal END -->

    </body>


</html>