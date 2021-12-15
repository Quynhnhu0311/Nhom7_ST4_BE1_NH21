<?php
    class Product extends Db
    {
        public function getAllProducts()
        {
            $sql = self::$connection->prepare("SELECT * 
                FROM products,manufactures,protypes
                WHERE products.manu_id=manufactures.manu_id
                AND products.type_id=protypes.type_id ORDER BY `id` DESC");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function get5AllProducts($page,$perPage)
        {
            // Tính số thứ tự trang bắt đầu 
  	        $firstLink = ($page - 1) * $perPage;
            //Dùng LIMIT để giới hạn số lượng hiển thị 1 trang
            $sql = self::$connection->prepare("SELECT * FROM products,manufactures,protypes
            WHERE products.manu_id=manufactures.manu_id
            AND products.type_id=protypes.type_id LIMIT $firstLink, $perPage");
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
                $link =$link."<li style=list-style-type:none;border-style:solid;border-width:2px;border-color:#E4E7ED;margin-left:7px><a href='$url?page=$j' style='padding: 13px;color: #2B2D42;'> $j </a></li>";
     	    }
     	    return $link;
        }
        public function getNewProducts($name,$manu_id,$type_id,$price,$pro_image,$description)
        {
            $sql = self::$connection->prepare("INSERT INTO products(name,manu_id,type_id,price,pro_image,description) VALUE(?,?,?,?,?,?)");
            $sql->bind_param("siiiss",$username,$manu_id,$type_id,$price,$pro_image,$description);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
        public function getDeleteProducts($id)
        {
            $sql = self::$connection->prepare("DELETE FROM products WHERE id=?");
            $sql->bind_param("i",$id);
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
        public function addProducts($name,$manu_id,$type_id,$price,$pro_image,$desc)
        {
            $sql = self::$connection->prepare("INSERT INTO products(name,manu_id,type_id,price,pro_image,description) VALUES(?,?,?,?,?,?)");
            $sql->bind_param("siiiss",$name,$manu_id,$type_id,$price,$pro_image,$desc);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
        public function delProducts($id)
        {
            $sql = self::$connection->prepare("DELETE FROM products WHERE id=?");
            $sql->bind_param("i",$id);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
        public function getProductById($id)
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
            $sql->bind_param("i",$id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getUpdateProduct($name,$manu_id,$type_id,$price,$image,$desc,$id)
        {
            if($image == null){
                $sql = self::$connection->prepare("UPDATE products SET name=?,manu_id=?,type_id=?,price=?,description=? WHERE id = ?");
                $sql->bind_param("siiisi",$name,$manu_id,$type_id,$price,$desc,$id);
            }
            else{
                $sql = self::$connection->prepare("UPDATE products SET name=?,manu_id=?,type_id=?,price=?,pro_image=?,description=? WHERE id = ?");
                $sql->bind_param("siiissi",$name,$manu_id,$type_id,$price,$image,$desc,$id);
            }
            $sql->execute(); //return an object
            return $sql; //return an array
        }
    }
?>