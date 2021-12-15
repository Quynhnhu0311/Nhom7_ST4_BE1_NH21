<?php 
    session_start();
    require "config.php";
    require "models/db.php";
    require "models/admin.php";
    $admin = new Admin;
    
    if(isset($_POST['dangky'])){
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $register = $admin->Register($username,$password);
        if($register){
            $getLogin = $admin->getLogin($username,$password);
            foreach($getLogin as $value){
                $_SESSION['dangky'] = $username;
                $_SESSION['id_member'] = $value['id_member'];
                header('location:index.php');
            }
        }
    }
?>