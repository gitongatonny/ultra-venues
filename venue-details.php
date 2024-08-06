<?php
// Get the venue ID from the URL
$venue_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($venue_id == 0) {
    echo "Invalid venue ID.";
    exit;
}

// URL of the Flask API endpoint to get recommendations based on the venue ID

// Parameters for the API
$params = [
    'id' => $venue_id,
    'n' => 2,
];

// URL of the Flask API endpoint
$api_url = 'http://127.0.0.1:5000/recommend?' . http_build_query($params);

// Initialize a cURL session
$curl = curl_init($api_url);

// Set cURL options
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FAILONERROR, true); // Fail on HTTP error

// Execute the cURL request and get the response
$response = curl_exec($curl);

// Check for cURL errors
if ($response === false) {
    $error = curl_error($curl);
    echo "cURL Error: $error";
    curl_close($curl);
    exit;
}

// Close the cURL session
curl_close($curl);

// Decode the JSON response
$venues = json_decode($response, true);

// Check for JSON decoding errors
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "JSON Error: " . json_last_error_msg();
    exit;
}

// Debugging: Output the raw response and decoded array
// echo "<pre>";
// echo "API Response:\n";
// print_r($response);
// echo "\nDecoded Venues:\n";
// print_r($venues);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Venue Details | Ultra Venues</title>

    <!-- Head Content -->
    <?php include "includes/head-content.php"; ?>



</head>

<body>
    <!-- Header START -->
    <?php include "includes/header-main.php"; ?>
    <!-- Header END -->

    <main>

        <!-- =======================
        Main banner START -->
        <section class="py-0">
            <div class="container-fluid px-0">
                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur">
                    <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-gutter="0" data-edge="0" data-dots="false" data-items="3" data-items-md="2" data-items-xs="1">
                        <!-- Slider item -->
                        <div>
                            <a class="w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/mt-kenya.jpg">
                                <div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/mt-kenya.jpg" class="" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item -->
                        <div>
                            <a class="w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/Locations/Nyeri.jpg">
                                <div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Locations/Nyeri.jpg" class="" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item -->
                        <div>
                            <a class="w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/mt-kenya.jpg">
                                <div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/mt-kenya.jpg" class="" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item -->
                        <div>
                            <a class="w-100 h-100" data-glightbox data-gallery="gallery" href="aassets/images/Locations/Nyeri.jpg">
                                <div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Locations/Nyeri.jpg" class="" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slider START -->
            </div>
        </section>
        <!-- =======================
        Main banner END -->


        <!-- =======================
Title and tabs START -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-light p-0 pb-0">
                            <!-- Card body -->
                            <div class="card-body d-flex justify-content-between flex-wrap">
                                <!-- Title and badge -->
                                <div>
                                    <!-- Badge -->
                                    <div class="badge text-bg-dark"><i id="venueType" class="fa-solid fa-spa fa-fw text-warning"></i></div>
                                    <div class="badge text-bg-dark"><i id="venueLocation" class="bi bi-scissors fa-fw text-warning"></i></div>
                                    <div class="badge text-bg-dark"><i id="venueRating" class="fas fa-star fa-fw text-warning"></i></div>

                                    <!-- Title -->
                                    <h1 class="h3 mt-2 mb-1" id="venueName">Green Hills Hotel</h1>
                                    <p class="mb-2 mb-sm-0"><i class="bi bi-geo-alt me-1 text-primary" id="venueAddress"></i></p></p>
                                </div>
                                <!-- Buttons -->
                                <ul class="list-inline mb-0">
                                    <!-- wishlist -->
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-sm btn-white px-2"><i class="fa-solid fa-fw fa-heart"></i></a>
                                    </li>
                                    <!-- Share -->
                                    <li class="list-inline-item dropdown">
                                        <!-- Share button -->
                                        <a href="#" class="btn btn-sm btn-white px-2" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-fw fa-share-alt"></i>
                                        </a>
                                        <!-- dropdown button -->
                                        <ul class="dropdown-menu min-w-auto shadow rounded" aria-labelledby="dropdownShare">
                                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                        </ul>
                                    </li>
                                    <!-- Report -->
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-sm btn-white px-2"><i class="bi bi-exclamation-triangle-fill fa-fw"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent border-top py-0">
                                <ul class="nav nav-tabs nav-bottom-line nav-responsive border-0" role="tablist">
                                    <li class="nav-item"> <a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1">About</a> </li>
                                    <li class="nav-item"> <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3">Services</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Title and tabs END -->

        <!-- =======================
