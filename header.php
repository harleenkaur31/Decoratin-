	<!-- Header -->
    <header class=" header trans_300">

<!-- main Navigation -->

<div class="main_nav_container" id="home">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-right">
                <div class="logo_container">
                    <a href="#">Decorat<span>in'</span></a>
                </div>
                <nav class="navbar">
                    <ul class="navbar_menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#shop">Shop</a></li>
                        <li><a href="index.php#deal">Deal of the Day Offer</a></li>
                        <li><a href="index.php#new">New Arrivals</a></li>
                        <li><a href="index.php#blog">Blog</a></li>
                        <li><a href="index.php#contact">Contact Us</a></li>
                    </ul>

                    <ul class="navbar_user">
                        
                        <li><a href="login.php"><i class="fa fa-user" arial-hidden="true"></i></a></li>
                        <li><a href="wishlist.php"><i class="fa fa-heart-o" arial-hidden="true"></i></a></li>
                        <li class="checkout">
                            
                            <a href="cart.php" target="_blank">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              

<?php

if (isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
    echo "<span id=\"cart_count\" class=\"checkout_items\">$count</span>";
}else{
    echo "<span id=\"cart_count\" class=\"checkout_items\">0</span>";
}

?>


                            </a>
                        </li>
                    </ul>

                   
                </nav>
            </div>
        </div>
    </div>
</div>


</header>

