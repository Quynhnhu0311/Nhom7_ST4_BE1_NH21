<?php 
    require "config.php";
    require "models/db.php";
    require "models/Content.php";
    $content = new Content;

    if(isset($_POST['submit'])){
        $id_danhmuc = $_POST['tendanhmuc'];
        $ten_baiviet = $_POST['tenbaiviet'];
        $tomtat = $_POST['tomtat'];
        $noidung = $_POST['noidung'];
        $image_baiviet = $_FILES['image']['name'];
        $content->addContent($id_danhmuc,$ten_baiviet,$tomtat,$noidung,$image_baiviet);

        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
    }
    header('location:viewlist.php');
?>