<!DOCTYPE html>
<html lang="en">

<head>
	<title>Venues Listing | Ultra Venues</title>

	<!-- Head Content -->
	<?php include "includes/head-content.php"; ?>



</head>

<body>
	<!-- Header START -->
	<?php include "includes/header-main.php"; ?>
	<!-- Header END -->

	<main>

		<!-- =======================
                Main Banner START -->
		<section class="pt-0">
			<div class="container">
				<!-- Background image -->
				<div class="rounded-3 p-3 p-sm-5" style="background-image: url(assets/images/Locations/Nyeri.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
					<!-- Banner title -->
					<div class="row my-2 my-xl-5">
						<div class="col-md-8 mx-auto">
							<h1 class="text-center text-white">Venues</h1>
						</div>
					</div>

					<!-- Booking from START -->
					<form class="bg-mode shadow rounded-3 position-relative p-4 pe-md-5 pb-5 pb-md-4 mb-4">
						<div class="row g-4 align-items-center">
							<!-- Location -->
							<div class="col-lg-4">
								<div class="form-control-border form-control-transparent form-fs-md d-flex">
									<!-- Icon -->
									<i class="bi bi-geo-alt fs-3 me-2 mt-2"></i>
									<!-- Select input -->
									<div class="flex-grow-1">
										<label class="form-label">Venue Name</label>
										<select class="form-select js-choice" data-search-enabled="true">
											<option value="">Select Venue</option>
											<option selected>Green Hills Hotel</option>
											<option>The White Rhino</option>
											<option>The Nelion</option>
											<option>Oriental Palace</option>
											<option>Legacy Gardens</option>
										</select>
									</div>
								</div>
							</div>

							<!-- Check in -->
							<div class="col-lg-4">
								<div class="d-flex">
									<!-- Icon -->
									<i class="bi bi-calendar fs-3 me-2 mt-2"></i>
									<!-- Date input -->
									<div class="form-control-border form-control-transparent form-fs-md">
										<label class="form-label">Start/End Date</label>
										<input type="text" class="form-control flatpickr" data-mode="range" placeholder="Select date" value="19 Sep to 21 Sep">
									</div>
								</div>
							</div>

							<!-- Guest -->
							<div class="col-lg-4">
								<div class="form-control-border form-control-transparent form-fs-md d-flex">
									<!-- Icon -->
									<i class="bi bi-person fs-3 me-2 mt-2"></i>
									<!-- Dropdown input -->
									<div class="w-100">
										<label class="form-label">Guests</label>
										<div class="dropdown guest-selector me-2">
											<input type="number" class="form-guest-selector form-control selection-result" value="50" id="dropdownShare" data-bs-auto-close="outside" data-bs-toggle="dropdown">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Button -->
						<div class="btn-position-md-middle">
							<a class="icon-lg btn btn-round btn-primary mb-0" href="#"><i class="bi bi-search fa-fw"></i></a>
						</div>
					</form>
					<!-- Booking from END -->
				</div>
			</div>
		</section>
		<!-- =======================
                Main Banner END -->

		<!-- =======================
