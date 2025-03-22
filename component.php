<?php
    
function component($productname, $productprice, $productimg, $productid){
    $element = "
    <div class=\"product-item studyroom col-lg-3\">
								<form action=\"index.php\"  method=\"post\">
									<div class=\"product discount product_filter\">
										
										<div class=\"product_image\">
											<img src=\"$productimg\" alt=\"wooden chair\">
										</div>
										<div class=\"favorite\"></div>
									
										<div class=\"product_info\">
											<h6 class=\"product_name\"><a>$productname</a></h6>
											<div class=\"product_price\"> &#8377 $productprice</div>
										</div>
									</div>
                                    <div>
									<button type=\"submit\" name=\"add\" class=\"cart_button\" >Add to cart</button>
                                    <button type=\"submit\" name=\"wish\" class=\"wishlist_btn\" >Add to Wishlist</button>
                                    </div>
									<input type='hidden' name='product_id' value='$productid'>
	                            </form>
								</div>









								
    ";
    echo $element;

}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-black\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-9 text-center\">
                            <br>
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: Decoratin'</small>
                                <h5 class=\"pt-2\">₹$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-success\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
?>



<?php


function wishElement($productimg, $productname,  $productid){
    $element = "
    
    <form action=\"wishlist.php?action=remove&id=$productid\" method=\"post\" class=\"wish-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-black\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-9 text-center\">
                            <br>
                                <h5 class=\"pt-2\">$productname</h5>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                                
                                
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
?>











<link rel="stylesheet" type="text/css" href="styles/component.css">