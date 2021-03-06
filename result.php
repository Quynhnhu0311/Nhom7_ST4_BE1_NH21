<?php 
session_start();
    require "config.php";
    require "models/db.php";
    require "models/product.php";
	require "models/protype.php";
	require "models/admin.php";
	require "models/AddCart.php";
	require "models/CartDetail.php";
	require "models/manufacture.php";
    $admin = new Admin;
	$addcart = new AddCart;
	$cart_detail = new CartDetail;
	$protype = new Protype;
    $product = new Product;
	$manufacture = new Manufacture;
	$getAllProtype = $protype->getAllProtype();
	$getAllProducts = $product->getAllProducts();
    $getNewProducts = $product->getNewProducts();
    $getLaptops = $product->getLaptops();
    $getPhones = $product->getPhones();
    $getHeadphones = $product->getHeadphones();
    $getCameras = $product->getCameras();
    $getWatchs = $product->getWatchs();
    $getSpeaks = $product->getSpeaks();
    $getTopselling = $product->getTopselling();
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
												<div class="qty"><?php echo $count1 ?></div>
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
							<li>All Categories</li>
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
								<?php
									$getLaptop = $protype->getLaptop();
									foreach($getLaptop as $value):
								?>
								<div class="input-checkbox">
									<input type="checkbox" id="category-1" onclick="location.href='getProtype.php?type_id=<?php echo $value['type_id'];?>';">
									<label for="category-1">
										<span></span>
										<?php echo $value['type_name']; ?>
										<small>(<?php echo $value['soluong_types']; ?>)</small>
									</label>
								</div>
								<?php endforeach; ?>
								<?php
									$getPhone = $protype->getPhone();
									foreach($getPhone as $value):
								?>
								<div class="input-checkbox">
									<input type="checkbox" id="category-2" onclick="location.href='getProtype.php?type_id=<?php echo $value['type_id'];?>';">
									<label for="category-2">
										<span></span>
										<?php echo $value['type_name']; ?>
										<small>(<?php echo $value['soluong_types']; ?>)</small>
									</label>
								</div>
								<?php endforeach; ?>
								<?php
									$getCamera = $protype->getCamera();
									foreach($getCamera as $value):
								?>
								<div class="input-checkbox">
									<input type="checkbox" id="category-3" onclick="location.href='getProtype.php?type_id=<?php echo $value['type_id'];?>';">
									<label for="category-3">
										<span></span>
										<?php echo $value['type_name']; ?>
										<small>(<?php echo $value['soluong_types']; ?>)</small>
									</label>
								</div>
								<?php endforeach; ?>
								<?php
									$getHeadPhone = $protype->getHeadPhone();
									foreach($getHeadPhone as $value):
								?>
								<div class="input-checkbox">
									<input type="checkbox" id="category-4" onclick="location.href='getProtype.php?type_id=<?php echo $value['type_id'];?>';">
									<label for="category-4">
										<span></span>
										<?php echo $value['type_name']; ?>
										<small>(<?php echo $value['soluong_types']; ?>)</small>
									</label>
								</div>
								<?php endforeach; ?>
								<?php
									$getWatch = $protype->getWatch();
									foreach($getWatch as $value):
								?>
								<div class="input-checkbox">
									<input type="checkbox" id="category-5" onclick="location.href='getProtype.php?type_id=<?php echo $value['type_id'];?>';">
									<label for="category-5">
										<span></span>
										<?php echo $value['type_name']; ?>
										<small>(<?php echo $value['soluong_types']; ?>)</small>
									</label>
								</div>
								<?php endforeach; ?>
								<?php
									$getMegaPhone = $protype->getMegaPhone();
									foreach($getMegaPhone as $value):
								?>
								<div class="input-checkbox">
									<input type="checkbox" id="category-6" onclick="location.href='getProtype.php?type_id=<?php echo $value['type_id'];?>';">
									<label for="category-6">
										<span></span>
										<?php echo $value['type_name']; ?>
										<small>(<?php echo $value['soluong_types']; ?>)</small>
									</label>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Brand</h3>
							<div class="checkbox-filter">
								<?php
									$getSamSung = $manufacture->getSamSung();
									foreach($getSamSung as $value):
								?>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-1" onclick="location.href='getManu.php?manu_id=<?php echo $value['manu_id'];?>';">
									<label for="brand-1">
										<span></span>
										<?php echo $value['manu_name']; ?>
										<small>(<?php echo $value['soluong_manu']; ?>)</small>
									</label>
								</div>
								<?php endforeach; ?>
								<?php
									$getApple = $manufacture->getApple();
									foreach($getApple as $value):
								?>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-2" onclick="location.href='getManu.php?manu_id=<?php echo $value['manu_id'];?>';">
									<label for="brand-2">
										<span></span>
										<?php echo $value['manu_name']; ?>
										<small>(<?php echo $value['soluong_manu']; ?>)</small>
									</label>
								</div>
								<?php endforeach; ?>
								<?php
									$getAsus = $manufacture->getAsus();
									foreach($getAsus as $value):
								?>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-3" onclick="location.href='getManu.php?manu_id=<?php echo $value['manu_id'];?>';">
									<label for="brand-3">
										<span></span>
										<?php echo $value['manu_name']; ?>
										<small>(<?php echo $value['soluong_manu']; ?>)</small>
									</label>
								</div>
								<?php endforeach; ?>
								<?php
									$getOppo = $manufacture->getOppo();
									foreach($getOppo as $value):
								?>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-4" onclick="location.href='getManu.php?manu_id=<?php echo $value['manu_id'];?>';">
									<label for="brand-4">
										<span></span>
										<?php echo $value['manu_name']; ?>
										<small>(<?php echo $value['soluong_manu']; ?>)</small>
									</label>
								</div>
								<?php endforeach; ?>
								<?php
									$getSony = $manufacture->getSony();
									foreach($getSony as $value):
								?>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-5" onclick="location.href='getManu.php?manu_id=<?php echo $value['manu_id'];?>';">
									<label for="brand-5">
										<span></span>
										<?php echo $value['manu_name']; ?>
										<small>(<?php echo $value['soluong_manu']; ?>)</small>
									</label>
								</div>
								<?php endforeach; ?>
								<?php
									$getCanon = $manufacture->getCanon();
									foreach($getCanon as $value):
								?>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-6" onclick="location.href='getManu.php?manu_id=<?php echo $value['manu_id'];?>';">
									<label for="brand-6">
										<span></span>
										<?php echo $value['manu_name']; ?>
										<small>(<?php echo $value['soluong_manu']; ?>)</small>
									</label>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">

						<!-- store products -->
						<div class="row">
							<?php 
							if(isset($_GET['keyword'])):
								$keyword = $_GET['keyword'];
								$search = $product->search($keyword);
								// hi???n th??? 3 s???n ph???m tr??n 1 trang
								$perPage = 3; 				
								// L???y s??? trang tr??n thanh ?????a ch???
								$page = isset($_GET['page'])?$_GET['page']:1;		
								// T??nh t???ng s??? d??ng, v?? d??? k???t qu??? l?? 18
								$total = count($search);					
								// l???y ???????ng d???n ?????n file hi???n h??nh
								$url = $_SERVER['PHP_SELF']."?keyword=".$keyword;
								
								$get3ProductByKeyWord = $product->get3ProductByKeyWord($keyword,$page,$perPage);
									foreach($get3ProductByKeyWord as $value):
							?>
							<!-- product -->
							<form action="" method="post">
								<div class="col-md-4 col-xs-6">
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category">Category</p>
											<h3 class="product-name"><a href="products.php?id=<?php echo $value['id']; ?>&type_id=<?php echo $value['type_id']; ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo number_format($value['price'],0,',','.') ?>VND</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn" name="dathang"><i class="fa fa-shopping-cart"></i><a href="result.php?keyword=<?php echo $keyword; ?>&id=<?php echo $value['id']?>">add to cart</a></button>
										</div>
									</div>
								</div>
							</form>
							<!-- /product -->
							<?php 
									endforeach; 
								endif;
							?>
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<ul class="store-pagination">
								<?php echo $product->paginate($url,$total,$perPage); ?>
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
