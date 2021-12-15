<?php
    class Protype extends Db{
        public function getAllProtype()
        {
            $sql = self::$connection->prepare("SELECT * FROM protypes");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getNameByType($type_id)
        {
            $sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_id = ?");
            $sql->bind_param("i",$type_id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getLaptop()
        {
            $sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_id = 2");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getPhone()
        {
            $sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_id = 1");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getHeadPhone()
        {
            $sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_id = 3");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getWatch()
        {
            $sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_id = 4");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getMegaPhone()
        {
            $sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_id = 5");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getCamera()
        {
            $sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_id = 6");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
?>