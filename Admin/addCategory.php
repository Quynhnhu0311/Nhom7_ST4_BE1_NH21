<?php 
    require "config.php";
    require "models/db.php";
    require "models/Category.php";
    $category = new Category;

    if(isset($_POST['submit'])){
        $tendanhmuc_baiviet = $_POST['namelist'];
        $code_baiviet = rand(0,9999);
        $category->addCategory($tendanhmuc_baiviet,$code_baiviet);
    }
    header('location:articlelist.php');
?>