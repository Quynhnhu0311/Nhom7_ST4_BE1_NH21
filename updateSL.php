<?php
    session_start();
    require "config.php";
    require "models/db.php";
    if(isset($_GET['cong'])){
        $id = $_GET['cong'];
        foreach($_SESSION['cart'] as $value){
            if($value['id']!=$id){
                $array = array('tensanpham'=>$value['name'],'gia'=>$value['price'],'anh'=>$value['pro_image'],'id'=>$value['id']);
                $_SESSION['cart']=$array;
            }else{
                if($qty < 9){
                    $tangsoluong = $qty + 1;
                    $array = array('tensanpham'=>$value['name'],'gia'=>$value['price'],'anh'=>$value['pro_image'],'id'=>$key);
                }
                else{
                    $array = array('tensanpham'=>$value['name'],'gia'=>$value['price'],'anh'=>$value['pro_image'],'id'=>$key,'soluong'=>$qty);
                }
                $_SESSION['cart']=$array;
            }
        }
    }
?>