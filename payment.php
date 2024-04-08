<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Payment | Ultra Venues</title>

        <!-- Head Content -->
        <?php include "includes/head-content.php";?>



    </head>

    <body>
        <!-- Header START -->
        <?php include "includes/header-main.php";?>
        <!-- Header END -->

        <main>

           	<!-- =======================
Main Content START -->
<section class="pt-4 pt-lg-5">
	<div class="container">

		<div class="row g-4 g-xl-5">
			<!-- Left Content START -->
			<div class="col-xl-8">
				<div class="card bg-transparent p-0">
					<!-- Card header START -->
					<div class="card-header bg-transparent p-0">
						<h1 class="card-title fs-2 mb-0">Choose a payment option below:</h1>
					</div>
					<!-- Card header END -->

					<br>


				<!-- Card for Mpesa Payment START -->
				<div class="card bg-transparent p-0 mt-4">
					<!-- Card header START -->
					<div class="card-header bg-transparent p-0">
					<br>
					<br>
						<h2 class="card-title fs-4 mb-0">Mpesa Express Payment</h1>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body p-0 mt-3">
						<!-- Alert box -->
						<div class="alert alert-success" role="alert">
							Accept the Mpesa prompt that'll be sent to your phone to complete the payment.
						</div>

						<form class="bg-light rounded-3 p-4">
							<!-- Form START -->
							<div class="row g-3">
								<!-- Mpesa Phone Number -->
								<div class="col-12">
									<label class="form-label"><span class="h6 fw-normal">Mpesa Phone Number *</span></label>
									<input type="tel" class="form-control" aria-label="Mpesa Phone Number" placeholder="Enter your Mpesa phone number +254 712 345 678">
								</div>

								<!-- Buttons -->
								<div class="col-12">
									<a href="payment-confirmation.php" class="btn btn-primary w-100 mb-0">Pay with Mpesa Express</a>
								</div>
							</div>
							<!-- Form END -->
						</form>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Card for Mpesa Payment END -->



					

					<!-- Card header START -->
					<div class="card-header bg-transparent p-0">
						<br>
						<br>
						<br>
						<h2 class="card-title fs-4 mb-4">Card Payment</h2>
					</div>

					<!-- Card body START -->
					<div class="card-body p-0 mt-3">
						<!-- Alert box -->
						<div class="alert alert-success" role="alert">
							Fill in your card information below.
						</div>

						<form class="bg-light rounded-3 p-4">
							<!-- Card options -->
							<div class="d-sm-flex justify-content-sm-between align-items-center mb-1">
								<h6 class="mb-2 mb-sm-0">We Accept:</h6>
								<ul class="list-inline mb-0">
									<li class="list-inline-item"> <a href="#"><img src="assets/images/element/visa.svg" class="h-30px" alt=""></a></li>
									<li class="list-inline-item"> <a href="#"><img src="assets/images/element/mastercard.svg" class="h-30px" alt=""></a></li>
									<li class="list-inline-item"> <a href="#"><img src="assets/images/element/expresscard.svg" class="h-30px" alt=""></a></li>
								</ul>
							</div>

							<!-- Form START -->
							<div class="row g-3">
								<!-- Card number -->
								<div class="col-12">
									<label class="form-label"><span class="h6 fw-normal">Card Number *</span></label>
									<div class="position-relative">
										<input type="text" class="form-control" maxlength="14" placeholder="XXXX XXXX XXXX XXXX">
										<img src="assets/images/element/visa.svg" class="w-30px position-absolute top-50 end-0 translate-middle-y me-2 d-none d-sm-block" alt="">
									</div>	
								</div>
								<!-- Expiration Date -->
								<div class="col-md-6">
									<label class="form-label"><span class="h6 fw-normal">Expiration date *</span></label>
									<div class="input-group">
										<input type="text" class="form-control" maxlength="2" placeholder="Month">
										<input type="text" class="form-control" maxlength="4" placeholder="Year">
									</div>
								</div>	
								<!--Cvv code  -->
								<div class="col-md-6">
									<label class="form-label"><span class="h6 fw-normal">CVV / CVC *</span></label>
									<input type="text" class="form-control" maxlength="3" placeholder="XXX">
								</div>
								<!-- Card name -->
								<div class="col-12">
									<label class="form-label"><span class="h6 fw-normal">Name on Card *</span></label>
									<input type="text" class="form-control" aria-label="name of card holder" placeholder="Enter card holder name">
								</div>

								<!-- Buttons -->
								<div class="col-12">
									<a href="payment-confirmation.php" class="btn btn-primary w-100 mb-0">Pay with your Card</a>
								</div>
							</div>
							<!-- Form END -->
						</form>
					</div>
					<!-- Card body END -->
				</div>

				<br>
				<br>


			</div>
			<!-- Left Content END -->

			<!-- Right content START -->
			<aside class="col-xl-4">
				<div data-sticky data-margin-top="150" data-sticky-for="1199" class="row g-4">
					<!-- Price summary START -->
					<div class="col-md-6 col-xl-12">
						<div class="card bg-light rounded-2">
							<!-- card header -->
							<div class="card-header border-bottom bg-light">
								<h5 class="card-title mb-0">Price Summary</h5>
							</div>

							<!-- Card body -->
							<div class="card-body">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-normal mb-0">Base Booking Cost
											<a tabindex="0" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-content="COVID-19 test required Vaccinated travelers can visit">
												<i class="bi bi-info-circle"></i>
											</a>
										</span>
										<span class="fs-5">Ksh. 15,000</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-normal mb-0">Other Services</span>
										<span class="fs-5 text-success">+Ksh. 5000</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-normal mb-0">Discount</span>
										<span class="fs-5 text-danger">-Ksh. 2,500</span>
									</li>

								</ul>
							</div>

							<!-- Card footer -->
							<div class="card-footer border-top bg-light">
								<div class="d-flex justify-content-between align-items-center">
									<span class="h5 fw-normal mb-0">Total Cost</span>
									<span class="h5 fw-normal mb-0">Ksh. 17,500</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Price summary END -->

				</div>	
			</aside>
			<!-- Right content END -->
		</div>
	</div>
</section>
<!-- =======================
Main Content END -->

        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
		<script src="assets/vendor/sticky-js/sticky.min.js"></script>

    </body>


</html>