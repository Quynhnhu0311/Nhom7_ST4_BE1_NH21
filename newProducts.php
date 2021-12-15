<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
        
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Products</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">New Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav">
                                <?php 
                                    foreach($getNewProducts as $value):
                                ?>
                                <!-- product -->
                                <form action="" method="post">
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/<?php echo $value['pro_image']; ?>" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="products.php?id=<?php echo $value['id']; ?>&type_id=<?php echo $value['type_id']; ?>"><?php echo $value['name']; ?></a></h3>
                                            <h4 class="product-price"><?php echo number_format($value['price']);?>VND</h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn" name="dathang"><i class="fa fa-shopping-cart"></i><a href="index.php?id=<?php echo $value['id'];?>">add to cart</a></button>
                                        </div>
                                    </div>
                                </form>
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

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Laptops</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach($getLaptops as $value): ?>
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/<?php echo $value['pro_image'] ?>" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="products.php?id=<?php echo $value['id']; ?>&type_id=<?php echo $value['type_id']; ?>"><?php echo $value['name'] ?></a></h3>
                                        <h4 class="product-price"><?php echo number_format($value['price'])?>VND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" name="dathang"><i class="fa fa-shopping-cart"></i><a href="index.php?id=<?php echo $value['id']?>">add to cart</a></button>
                                    </div>
                                </div>
                                <!-- /product -->
                                <?php endforeach ?>
                            </div>
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

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Phones</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Phones</a></li>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach($getPhones as $value): ?>
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/<?php echo $value['pro_image'] ?>" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="products.php?id=<?php echo $value['id']; ?>&type_id=<?php echo $value['type_id']; ?>"><?php echo $value['name'] ?></a></h3>
                                        <h4 class="product-price"><?php echo number_format($value['price'])?>VND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" name="dathang"><i class="fa fa-shopping-cart"></i><a href="index.php?id=<?php echo $value['id']?>">add to cart</a></button>
                                    </div>
                                </div>
                                <!-- /product -->
                                <?php endforeach ?>
                            </div>
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

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Headphones</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Headphones</a></li>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach($getHeadphones as $value): ?>
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/<?php echo $value['pro_image'] ?>" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="products.php?id=<?php echo $value['id']; ?>&type_id=<?php echo $value['type_id']; ?>"><?php echo $value['name'] ?></a></h3>
                                        <h4 class="product-price"><?php echo number_format($value['price'])?>VND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" name="dathang"><i class="fa fa-shopping-cart"></i><a href="index.php?id=<?php echo $value['id']?>">add to cart</a></button>
                                    </div>
                                </div>
                                <!-- /product -->
                                <?php endforeach ?>
                            </div>
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

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Cameras</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Cameras</a></li>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach($getCameras as $value): ?>
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/<?php echo $value['pro_image'] ?>" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="products.php?id=<?php echo $value['id']; ?>&type_id=<?php echo $value['type_id']; ?>"><?php echo $value['name'] ?></a></h3>
                                        <h4 class="product-price"><?php echo number_format($value['price'])?>VND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" name="dathang"><i class="fa fa-shopping-cart"></i><a href="index.php?id=<?php echo $value['id']?>">add to cart</a></button>
                                    </div>
                                </div>
                                <!-- /product -->
                                <?php endforeach ?>
                            </div>
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

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Speakers</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Speakers</a></li>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach($getSpeaks as $value): ?>
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/<?php echo $value['pro_image'] ?>" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="products.php?id=<?php echo $value['id']; ?>&type_id=<?php echo $value['type_id']; ?>"><?php echo $value['name'] ?></a></h3>
                                        <h4 class="product-price"><?php echo number_format($value['price'])?>VND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" name="dathang"><i class="fa fa-shopping-cart"></i><a href="index.php?id=<?php echo $value['id']?>">add to cart</a></button>
                                    </div>
                                </div>
                                <!-- /product -->
                                <?php endforeach ?>
                            </div>
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

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Watchs</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Watchs</a></li>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach($getWatchs as $value): ?>
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/<?php echo $value['pro_image'] ?>" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="products.php?id=<?php echo $value['id']; ?>&type_id=<?php echo $value['type_id']; ?>"><?php echo $value['name'] ?></a></h3>
                                        <h4 class="product-price"><?php echo number_format($value['price'])?>VND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" name="dathang"><i class="fa fa-shopping-cart"></i><a href="index.php?id=<?php echo $value['id']?>">add to cart</a></button>
                                    </div>
                                </div>
                                <!-- /product -->
                                <?php endforeach ?>
                            </div>
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