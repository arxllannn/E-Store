<?php
session_start();
require 'db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
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
    echo ' 
	<a href="logout.php" class="flex-c-m trans-04 p-lr-25 zz text-secondary">Logout</a> ';
                        }

                   echo '  </div>
                        </div>
                     </div>';
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
							<li class="active-menu">
								<a class="nav-link" href="index.php">Home</a>
							</li>

							<li>
								<a class="nav-link" href="product.php">Shop</a>
							</li>
							<li>
								<a class="nav-link" href="blog.html">Blog</a>
							</li>

							<li>
								<a class="nav-link" href="about.html">About</a>
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
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a class="nav-link" href="product.php">Shop</a>
				</li>
				<li>
					<a class="nav-link"  href="blog.php">Blog</a>
				</li>

				<li>
					<a class="nav-link" href="about.php">About</a>
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
			</div>
		</div>
	</header>


	<!-- Cart -->
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

<!-- slider -->
	<div class="slider-container">
  <div class="slider">
    <div class="slide slide1">
        <a href="product.php"><img src="images/slider26.jpg" loading="lazy"  class="object-cover object-center "/></a>
    </div>
    <div class="slide slide2">
       <a href="product.php"><img src="images/slider20.jpg" loading="lazy" class="object-cover object-center" /></a> 
	</div>
    <div class="slide slide3">
	<a href="product.php"><img src="images/slider21.jpg" loading="lazy"  class=" object-cover object-center" /></a>
</div>
	<div class="slide slide1">
	<a href="product.php"><img src="images/slider23.jpg" loading="lazy"  class=" object-cover object-center" /> </a>
	</div>
    <div class="slide slide2">
        <img src="images/slider19.jpg" loading="lazy" alt="Photo by Dom Hill" class=" object-cover object-center" />
      
	</div>
  </div>
  <div class="dots-container">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
	<span class="dot"></span>
    <span class="dot"></span>
  </div>
  <button id="prevBtn" class="p-2"><span class="material-symbols-outlined">chevron_left</span></button>
  <button id="nextBtn" class="p-2"><span class="material-symbols-outlined">chevron_right</span></button>
</div>
	<!-- Slider -->

	
	<!-- <section class="section-slide">
		<div class="wrap-slick1 rs1-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(images/slide-03.jpg);">
				
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 cl2 respon2">
									Men Collection 2018
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
									New arrivals
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slide-02.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-202 cl2 respon2">
									Men New-Season
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
									Jackets & Coats
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slide-04.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-202 cl2 respon2">
									Women Collection 2018
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
									NEW SEASON
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->


	<!-- offer section started -->
	<div class="bg-white py-2 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <div class="grid grid-cols-1 gap-2 rounded-lg md:grid-cols-3 lg:gap-6">

<div class="flex items-center justify-center rounded-lg h-48 p-3">
	<a href="#">
      <img src="images/offer13.jpg" alt="Your Image" class="w-full h-full object-cover rounded-lg">
    </a>
</div>
<div class="flex items-center justify-center rounded-lg h-48 p-3">
	<a href="#">
      <img src="images/offer14.jpg" alt="Your Image" class="w-full h-full object-cover rounded-lg">
    </a>
</div>
<div class="flex items-center justify-center rounded-lg h-48 p-3">
   <a href="#">
     <img src="images/offer7.jpg" alt="Your Image" class="w-full h-full object-cover rounded-lg">
    </a>
</div>

    </div>
  </div>
</div>
<!-- offers section ended -->


