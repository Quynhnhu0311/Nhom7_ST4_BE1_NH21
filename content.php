<?php 
	session_start(); 
	require "config.php";
    require "models/db.php";
    require "models/product.php";
	require "models/protype.php";
	require "models/Content.php";
	require "models/Category.php";
    require "models/admin.php";
    $admin = new Admin;
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
    <?php 
		$page = 'hot';
        include "header.php";
    ?>

    <!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav">
                                <?php 
										$getAllContent = $content->getAllContent();
										foreach($getAllContent as $value):
                                ?>
                                <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/<?php echo $value['image_baiviet']; ?>" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="viewcontent.php?id_detali_category=<?php echo $value['id_detali_category']; ?>"><?php echo $value['ten_baiviet']; ?></a></h3>
                                            <h4 class="product-price"></h4>
                                            <div class="product-rating"></div>
                                        </div>
										<div style="padding-left: 10px;padding-bottom: 15px;padding-right: 10px;">
											<?php echo $value['tomtat']; ?>
										</div>
                                    </div>
                                <!-- /product -->
                                <?php 
										endforeach; 
                                ?>
                            </div>
                            <div id="slick-nav" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
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