<?php
    class Category extends Db
    {
        public function getAllCategory()
        {
            $sql = self::$connection->prepare("SELECT * FROM article_list");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function addCategory($tendanhmuc_baiviet,$code_baiviet)
        {
            $sql = self::$connection->prepare("INSERT INTO article_list(tendanhmuc_baiviet,code_baiviet) VALUES(?,?)");
            $sql->bind_param("si",$tendanhmuc_baiviet,$code_baiviet);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
        public function getCategoryById($id_baiviet)
        {
            $sql = self::$connection->prepare("SELECT * FROM article_list WHERE id_baiviet = ?");
            $sql->bind_param("i",$id_baiviet);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getCategory()
        {
            $sql = self::$connection->prepare("SELECT * FROM article_list ORDER BY id_baiviet DESC");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getUpdateCategory($tendanhmuc_baiviet,$id_baiviet)
        {
            $sql = self::$connection->prepare("UPDATE article_list SET tendanhmuc_baiviet=? WHERE id_baiviet = ?");
            $sql->bind_param("si",$tendanhmuc_baiviet,$id_baiviet);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
    }
?>