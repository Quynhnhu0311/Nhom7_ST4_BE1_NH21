<?php 
	session_start(); 
	require "config.php";
    require "models/db.php";
    require "models/product.php";
	require "models/protype.php";
	require "models/AddCart.php";
	require "models/CartDetail.php";
	$cartDetail = new CartDetail;
	$addCart = new addCart;
	$protype = new Protype;
    $product = new Product;
	$getAllProtype = $protype->getAllProtype();
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
		<!-- HEADER -->
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
								<a href="#" class="logo">
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

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<form action="">
						<td><h3 style="text-align: center;">Thông Tin Đơn Hàng</h3></td>
						<table class="table table-bordered">
							<tr>
								<th style="text-align: center;">STT</th>
								<th style="text-align: center;">Tên Sản Phẩm</th>
								<th style="text-align: center;">Số Lượng</th>
								<th style="text-align: center;">Giá</th>
								<th style="text-align: center;">Tổng Giá</th>
							
							</tr>
							
								<?php
								if(isset($_GET['id_member'])):
									$id_KH = $_GET['id_member'];
									$getManagement = $addCart->getManagement($id_KH);
									$index = 0;
									$total = 0;
									$subtotal = 0;
									foreach($getManagement as $value):
										$code = $value['code_cart'];
										$getOder = $cartDetail->getOder($code);
										foreach($getOder as $value1):
											$subtotal = $value1['price'] * $value1['soluong'];
								?>
							<tr>	
								<td style="text-align: center;"><?php echo(++$index); ?></td>
								<td><?php echo $value1['name']; ?></td>
								<form action="">
								<td style="text-align: center;">
									<div class="input-number">
											<?php echo $value1['soluong']; ?>
									</div>
								</td>
								
								<td style="text-align: center;"><?php echo number_format($value1['price'],0,',','.'); ?></td>
								<td style="text-align: center;"><?php echo number_format($subtotal,0,',','.'); ?></td>
								<?php $total += $subtotal; ?>
								<?php
											endforeach;
										endforeach;
									endif;
								?>
								
							</tr>
						</table>
						<td><h4>Total : <?php echo number_format($total,0,',','.'); ?> VNĐ</h4></td>
					</form>
					<table>
						<td style="display: flex;">
							<button class="btn btn-danger" style="margin-left : 515px;background-color: #1e1f29;border-color: #1e1f29;" onclick="location.href='index.php';">Quay Lại Trang Chủ</button>
						</td>
					</table>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

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
