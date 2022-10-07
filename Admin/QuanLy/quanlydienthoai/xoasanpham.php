<?php

    //Lấy dữ liệu cần xoá

use LDAP\Connection;

    $ma_san_pham = $_GET['id'];
    //echo $id;

    require_once '../../Connection.php';



    $sql_masp = "select ma_san_pham from thong_tin_chi_tiet where ma_san_pham = '$ma_san_pham'";
		$result = mysqli_query($conn, $sql_masp);
		$num = mysqli_num_rows($result);
		if($num == 1){
            $sql = "DELETE FROM thong_tin_chi_tiet WHERE ma_san_pham='$ma_san_pham'";
            mysqli_query($conn, $sql);
            $delete_sql = "DELETE FROM san_pham WHERE ma_san_pham='$ma_san_pham'";
            mysqli_query($conn, $delete_sql);
            $message = "Xoá thành công";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("Location: danhsachsanpham.php");

		}else{
            $delete_sql = "DELETE FROM san_pham WHERE ma_san_pham='$ma_san_pham'";
            mysqli_query($conn, $delete_sql);
            $message = "Xoá thành công";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("Location: danhsachsanpham.php");
            
        }

   

    
?>