Hotel list START -->
		<section class="pt-0">
			<div class="container">
				<!-- Tabs and alert START -->
				<div class="row mb-4">
					<div class="col-12">

						<!-- Buttons -->
						<div class="hstack gap-3 justify-content-between justify-content-md-end">
							<!-- Filter offcanvas button -->
							<button class="btn btn-primary-soft btn-primary-check mb-0 d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
								<i class="fa-solid fa-sliders-h me-1"></i> Show filters
							</button>
						</div>
					</div>
				</div>
				<!-- Tabs and alert END -->

				<div class="row">
					<!-- Left sidebar START -->
					<aside class="col-xl-4 col-xxl-3">
						<!-- Responsive offcanvas body START -->
						<div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
							<div class="offcanvas-header">
								<h5 class="offcanvas-title" id="offcanvasSidebarLabel">Advance Filters</h5>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body flex-column p-3 p-xl-0">
								<form id="filterForm" class="rounded-3 shadow">
									<!-- Venue Type START -->
									<div class="card card-body rounded-0 rounded-top p-4">
										<h6 class="mb-2">Venue Type</h6>
										<div class="col-12">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="venueType" value="All" id="venueType1">
												<label class="form-check-label" for="venueType1">All</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="venueType" value="Hotel" id="venueType2">
												<label class="form-check-label" for="venueType2">Hotel</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="venueType" value="Resort" id="venueType4">
												<label class="form-check-label" for="venueType4">Resort</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="venueType" value="Lodge" id="venueType6">
												<label class="form-check-label" for="venueType6">Lodge</label>
											</div>
										</div>
									</div>

									<hr class="my-0">

									<!-- Price range START -->
									<div class="card card-body rounded-0 p-4">
										<h6 class="mb-2">Price range</h6>
										<div class="col-12">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="priceRange" value="0-5000" id="priceRange1">
												<label class="form-check-label" for="priceRange1">Up to Ksh. 5,000</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="priceRange" value="5000-10000" id="priceRange2">
												<label class="form-check-label" for="priceRange2">Ksh. 5,000 - 10,000</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="priceRange" value="10000-15000" id="priceRange3">
												<label class="form-check-label" for="priceRange3">Ksh. 10,000 - 15,000</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="priceRange" value="15000-20000" id="priceRange4">
												<label class="form-check-label" for="priceRange4">Ksh. 15,000 - 20,000</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="priceRange" value="20000-35000" id="priceRange5">
												<label class="form-check-label" for="priceRange5">Ksh. 20,000 - 35,000</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="priceRange" value="35000-1000000" id="priceRange6">
												<label class="form-check-label" for="priceRange6">Ksh. 35,000 +</label>
											</div>
										</div>
									</div>

									<hr class="my-0">

									<!-- Rating Star START -->
									<div class="card card-body rounded-0 p-4">
										<h6 class="mb-2">Rating Star</h6>
										<ul class="list-inline mb-0 g-3">
											<li class="list-inline-item mb-0">
												<input type="checkbox" class="btn-check" name="rating" value="1" id="btn-check-6">
												<label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-6">1<i class="bi bi-star-fill"></i></label>
											</li>
											<li class="list-inline-item mb-0">
												<input type="checkbox" class="btn-check" name="rating" value="2" id="btn-check-7">
												<label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-7">2<i class="bi bi-star-fill"></i></label>
											</li>
											<li class="list-inline-item mb-0">
												<input type="checkbox" class="btn-check" name="rating" value="3" id="btn-check-8">
												<label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-8">3<i class="bi bi-star-fill"></i></label>
											</li>
											<li class="list-inline-item mb-0">
												<input type="checkbox" class="btn-check" name="rating" value="4" id="btn-check-15">
												<label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-15">4<i class="bi bi-star-fill"></i></label>
											</li>
											<li class="list-inline-item mb-0">
												<input type="checkbox" class="btn-check" name="rating" value="5" id="btn-check-16">
												<label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-16">5<i class="bi bi-star-fill"></i></label>
											</li>
										</ul>
									</div>

									<hr class="my-0">

									<!-- Amenities START -->
									<div class="card card-body rounded-0 rounded-bottom p-4">
										<h6 class="mb-2">Amenities</h6>
										<div class="col-12">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="amenities" value="Large Open Space" id="amenitiesType2">
												<label class="form-check-label" for="amenitiesType2">Large Open Space</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="amenities" value="MC Available" id="amenitiesType3">
												<label class="form-check-label" for="amenitiesType3">MC Available</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="amenities" value="Large Parking Space" id="amenitiesType4">
												<label class="form-check-label" for="amenitiesType4">Large Parking Space</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="amenities" value="Catering Services" id="amenitiesType5">
												<label class="form-check-label" for="amenitiesType5">Catering Services</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="amenities" value="Extra Security" id="amenitiesType6">
												<label class="form-check-label" for="amenitiesType6">Extra Security</label>
											</div>
										</div>
									</div>
								</form>
								<!-- Form End -->
							</div>
							<!-- Buttons -->
							<div class="d-flex justify-content-between p-2 p-xl-0 mt-xl-4">
								<button class="btn btn-link p-0 mb-0">Clear all</button>
								<button class="btn btn-primary mb-0">Filter Results</button>
							</div>
						</div>
						<!-- Responsive offcanvas body END -->
					</aside>
					<!-- Left sidebar END -->

					<!-- Main content START -->
					<div class="col-xl-8 col-xxl-9">
						<div class="vstack gap-4">

							<div id="venue-container" class="container">
								<!-- Cards will be dynamically inserted here -->
							</div>

							<nav class="d-flex justify-content-center" aria-label="navigation">
								<ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
									<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fa-solid fa-angle-left"></i></a></li>
									<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
									<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
									<li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
									<li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
									<li class="page-item mb-0"><a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a></li>
								</ul>
							</nav>
						</div>
						<!-- Main content END -->
					</div> <!-- Row END -->
				</div>
		</section>
		<!-- =======================
