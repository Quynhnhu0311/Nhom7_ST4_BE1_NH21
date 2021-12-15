<?php
    class Rating extends Db{
        public function getAllRating()
        {
            $sql = self::$connection->prepare("SELECT * FROM reviews");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getRatings($products_id,$yourname,$email,$your_review)
        {
            $sql = self::$connection->prepare("INSERT INTO reviews(products_id,yourname,email,your_review) VALUE(?,?,?,?)");
            
            $sql->bind_param("isss",$products_id,$yourname,$email,$your_review);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
    }
?>