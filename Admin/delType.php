<?php    
    require "config.php";
    require "models/db.php";
    require "models/protype.php";
    $protype = new Protype;

    if(isset($_GET['type_id'])){
        $protype->delProtypes($_GET['type_id']);
    }
    header("location:protypes.php");
?>