<div class="bg-white py-1 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">

    <div class="grid grid-cols-2 rounded-lg bg-light p-20 sm:h-40 sm:content-evenly md:grid-cols-10 ">
      <!-- logo - start -->
         <div class="flex justify-center ">
            <div class="flex items-center justify-center rounded-lg h-32 p-3 ">
              <img src="images/shoes.jpg" alt="Your Image" class="w-full h-full object-cover rounded-full">
            </div>
         </div>
      <!-- logo - end -->

	     <!-- logo - start -->
         <div class="flex justify-center ">
            <div class="flex items-center justify-center rounded-lg h-32 p-3">
              <img src="images/ahopping.jpg" alt="Your Image" class="w-full h-full object-cover rounded-full">
            </div>
         </div>
      <!-- logo - end -->
  
       <!-- logo - start -->
	   <div class="flex justify-center text-indigo-500">
            <div class="flex items-center justify-center rounded-lg h-32 p-3">
              <img src="images/chips.jpg" alt="Your Image" class="w-full h-full object-cover rounded-full">
            </div>
         </div>
      <!-- logo - end -->

         <!-- logo - start -->
         <div class="flex justify-center text-indigo-500">
            <div class="flex items-center justify-center rounded-lg h-32 p-3">
              <img src="images/drink.jpg" alt="Your Image" class="w-full h-full object-cover rounded-full">
            </div>
         </div>
      <!-- logo - end -->

        <!-- logo - start -->
		<div class="flex justify-center text-indigo-500">
            <div class="flex items-center justify-center rounded-lg h-32 p-3">
              <img src="images/camera.jpg" alt="Your Image" class="w-full h-full object-cover rounded-full">
            </div>
         </div>
      <!-- logo - end -->

	     <!-- logo - start -->
         <div class="flex justify-center text-indigo-500">
            <div class="flex items-center justify-center rounded-lg h-32 p-3">
              <img src="images/perfume.jpg" alt="Your Image" class="w-full h-full object-cover rounded-full">
            </div>
         </div>
      <!-- logo - end -->

	     <!-- logo - start -->
         <div class="flex justify-center text-indigo-500">
            <div class="flex items-center justify-center rounded-lg h-32 p-3">
              <img src="images/pen.jpg" alt="Your Image" class="w-full h-full object-cover rounded-full">
            </div>
         </div>
      <!-- logo - end -->

	     <!-- logo - start -->
         <div class="flex justify-center text-indigo-500">
            <div class="flex items-center justify-center rounded-lg h-32 p-3">
              <img src="images/offer5.jpg" alt="Your Image" class="w-full h-full object-cover rounded-full">
            </div>
         </div>
      <!-- logo - end -->

	     <!-- logo - start -->
         <div class="flex justify-center text-indigo-500">
            <div class="flex items-center justify-center rounded-lg h-32 p-3">
              <img src="images/sunglasses.jpg" alt="Your Image" class="w-full h-full object-cover rounded-full">
            </div>
         </div>
      <!-- logo - end -->

	     <!-- logo - start -->
            <div class="flex justify-center text-indigo-500">
            <div class="flex items-center justify-center rounded-lg h-32 p-3">
              <img src="images/shirts.jpg" alt="Your Image" class="w-full h-full object-cover rounded-full">
            </div>
         </div>
      <!-- logo - end -->


    </div>
  </div>
</div>



	<!-- summer sale bannner -->
<div class="bg-white py-6 sm:py-8 lg:py-12 mb-5">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <div class="flex flex-col overflow-hidden rounded-lg bg-gray-900 sm:flex-row md:h-80">
      <!-- content - start -->
      <div class="flex w-full flex-col p-4 sm:w-1/2 sm:p-8 lg:w-2/5">
        <h2 class="mb-4 text-xl font-bold text-white md:text-2xl lg:text-4xl">Summer Sale<br />Up to 70% off.</h2>

        <p class="mb-8 max-w-md text-light">Summer Sale Collection is now on shop any product & get chance to win amazing exciting surprises so hurry now ! </p>

        <div class="mt-auto">
          <a href="#" class=" nav-link w-50 inline-block rounded-lg bg-white px-8 py-3 text-center  text-sm font-semibold text-gray-800 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:text-base">Save now</a>
        </div>
      </div>
      <!-- content - end -->
      <!-- image - start -->
      <div class="order-first h-48 w-full bg-gray-700 sm:order-none sm:h-auto sm:w-1/2 lg:w-3/5">
        <img src="images/summerfashion.jpg" loading="lazy" alt="Photo by Dom Hill" class="h-full w-full object-cover object-center" />
      </div>
      <!-- image - end -->
    </div>
  </div>
</div>
<!-- summer sale banner end -->


