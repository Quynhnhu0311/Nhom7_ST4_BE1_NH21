<?php
    class Product extends Db
    {
        public function getAllProducts()
        {
            $sql = self::$connection->prepare("SELECT * FROM products");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getProductById($id)
        {
            $sql = self::$connection->prepare("SELECT * FROM products,protypes WHERE products.type_id=protypes.type_id AND id = ?");
            $sql->bind_param("i",$id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getNewProducts()
        {
            $sql = self::$connection->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 0,10");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getLaptops()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id=2");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getPhones()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id=1");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getHeadphones()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id=3");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getCameras()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id=6");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getWatchs()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id=4");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getSpeaks()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id=5");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getTopselling()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id=1");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function search($keyword)
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ?");
            $keyword = "%$keyword%";
            $sql->bind_param("s", $keyword);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getProductByType($type_id)
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ?");
            $sql->bind_param("i",$type_id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function get3ProductByType($type_id,$page,$perPage)
        {
            // Tính số thứ tự trang bắt đầu 
  	        $firstLink = ($page - 1) * $perPage;
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ?
                                                LIMIT ?, ? ");
            $sql->bind_param("iii",$type_id,$firstLink, $perPage);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getProductByManu($manu_id)
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = ?");
            $sql->bind_param("i",$manu_id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function get3ProductByManu($manu_id,$page,$perPage)
        {
            // Tính số thứ tự trang bắt đầu 
  	        $firstLink = ($page - 1) * $perPage;
            $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = ?
                                                LIMIT ?, ? ");
            $sql->bind_param("iii",$manu_id,$firstLink, $perPage);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function get3ProductByKeyWord($keyword,$page,$perPage)
        {
            // Tính số thứ tự trang bắt đầu 
  	        $firstLink = ($page - 1) * $perPage;
            $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ?
                                                LIMIT ?, ? ");
            $keyword = "%$keyword%";
            $sql->bind_param("sii", $keyword,$firstLink, $perPage);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        function paginate($url, $total, $perPage)
        {
            $totalLinks = ceil($total/$perPage);
 	        $link ="";
    	    for($j=1; $j <= $totalLinks ; $j++)
     	    {
      		    $link = $link."<li><a href='$url&page=$j'> $j </a></li>";
     	    }
     	    return $link;
        }
        public function getProductRelated($type_id)
        {
            
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ? LIMIT 4");
            $sql->bind_param("i",$type_id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
?>