Hotel list END -->

	</main>

	<script>
		function savePriceToLocalStorage(price) {
			localStorage.setItem('venuePrice', price);
		}
		document.addEventListener('DOMContentLoaded', () => {
			let venues = [];
			const pageSize = 4;
			let currentPage = 1;

			function fetchVenues(page = 1) {
				fetch(`http://localhost:5000/api/venues?page=${page}&pageSize=${pageSize}`)
					.then(response => response.json())
					.then(data => {
						venues = data.venues;
						displayVenues(venues);
						createPagination(data.pagination);
					})
					.catch(error => console.error('Error fetching venues:', error));
			}

			function displayVenues(venues) {
				const venueContainer = document.getElementById('venue-container');
				venueContainer.innerHTML = '';
				venues.forEach(venue => {
					const card = document.createElement('div');
					card.classList.add('card', 'shadow', 'p-2');
					card.innerHTML = `
                <div class="row g-0">
                    <div class="col-md-5">
						<img src="${(venue.pictures && venue.pictures.length > 0 && venue.pictures[0] !== "") ? venue.pictures[0] : 'assets/images/mt-kenya.jpg'}" class="card-img rounded-2" alt="Card image">
                    </div>
                    <div class="position-absolute top-0 start-0 z-index-1 m-2">
                        <div class="badge text-bg-danger">${venue.location}</div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body py-md-2 d-flex flex-column h-100 position-relative">
                            <div class="d-flex justify-content-between align-items-center">
                                <ul class="list-inline mb-0">
                                    ${[...Array(5)].map((_, i) => `
                                        <li class="list-inline-item me-0 small">
                                            <i class="fa-solid fa-star ${i < Math.floor(venue.rating) ? 'text-warning' : 'text-muted'}"></i>
                                        </li>`).join('')}
                                </ul>
                                <ul class="list-inline mb-0 z-index-2">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-sm btn-round btn-light"><i class="fa-solid fa-fw fa-heart"></i></a>
                                    </li>
                                    <li class="list-inline-item dropdown">
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-fw fa-share-alt"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
                                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <h5 class="card-title mb-1"><a href="venue-details.php?id=${venue.id}">${venue.venueName}</a></h5>
                            <small><i class="bi bi-geo-alt me-2"></i>${venue.address}, ${venue.location}</small>
                            <ul class="list-group list-group-borderless small mb-0 mt-2">
                                ${venue.facilities.split(/\n|,/).map(facility => `
                                    <li class="list-group-item d-flex text-success p-0">
                                        <i class="bi bi-patch-check-fill me-2"></i>${facility}
                                    </li>`).join('')}
                            </ul>
                            <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                <div class="d-flex align-items-center">
                                    <h5 class="fw-bold mb-0 me-1">Ksh. ${venue.price}</h5>
                                    <span class="mb-0 me-2">/day</span>
                                </div>
                                <div class="mt-3 mt-sm-0">
									<a href="booking.php?id=${venue.id}" class="btn btn-sm btn-dark mb-0 w-100" onclick="savePriceToLocalStorage(${venue.price})">View Details</a>
								</div>                
                            </div>
                        </div>
                    </div>
                </div>
            `;
					venueContainer.appendChild(card);
				});
			}

			function createPagination(pagination) {
				const paginationContainer = document.querySelector('.pagination');
				paginationContainer.innerHTML = '';

				if (pagination.currentPage > 1) {
					const prevPage = document.createElement('li');
					prevPage.classList.add('page-item', 'mb-0');
					prevPage.innerHTML = `<a class="page-link" href="#"><i class="fa-solid fa-angle-left"></i></a>`;
					prevPage.addEventListener('click', () => fetchVenues(pagination.currentPage - 1));
					paginationContainer.appendChild(prevPage);
				}

				for (let i = 1; i <= pagination.totalPages; i++) {
					const pageItem = document.createElement('li');
					pageItem.classList.add('page-item', 'mb-0', pagination.currentPage === i ? 'active' : 'inactive');
					pageItem.innerHTML = `<a class="page-link" href="#">${i}</a>`;
					pageItem.addEventListener('click', () => fetchVenues(i));
					paginationContainer.appendChild(pageItem);
				}

				if (pagination.currentPage < pagination.totalPages) {
					const nextPage = document.createElement('li');
					nextPage.classList.add('page-item', 'mb-0');
					nextPage.innerHTML = `<a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a>`;
					nextPage.addEventListener('click', () => fetchVenues(pagination.currentPage + 1));
					paginationContainer.appendChild(nextPage);
				}
			}

			fetchVenues();
		});
	</script>

	<!-- Footer START -->
	<?php include "includes/footer.php"; ?>
	<!-- Footer END -->
</body>


</html>