<!--  collection -->
<div class="py-6 sm:py-8 lg:py-12 p-5 mt-3">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
              <div class="mb-6 flex items-end justify-between gap-4">
                <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl">Collections</h2>
          
                <a href="product.php" class="inline-block rounded-lg border bg-danger px-4 py-2 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base nav-link">Show more</a>
              </div>  
			  <hr>
              <div class="grid gap-x-4 gap-y-6 sm:grid-cols-2 md:gap-x-5 lg:grid-cols-4 xl:grid-cols-5 ">

                    <!-- product - start -->
				  <div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
                    <img src="images/products/product1.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1">Men White Shirt</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$7.00</span>
                      <span class="text-sm text-red-500 line-through">$5.00</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
          
				  <!-- product - start -->
				  <div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
                    <img src="images/products/product2.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1"> Men Rough Pant</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$11.00</span>
                      <span class="text-sm text-red-500 line-through">$6.00</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
          
				  <!-- product - start -->
				  <div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
                    <img src="images/products/product3.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1">Leather Shoes</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$20.00</span>
                      <span class="text-sm text-red-500 line-through">$12.00</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
          
				  <!-- product - start -->
				  <div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
                    <img src="images/products/product4.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1">Camera Lens</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$36.00</span>
                      <span class="text-sm text-red-500 line-through">$15.00</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
          
                  <!-- product - start -->
				  <div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
                    <img src="images/products/product5.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1"> Red Lipstic</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg mt-3">$3.00</span>
                      <!-- <span class="text-sm text-red-500 line-through">$39.99</span> -->
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
                         
              </div>
            </div>
          </div>             
        </div>
      </div>  
    </div>
      <!-- collectio ended  -->

          <!--  sale -->
	<div class="  py-6 sm:py-8 lg:py-12 p-5">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
              <div class="mb-6 flex items-end justify-between gap-4">
                <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl mt-5">Sale</h2>
          
                <a href="product.php" class="inline-block rounded-lg border bg-danger px-4 py-2 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base nav-link">Show more</a>
              </div>  
			  <hr>
              <div class="grid gap-x-4 gap-y-6 sm:grid-cols-2 md:gap-x-5 lg:grid-cols-4 xl:grid-cols-5">
                    
			    <!-- product - start -->
				<div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
				   <div class="relative">
                    <img src="images/products/product6.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
					<div class="absolute left-0 top-2 flex gap-2">
                     <span class="rounded-r-lg bg-red-500 px-3 py-1.5 text-sm font-semibold uppercase tracking-wider text-white ">-20% </span>
                    </div>
                   </div>  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1">Pack OF 3 Red Lisptic</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$7.00</span>
                      <span class="text-sm text-red-500 line-through">$5.00</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
				  <!-- product - start -->
				  <div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
				   <div class="relative">
                    <img src="images/products/product7.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
					<div class="absolute left-0 top-2 flex gap-2">
                     <span class="rounded-r-lg bg-red-500 px-3 py-1.5 text-sm font-semibold uppercase tracking-wider text-white ">-50% </span>
                    </div>
                   </div>  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1">Makeup Kit</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$8.00</span>
                      <span class="text-sm text-red-500 line-through">$6.30</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
				  <!-- product - start -->
				  <div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
				   <div class="relative">
                    <img src="images/products/product8.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
					<div class="absolute left-0 top-2 flex gap-2">
                     <span class="rounded-r-lg bg-red-500 px-3 py-1.5 text-sm font-semibold uppercase tracking-wider text-white ">-60% </span>
                    </div>
                   </div>  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1">Microphone Pair</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$15.00</span>
                      <span class="text-sm text-red-500 line-through">$8.30</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
				  <!-- product - start -->
				  <div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
				   <div class="relative">
                    <img src="images/products/product9.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
					<div class="absolute left-0 top-2 flex gap-2">
                     <span class="rounded-r-lg bg-red-500 px-3 py-1.5 text-sm font-semibold uppercase tracking-wider text-white ">-35% </span>
                    </div>
                   </div>  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1">Lurxury Perfume</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$20.00</span>
                      <span class="text-sm text-red-500 line-through">$9.00</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
             
				    <!-- product - start -->
					<div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
				   <div class="relative">
                    <img src="images/products/product10.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
					<div class="absolute left-0 top-2 flex gap-2">
                     <span class="rounded-r-lg bg-red-500 px-3 py-1.5 text-sm font-semibold uppercase tracking-wider text-white ">-50% </span>
                    </div>
                   </div>  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1">Black Glasess</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$4.99</span>
                      <span class="text-sm text-red-500 line-through">$2.00</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
         
              </div>
            </div>
          </div>             
        </div>
      </div>  
    </div>
      <!-- sale ended  -->

<!-------------------------------------------------------------------------------------------->

