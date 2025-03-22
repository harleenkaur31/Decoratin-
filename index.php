<?php
//start session
session_start();

require_once('CreateDb.php');
require_once('component.php');


//Create instance of class CreateDb

$database= new CreateDb('decoratin','Producttb');

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


///////////////////////////////////////////////////


if (isset($_POST['wish'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['wish'])){

        $item_array_id = array_column($_SESSION['wish'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the wishlist..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['wish']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['wish'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['wish'][0] = $item_array;
        print_r($_SESSION['wish']);
    }
}





?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- font Awesome Cdn -->
	<script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>

	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
		integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<!-- Owl Carousel File-->
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">

	<!-- CSS File -->
	<link rel="stylesheet" type="text/css" href="styles/style.css">

	<title>Decoratin'</title>
	<link rel="icon" href="images/D.png" type="image/icon type ">



</head>

<body>

	<div class="super_container">


<?php
require_once('header.php');

?>
	
	

		<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>



		<div class="content-logout">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>





		<!-- Slider -->
		<div class="main_slider" style="background-image: url(images/bg1.jpg);">
			<div class="container fill_hight">

				<div class="row align-items-center fill_hight">
					<div class="col">
						<div class="main_slider_content text-left">
							<h6>Winter Collection 2021</h6>
							<h1>Get upto 30% Off New Arrivals</h1>
							<div class="red_button shop_now_button text-left">
								<a href="header.php#new">Shop Now </a>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Banner -->
		<div class="banner" id="shop">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="banner_item align-item-center" style="background-image: url(images/banner1.jpg);">
							<div class="banner_category">
								<a href="#">Study room</a>
							</div>

						</div>

					</div>


					<div class="col-md-4">
						<div class="banner_item align-item-center" style="background-image: url(images/banner2.jpg) ;">
							<div class="banner_category">
								<a href="#">Balcony garden </a>
							</div>

						</div>

					</div>
					<div class="col-md-4">
						<div class="banner_item align-item-center" style="background-image: url(images/banner3.jpg);">
							<div class="banner_category">
								<a href="#">Bed room</a>
							</div>

						</div>

					</div>

				</div>
			</div>

			<!--NEW ARRIVALS-->
			<div class="new_arrivals">
				<div class="container" style="padding: 0 !important;">
					<div class="row">
						<div class="col text-center">
							<div class="section_title new_arrivals_title ">
								<h2 id="new">New Arrivals</h2>
							</div>
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col text-center">
							<div class="new_arrivals_sorting">
								<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
									<li class="grid_sorting_button button d-flex flex-column justify-content align-items-center active is-checked"
										data-filter="*">All</li>
									<li class="grid_sorting_button button d-flex flex-column justify-content align-items-center "
										data-filter=".studyroom">Study Room</li>
									<li class="grid_sorting_button button d-flex flex-column justify-content align-items-center "
										data-filter=".gardenbalcony">Balcony Garden</li>
									<li class="grid_sorting_button button d-flex flex-column justify-content align-items-center "
										data-filter=".bedroom">Bedroom</li>

								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="product-grid"
								data-isotope='{"itemSelector": " .product-item", "layoutMode": "fitRows"}'>
<?php

$result = $database->getData();
while ($row = mysqli_fetch_assoc($result)){
	component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
}
?>
							
							</div>
						</div>
					</div>

				</div>
			</div>

			<!--Deal of the week -->

	<section id="deal">
		<div class="row text-center">
		<div class="col-6">
		<div class="deal_img align-item-center">
								   <img src="images/deal_ofthe_week.jpg"  alt="">
   
							   </div>
							   </div>
							   <div class="col-6">
	<h1 id="clock">Deal Of The Day</h1> 
   <div id="clockdiv"> 
	 <div> 
	   <span class="days d-inline-flex flex-column justify-content-center align-items-center" id="day"></span> 
	   <div class="smalltext">Day</div> 
	 </div> 
	 <div> 
	   <span class="hours d-inline-flex flex-column justify-content-center align-items-center" id="hour"></span> 
	   <div class="smalltext">Hours</div> 
	 </div> 
   
	 <div> 
	   <span class="minutes d-inline-flex flex-column justify-content-center align-items-center" id="minute"> </span>
	   <div class="smalltext">Minutes</div> 
	 </div> 
	 <div> 
	   <span class="seconds d-inline-flex flex-column justify-content-center align-items-center" id="second"></span> 
	   <div class="smalltext">Seconds</div> 
	 </div> 
   </div> 
   </div>
   </div>
   </section>
  


		<!--Benifit section-->

		<div class="benefit">
			<div class="container">
				<div class="row benefit_row">


					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon">
								<i class="fa fa-truck" aria-hidden="true"></i>
							</div>

							<div class="benefit_content">
								<h6>Free Shipping </h6>
								
							</div>

						</div>

					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon">
								<i class="fa fa-undo" aria-hidden="true"></i>
							</div>

							<div class="benefit_content">
								<h6>45 days return </h6>
								
							</div>

						</div>

					</div>

					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon">
								<i class="fa fa-money" aria-hidden="true"></i>
							</div>

							<div class="benefit_content">
								<h6>Cash on Delivery </h6>
							
							</div>

						</div>

					</div>

					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon">
								<i class="fa fa-clock-o" aria-hidden="true"></i>
							</div>

							<div class="benefit_content">
								<h6>Open all week </h6>
								<p> 10am - 9pm</p>
							</div>

						</div>

					</div>




				</div>
			</div>
		</div>






	</div>


	<!-- Blogs -->
	<div class="blogs" id="blog">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Latest Blogs</h2>
					</div>
				</div>
			</div>

			<div class="row blogs_container">

				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/blog_1.jpg)"></div>
						<div
							class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog-title">SIMPLE WAYS TO GIVE YOUR HOME A QUICK REFRESH</h4>
							<span class="blog_meta">by admin| sep 18,2021</span>
							<a class="blog_more" href="blog1.html" target="_blank">Read More</a>

						</div>
					</div>
				</div>

				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/blog_2.jpg)"></div>
						<div
							class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog-title">THESE ITEMS WILL CREATE THE PERFECT ATMOSPHERE IN YOUR HOME</h4>
							<span class="blog_meta">by admin| sep 30,2021</span>
							<a class="blog_more" href="blog2.html" target="_blank">Read More</a>

						</div>
					</div>
				</div>

				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/blog_3.jpg)"></div>
						<div
							class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog-title">THESE ARE THE BEST DECORATING TIPS TO CREATE YOUR PERFECT HOME</h4>
							<span class="blog_meta">by admin| oct 01,2021</span>
							<a class="blog_more" href="blog3.html" target="_blank">Read More</a>

						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
