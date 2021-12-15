<?php
    class Content extends Db
    {
        public function getAllContent()
        {
            $sql = self::$connection->prepare("SELECT * 
                FROM detaill_category,article_list
                WHERE detaill_category.id_danhmuc=article_list.id_baiviet
                ORDER BY `id_detali_category` DESC");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getContentById($id_detali_category)
        {
            $sql = self::$connection->prepare("SELECT * FROM detaill_category WHERE detaill_category.id_detali_category=? LIMIT 1");
            $sql->bind_param("i",$id_detali_category);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
?>