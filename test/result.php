<?php 
session_start();
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;
$getAllProducts = $product->getAllProducts();
$getTopselling = $product->getTopselling();
$getLaptops = $product->getLaptops();
$getPhones = $product->getPhones();
$getHeadphones = $product->getHeadphones();
$getCameras = $product->getCameras();
$getWatchs = $product->getWatchs();
$getSpeaks = $product->getSpeaks();
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
        		$cart = $_SESSION['cart'];
    		?>
			<header>
				<!-- TOP HEADER -->
				<div id="top-header">
					<div class="container">
						<ul class="header-links pull-left">
							<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
							<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
							<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
						</ul>
						<ul class="header-links pull-right">
							<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
							<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
						</ul>
					</div>
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
										<button class="search-btn">Search</button>
									</form>
								</div>
							</div>
							<!-- /SEARCH BAR -->

							<!-- ACCOUNT -->
							<div class="col-md-3 clearfix">
								<div class="header-ctn">
									<!-- Wishlist -->
									<div>
										<a href="#">
											<i class="fa fa-heart-o"></i>
											<span>Your Wishlist</span>
											<div class="qty">2</div>
										</a>
									</div>
									<!-- /Wishlist -->

									<!-- Cart -->
									<div class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
											<i class="fa fa-shopping-cart"></i>
											<span>Your Cart</span>
        									<?php
        										$count1 = 0;
            									foreach($cart as $key=>$qty):
                									foreach($getAllProducts as $value):
                    									if($key == $value['id']):
                        									$subCount1 = $qty;
        									?>
        									<?php $count1 += $subCount1; ?>
											<div class="qty"><?php echo $count1 ?></div>
        									<?php
                    								endif;
                								endforeach;
            								endforeach;
        									?>
										</a>
    
    									<div class="cart-dropdown">
	    									<div class="cart-list">
            								<?php
            									$total = 0;
            									$count = 0;
            									foreach($getAllProducts as $value):
                									foreach($cart as $key=>$qty):
                        								if($key == $value['id']):
                         									$subTotal = $value['price'] * $qty;
                         									$subCount = $qty;
            								?>
		    								<div class="product-widget">
			   									<div class="product-img">
				    								<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
			    								</div>
			    								<div class="product-body">
				    								<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
				    								<h4 class="product-price"><span class="qty">x<?php echo $qty ?></span><?php echo number_format($value['price'])?></h4>
                								</div>
			    								<a href="delCheckout.php?id=<?php echo $key; ?>" class="delete"><i class="fa fa-close"></i></a>
		    								</div>
            								<?php 
                								$total += $subTotal; 
                								$count += $subCount;
            								?>
            								<?php
                        								endif;
                    								endforeach;
                								endforeach;
            								?>
        								</div>
        								<div class="cart-summary">
	        								<small><?php echo $count; ?> Item(s) selected</small>
	        								<h5>SUBTOTAL: <?php echo number_format($total); ?></h5>
        								</div>
        								<div class="cart-btns">
	        								<a href="viewcart.php">View Cart</a>
	        								<a href="checkout.php">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
        								</div>
									</div>
									<!-- /Cart -->

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

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Hot Deals</a></li>
						<li class="active"><a href="AllProducts">All Products</a></li>
						<li><a href="Laptop.php">Laptop</a></li>
						<li><a href="Smartphones.php">Smartphones</a></li>
						<li><a href="#">Cameras</a></li>
						<li><a href="#">Headphones</a></li>
                        <li><a href="#">Watchs</a></li>
                        <li><a href="#">Speakers</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li><a href="AllProducts.php">All Categories</a></li>
							<li>Search</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										Laptops
										<small>(120)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-2">
									<label for="category-2">
										<span></span>
										Smartphones
										<small>(740)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-3">
									<label for="category-3">
										<span></span>
										Cameras
										<small>(1450)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-4">
									<label for="category-4">
										<span></span>
										Headphones
										<small>(578)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-5">
									<label for="category-5">
										<span></span>
										Watchs
										<small>(120)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-6">
									<label for="category-6">
									<?php 
										foreach($cart as $key=>$qty):
											foreach($getSpeaks as $value): 
												if($key == $value['id']):?>
										<span></span>
										Speakers
										<small><?php echo $qty; ?></small>
									<?php 
												endif;
											endforeach;
										endforeach; ?>
									</label>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Brand</h3>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										SAMSUNG
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-2">
									<label for="brand-2">
										<span></span>
										LG
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-3">
									<label for="brand-3">
										<span></span>
										SONY
										<small>(755)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-4">
									<label for="brand-4">
										<span></span>
										SAMSUNG
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-5">
									<label for="brand-5">
										<span></span>
										LG
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-6">
									<label for="brand-6">
										<span></span>
										SONY
										<small>(755)</small>
									</label>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<?php 
							if(isset($_GET['keyword'])):
								$keyword = $_GET['keyword'];
								$search = $product->search($keyword);
									foreach($search as $value):
							?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'],0,',','.') ?>VND</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
							</div>
							<!-- /product -->
							<?php endforeach; ?>
							<?php endif; ?>
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
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
