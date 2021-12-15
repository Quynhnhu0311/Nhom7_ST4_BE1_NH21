<?php
    class Content extends Db
    {
        public function getAllContent()
        {
            $sql = self::$connection->prepare("SELECT * FROM detaill_category,article_list WHERE detaill_category.id_baiviet=article_list.id_baiviet ORDER BY `id_detali_category` DESC");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function addContent($id_danhmuc,$ten_baiviet,$tomtat,$noidung,$image_baiviet)
        {
            $sql = self::$connection->prepare("INSERT INTO detaill_category(id_danhmuc,ten_baiviet,tomtat,noidung,image_baiviet) VALUES(?,?,?,?,?)");
            $sql->bind_param("issss",$id_danhmuc,$ten_baiviet,$tomtat,$noidung,$image_baiviet);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
        public function delContent($id_detali_category)
        {
            $sql = self::$connection->prepare("DELETE FROM detaill_category WHERE id_detali_category=?");
            $sql->bind_param("i",$id_detali_category);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
        public function getContentById($id_detali_category)
        {
            $sql = self::$connection->prepare("SELECT * FROM detaill_category WHERE id_detali_category = ?");
            $sql->bind_param("i",$id_detali_category);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getContent()
        {
            $sql = self::$connection->prepare("SELECT * FROM detaill_category,article_list WHERE detaill_category.id_danhmuc = article_list.id_baiviet ORDER BY id_detali_category DESC");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getUpdateContent($id_danhmuc,$ten_baiviet,$tomtat,$noidung,$image_baiviet,$id_detali_category)
        {
            if($image_baiviet == null){
                $sql = self::$connection->prepare("UPDATE detaill_category SET id_danhmuc=?,ten_baiviet=?,tomtat=?,noidung=? WHERE id_detali_category = ?");
                $sql->bind_param("isssi",$id_danhmuc,$ten_baiviet,$tomtat,$noidung,$id_detali_category);
            }
            else{
                $sql = self::$connection->prepare("UPDATE detaill_category SET id_danhmuc=?,ten_baiviet=?,tomtat=?,noidung=?,image_baiviet=? WHERE id_detali_category = ?");
                $sql->bind_param("issssi",$id_danhmuc,$ten_baiviet,$tomtat,$noidung,$image_baiviet,$id_detali_category);
            }
            $sql->execute(); //return an object
            return $sql; //return an array
        }
    }
?>