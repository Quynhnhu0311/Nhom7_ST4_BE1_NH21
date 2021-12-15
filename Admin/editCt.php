<?php 
    session_start();
    require "config.php";
    require "models/db.php";
    require "models/Content.php";
    $content = new Content;

    if(isset($_POST['capnhat'])){
        $id_detali_category = $_POST['id_baiviet'];
        $id_danhmuc = $_POST['namelist'];
        $ten_baiviet = $_POST['tenbaiviet'];
        $tomtat = $_POST['tomtat'];
        $noidung = $_POST['noidung'];
        if(isset($_FILES)){
            $image_baiviet = $_FILES['image']['name'];
        }
        else{
            $image_baiviet = null;
        }
        $target_dir = "../img/";
        if($image_baiviet == null){
            $getUpdateContent = $content->getUpdateContent($id_danhmuc,$ten_baiviet,$tomtat,$noidung,$image_baiviet,$id_detali_category);
        }
        else{
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
            $getUpdateContent = $content->getUpdateContent($id_danhmuc,$ten_baiviet,$tomtat,$noidung,$image_baiviet,$id_detali_category);
        }
    }
    header('location:viewlist.php');
?>