<?php 
	session_start(); 
	require "config.php";
    require "models/db.php";
    require "models/product.php";
	require "models/protype.php";
	require "models/Content.php";
	require "models/Category.php";
	$content = new Content;
	$category = new Category;
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
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

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
                    <li><a
                            href="getProtype.php?type_id=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a>
                    </li>
                    <?php endforeach; ?>
                    <li><a href="content.php">Hot Deals</a></li>
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
                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <?php 
                            $id_detali_category = $_GET['id_detali_category'];
							$getContentById = $content->getContentById($id_detali_category);
							foreach($getContentById as $value):
                        ?>
                        <!-- product -->
                        <tr>
                            <td>
                                <h3 style="text-align: center;"><?php echo $value['ten_baiviet']; ?></h3><br />
                            </td>
                            <td>
                                <img src="./img/<?php echo $value['image_baiviet']; ?>"
                                style="width: 210px;margin-left: 475px;margin-bottom: 25px;" ; alt=""><br /></td>
                            <td>
                                <p style="font-size: 16px;"><?php echo $value['noidung']; ?></p>
                            </td>
                        </tr>
                        <!-- /product -->
                        <?php 
							endforeach; 
                        ?>
                    </div>
                </div>
                <!-- Products tab & slick -->
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