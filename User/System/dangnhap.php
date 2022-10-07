<?php
session_start();
require_once '../../Admin/Connection.php';

if(isset($_SESSION['error'])){
  $message = $_SESSION['error'];
  echo "<script type='text/javascript'>alert('$message');</script>";
  unset($_SESSION['error']);
}

if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
  if(!empty($username) && !empty($password)){
    $password_login = md5($password); 
   
    $sql = "select username, password from accounts where username = '$username' and password = '$password_login'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      $_SESSION['user_name'] = $username;
        header("Location: ../../index.php");
    }else{
      $message = "Kiểm Tra Lại";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
} 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="../CSS/base.css" />
  <link rel="stylesheet" href="../CSS/Index/header.css" />
  <link rel="stylesheet" href="../CSS/Index/main.css" />
  <link rel="stylesheet" href="../CSS/Index/footer.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="https://img.freepik.com/vector-premium/logo-apple-gradient-estilo-colorido_116762-694.jpg" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Đăng Nhập</title>
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

              <li class="header-top__navbar-item">
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
              <a href="../../index.php"><img class="header-logo_img" src="https://beedesign.com.vn/wp-content/uploads/2020/08/Logo-Apple-123-02.png" alt="" /></a>
              <div class="header-search-select"></div>
            </div>
            <div class="header-search">
              <div class="header-search_input-warper">
                <input type="text" class="header-search_input" placeholder="Bạn đang tìm gì..." />
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
                  <i class="header-bottom_icon fa-solid fa-mobile-screen-button"></i><br />
                  <span class="header-bottom_phone">Điện Thoại</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="../Danh_Muc/ipad.php">
                  <i class="header-bottom_icon fa-solid fa-tablet-screen-button"></i><br />
                  <span class="header-bottom_phone">Ipad</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="../Danh_Muc/laptop.php">
                  <i class="header-bottom_icon fa-solid fa-laptop"></i><br />
                  <span class="header-bottom_phone">Laptop</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="../Danh_Muc/watch.php">
                  <i class="header-bottom_icon fab fa-twitch"></i><br />
                  <span class="header-bottom_phone">Đồng Hồ</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="../Danh_Muc/phukien.php">
                  <i class="header-bottom_icon fa-solid fa-headphones"></i><br />
                  <span class="header-bottom_phone">Phụ Kiện</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="../Danh_Muc/dichvu.php">
                  <i class="header-bottom_icon fa-solid fa-house"></i><br />
                  <span class="header-bottom_phone">Dịch Vụ</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="../Danh_Muc/chatluong.php">
                  <i class="header-bottom_icon fa-solid fa-gem"></i><br />
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
        <img src="" alt="" />
      </div>
      <div class="gird">
        <div class="modal">
          <div class="modal__body">
            <form action="dangnhap.php" method="POST">
              <div class="auth-form">
                <div class="auth-form__container">
                  <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng Nhập</h3>
                    <span class="auth-form__switch-btn"><a class="a-modal" href="dangky.php">Đăng Ký</a></span>
                  </div>
                  
                    <div class="auth-form__form">
                      <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Nhập tài khoản của bạn" name="username" />
                      </div>
                      <div class="auth-form__group">
                        <input type="password" class="auth-form__input" id="passwword" placeholder="Nhập mật khẩu của bạn" name="password" />
                        <i class="hide-pass fa-solid fa-eye" id="show_pass"></i>
                      </div>
                    </div>

                    <div class="auth-form__p">
                      <div class="auth-form__help">
                        <a href="" class="auth-form__help-link auth-form__help-forgot">Quên Mật Khẩu</a>
                        <span class="auth-form__p__help"></span>
                        <a href="" class="auth-form__help-link">Cần Trợ Giúp ?</a>
                      </div>
                    </div>

                    <div class="auth-form-ctrs">
                      <button class="btn ctrs">
                        <a href="../../index.php" style="text-decoration: none">Trờ Lại</a>
                      </button>
                      <input type="submit" class="btn btn--primary" name="submit" value="Đăng Nhập"></input>
                    </div>
                



                </div>



                <div class="auth-form__connect">
                  <a href="" class="auth-form__connect--facebook btn btn-size-s btn--width-icon">
                    <i class="auth-form__connect--icon fa-brands fa-square-facebook"></i>
                    <span> Đăng nhập với Facebook</span>
                  </a>
                  <a href="" class="auth-form__connect--google btn btn-size-s btn--width-icon">
                    <i class="auth-form__connect--icon fa-brands fa-google"></i>
                    <span>Đăng nhập với Google</span>
                  </a>
                </div>
              </div>
            </form>
          </div>
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
            <h3>Apple 123</h3>
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
            <h3>Mua Hàng</h3>
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
            <h3>Chính Sách</h3>
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
          <p>
            &copy; 1999 Công ty cổ phần Apple 123. GPDKKD: 0965969085 do sở KH
            & ĐT TP.HN cấp ngày 28/9/2022. GPMXH: 238/GP-BTTTT do Bộ Thông Tin
            và Truyền Thông cấp ngày 28/09/1999. Địa chỉ: Hà Đông - Hà Nội.
            Điện thoại: 0528448515. Email: vannguyenn2809@gmail.com. Chịu
            trách nhiệm nội dung: Nguyễn Hoa Văn.
            <a href="#">Xem chính sách sử dụng</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="../JS/hide-show-password.js"></script>
</body>

</html>