<!--  recommended -->
<div class="py-6 sm:py-8 lg:py-12 p-5 mt-3">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
              <div class="mb-6 flex items-end justify-between gap-4">
                <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl">Recommended</h2>
          
                <a href="product.php" class="inline-block rounded-lg border bg-danger px-4 py-2 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base nav-link">Show more</a>
              </div>  
			  <hr>
              <div class="grid gap-x-4 gap-y-6 sm:grid-cols-2 md:gap-x-5 lg:grid-cols-4 xl:grid-cols-5 ">

                    <!-- product - start -->
				  <div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
                    <img src="images/products/product11.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1">Ladies Fashion Trouser</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$7.99</span>
                      <span class="text-sm text-red-500 line-through">$3.33</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
          
				  <!-- product - start -->
				  <div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
                    <img src="images/products/product12.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1">Ladies Simple Trouser</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$5.99</span>
                      <span class="text-sm text-red-500 line-through">$3.99</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
          
				  <!-- product - start -->
				  <div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
                    <img src="images/products/product1.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1">Men White T-Shrit</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$6.00</span>
                      <span class="text-sm text-red-500 line-through">$2.50</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
          
				  <!-- product - start -->
				  <div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
                    <img src="images/products/product14.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1">Vine</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$2.50</span>
                      <span class="text-sm text-red-500 line-through">$2.00</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->
          
                  <!-- product - start -->
				  <div style=" border: 1px groove; border-radius: 4px;" class="product-card bg-white"> 
                  <a href="#" class="group mb-2 block h-76 overflow-hidden  bg-gray-100 lg:mb-3 nav-link">
                    <img src="images/products/product15.jpg" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />  
                  <div class="flex flex-col p-1">
                    <p class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 product-name1  lg:text-xl text-lg mt-2 ms-1">Room Lamp</p>
					<div class="flex flex-col items-start  ms-1 mt-3">
                      <span class="font-bold text-gray-600 lg:text-lg">$11.00</span>
                      <span class="text-sm text-red-500 line-through">$4.00</span>
                    </div>
                      <div class="rating mt-1  ms-1">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="text-secondary">(5)</span>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- product - end -->     
              </div>
            </div>
          </div>             
        </div>
      </div>  
    </div>
      <!-- recommended ended  -->

