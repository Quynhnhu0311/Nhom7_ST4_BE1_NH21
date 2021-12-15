<?php
session_start();
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new User;
if(isset($_POST['forgot'])){
    $username = $_POST['username'];
    $password = $_POST['password_cu'];
    $password_moi = $_POST['password_moi'];
    if($user->checkLogin($username,$password)){
        $updateUser = $user->updateUser($password_moi);
        header('location:index.php');
    }
    else{
        header('location:repass.php');
        echo '<p style="color:red">Tài khoản hoặc mật khẩu cũ không đúng. Vui lòng nhập lại.;<p>';
    }
}
?>