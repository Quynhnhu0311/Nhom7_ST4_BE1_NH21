<?php

    require "config.php";
    require "models/db.php";
    require "models/manufacture.php";
    $manu=new Manufacture;
    var_dump($_POST);
    if(isset($_POST['submit'])){
        $manu_id=$_POST['manu_id'];
        $manu_name=$_POST['manu_name'];     
        $manu->editManu($manu_name,$manu_id);
    }
    header('location:manufactures.php');
?>