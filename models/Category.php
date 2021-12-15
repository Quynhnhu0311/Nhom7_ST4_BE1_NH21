<?php
    class Category extends Db
    {
        public function getCategoryById()
        {
            $sql = self::$connection->prepare("SELECT * FROM article_list,detaill_category WHERE article_list.id_baiviet=detaill_category.id_danhmuc LIMIT 1");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
?>