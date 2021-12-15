<?php 
session_start();
require "config.php";
require "models/db.php";
require "models/product.php";
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

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
		<?php
        	if(isset($_GET['id'])){
            	$id = $_GET['id'];
            	if(isset($_SESSION['cart'][$id])){
                	$_SESSION['cart'][$id]++;
            	}
            	else{
                	$_SESSION['cart'][$id] = 1;
            	}
        	}
    	?>
		<!-- HEADER -->
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
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
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
            								foreach($_SESSION['cart'] as $key=>$qty):
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
                									foreach($_SESSION['cart'] as $key=>$qty):
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

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Detail Cart</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Detail Cart</li>
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
					
					<table class="table table-bordered">
						<tr>
							<th>STT</th>
							<th>Image</th>
							<th>Tên Sản Phẩm</th>
							<th>Số Lượng</th>
							<th>Giá</th>
							<th>Tổng Giá</th>
							<th></th>
						</tr>
						
							<?php 
							if(!isset($_SESSION['cart'])){
								$_SESSION['cart'] = [];
							}
							$index = 0;
							foreach($getAllProducts as $value):
								foreach($_SESSION['cart'] as $key=>$qty):
									if($key == $value['id']):
							?>
						<tr>	
							<td><?php echo(++$index); ?></td>
							<td><img src="./img/<?php echo $value['pro_image']; ?>" alt="" style="height: 80px"></td>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $qty; ?></td>
							<td><?php echo number_format($value['price'],0,',','.'); ?></td>
							<td><?php echo number_format($value['price'] * $qty,0,',','.'); ?></td>
							<td><button class="btn btn-danger" onclick="location.href='delDetail.php?id=<?php echo $key; ?>'">Delete</button></td>
							<?php 
									endif;
								endforeach;
							endforeach;
							?>
						</tr>
					</table>
					<button class="btn btn-danger" style="margin-left : 465px" onclick="location.href='index.php';">Quay Lại Trang Chủ</button>
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