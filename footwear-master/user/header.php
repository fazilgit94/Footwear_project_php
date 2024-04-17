<!DOCTYPE HTML>
<html>

<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</head>

<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index">Footwear</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
							<form action="#" class="search-wrap">
								<div class="form-group">
									<input type="search" class="form-control search" placeholder="Search">
									<button class="btn btn-primary submit-search text-center" type="submit"><i
											class="icon-search"></i></button>
								</div>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li class="active"><a href="/MVC/footwear-master/user/home">Home</a></li>
								<?php

								foreach ($cate_arr as $cate) {
									// echo $cate->cate_name;
								

									?>
									<li class="has-dropdown">
										<a href="home?btn_cate_id=<?php echo $cate->category_id ?>">
											<?php echo $cate->category_name; ?>
										</a>


										<ul class="dropdown">
											<?php
											foreach ($subcate_arr as $subcate) {

												if ($subcate->c_id == $cate->category_id) {
													?>



													<button>
														<li><a href="home?sub_cate_id=<?php echo $subcate->subcategory_id ?>">
																<?php echo $subcate->subcategory_name; ?>
															</a>


															<?php
															foreach ($prd_arr as $prd) {

																if ($prd->s_id == $subcate->subcategory_id) {
																	?>
															</button>

															<!-- <ul class="dropdown"> -->
															<li ><a href="single-product?prdId=<?php echo $prd->product_id ?>">
																<?php echo $prd->product_name; ?></a>
															</li>

														<?php } ?>



												</li>

											<?php }
												}
											} ?>

								</ul>


								</li>
							<?php } ?>
							<!-- <li><a href="women.php">Women</a></li> -->
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
							<?php
							if (!isset($_SESSION['u_id'])) { ?>


								<li><a href="/MVC/footwear-master/user/login">Login</a></li>

							<?php } else { ?>


								<li><a href="/MVC/footwear-master/user/logout">Logout</a></li>

							<?php } ?>

							<li><a href="/MVC/footwear-master/admin/signin">Admin</a></li>



							<li class="cart"><a href="cart.php"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>