Content START -->
        <section class="pt-0">
            <div class="container">
                <!-- Tabs contents START -->
                <div class="tab-content mb-0" id="tour-pills-tabContent">

                    <!-- About Tab START -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="row g-4 g-lg-5">
                            <!-- Left side START -->
                            <div class="col-lg-7 col-xl-8">
                                <!-- Card START -->
                                <div class="card bg-transparent mb-4">
                                    <!-- Card header -->
                                    <div class="card-header bg-transparent border-bottom px-0 pt-0">
                                        <h4 class="mb-0">Description</h4>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body px-0 pb-0">
                                        <p id="venue-description" class="mb-3"></p>
                                        <p id="venue-additional-description" class="mb-0"></p>
                                    </div>
                                </div>
                                <!-- Card END -->

                                <!-- Card START -->
                                <div class="card bg-transparent">
                                    <!-- Card header -->
                                    <div class="card-header bg-transparent border-bottom px-0">
                                        <h4 class="mb-0">Image Gallery</h4>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body px-0 pb-0">
                                        <div id="image-gallery" class="row g-4">
                                            <!-- Images will be populated here -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Card END -->
                            </div>
                            <!-- Left side END -->

                            <!-- Right side START -->
                            <div class="col-lg-5 col-xl-4">
                                <!-- Book now item START -->
                                <div class="col-md-6 col-xl-12">
                                    <div class="card card-body border bg-transparent">
                                        <!-- Title -->
                                        <div class="hstack gap-2 mb-1">
                                            <h3 id="venue-price" class="card-title mb-0"></h3>
                                            <span class="fs-5">/day</span>
                                        </div>

                                        <div class="d-flex justify-content-between mb-4">
                                            <!-- Rating -->
                                            <ul id="venue-rating" class="list-inline mb-0"></ul>
                                        </div>

                                        <!-- Button -->
                                        <div class="d-grid gap-2">
                                            <a id="booking-link" href="booking.php" class="btn btn-primary">Book Venue Now</a>
                                            <button class="btn btn-outline-primary mb-0" type="button" data-bs-toggle="modal" data-bs-target="#inquiryForm">
                                                <i class="bi bi-eye fa-fw me-2"></i>Send Inquiry
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Book now item END -->

                                <!-- Direction START -->
                                <div class="card shadow mb-4">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="mb-0">Get Direction</h5>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body">
                                        <!-- Map START -->
                                        <iframe id="venue-map" class="w-100 grayscale rounded" height="200" style="border:0;" aria-hidden="false" tabindex="0"></iframe>

                                        <!-- Info -->
                                        <ul class="list-group list-group-borderless my-3">
                                            <!-- Address -->
                                            <li class="list-group-item">
                                                <a id="venue-address" href="#" class="h6 fw-normal mb-0"></a>
                                            </li>
                                            <!-- Call no -->
                                            <li class="list-group-item">
                                                <a id="venue-phone" href="#" class="h6 fw-normal mb-0"></a>
                                            </li>
                                            <!-- Email -->
                                            <li class="list-group-item">
                                                <a id="venue-email" href="#" class="h6 fw-normal mb-0"></a>
                                            </li>
                                        </ul>
                                        <!-- Social button -->
                                        <ul class="list-inline mb-0 mt-3">
                                            <li class="list-inline-item">Follow us on: </li>
                                            <li class="list-inline-item"> <a class="btn btn-sm px-2 bg-facebook mb-0" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
                                            <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-instagram mb-0" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Direction END -->
                            </div>
                            <!-- Right side END -->
                        </div>
                    </div>
                    <!-- About Tab END -->

                    <!-- Services Tab START -->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-2">
                        <!-- Venue services -->
                        <h5 class="mb-3"><i class="fa-solid fa-hotel fa-fw text-warning"></i> Venue Services</h5>
                        <div id="venue-services" class="row">
                            <!-- Services will be populated here -->
                        </div>

                        <!-- Additional services -->
                        <h5 class="mb-3 mt-5"><i class="bi bi-tools fa-fw text-warning"></i> Additional Services</h5>
                        <div id="additional-services" class="row">
                            <!-- Additional services will be populated here -->
                        </div>
                    </div>
                    <!-- Services Tab END -->

                    <!-- Tabs contents END -->
                </div>
        </section>
        <!-- =======================
