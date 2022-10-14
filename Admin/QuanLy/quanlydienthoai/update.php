<?php
session_start();
if(!isset($_SESSION['admin_login'])){
  $_SESSION['error'] = 'Bạn chưa đăng nhập, xin vui lòng đăng nhập';
  header("Location: ../../../Admin_Login.php");
}


//nhận dữ liệu từ form
$ma_san_pham = $_GET['masp'];
$ten_san_pham = $_GET['tensp'];
// $anh = $_POST['anh'];
$gia = $_GET['giasp'];
$so_luong = $_GET['soluong'];
$id_kieu = $_GET['kieu'];
$ten_nhan_hieu = $_GET['hang'];
$thong_tin = $_GET['thongtin'];
//kết nối csdl
require_once '../../Connection.php';

//viết lại sql để thực hiện

if (isset($_GET['submit'])) {
    $Update_product = "update san_pham set ten_san_pham='$ten_san_pham', gia='$gia', so_luong='$so_luong', id_kieu='$id_kieu',ten_nhan_hieu='$ten_nhan_hieu', thong_tin='$thong_tin' where ma_san_pham='$ma_san_pham'";
    if (mysqli_query($conn, $Update_product)) {
        $_SESSION['update_sp'] = "Sửa Thành Công";
        header("Location: danhsachsanpham.php");
    } else {
        $message = "Lỗi";
        echo "<script type='text/javascript'>alert('$message');</script>";
       
    }
}
