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
	<link rel="stylesheet" type="text/css" href="styles/ham.css">

	<title>Decoratin'</title>
	<link rel="icon" href="images/D.png" type="image/icon type ">

</head>
<body>
	<div class="super_container">
	<?php
require_once('header.php');

?>



<div class="kitbg">
	<img src="images/kitbg.jpg" >
	<div class="centered"><h1>KITCHEN ACCESSORIES</h1></div>
</div>
<br>
<div> 
<div class="container-fluid padding">
<div class="row align-items-bottom text-center padding">
	<div class="col-3 ">
		<div class="card">
			<img class="card-img-top" src="images/kit7.jpg">
			<div class="product-item">
					<h6 class="product_name"><a href="#">Pantry Organizer</a></h6>
				<div class="product_price"> ₹2000.00</div>
			<div class="red_button add_to_cart_button"><a href="#">Add to cart</a></div>
			</div>
		</div>
	</div>
	<div class="col-3 ">
		<div class="card">
			<img class="card-img-top" src="images/kit1.jpg">
			<div class="product-item">
					<h6 class="product_name"><a href="#">Jute Table Mats</a></h6>
				<div class="product_price"> ₹600.00</div>
			<div class="red_button add_to_cart_button"><a href="#">Add to cart</a></div>
			</div>
		</div>
	</div>
	<div class="col-3">
		<div class="card">
			<img class="card-img-top" src="images/kit4.jpg">
			<div class="product-item">
					<h6 class="product_name"><a href="#">Plates Set</a></h6>
				<div class="product_price"> ₹2500.00</div>
				<div class="red_button add_to_cart_button"><a href="#">Add to cart</a></div>
			</div>
		</div>
	</div>
		<div class="col-3">
		<div class="card">
			<img class="card-img-top" src="images/kit5.jpg">
			<div class="product-item">
				<h6 class="product_name"><a href="#">Slider shelf</a></h6>
				<div class="product_price"> ₹2200.00</div>
				<div class="red_button add_to_cart_button"><a href="#">Add to cart</a></div>
			</div>
		</div>
	</div>
</div>
</div>
<br>
<div class="container-fluid padding">
<div class="row align-items-bottom text-center padding">
		<div class="col-3">
	</div>
			<div class="col-3">
		<div class="card">
			<img class="card-img-top" src="images/kit2.jpg">
			<div class="product-item">
					<h6 class="product_name"><a href="#">Minimalistic Dinner set </a></h6>
				<div class="product_price"> ₹1500.00</div>
				<div class="red_button add_to_cart_button"><a href="#">Add to cart</a></div>
			</div>
		</div>
	</div>
			<div class="col-3">
		<div class="card">
			<img class="card-img-top" src="images/kit3.jpg">
			<div class="product-item">
				<h6 class="product_name"><a href="#">Hanging Lights</a></h6>
				<div class="product_price"> ₹2200.00</div>
				<div class="red_button add_to_cart_button"><a href="#">Add to cart</a></div>
			</div>
		</div>
	</div>
</div>
</div>
<footer id="contact">
<div class="container-fluid padding">
	<div class="row">
		<div class="text-center col-12">
			<a href="#">BLOG</a>
			<span>|</span>
			<a href="#">FAQS</a>
			<span>|</span>
			<a href="#">Connect</a>
		</div>
			<div class="social-media col-12 text-center">
		<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		<a href="#"><i class="fab fa-youtube"></i></a>
		<a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
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