<!-------------------------------------------------------------------------------------------->

	<!-- Blog -->
	<section class="sec-blog bg0 p-t-60 p-b-90">
		<div class="container">
			<div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Our Blogs
				</h3>
			</div>

			<div class="row">
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<a href="blog-detail.html">
								<img src="images/blog1.jpg" alt="IMG-BLOG">
							</a>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4">
										By
									</span>

									<span class="cl5">
										example
									</span>
								</span>

								<span>
									<span class="cl4">
										on
									</span>

									<span class="cl5">
										July 22, 2024 
									</span>
								</span>
							</div>

							<h4 class="p-b-12">
								<a href="blog-detail.html" class="mtext-101 cl2 hov-cl1 trans-04">
									8 Inspiring Ways to Wear Dresses in the Winter
								</a>
							</h4>

							<p class="stext-108 cl6">
							  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit natus autem, deleniti iusto obcaecati error quibusdam voluptatibus quas. Modi facere
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<a href="blog-detail.html">
								<img src="images/blog2.jpg" alt="IMG-BLOG">
							</a>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4">
										By
									</span>

									<span class="cl5">
										example
									</span>
								</span>

								<span>
									<span class="cl4">
										on
									</span>

									<span class="cl5">
										July 18, 2024
									</span>
								</span>
							</div>

							<h4 class="p-b-12">
								<a href="blog-detail.html" class="mtext-101 cl2 hov-cl1 trans-04">
									The Great Big List of Men’s Gifts for the Holidays
								</a>
							</h4>

							<p class="stext-108 cl6">
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit natus autem, deleniti iusto obcaecati error quibusdam voluptatibus quas. Modi facere
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<a href="blog-detail.html">
								<img src="images/blog3.jpg" alt="IMG-BLOG">
							</a>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4">
										By
									</span>

									<span class="cl5">
										example
									</span>
								</span>

								<span>
									<span class="cl4">
										on
									</span>

									<span class="cl5">
										July 18, 2024
									</span>
								</span>
							</div>

							<h4 class="p-b-12">
								<a href="blog-detail.html" class="mtext-101 cl2 hov-cl1 trans-04">
									our Exclusive cosmetics products used in all over country
								</a>
							</h4>

							<p class="stext-108 cl6">
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit natus autem, deleniti iusto obcaecati error quibusdam voluptatibus quas. Modi facere
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<a href="blog-detail.html">
								<img src="images/blog4.jpg" alt="IMG-BLOG">
							</a>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4">
										By
									</span>

									<span class="cl5">
										example
									</span>
								</span>

								<span>
									<span class="cl4">
										on
									</span>

									<span class="cl5">
										July 18, 2024
									</span>
								</span>
							</div>

							<h4 class="p-b-12">
								<a href="blog-detail.html" class="mtext-101 cl2 hov-cl1 trans-04">
									we recoganized healthy & reliable products delivered 100% safe 
								</a>
							</h4>

							<p class="stext-108 cl6">
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit natus autem, deleniti iusto obcaecati error quibusdam voluptatibus quas. Modi facere
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<a href="blog-detail.html">
								<img src="images/blog5.jpg" alt="IMG-BLOG">
							</a>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4">
										By
									</span>

									<span class="cl5">
										example
									</span>
								</span>

								<span>
									<span class="cl4">
										on
									</span>

									<span class="cl5">
										July 18, 2024
									</span>
								</span>
							</div>

							<h4 class="p-b-12">
								<a href="blog-detail.html" class="mtext-101 cl2 hov-cl1 trans-04">
									Our marketing competition is circuling on higher level stocks & trading
								</a>
							</h4>

							<p class="stext-108 cl6">
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit natus autem, deleniti iusto obcaecati error quibusdam voluptatibus quas. Modi facere
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<a href="blog-detail.html">
								<img src="images/blog6.jpg" alt="IMG-BLOG">
							</a>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4">
										By
									</span>

									<span class="cl5">
										example
									</span>
								</span>

								<span>
									<span class="cl4">
										on
									</span>

									<span class="cl5">
										July 2, 2024 
									</span>
								</span>
							</div>

							<h4 class="p-b-12">
								<a href="blog-detail.html" class="mtext-101 cl2 hov-cl1 trans-04">
									5 Winter-to-Spring Footwear Fashion Trends to Try Now
								</a>
							</h4>

							<p class="stext-108 cl6">
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit natus autem, deleniti iusto obcaecati error quibusdam voluptatibus quas. Modi facere
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<div class="bg-white py-6 sm:py-8 lg:py-12 mb-5">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <div class="flex flex-col overflow-hidden rounded-lg bg-light sm:flex-row md:h-80">
      <!-- image - start -->
      <div class="order-first h-48 w-full bg-gray-300 sm:order-none sm:h-auto sm:w-1/2 lg:w-2/5">
        <img src="images/support.jpg" loading="lazy" alt="Photo by Andras Vas" class="h-full w-full object-cover object-center" />
      </div>
      <!-- image - end -->

      <!-- content - start -->
      <div class="flex w-full flex-col p-4 sm:w-1/2 sm:p-8 lg:w-3/5">
        <h2 class="mb-4 text-xl font-bold text-gray-800 md:text-2xl lg:text-4xl">Help center</h2>

        <p class="mb-8 max-w-md text-gray-600">Need Any Help? Press the button given below to want any kind of help Thank you!</p>

        <div class="mt-auto">
          <a href="contact.php" class="inline-block w-25 nav-link rounded-lg bg-white px-8 py-3 text-center text-sm font-semibold text-gray-800 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:text-base">Contact support</a>
        </div>
      </div>
      <!-- content - end -->
    </div>
  </div>
</div>


	
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
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
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
   
		// header slider
		const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
let index = 0;

function showSlide(n) {
  slides.forEach(slide => slide.style.transform = `translateX(-${n * 100}%)`);
}

function setActiveDot(n) {
  dots.forEach(dot => dot.classList.remove('active'));
  dots[n].classList.add('active');
}

function nextSlide() {
  index = (index + 1) % slides.length;
  showSlide(index);
  setActiveDot(index);
}

function prevSlide() {
  index = (index - 1 + slides.length) % slides.length;
  showSlide(index);
  setActiveDot(index);
}

dots.forEach((dot, i) => dot.addEventListener('click', () => {
  index = i;
  showSlide(index);
  setActiveDot(index);
}));

nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);

setInterval(nextSlide, 3000); // Auto slide transition


		function redirectToLoginPage() {
    window.location.href = "login.php"; 
}
function redirectToRegisterPage() {
    window.location.href = "register.php"; 
}

document.addEventListener('DOMContentLoaded', function() {
    // Get the anchor tag and offcanvas element
    var toggleAnchor = document.getElementById('toggleOffcanvasAnchor');
    var offcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasTop'));

    // Add click event listener to the anchor tag
    toggleAnchor.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the default anchor behavior (scrolling to the top of the page)
      // Toggle the offcanvas
      offcanvas.toggle();
    });
  });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>