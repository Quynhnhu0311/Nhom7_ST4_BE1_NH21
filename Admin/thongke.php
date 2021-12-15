<?php
    include "header.php";
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    require "../Carbon/autoload.php";
    require "models/thongke_cart.php";
    $thongke = new ThongKe;

    /*if(isset($_POST['thoigian'])){
        $thoigian = $_POST['thoigian'];
    }else{
        $thoigian = '';
        $subdays = Carbon::now('Asia/Ho_Chi_Minh')->
    }*/

    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString(); 
    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

    $getThongKe = $thongke->getThongKe($subdays,$now);
    foreach($getThongKe as $value){
        $chart_data[] = array(
            'date' => $value['ngaydat'],
            'order' => $value['donhang'],
            'sales' => $value['doanhthu'],
            'quanlity' => $value['soluongban']
        );
    }
    echo $data = json_encode($chart_data);
?>