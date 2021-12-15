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
        public function getManagement()
        {
            $sql = self::$connection->prepare("SELECT * FROM cart,member WHERE cart.id_KH=member.id_member ORDER BY cart.id_sp DESC");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
?>