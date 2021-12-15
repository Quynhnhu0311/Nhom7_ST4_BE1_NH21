<?php   
    class ThongKe extends Db
    {
        public function getThongKe($subdays,$now)
        {
            $sql = self::$connection->prepare("SELECT * FROM thongke WHERE ngaydat 
                                            BETWEEN ? AND ? ORDER BY ngaydat ASC");
            $sql->bind_param("ss",$subdays,$now);
            $sql->execute();
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items;
        }
    }
?>