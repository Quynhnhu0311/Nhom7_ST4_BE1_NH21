<!-- Cart -->
    <div class="dropdown" onclick="location.href='viewcart.php';" style="margin-left: 81px; margin-top: 10px;">
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