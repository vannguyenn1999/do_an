
<?php
session_start();
if(!isset($_SESSION['admin_login'])){
  $_SESSION['error'] = 'Bạn chưa đăng nhập, xin vui lòng đăng nhập';
  header("Location: ../Admin_Login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Quản Lý Apple 123</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="Css/css.css">
  <link rel="shortcut icon" href="https://img.freepik.com/vector-premium/logo-apple-gradient-estilo-colorido_116762-694.jpg" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <div class="header"></div>
  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
  </label>
  <div id="sidebarMenu">
    <ul class="sidebarMenuInner">
      <a href="index.php"><li>APPLE 123<span>Chức Năng</span></li></a>
      <a href="QuanLy/quanlydienthoai/danhsachsanpham.php"><li>Danh Sách Sản Phẩm Điện Thoại</li></a>
      <a href="QuanLy/quanlythongtinsanpham/danhsachthongtin.php"><li>Danh Sách Thông Tin Sản Phẩm</li></a>
      <a href="QuanLy/quanlyhang/danhsachhangsanpham.php"><li>Danh Sách Hãng Điện Thoại</li></a>
      <!-- <a href="" >Danh Sách Hãng Laptop</a> -->
      <a href="QuanLy/quanlyhoadon/danhsachhoadon.php"><li>Danh Sách Đơn Hàng</li></a>
      <a href="QuanLy/quanlytaikhoan/danhsachtaikhoan.php"><li>Thông Tin Khách Hàng</li></a>
      <!-- <a href="../index.html" target="_blank">
        <li>Website</li>
      </a> -->
      <a href="https://www.facebook.com/VanNguyen280999" target="_blank"><li>Thông Tin Của Chúng Tôi</li></a>
      <a href="dangxuat.php"><li>Đăng Xuất</li></a>
    </ul>
  </div>
  <div id='center' class="main center">
    <div class="mainInner">
      <div class="main">
        <main>APPLE 123</main>
      </div>
    </div>
  </div>
  <div class="footer">
  </div>
</body>

</html>