<?php 
session_start();
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/admin.php";
require "models/AddCart.php";
require "models/CartDetail.php";
$addcart = new AddCart;
$cartDetail = new CartDetail;
$admin = new Admin;
$product = new Product;
$getAllProducts = $product->getAllProducts();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		
		

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<?php
        	$cart = array();
        	if(isset($_GET['id'])){
            	$id = $_GET['id'];
            	if(isset($_SESSION['cart'][$id])){
                	$_SESSION['cart'][$id]++;
            	}
            	else{
                	$_SESSION['cart'][$id] = 1;
            	}
        	}
			if(!isset($_SESSION['cart'])){
				$_SESSION['cart'] = [];
			}
        	$cart = $_SESSION['cart'];
    	?>
		<?php
			if(isset($_SESSION['id_member'])){
				$id_KH = $_SESSION['id_member'];
				$code_cart = rand(0,9999);
				$getCart = $addcart->getCart($id_KH,$code_cart);
				if($getCart){
					foreach($_SESSION['cart'] as $key=>$qty){
						foreach($getAllProducts as $value){
							if($key == $value['id']){
								$id_sanpham = $key;
								$soluong = $qty;
								$getCartDetail = $cartDetail->getCartDetail($id_sanpham,$code_cart,$soluong);
							}
						}
					}
				}
				unset($_SESSION['cart']);
			}
		?>
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
			</div>
			<!-- /TOP HEADER -->
			
			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="result.php" method="get">
									<select class="input-select">
										<option value="0">All Categories</option>
									</select>
									<input class="input" placeholder="Search here" name="keyword">
									<button class="search-btn" >Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<?php
									if(isset($_GET['action'])=='dangxuat'){
										unset($_SESSION['dangky']);
										header('location:register.php');
									}
								?>
								<ul class="header-links pull-right">
									<li>
										<a href="index.php?action=dangxuat">
										<?php
											if(isset($_SESSION['dangky'])):
										?>
											<i class="fa fa-sign-out" aria-hidden="true"></i>LOG OUT : 
											<?php echo $_SESSION['dangky']; ?>
										<?php else: ?>
											<i class="fa fa-sign-out" aria-hidden="true"></i>My Account
										<?php endif; ?>
										</a>
									</li>
								</ul>

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		<!-- SECTION -->
		<form action="success.php" method="post">
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-7">
							<!-- Billing Details -->
							<div class="billing-details">
								<div class="section-title">
									<h3 class="title">Billing address</h3>
								</div>
								<div class="form-group">
									<input class="input" type="text" name="first-name" placeholder="First Name" required>	
								</div>
								<div class="form-group">
									<input class="input" type="text" name="last-name" placeholder="Last Name" required>
									
								</div>
								<div class="form-group">
									<input class="input" type="text" name="address" placeholder="Address" required>
									
								</div>
								<div class="form-group">
									<input class="input" type="text" name="city" placeholder="City" required>
									
								</div>
								<div class="form-group">
									<input class="input" type="text" name="country" placeholder="Country" required>
									
								</div>
								<div class="form-group">
									<input class="input" type="tel" name="tel" placeholder="Telephone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
									
								</div>
							</div>
							<!-- /Billing Details -->

							<!-- Order notes -->
							<div class="order-notes">
								<textarea class="input" placeholder="Order Notes"></textarea>
							</div>
							<!-- /Order notes -->
						</div>

						<!-- Order Details -->
					
						<div class="col-md-5 order-details">
							<div class="section-title text-center">
								<h3 class="title">Your Order</h3>
							</div>
						
							<div class="order-summary">
							
								<div class="order-col">
									<div><strong>PRODUCT</strong></div>
									<div><strong>TOTAL</strong></div>
								</div>
								<div class="order-products">
									<?php
									$total = 0;
            							foreach($getAllProducts as $value):
                							foreach($cart as $key=>$qty):
                        						if($key == $value['id']):
                         							$subTotal = $value['price'] * $qty;
                         							$subCount = $qty;
            						?>
									<div class="order-col">
										<div>x<?php echo $qty; ?> <?php echo $value['name'];  ?></div>
										<div><?php echo number_format($subTotal,0,',','.');?> VND</div>
									</div>
									<?php 
                						$total += $subTotal;
            						?>
									<?php
                        						endif;
                    						endforeach;
                						endforeach;
            						?>
								</div>
								<div class="order-col">
									<div><strong>SHIPPING</strong></div>
									<div><strong>FREE</strong></div>
								</div>
								<div class="order-col">
									<div><strong>TOTAL</strong></div>
									<div><strong class="order-total"><?php echo number_format($total,0,',','.');?> VND</strong></div>
								</div>
							
							</div>
							<div class="payment-method">
								<div class="input-radio">
									<input checked="checked" type="radio" name="payment" id="payment-1" value="Delivery" required>
									<label for="payment-1">
										<span></span>
										Cash On Delivery
									</label>
								</div>
								<div class="input-radio">
									<input type="radio" name="payment" id="payment-2" value="Payment" required>
									<label for="payment-2">
										<span></span>
										Cheque Payment
									</label>
								</div>
								<div class="input-radio">
									<input type="radio" name="payment" id="payment-3" value="System" required>
									<label for="payment-3">
										<span></span>
										Paypal System
									</label>
								</div>
							</div>
							
							<button type="submit" value="Submit" name="thanhtoan" class="primary-btn order-submit">Place order</button>
						<!-- /Order Details -->
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
		</form>
		<!-- /SECTION -->

		<?php 
			include "footer.php";
		?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
