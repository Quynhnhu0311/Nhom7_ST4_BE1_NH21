<?php 
    session_start();
    require "config.php";
    require "models/db.php";
    require "models/Category.php";
    $category = new Category;

    if(isset($_POST['capnhat'])){
        $id_baiviet = $_POST['id_baiviet'];
        $tendanhmuc_baiviet = $_POST['namelist'];
        $getUpdateCategory = $category->getUpdateCategory($tendanhmuc_baiviet,$id_baiviet);
    }
    header('location:articlelist.php');
?>