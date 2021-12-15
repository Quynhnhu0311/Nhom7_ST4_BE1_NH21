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
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<?php
						if(isset($_GET['action'])=='dangxuat'){
							unset($_SESSION['dangky']);
							header('location:register.php');
						}
					?>
					<ul class="header-links pull-right">
						<li>
							<a href="index.php?action=dangxuat">
								<?php if(isset($_SESSION['dangky'])): ?>
									<i class="fa fa-sign-out" aria-hidden="true"></i>LOG OUT : 
									<?php echo $_SESSION['dangky']; ?>
								<?php else: ?>
									<i class="fa fa-sign-out" aria-hidden="true"></i>My Account
								<?php endif; ?>
							</a>
						</li>
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
							<li><a href="index.php">Home</a></li>
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
					<form action="">
						<table class="table table-bordered">
							<tr>
								<th style="text-align: center;">STT</th>
								<th style="text-align: center;">Mã SP</th>
								<th style="text-align: center;">Image</th>
								<th style="text-align: center;">Tên Sản Phẩm</th>
								<th style="text-align: center;">Số Lượng</th>
								<th style="text-align: center;">Giá</th>
								<th style="text-align: center;">Tổng Giá</th>
								<th></th>
							</tr>
							
								<?php 
								if(!isset($_SESSION['cart'])){
									$_SESSION['cart'] = [];
								}
								$index = 0;
								foreach($getAllProducts as $value):
									foreach($cart as $key=>$qty):
										if($key == $value['id']):
								?>
							<tr>	
								<td style="text-align: center;"><?php echo(++$index); ?></td>
								<td style="text-align: center;"><?php echo $key; ?></td>
								<td style="text-align: center;"><img src="./img/<?php echo $value['pro_image']; ?>" alt="" style="height: 80px"></td>
								<td><?php echo $value['name']; ?></td>
								<form action="">
								<td style="text-align: center;">
									<div class="input-number">
											<?php echo $qty; ?>
									</div>
								</td>
								
								<td style="text-align: center;"><?php echo number_format($value['price'],0,',','.'); ?></td>
								<td style="text-align: center;"><?php echo number_format($value['price'] * $qty,0,',','.'); ?></td>
								<td style="text-align: center;; display: flex;">
									<button class="btn btn-danger" onclick="location.href='delDetail.php?id=<?php echo $key; ?>'">Delete</button>
									<button class="btn btn-danger "><a href="products.php?id=<?php echo $key; ?>&type_id=<?php echo $value['type_id']; ?>" style="color: #fff;">View</a></button>
								</td>
								<?php 
										endif;
									endforeach;
								endforeach;
								?>
							</tr>
						</table>
					</form>
					<table>
						<td style="display: flex;">
							<button class="btn btn-danger" style="margin-left : 430px;background-color: #1e1f29;border-color: #1e1f29;" onclick="location.href='index.php';">Quay Lại Trang Chủ</button>
							<button class="btn btn-danger" style="margin-left : 75px" onclick="location.href='checkout.php';">Check Out</button>
						</td>
					</table>
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