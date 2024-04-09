<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Delete My Account | Ultra Venues</title>

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
        <?php $activeTab = 'delete-profile'; ?>
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

				<!-- Card START -->
				<div class="card border">
					<!-- Card header -->
					<div class="card-header border-bottom">
						<h4 class="card-header-title">Delete My Account</h4>
					</div>

					<!-- Card body START -->
					<div class="card-body">
						<h6>Before you go...</h6>
						<ul>
							<li>If any issues lead to this, kindly visit our FAQs section for help first <a href="faq.php">FAQs Page</a> </li>
							<li>If you delete your account, you will lose your all data.</li>
						</ul>
						<div class="form-check form-check-md my-4">
							<input class="form-check-input" type="checkbox" value="" id="deleteaccountCheck">
							<label class="form-check-label" for="deleteaccountCheck">Yes, I'd like to delete my account</label>
						</div>
						<a href="#" class="btn btn-success-soft btn-sm mb-2 mb-sm-0">Keep my account</a>
						<a href="user-delete-confirmation.php" class="btn btn-danger btn-sm mb-0">Delete my account</a>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Card END -->
			</div>
			<!-- Main content END -->




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