<!-- footer -->
<footer id="contact">
	<div class="container-fluid padding">
		<div class="row">
<!-- 			<div class="text-center col-12">
			<hr style="height:2px;border-width:0;background-color:#FFFFFF">
				<a href="#">BLOG</a>
				<span>|</span>
				<a href="#">FAQS</a>
				<span>|</span>
				<a href="#">Connect</a>
			</div> -->
				<div class="social-media col-12 text-center">
					<br>
			<a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
			<a href="https://www.skype.com"><i class="fa fa-skype" aria-hidden="true"></i></a>
			<a href="https://www.pinterest.com"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
		</div>

			<div class="address text-center col-6">
	
				<h3>Contact Us</h3>
				<hr width="50%" style=" background-color:#C6C6C6">
				<br>
				<p>+919876543210</p>
				<p>customercare@decorat.in</p>
				<p>LA, California - 90069</p>
			</div>
			<div class="col-6">
				<br><br>
	<p style="text-align: center;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13216.286293974747!2d-118.39047831099246!3d34.09330685922985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2beb8af5eeedf%3A0x5679c6c7a1e5c830!2sWest%20Hollywood%2C%20CA%2090069%2C%20USA!5e0!3m2!1sen!2sin!4v1633606091717!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</p>
	</div>
			<div class="copyright text-center col-12">
				<hr style=" background-color:#C6C6C6">
			<h5>&copy;2021 All Rights Reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by
				<span>DECORATIN'</span></h5>
				</div>
		</div>
		
	</footer>

	<!---------------------- Javascript Files ---------------------->
	<!-- jquery JS File -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS CDN -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
		integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
		crossorigin="anonymous"></script>
	<!-- Isotope JS File -->
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<!-- Owl Carousel JS File -->
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>

	<script src="js/custom.js"></script>

</body>

</html>