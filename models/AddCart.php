<?php   
    class AddCart extends Db{
        public function getAllCart()
        {
            $sql = self::$connection->prepare("SELECT * FROM cart");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getCart($id_KH,$code_cart)
        {
            $sql = self::$connection->prepare("INSERT INTO cart(id_KH,code_cart,cart_status) VALUE(?,?,1)");
            $sql->bind_param("ii",$id_KH,$code_cart);
            $sql->execute(); //return an object
            return $sql; //return an array
        }
        public function getManagement($id_KH)
        {
            $sql = self::$connection->prepare("SELECT * FROM cart WHERE cart.id_KH=? ORDER BY cart.id_sp DESC");
            $sql->bind_param("i",$id_KH);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
?>