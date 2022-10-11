<?php
session_start();
//nhận dữ liệu từ form
$ma_san_pham = $_GET['masp'];
$cau_hinh = $_GET['cauhinh'];
$cam_truoc = $_GET['camtruoc'];
$cam_sau = $_GET['camsau'];
$ram = $_GET['ram'];
$dung_luong = $_GET['dungluong'];
$giam_gia = $_GET['giamgia'];
//kết nối csdl
require_once '../../Connection.php';

//viết lại sql để thực hiện

if (isset($_GET['submit'])) {
    $Update_product = "update thong_tin_chi_tiet set cau_hinh='$cau_hinh',cam_truoc='$cam_truoc', cam_sau='$cam_sau', ram='$ram', dung_luong='$dung_luong',giam_gia='$giam_gia' where ma_san_pham='$ma_san_pham'";
    if (mysqli_query($conn, $Update_product)) {
        $_SESSION['update'] = "Sửa thành công";
        header("Location: danhsachthongtin.php");
    } else {
        $message = "Lỗi";
        echo "<script type='text/javascript'>alert('$message');</script>";
       
    }
}
