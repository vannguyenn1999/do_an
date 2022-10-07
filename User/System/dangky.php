<?php
require_once '../../Admin/Connection.php';

$errName = '';
$errEmail = '';
$errNumber = '';
$errAddress = '';
$errUserName = '';
$errPassWord = '';
$errPassWord1 = '';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sdt = $_POST['sdt'];
  $address = $_POST['diachi'];
  $user = $_POST['username'];
  $password = $_POST['password'];
  $password1 = $_POST['password1'];


  if (empty($name)) {
    $errName = 'Mời Bạn Nhập Thông Tin';
  } else if (strlen($name) < 7) {
    $errName = 'Phải lớn hơn 7 ký tự';
  }

  if (empty($email)) {
    $errEmail = 'Mời Bạn Nhập Thông Tin';
  } else if (strlen($email) < 5) {
    $errEmail = 'Phải lớn hơn 5 ký tự';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errEmail = "Email phải đúng định dạng";
  } else {
    $sql_email = "select email from accounts where email = '$email'";
    $result = mysqli_query($conn, $sql_email);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
      $errEmail = "Email Này Đã Tồn Tại";
    }
  }

  if (empty($sdt)) {
    $errNumber = 'Mời Bạn Nhập Thông Tin';
  } else if (is_numeric($sdt) < 10) {
    $errNumber = 'Phải là 1 số';
  } else if (strlen($sdt) < 10) {
    $errNumber = 'Phải lớn hơn 10 ký tự';
  }

  if (empty($address)) {
    $errAddress = 'Mời Bạn Nhập Thông Tin';
  } else if (strlen($sdt) < 3) {
    $errAddress = 'Phải lớn hơn 3 ký tự';
  }

  if (empty($user)) {
    $errUserName = 'Mời Bạn Nhập Thông Tin';
  } else if (strlen($user) < 5) {
    $errUserName = 'Phải lớn hơn 5 ký tự';
  } else {
    $sql_username = "select username from accounts where username = '$user'";
    $result = mysqli_query($conn, $sql_username);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
      $errUserName = "Tài Khoản Này Đã Tồn Tại";
    }
  }

  if (empty($password)) {
    $errPassWord = 'Mời Bạn Nhập Thông Tin';
  } else if (strlen($password) < 6) {
    $errPassWord =  'Phải lớn hơn 6 ký tự';
  }

  if (empty($password1)) {
    $errPassWord1 = 'Mời Bạn Nhập Thông Tin';
  } else if (strlen($password1) < 6) {
    $errPassWord1 =  'Phải lớn hơn 6 ký tự';
  }

  if (!($password == $password1)) {
    $errPassWord = 'Kiểm Tra Lại Mật Khẩu';
  }

  if (empty($errName) && empty($errEmail) && empty($errNumber) && empty($errAddress) && empty($errUserName) && empty($errPassWord) && empty($errPassWord1)) {
    $user_password = md5($password);
    $sql = "INSERT INTO accounts (username, password, email, phone, address, name) VALUES ('$user','$user_password','$email','$sdt','$address','$name')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $message = "Thêm thành công , Bạn có muốn trở lại trang chủ ?";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header("Location: dangnhap.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } else {
    $message = "Kiểm Tra Lại";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../CSS/base.css">
  <link rel="stylesheet" href="../CSS/Login.css">
  <link rel="stylesheet" href="../CSS/Index/header.css">
  <link rel="stylesheet" href="../CSS/Index/main.css">
  <link rel="stylesheet" href="../CSS/Index/footer.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://img.freepik.com/vector-premium/logo-apple-gradient-estilo-colorido_116762-694.jpg" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Đăng Ký</title>
</head>

<body>
  <div class="wapper">
    <!-- HEADER -->
    <header class="header">
      <!-- HEADER TOP -->
      <div class="header-top">
        <div class="gird">
          <!-- HEADER TOP NAVBER -->
          <nav class="header-top__navbar">
            <ul class="header-top__navbar-list">
              <li class="header-top__navbar-item">
                <a class="header-top__navbar-item-link" href="" target="_blank">BỐC THĂM TRÚNG THƯỞNG 13 PRO MAX</a>
              </li>

            </ul>
            <ul class="header-top__navbar-list">

              <li class="header-top__navbar-item ">
                <a class="header-top__navbar-item-link" href="">Mua máy mới</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="header-midder">
        <div class="gird">
          <div class="mid">
            <div class="header-logo">
              <a href="../../index.php"><img class="header-logo_img" src="https://beedesign.com.vn/wp-content/uploads/2020/08/Logo-Apple-123-02.png" alt=""></a>
              <div class="header-search-select"></div>
            </div>
            <div class="header-search">
              <div class="header-search_input-warper">
                <input type="text" class="header-search_input" placeholder="Bạn đang tìm gì...">
                <!-- search history  -->
              </div>
              <button class="header-search_btn">
                <i class="header-search_btn-icon fas fa-search"></i>
              </button>
            </div>
            <div class="header-cart">
              <span class="header-cart-p">Lịch Sử Đơn Hàng</span>
            </div>
            <div class="header-cart">
                <i class="header-cart-icon fa-solid fa-cart-arrow-down"> </i>
                <a href="../../giohang.php" class="giohang"
                  ><span class="header-cart-p">Giỏ Hàng</span></a
                >
              </div>

          </div>
        </div>
      </div>
      <div class="header-bottom">
        <div class="gird">
          <div class="bottom">
            <ul class="header-bottom_list">
              <li class="header-bottom_item">
                <a href="../Danh_Muc/dienthoai.php">
                  <i class="header-bottom_icon fa-solid fa-mobile-screen-button"></i><br>
                  <span class="header-bottom_phone">Điện Thoại</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="../Danh_Muc/ipad.php">
                  <i class="header-bottom_icon fa-solid fa-tablet-screen-button"></i><br>
                  <span class="header-bottom_phone">Ipad</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="../Danh_Muc/laptop.php">
                  <i class="header-bottom_icon fa-solid fa-laptop"></i><br>
                  <span class="header-bottom_phone">Laptop</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="../Danh_Muc/watch.php">
                  <i class="header-bottom_icon fab fa-twitch"></i><br>
                  <span class="header-bottom_phone">Đồng Hồ</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="../Danh_Muc/phukien.php">
                  <i class="header-bottom_icon fa-solid fa-headphones"></i><br>
                  <span class="header-bottom_phone">Phụ Kiện</span>
                </a>

              </li>
              <li class="header-bottom_item">
                <a href="../Danh_Muc/dichvu.php">
                  <i class="header-bottom_icon fa-solid fa-house"></i><br>
                  <span class="header-bottom_phone">Dịch Vụ</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="../Danh_Muc/chatluong.php">
                  <i class="header-bottom_icon fa-solid fa-gem"></i><br>
                  <span class="header-bottom_phone">Chất Lượng</span>
                </a>

              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="left">
        <img src="" alt="">
      </div>
      <div class="gird">
        <div class="form_register">
          <div class="form_header">
            <h3 class="p_header"> Đăng Ký</h3>
            <span class="a_header"><a href="dangnhap.php">Đăng Nhập</a></span>
          </div>
          <form action="dangky.php" method="POST">
            <div class="field">
              <label>Tên Người Dùng :</label>
              <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
            </div>
            <div class="err-txt"><?php echo $errName ?></div>
            <div class="field">
              <label>Email :</label>
              <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
            </div>
            <div class="err-txt"><?php echo $errEmail ?></div>
            <div class="field">
              <label>Số Điện Thoai :</label>
              <input type="text" name="sdt" value="<?php echo isset($_POST['sdt']) ? $_POST['sdt'] : '' ?>">
            </div>
            <div class="err-txt"><?php echo $errNumber ?></div>
            <div class="field">
              <label>Địa Chỉ :</label>
              <input type="text" name="diachi" value="<?php echo isset($_POST['diachi']) ? $_POST['diachi'] : '' ?>">
            </div>
            <div class="err-txt"><?php echo $errAddress ?></div>
            <div class="field">
              <label> Tài Khoản :</label>
              <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>">
            </div>
            <div class="err-txt"><?php echo $errUserName ?></div>
            <div class="field">
              <label> Mật Khẩu :</label>
              <input type="password" name="password" id="passwword2" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
              <i class="hide_pass fa-solid fa-eye" id="show_pass2"></i>
            </div>
            <div class="err-txt"><?php echo $errPassWord ?></div>
            <div class="field">
              <label> Nhắc Lại Mật Khẩu :</label>
              <input type="password" name="password1" id="passwword1" value="<?php echo isset($_POST['password1']) ? $_POST['password1'] : '' ?>">
              <i class="hide_pass1 fa-solid fa-eye" id="show_pass1"></i>
            </div>
            <div class="err-txt"><?php echo $errPassWord1 ?></div>

            <div class="field_button">
              <input type="submit" name="submit" value="Đăng Ký">
            </div>
            <div class="field_button">
              <input type="submit" value="Làm Mới" name="reset">
            </div>

          </form>
        </div>
      </div>


      <div class="right">
        <a href="https://www.facebook.com/VanNguyen280999" target="_blank">
          <i class="right-icon fa-brands fa-facebook-messenger"></i>
        </a>
      </div>
    </div>

    <footer class="footer">
      <div class="gird">
        <div class="footer-main">
          <div class="footer-main__col">
            <h3> Apple 123</h3>
            <ul class="list">
              <li class="item">
                <a href="">Quan điểm chất lượng</a>
              </li>
              <li class="item">
                <a href="">Văn hoá Apple 123</a>
              </li>
              <li class="item">
                <a href="">Ghé thắm Fanpage</a>
              </li>
              <li class="item">
                <a href="">Tuyển dụng</a>
              </li>
            </ul>
          </div>
          <div class="footer-main__col">
            <h3> Mua Hàng</h3>
            <ul class="list">
              <li class="item">
                <a href="">Chính sách vận chuyển</a>
              </li>
              <li class="item">
                <a href="">Mua trả góp</a>
              </li>
              <li class="item">
                <a href="">Khuyến mãi hiện có</a>
              </li>
              <li class="item">
                <a href="">Chính sách thanh toán</a>
              </li>
            </ul>
          </div>
          <div class="footer-main__col">
            <h3> Chính Sách</h3>
            <ul class="list">
              <li class="item">
                <a href="">Bảo hành iphone,ipad,watch,airpods</a>
              </li>
              <li class="item">
                <a href="">Bảo hành phụ kiện</a>
              </li>
              <li class="item">
                <a href="">Bảo hành sửa chữa dịch vụ</a>
              </li>
              <li class="item">
                <a href="">Đổi trả và hoàn tiền</a>
              </li>
            </ul>
          </div>
          <div class="footer-main__col">
            <h3>ĐỊA CHỈ: HÀ ĐÔNG, HÀ NỘI</h3>
            <p>Gọi mua hàng: <b>0965969085</b></p>
            <p>Kỹ thuật và bảo hành: <b>0528448515</b></p>
            <a href="">Xem bản đồ</a>

          </div>
        </div>
      </div>
    </footer>
    <div class="footer-end">
      <div class="gird">
        <div class="end">
          <p>&copy; 1999 Công ty cổ phần Apple 123. GPDKKD: 0965969085 do sở KH & ĐT TP.HN cấp ngày 28/9/2022. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 28/09/1999.
            Địa chỉ: Hà Đông - Hà Nội. Điện thoại: 0528448515. Email: vannguyenn2809@gmail.com. Chịu trách nhiệm nội dung: Nguyễn Hoa Văn. <a href="#">Xem chính sách sử dụng</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="../JS/hide-show-password-res.js"></script>
</body>

</html>