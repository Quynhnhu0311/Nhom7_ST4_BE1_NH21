<?php    
    require "config.php";
    require "models/db.php";
    require "models/Category.php";
    $category = new Category;

    if(isset($_GET['id_baiviet'])){
        $category->delCategory($_GET['id_baiviet']);
    }
    header("location:articlelist.php");
?>