<?php
    class User extends Db{
        public function getAdminByID($user_id)
        {
            $sql = self::$connection->prepare("SELECT * FROM users 
            WHERE user_id=? ");
            $sql->bind_param("i",$user_id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getAllAdmin()
        {
            $sql = self::$connection->prepare("SELECT * FROM users");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getRoleAdmin(){
            $sql = self::$connection->prepare("SELECT * FROM users WHERE rode_id=1");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getRoleUser(){
            $sql = self::$connection->prepare("SELECT * FROM users WHERE rode_id=2");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
?>