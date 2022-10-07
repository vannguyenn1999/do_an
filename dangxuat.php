<?php

session_start();

// xoá session tạo ra lúc đăng nhập
unset($_SESSION['user_name']);
// chuyển hướng về trang login

// $_SESSION['success'] = "Đăng Xuất";
header("Location: index.php");

?>