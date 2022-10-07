<?php 
session_start();

require_once "../../Admin/Connection.php";

$id = $_GET['id'];
$sql =  "SELECT * FROM thong_tin_chi_tiet WHERE ma_san_pham = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


$sql1 =  "SELECT * FROM san_pham WHERE ma_san_pham = '$id'";
$rs = mysqli_query($conn, $sql1);
$r = mysqli_fetch_assoc($rs);
$img = $r['anh'];
$name = $r['ten_san_pham'];
$cost = $r['gia'];

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
    <link rel="stylesheet" href="../CSS/main/chitietsanpham.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="https://img.freepik.com/vector-premium/logo-apple-gradient-estilo-colorido_116762-694.jpg"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Thông Tin Sản Phẩm</title>
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
                  <a
                    class="header-top__navbar-item-link"
                    href=""
                    target="_blank"
                    >BỐC THĂM TRÚNG THƯỞNG 13 PRO MAX</a
                  >
                </li>
              </ul>
              <ul class="header-top__navbar-list">
                <li
                  class="header-top__navbar-item header-top__navbar-item--separate"
                >
                  <a class="header-top__navbar-item-link" href=""
                    >Mua máy mới</a
                  >
                </li>
                <li class="header-top__navbar-item header-top__navbar-item--separate">
                <?php 
                if(isset($_SESSION['user_name'])){
                  $user_name = $_SESSION['user_name'];
                  $sql = "SELECT * FROM accounts WHERE username = '$user_name'";
                  $result = mysqli_query($conn, $sql);
                  while ($r1 = $result->fetch_assoc()) {
                  
                    echo '<a class="header-top__navbar-item-link" href="#">'.  $r1['name'] .'</a>';
                  }
                }else {
                  echo  '<a class="header-top__navbar-item-link" href="../System/dangkyphp">Đăng Ký</a>';
                }
                ?>
                
              </li>
              <li class="header-top__navbar-item">
                <?php 
                    if(isset($_SESSION['user_name'])){
                      echo ' <a class="header-top__navbar-item-link " href="../../dangxuat.php">Đăng Xuất</a>';
                    }else{
                      echo  '<a class="header-top__navbar-item-link" href="../System/dangnhap.php">Đăng Nhập</a>';
                    }
                ?>
               
              </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="header-midder">
          <div class="gird">
            <div class="mid">
              <div class="header-logo">
                <a href="../../index.php"
                  ><img
                    class="header-logo_img"
                    src="https://beedesign.com.vn/wp-content/uploads/2020/08/Logo-Apple-123-02.png"
                    alt=""
                /></a>
                <div class="header-search-select"></div>
              </div>
              <div class="header-search">
                <div class="header-search_input-warper">
                  <input
                    type="text"
                    class="header-search_input"
                    placeholder="Bạn đang tìm gì..."
                  />
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
                  <a href="dienthoai.php">
                    <i
                      class="header-bottom_icon fa-solid fa-mobile-screen-button"
                    ></i
                    ><br />
                    <span class="header-bottom_phone">Điện Thoại</span>
                  </a>
                </li>
                <li class="header-bottom_item">
                  <a href="ipad.php">
                    <i
                      class="header-bottom_icon fa-solid fa-tablet-screen-button"
                    ></i
                    ><br />
                    <span class="header-bottom_phone">Ipad</span>
                  </a>
                </li>
                <li class="header-bottom_item">
                  <a href="laptop.php">
                    <i class="header-bottom_icon fa-solid fa-laptop"></i><br />
                    <span class="header-bottom_phone">Laptop</span>
                  </a>
                </li>
                <li class="header-bottom_item">
                  <a href="watch.php">
                    <i class="header-bottom_icon fab fa-twitch"></i><br />
                    <span class="header-bottom_phone">Đồng Hồ</span>
                  </a>
                </li>
                <li class="header-bottom_item">
                  <a href="phukien.php">
                    <i class="header-bottom_icon fa-solid fa-headphones"></i
                    ><br />
                    <span class="header-bottom_phone">Phụ Kiện</span>
                  </a>
                </li>
                <li class="header-bottom_item">
                  <a href="dichvu.php">
                    <i class="header-bottom_icon fa-solid fa-house"></i><br />
                    <span class="header-bottom_phone">Dịch Vụ</span>
                  </a>
                </li>
                <li class="header-bottom_item">
                  <a href="chatluong.php">
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
          <div class="main1">
            <div class="main1-header">
              <h1 class="h1_header"><?php echo $name ?></h1>
              <hr />
            </div>
            <div class="main1-content">
              <div class="main1-content_left">
                <div class="main1-img">
                  <img id="" src="<?php echo '../../Admin/QuanLy/quanlydienthoai/photo/' . "$img"?>" alt="" />
                </div>
                <div class="left_information">
                   <p><i class="fa-solid fa-mobile-screen-button"></i><?php echo $row['cau_hinh'] ?></p>
                   <p><i class="fa-solid fa-camera"></i><?php echo $row['cam_sau'] ?></p>
                   <p><i class="fa-solid fa-camera-rotate"></i><?php echo $row['cam_truoc'] ?></p>
                   <p><i class="fa-solid fa-microchip"></i><?php echo $row['ram'] ?></p>
                   <p><i class="fa-sharp fa-solid fa-memory"></i><?php echo $row['dung_luong'] ?></p> 
                </div>
                <div class="left_end">
                    <p><i class="fa-sharp fa-solid fa-award"></i>Hàng Chính Hãng - Bảo Hành 12 Tháng</p>
                    <p><i class="fa-solid fa-truck-fast"></i>Giao Hàng Toàn Quốc</p>
                </div>
              </div>
              <div class="main1-content_right">
                <div class="right_header">
                  <p id="right-cost"><?php 
                  echo $cost;
                  
                  
                  ?> đ</p>
                  <p id="right-p">Trả góp chỉ từ <?php echo $row['giam_gia'] ?> ₫/tháng</p>
                </div>
                <div class="right_promotion">
                  <div class="promotion-header">
                    <p>Chọn 1 trong 2 khuyến mãi sau</p>
                    <hr />
                  </div>
                  <div class="promotion-main">
                    <p>Giảm ngay 6.500.000đ áp dụng đến sau ngày 30/9</p>
                    <p>Giảm ngay 1.000.000đ áp dụng đến 30/09 + Trả góp 0%</p>
                    <hr />
                  </div>
                  <div class="promotion-more">
                    <p>Bảo hành 2 năm chính hãng</p>
                    <p>
                      Tặng PMH 200.000đ khi mua Sạc 35W
                      <a href="">Xem chi tiết</a>
                    </p>
                    <p>
                      Giảm 30% eSim MobiFone Big Data 1T - 6GB/ngày - miễn phí
                      tháng đầu - giá chỉ 175.000đ
                    </p>
                    <p>
                      Thu cũ đổi mới trợ giá ngay 15% đến 3 triệu
                      (SmartExchange) <a href="">Xem chi tiết</a>
                    </p>
                    <p>
                      Giảm đến 20% củ sạc nhanh 25W <a href="">Xem chi tiết</a>
                    </p>
                    <p>
                      Giảm 30% Sim MobiFone Siêu Data 3T - 2GB/ngày - miễn phí 3
                      tháng - giá chỉ 266.000đ
                    </p>
                    <p>
                      Cơ hội trúng Jackpot đến 2 tỷ <a href=""> Xem chi tiết</a>
                    </p>
                    <p>
                      Tặng gói iCloud 50GB miễn phí 3 tháng
                      <a href="">Xem chi tiết</a>
                    </p>
                  </div>
                </div>
                <div class="right_btn">
                  <button class="btn-buy"><a href="../../giohang.php?id=<?php echo $r['ma_san_pham'] ?> "> Mua Ngay</a></button>
                  <p>Giao hàng miễn phí hoặc nhận tại Shop</p>
                </div>
                <div class="right_pay">
                  <div class="phone">
                    <button class="btn-pay">Trả Góp 0%</button>
                    <p>Duyệt nhanh qua điện thoại</p>
                  </div>
                  <div class="visa">
                    <button class="btn-pay-visa">Trả Góp Qua Thẻ</button>
                    <p>Visa, Master Card, JCB, AMEX</p>
                  </div>
                </div>
                <div class="right_end">
                    <p>Gọi <b>0965969085</b> để được tư vấn mua hàng (Miễn Phí)</p>
                </div>
              </div>
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
  </body>
</html>
