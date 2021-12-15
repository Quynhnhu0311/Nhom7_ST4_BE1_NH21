<?php 
    require "config.php";
    require "models/db.php";
    require "models/protype.php";
    $protype = new Protype;

    if(isset($_POST['submit'])){
        $type_name = $_POST['typename'];
        $soluong_types = $_POST['soluong'];
        $protype->addProtypes($type_name,$soluong_types);
    }
    header('location:protypes.php');
?>