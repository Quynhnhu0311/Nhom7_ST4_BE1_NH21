<?php 
    session_start();
    require "config.php";
    require "models/db.php";
    require "models/protype.php";
    $protype = new Protype;

    if(isset($_POST['capnhat'])){
        $type_id = $_POST['type_id'];
        $type_name = $_POST['type_name'];
        $soluong_types = $_POST['soluong'];
        $getUpdateProtype = $protype->getUpdateProtype($type_name,$soluong_types,$type_id);
    }
    header('location:protypes.php');
?>