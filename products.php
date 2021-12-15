<?php 
	session_start(); 
	require "config.php";
    require "models/db.php";
    require "models/product.php";
	require "models/protype.php";
	require "models/admin.php";
	require "models/AddCart.php";
	require "models/CartDetail.php";
	require "models/rating.php";
	$rating = new Rating;
    $admin = new Admin;
	$addcart = new AddCart;
	$cart_detail = new CartDetail;
	$protype = new Protype;
    $product = new Product;
	$getAllProtype = $protype->getAllProtype();
	$getAllProducts = $product->getAllProducts();
    $getNewProducts = $product->getNewProducts();
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
			if(!isset($_SESSION['cart'])){
				$_SESSION['cart'] = [];
			}
			$cart = $_SESSION['cart'];
			
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
									<button class="search-btn">Search</button>
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
											<i class="fa fa-sign-out" aria-hidden="true"></i>LOG OUT : 
											<?php 
												if(isset($_SESSION['dangky']))
												{ 
													echo $_SESSION['dangky'];
												} 
											?>
										</a>
									</li>
								</ul>
								
								<!-- Cart -->
									<div class="dropdown" onclick="location.href='viewcart.php';">
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
											<div class="qty"><?php echo $count1; ?></div>
											<?php
														endif;
													endforeach;
												endforeach;
											?>
										</a>
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
						<li class="active"><a href="index.php">Home</a></li>
						<?php 
							foreach($getAllProtype as $value):
						?>
						<li><a href="getProtype.php?type_id=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a></li>
						<?php endforeach; ?>
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
							<li class="active">Product Details</li>
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
					<!-- Product main img -->
					<form action="" method="post">
						<?php 
							if(isset($_GET['id'])):
								$id = $_GET['id'];
								$getProductById = $product->getProductById($id);
									foreach($getProductById as $value):
						?>
						<div class="col-md-5 col-md-push-2">
							<div id="product-main-img">
								<div class="product-preview">
									<img src="./img/<?php echo $value['pro_image']; ?>" alt="" style="width: 265px;">
								</div>
							</div>
						</div>
						<!-- /Product main img -->

						<!-- Product details -->
						<div class="col-md-5">
							<div class="product-details" style="margin-left: 45px;">
								<h2 class="product-name"><?php echo $value['name']; ?></h2>
								<div>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
								</div>
								<div>
									<h3 class="product-price"><?php echo number_format($value['price'],0,',','.'); ?> VND</h3>
									<span class="product-available">In Stock</span>
								</div>
								<div class="product-preview">
									<img src="./img/<?php echo $value['pro_image']; ?>" alt="" style="width: 90px;">
								</div>
								<div class="add-to-cart" style="margin-top: 25px;">
									<button class="add-to-cart-btn" name="dathang"><i class="fa fa-shopping-cart"><a href="products.php?id=<?php echo $value['id']?>&type_id=<?php echo $value['type_id'];?>"></i> add to cart</a></button>
								</div>
							</div>
						</div>
					</form>
					
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p><?php echo $value['description']; ?></p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->
							<?php 
									endforeach; 
								endif;
							?>	
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>
					
					<!-- product -->
					<?php
					 if(isset($_GET['type_id'])):
						$type_id = $_GET['type_id'];
						$getProductRelate = $product->getProductRelated($type_id);
						foreach($getProductRelate as $value):
					?>
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/<?php echo $value['pro_image']?>" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="products.php?id=<?php echo $value['id']; ?>&type_id=<?php echo $value['type_id']; ?>"><?php echo $value['name']?></a></h3>
								<h4 class="product-price"><?php echo number_format($value['price'],0,',','.') ?>VND </h4>
								<div class="product-rating"></div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"><a href="products.php?id=<?php echo $value['id']?>&type_id=<?php echo $value['type_id'];?>"></i> add to cart</button>
							</div>
						</div>
					</div>
					<?php
							endforeach;
						endif;
					?>
					<!-- /product -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->
		<?php include "footer.php"; ?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
