<?php
session_start();
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v2">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03 ">
		<?php
if(isset($_SESSION['loggedin']) &&  $_SESSION['loggedin']==true){
    $loggedin = true;
} else {
    $loggedin = false;
}
echo 	'<div class="top-bar col-sm-12 col-md-12 col-lg-12">
<div class="content-topbar flex-sb-m h-full container">
	<div class="left-top-bar w-100">
	<marquee  direction="left">Shop Address: new york market building#3, floor2 ,ecommerce shop example | Telephone: (+1) 234 567890 </marquee>
	</div>
';	
if(!$loggedin) {
    echo '
	<div class="right-top-bar w-50 flex-w h-full ">
		<a href="faqs.php" class="flex-c-m trans-04 p-lr-25 zz">
			Help & FAQs
		</a>

		<a href="login.php" class="flex-c-m trans-04 p-lr-25 zz">
			Login
		</a>

		<a href="register.php" class="flex-c-m trans-04 p-lr-25 zz">
			register
		</a>
	';
}
if($loggedin) {
    echo ' <a href="logout.php" class="flex-c-m trans-04 p-lr-25 zz text-secondary">
			Logout
		   </a>
	     ';
}

echo '
</div>
</div>
</div>
';
?>
			<div class="wrap-menu-desktop ">
				<nav class="limiter-menu-desktop p-l-45  ">
				
				<!-- Logo desktop -->			
				<a href="index.php">
						    <img src="images/icons/logo5.jpg" class="img-fluid">
						</a>

					<!-- Menu desktop -->
					<div class="menu-desktop ">
						<ul class="main-menu">
							<li >
								<a class="nav-link" href="index.php">Home</a>
							</li>

							<li>
								<a class="nav-link" href="product.php">Shop</a>
							</li>
							<li>
								<a class="nav-link" href="blog.php">Blog</a>
							</li>

							<li class="active-menu">
								<a class="nav-link" href="about.php">About</a>
							</li>

							<li>
								<a class="nav-link" href="contact.php">Contact</a>
							</li>
						</ul>
					</div>	
					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">
					  <form class="w-50 me-3" action="search.php" method="GET">
                        <div class="input-group flex-nowrap  me-5">
                         <input type="text" class="form-control serchinput" name="search" placeholder="search..." aria-label="Username" aria-describedby="addon-wrapping">
                       <button type="submit" type="button" class="bg-primary justify-content-center d-flex align-items-center" id="addon-wrapping"><i class="fa fa-search ms-2 me-3 text-white"></i></button>
                      </div>
                    </form>	

					<div class="flex-c-m h-full p-l-18 p-r-25 bor5 ">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="+">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                              </svg>
							</div>
						</div>

						<div class="flex-c-m h-full p-l-18 p-r-25 bor5">
                <div class="icon-header-item trans-04 p-lr-11">
                   <i class="zmdi zmdi-favorite-outline text-dark"></i> 
                </div>
              </div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a class="nav-link" href="index.php"><img src="images/icons/logo5.jpg" class="img-fluid"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
				<div class="flex-c-m h-full p-r-10">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>
				</div>

				
				<div class="flex-c-m h-full p-l-18 p-r-25 bor5 ">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="+">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                              </svg>
							</div>
						</div>

						  				
			  <div class="flex-c-m h-full p-l-18 p-r-25 bor5">
                <div class="icon-header-item trans-04 p-lr-11">
                   <i class="zmdi zmdi-favorite-outline text-dark"></i> 
                </div>
              </div>


			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
			<li class="p-3">
					<a class="nav-link bg-dark rounded-lg text-center" href="account.php">Account</a>
				</li>
				<li>
					<a class="nav-link" href="index.php">Home</a>
				
				</li>

				<li>
					<a class="nav-link" href="product.php">Shop</a>
				</li>
				<li>
					<a class="nav-link"  href="blog.php">Blog</a>
				</li>

				<li>
					<a class="nav-link" href="about.php">About</a>
                    <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</header>

	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
				<div class="flex-c-m h-full p-lr-10 bor5">
                 <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 ">
              <a href="#" id="toggleOffcanvasAnchor">  <i class="fas fa-user text-dark"></i> </a>              
                </div>
              </div>

			</div>
		</div>
	</header>

	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/products/product14.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							 vine bottle 
							</a>

							<span class="header-cart-item-info">
								1 x $4.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/products/product7.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
						        Makeup kit
							</a>

							<span class="header-cart-item-info">
								1 x $14.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/products/product3.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								 Leather shoes
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10 tt">
							View Cart
						</a>

						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10 tt">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Our Story
						</h3>

						<p class="stext-113 cl6 p-b-26">
							Our Story: A Journey of Passion and Purpose

							In the tapestry of our existence, every thread tells a story - a tale of passion, perseverance, and purpose. Our story is a testament to the transformative power of dreams and the profound impact of unwavering dedication.
							
							A Vision Ignited
							Our journey commenced with a flicker of inspiration, a vision that set our hearts ablaze. It was a vision rooted in the belief that every individual deserves to fulfill their aspirations, to find solace in their needs, and to discover joy in their desires.
							
							From Dream to Reality
							With unwavering resolve, we embarked on the arduous path of realization, navigating through the uncertainties and challenges that beset us. Through perseverance and resilience, we transformed our vision into reality, breathing life into the aspirations that once dwelled within our hearts.
		                 </p>

						<p class="stext-113 cl6 p-b-26">
							A Promise Renewed
