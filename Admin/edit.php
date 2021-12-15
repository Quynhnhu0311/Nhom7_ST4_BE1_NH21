<?php 
    session_start();
    require "config.php";
    require "models/db.php";
    require "models/product.php";
    $product = new Product;

    if(isset($_POST['capnhat'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $manu_id = $_POST['manu'];
        $type_id = $_POST['type'];
        $desc = $_POST['discrip'];
        $price = $_POST['price'];
        if(isset($_FILES)){
            $image = $_FILES['image']['name'];
        }
        else{
            $image = null;
        }
        $target_dir = "../img/";
        if($image == null){
            $getUpdateProduct = $product->getUpdateProduct($name,$manu_id,$type_id,$price,$image,$desc,$id);
        }
        else{
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
            $getUpdateProduct = $product->getUpdateProduct($name,$manu_id,$type_id,$price,$image,$desc,$id);
        }
    }
    header('location:products.php');
?>