Content END -->


    <!-- =======================
    Recommended Venues START -->
    <section>
        <div class="container">

            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-start">
                    <h4 class="mb-0">You would also like... </h4>
                </div>
            </div>

            <div class="row g-4">
                <?php if (isset($venues) && is_array($venues)) : ?>
                    <?php foreach ($venues as $venue) : ?>
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
                                        <div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="bi bi-geo-alt me-2"></i><?= htmlspecialchars($venue['location']) ?></div>
                                    </div>
                                </div>

                                <!-- Card body -->
                                <div class="card-body px-2">
                                    <!-- Title -->
                                    <h5 class="card-title"><a href="venue-details.php?id=<?= htmlspecialchars($venue['id']) ?>" class="stretched-link"><?= htmlspecialchars($venue['venueName']) ?></a></h5>
                                    <!-- Price and rating -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="text-success mb-0">Ksh. <?= htmlspecialchars($venue['price']) ?></h6>
                                        <h6 class="mb-0">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Card END -->
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>No recommendations found.</p>
                <?php endif; ?>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Recommended Venues END -->        

    </main>

    <!-- Footer START -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer END -->

    <!-- Send Inquiry START -->
    <div class="modal fade" id="inquiryForm" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Title -->
                <div class="modal-header">
                    <h5 class="modal-title" id="inquiryFormlabel">Send Inquiry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Body -->
                <div class="modal-body p-3">
                    <div class="card bg-transparent">
                        <!-- Card header -->
                        <div class="card-header bg-transparent">
                            <!-- Title -->
                            <h6 class="card-title mb-1">The venue's expert(s) will get in touch within 2 business days</h6>
                        </div>

                        <!-- Alert box -->
                        <div class="alert alert-success" role="alert">
                            <strong class="mx-1">Disclaimer: </strong> This inquiry links you directly to the venue's representative for personalized assistance.
                        </div>

                        <!-- Card body -->
                        <div class="card-body pt-0">

                            <form>
                                <!-- Name -->
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name">
                                </div>
                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" placeholder="Enter Your Email Address">
                                </div>
                                <!-- Phone number -->
                                <div class="mb-3">
                                    <label class="form-label">Phone number</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Phone Number">
                                </div>

                                <div class="mb-3 ms-2 form-check">
                                    <input type="checkbox" class="form-check-input" id="inquiryCheck">
                                    <label class="form-check-label" for="inquiryCheck">I agree to receive updates and offers</label>
                                </div>

                                <!-- Buttons -->
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-dark mb-0" type="button">Send Inquiry</button>
                                    <button class="btn btn-link mb-0" type="button">Call on: +254 123 456 789</button>
                                </div>
                            </form> <!-- Form END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Send Inquiry END -->

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const fetchData = async () => {
                const urlParams = new URLSearchParams(window.location.search);
                const venueId = urlParams.get('id');
                try {
                    const response = await fetch(`http://localhost:5000/api/venues/${venueId}`); // Replace with your backend API URL
                    const data = await response.json();
                    
                    console.log(data);
                    document.getElementById('venue-description').textContent = data.description || "Description not available.";
                    document.getElementById('venue-additional-description').textContent = "Experience the warmth and hospitality of the staff..."; // Add more description if needed
                    document.getElementById('venue-price').textContent = `Ksh. ${data.price || "N/A"}`;
                    document.getElementById('booking-link').href = data.bookingUrl || "booking.php";
                    document.getElementById('venue-map').src = `https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=${encodeURIComponent(data.address || "Nyeri, Kenya")}`; // Replace with your Google Maps API Key
                    document.getElementById('venue-address').textContent = data.address || "Address not available.";
                    document.getElementById('venue-address').href = `https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(data.address || "Nyeri, Kenya")}`;
                    document.getElementById('venue-phone').textContent = data.phoneNumber || "+254 123 456 789";
                    document.getElementById('venue-email').textContent = data.email || "info@greenhillshotel.com";
                    document.getElementById('venue-email').href = `mailto:${data.email || "info@greenhillshotel.com"}`;

                    document.getElementById('venueName').textContent = data.venueName || "";
                    document.getElementById('venueAddress').textContent = data.address || "";
                    document.getElementById('venueLocation').textContent = data.location || "";
                    document.getElementById('venueRating').textContent = data.rating || "N/A";
                    document.getElementById('venueType').textContent = data.venueType || "";
                    const ratingElement = document.getElementById('venue-rating');
                    ratingElement.innerHTML = "";
                    if (data.rating) {
                        const fullStars = Math.floor(data.rating);
                        const halfStars = data.rating % 1 !== 0 ? 1 : 0;
                        for (let i = 0; i < fullStars; i++) {
                            ratingElement.innerHTML += '<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>';
                        }
                        if (halfStars) {
                            ratingElement.innerHTML += '<li class="list-inline-item me-0 small"><i class="fa-solid fa-star-half-alt text-warning"></i></li>';
                        }
                    } else {
                        ratingElement.innerHTML = '<li class="list-inline-item me-1 h6 mb-0">Rating not available</li>';
                    }

                    const imageGallery = document.getElementById('image-gallery');
                    imageGallery.innerHTML = "";
                    if (data.images && data.images.length > 0) {
                        data.images.forEach(image => {
                            imageGallery.innerHTML += `
                        <div class="col-md-4">
                            <a class="w-100 h-100" data-glightbox data-gallery="gallery" href="${image}">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <img src="${image}" class="card-img" alt="">
                                    <div class="hover-element w-100 h-100">
                                        <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>`;
                        });
                    } else {
                        imageGallery.innerHTML = '<p>No images available</p>';
                    }

                    const venueServices = document.getElementById('venue-services');
                    venueServices.innerHTML = "";
                    if (data.services && data.services.length > 0) {
                        data.services.forEach(service => {
                            venueServices.innerHTML += `
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <ul class="list-group list-group-borderless mb-3">
                                <li class="list-group-item">
                                    <i class="fa-solid fa-circle-check fa-fw text-success me-2"></i>
                                    <a class="h6 fw-light mb-0">${service}</a>
                                </li>
                            </ul>
                        </div>`;
                        });
                    } else {
                        venueServices.innerHTML = '<p>No services available</p>';
                    }

                    const additionalServices = document.getElementById('additional-services');
                    additionalServices.innerHTML = "";
                    if (data.additionalServices && data.additionalServices.length > 0) {
                        data.additionalServices.forEach(service => {
                            additionalServices.innerHTML += `
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <ul class="list-group list-group-borderless mb-3">
                                <li class="list-group-item">
                                    <i class="fa-solid fa-circle-check fa-fw text-success me-2"></i>
                                    <a class="h6 fw-light mb-0">${service}</a>
                                </li>
                            </ul>
                        </div>`;
                        });
                    } else {
                        additionalServices.innerHTML = '<p>No additional services available</p>';
                    }

                } catch (error) {
                    console.error('Error fetching data:', error);
                }
            };

            fetchData();
        });
    </script>

</body>


</html>