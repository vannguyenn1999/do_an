<?php

    //Lấy dữ liệu cần xoá

use LDAP\Connection;

    $user = $_GET['id'];
    // var_dump($user);
    require_once '../../Connection.php';

    $delete_sql = "DELETE FROM accounts WHERE username='$user'";
    echo $delete_sql;

   
    if (mysqli_query($conn, $delete_sql)) {
        $_SESSION['delete_tk'] = "Xoá thành công";
       	header("Location: danhsachtaikhoan.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
?>