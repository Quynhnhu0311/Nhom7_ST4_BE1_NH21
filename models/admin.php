<?php
    class Admin extends Db{
        public function getLogin($username,$password)
        {
            $sql = self::$connection->prepare("SELECT * FROM member WHERE username = ? AND password = ? LIMIT 1");
            $sql->bind_param("ss",$username,$password);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function Register($username,$password)
        {
            $sql = self::$connection->prepare("INSERT INTO member(username,password) VALUES(?,?)");
            
            $sql->bind_param("ss",$username,$password);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
        public function getAdminID($id_member)
        {
            $sql = self::$connection->prepare("SELECT * FROM member WHERE id_member = ?");
            $sql->bind_param("i",$id_member);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getNewMember()
        {
            $sql = self::$connection->prepare("SELECT * FROM member ORDER BY id_member DESC LIMIT 0,1");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
?>