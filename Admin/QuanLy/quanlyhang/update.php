<?php

//nhận dữ liệu từ form
$ten_nhan_hieu = $_GET['tennhanhieu'];

$thong_tin = $_GET['thongtin'];
//kết nối csdl
require_once '../../Connection.php';

//viết lại sql để thực hiện

if (isset($_GET['submit'])) {
    $Update_product = "update nhan_hieu set thong_tin='$thong_tin' where ten_nhan_hieu='$ten_nhan_hieu'";
    if (mysqli_query($conn, $Update_product)) {
        $message = "Sửa thành công";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "đâsd";
        header("Location: danhsachhangsanpham.php");
    } else {
        $message = "Lỗi";
        echo "<script type='text/javascript'>alert('$message');</script>";
       
    }
}
