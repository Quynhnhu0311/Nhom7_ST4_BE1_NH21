<?php
    class User extends Db{
        public function checkLogin($username,$password)
        {
            $sql = self::$connection->prepare("SELECT * FROM users 
            WHERE username=? AND password=?");
            $password = md5($password);
            $sql->bind_param("ss", $username,$password);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->num_rows;
            if($items == 1){
                return true;
            }
            else{
                return false;
            }
        }
        public function Login($username,$password_cu)
        {
            $sql = self::$connection->prepare("SELECT * FROM users 
            WHERE username=? AND password=?");
            $password_cu = md5($password_cu);
            $sql->bind_param("ss", $username,$password_cu);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function updateUser($password_moi)
        {
            $sql = self::$connection->prepare("UPDATE users SET password=?");
            $password_moi = md5($password_moi);
            $sql->bind_param("s",$password_moi);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
        
    }
?>