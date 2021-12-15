<?php    
    require "config.php";
    require "models/db.php";
    require "models/Content.php";
    $content = new Content;

    if(isset($_GET['id_detali_category'])){
        $content->delContent($_GET['id_detali_category']);
    }
    header("location:viewlist.php");
?>