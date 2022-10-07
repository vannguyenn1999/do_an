<?php

    //Lấy dữ liệu cần xoá

use LDAP\Connection;

    $user = $_GET['id'];
    // var_dump($user);
    require_once '../../Connection.php';

    $delete_sql = "DELETE FROM accounts WHERE username='$user'";
    echo $delete_sql;

   
    if (mysqli_query($conn, $delete_sql)) {
        $message = "Xoá thành công";
		echo "<script type='text/javascript'>alert('$message');</script>";
       	header("Location: danhsachtaikhoan.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
?>