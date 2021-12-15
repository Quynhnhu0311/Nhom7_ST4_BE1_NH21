<?php   
    class CartDetail extends Db{
        public function getAllCartDetail()
        {
            $sql = self::$connection->prepare("SELECT * FROM cart_detail");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getCartDetail($id_sanpham,$code_cart,$soluong)
        {
            $sql = self::$connection->prepare("INSERT INTO cart_detail(id_sanpham,code_cart,soluong) VALUE(?,?,?)");
            $sql->bind_param("iii",$id_sanpham,$code_cart,$soluong);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
        public function getOder($code)
        {
            $sql = self::$connection->prepare("SELECT * FROM cart_detail,products WHERE cart_detail.id_sanpham=products.id AND cart_detail.code_cart=? ORDER BY cart_detail.id_cart_details DESC");
            $sql->bind_param("i",$code);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
?>