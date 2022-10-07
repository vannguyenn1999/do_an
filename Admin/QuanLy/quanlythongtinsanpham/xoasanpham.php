<?php

    //Lấy dữ liệu cần xoá

use LDAP\Connection;

    $ma_san_pham = $_GET['id'];
    //echo $id;

    require_once '../../Connection.php';

    $delete_sql = "DELETE FROM thong_tin_chi_tiet WHERE ma_san_pham='$ma_san_pham'";

   
    if (mysqli_query($conn, $delete_sql)) {
        

        $message = "Xoá thành công";
		echo "<script type='text/javascript'>alert('$message');</script>";
       	header("Location: danhsachthongtin.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
?>