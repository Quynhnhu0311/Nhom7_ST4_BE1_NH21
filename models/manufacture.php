<?php
    class Manufacture extends Db
    {
        public function getAllManufactures()
        {
            $sql = self::$connection->prepare("SELECT * FROM manufactures");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getNameByManu($manu_id)
        {
            $sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manu_id = ?");
            $sql->bind_param("i",$manu_id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getSamSung()
        {
            $sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manu_id = 2");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getApple()
        {
            $sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manu_id = 1");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getAsus()
        {
            $sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manu_id = 3");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getOppo()
        {
            $sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manu_id = 4");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getSony()
        {
            $sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manu_id = 5");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getCanon()
        {
            $sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manu_id = 6");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
?>