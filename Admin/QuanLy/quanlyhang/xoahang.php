<?php
session_start();
    //Lấy dữ liệu cần xoá

use LDAP\Connection;

    $ten_nhan_hieu = $_GET['id'];
    //echo $id;

    require_once '../../Connection.php';

    $delete_sql = "DELETE FROM nhan_hieu WHERE ten_nhan_hieu='$ten_nhan_hieu'";

   
    if (mysqli_query($conn, $delete_sql)) {
       $_SESSION['delete_hang'] = "Xoá Thành Công";
       	header("Location: danhsachhangsanpham.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
?>