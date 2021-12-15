<?php
    require "config.php";
    require "models/db.php";
    require "models/manufacture.php";
    $manufaceture=new Manufacture;
    if(isset($_POST['submit'])){
        $manu_id=$_POST['manu_id'];
        $manu_name=$_POST['manu_name'];


        $manufaceture->addManu($manu_id,$manu_name);

    }
    header('location:manufactures.php');
?>