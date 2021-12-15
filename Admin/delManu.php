<?php    
    require "config.php";
    require "models/db.php";
    require "models/manufacture.php";
    $manufacture = new Manufacture;

    if(isset($_GET['manu_id'])){
        $manufacture->delManu($_GET['manu_id']);
    }
    header("location:manufactures.php");
?>