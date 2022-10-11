<?php
session_start();

    $usernameError = '';
    $passwordError = '';

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";

    }
    if(isset($_SESSION['error'])){
        $message = $_SESSION['error'];
        echo "<script type='text/javascript'>alert('$message');</script>";
        unset($_SESSION['error']);
      }

    require_once "admin/Connection.php";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($username)){
            $usernameError = "Mời Bạn Nhập Tên Đăng Nhập";
        }
        if(empty($password)){
            $passwordError = "Mời Bạn Nhập Mật Khẩu";
        }
        
        if(empty($usernameError) && empty($passwordError)){
            $password_login = ($password); 
            $sql = "select * from admin_system where username_admin = '$username' and password_admin = '$password_login'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                $_SESSION['admin_login'] = $username;
                header("Location: Admin/index.php");
            }else{
                $usernameError = "Tài khoản hoặc mật khẩu của bạn không đúng !";
            }
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Hệ Thống</title>
    <link rel="stylesheet" href="User/CSS/Admin_login.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>
</head>

<body>

    <div class="wrapper">
        <section class="form signup">
            <header> Đăng Nhập Hệ Thống</header>
            <form action="Admin_Login.php" method="POST">
                    <div class="field input">
                        <label for=""> Tài Khoản :</label>
                        <input type="text" name="username">
                    </div>
                    <div class="err-txt"><?php echo $usernameError ?></div>
                    <div class="field input">
                        <label for=""> Mật Khẩu :</label>
                        <input type="password" name="password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="err-txt"><?php echo $passwordError ?></div>
                    <div class="field button">
                        <input type="submit" name="submit" value="Đăng nhập"></br>
                    </div>
                    <div class="field button">
                        <a href="index.php">Trang Chủ</a>
                    </div>
            </form>
            <!-- <div class="link">Bạn Đã Có Tài Khoản Chưa ? <a href="#">Đăng ký tại đây</a> </div> -->
        </section>
    </div>
<script src="JS\hide-show-password.js"></script>

</body>
</html>
