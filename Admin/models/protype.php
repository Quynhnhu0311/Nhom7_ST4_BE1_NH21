<?php
    class Protype extends Db
    {
        public function getAllProtypes()
        {
            $sql = self::$connection->prepare("SELECT * FROM protypes");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getNameByType($type_name)
        {
            $sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_id = ?");
            $sql->bind_param("i",$type_named);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function addProtypes($type_name,$soluong_types)
        {
            $sql = self::$connection->prepare("INSERT INTO protypes(type_name,soluong_types) VALUES(?,?)");
            $sql->bind_param("si",$type_name,$soluong_types);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
        public function delProtypes($type_id)
        {
            $sql = self::$connection->prepare("DELETE FROM protypes WHERE type_id=?");
            $sql->bind_param("i",$type_id);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
        public function getProtypeByTypeId($type_id)
        {
            $sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_id = ?");
            $sql->bind_param("i",$type_id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getUpdateProtype($type_name,$soluong_types,$type_id)
        {
            $sql = self::$connection->prepare("UPDATE protypes SET type_name=?,soluong_types=? WHERE type_id = ?");
            $sql->bind_param("sii",$type_name,$soluong_types,$type_id);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
    }
?>