As we continue to script the chapters of our narrative, we pledge to remain steadfast in our commitment to you - our cherished patrons, partners, and friends. Our story is a promise renewed, a pledge to journey alongside you, enriching lives, and fostering connections that transcend the bounds of time and distance. 
						</p>

						<p class="stext-113 cl6 p-b-26">
							Any questions? Let us know in store at 2th floor, New Building , Country  or call us on (+1) 234 567890 
						</p>
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="images/blog1.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Our Mission
						</h3>

						<p class="stext-113 cl6 p-b-26">
							Our Mission: Empowering Connections, Enriching Lives

							At the core of our existence lies a profound mission – to empower connections and enrich lives. We aspire to transcend the conventional boundaries of commerce, fostering meaningful relationships within our community.
							
							Connecting People, Building Bonds
							Our mission is to bridge distances, bringing individuals closer through shared experiences and mutual understanding. We believe in the transformative power of genuine connections to uplift spirits and forge enduring bonds.
							
							Delivering Quality, Ensuring Trust
							We are steadfast in our commitment to providing access to superior products and services that elevate the lives of our customers. Our mission is to serve as a beacon of trust, where individuals can find excellence, reliability, and value in every interaction.
							
							Nurturing Growth, Inspiring Learning
							Central to our mission is the belief in continuous growth and learning. We strive to be a catalyst for personal and professional development, offering avenues for exploration, discovery, and self-improvement.
						</p>

						<div class="bor16 p-l-29 p-b-9 m-t-22">
							<p class="stext-114 cl6 p-r-40 p-b-11">
								Creating Positive Change, Embracing Responsibility
We are driven by a sense of responsibility to make a positive impact in the lives of our customers, employees, and the communities we serve. Our mission extends beyond profit margins, encompassing social responsibility and ethical business practices.

United Towards a Brighter Future
In pursuit of our mission, we invite you to join us on this journey towards a brighter future. Together, we can create a world where meaningful connections flourish, and lives are enriched with purpose and joy.

Thank you for being part of our mission.


							</p>

							<span class="stext-111 cl8">
								- (E-Store) 
							</span>
						</div>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="images/about-02.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
		

		<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Follow Us 
					</h4>
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16 tt">
							<i class="fab fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl3 trans-04 m-r-16 tt">
							<i class="fab fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl3 trans-04 m-r-16 tt">
							<i class="fab fa-pinterest-p"></i>
						</a>
						<a href="#" class="fs-18 cl7 hov-cl2 trans-04 m-r-16 tt">
							<i class="fab fa-whatsapp"></i>
						</a>
						<p class="stext-107 cl7 size-201 mt-2">
							Thanks You for Visiting!
						</p>
				     
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30 ">
						Help
					</h4>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 tt">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 tt">
								Returns 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 tt">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 tt">
								FAQs
							</a>
						</li>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know on phone number 24/7 service Available .  Call us on given phone number   (+1) 234 567890
					</p>
					<p class="stext-107 cl7 size-201">
						Visit our Store floor no 1, Lab Building, USA 
					</p>
					<p class="stext-107 cl7 size-201">
						Store Timing Morning 6:00 Am to Night 12:00 AM
					</p>
				</div>
			

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Enter Email For Daily Updates.
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="email" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Quick Links
					</h4>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 tt">
								Home
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 tt">
							 Product
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 tt">
								Our Blogs
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 tt">
								Contact 
							</a>
						</li>

				</div>
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

		
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 tt">
								Men Fashion
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 tt">
							 Multi Media Accessories
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 tt">
								Kids Toys
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 tt trans-04">
								Home Appliances
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 tt hov-cl1 trans-04">
								Footwear
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 tt cl7 hov-cl1 trans-04">
								Femal Fashion
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 tt">
								Crockery 
							</a>
						</li>
				</div>
				
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
					 Why People's Choice? 
					</h4>
					<p class="stext-107 cl7 size-201">
						We have been serving people for +10 years
						with having a great experience!
					</p>
					<p class="stext-107 cl7 size-201">
						Delivering our products to more than 200 cities in allover Country
					  </p>
					<p class="stext-107 cl7 size-201">
					   Serving reliable & High Quality of Products
					</p>
				</div>

		

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30 justify-content-center d-flex">
						Payment Methods
					</h4>
					<div class="flex-c-m flex-w p-b-18">
						<a href="#" class="m-all-1">
							<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
						</a>
	
						<a href="#" class="m-all-1">
							<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
						</a>
	
						<a href="#" class="m-all-1">
							<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
						</a>
	
						<a href="#" class="m-all-1">
							<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
						</a>
	
						<a href="#" class="m-all-1">
							<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
						</a>
					</div>
	
					</p>
				</div>
			</div>
					
			</div>

			
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
</body>
</html>