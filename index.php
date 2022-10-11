<?php
session_start();
require_once "Admin/Connection.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="User/CSS/base.css" />
  <link rel="stylesheet" href="User/CSS/Index/header.css" />
  <link rel="stylesheet" href="User/CSS/Index/main.css" />
  <link rel="stylesheet" href="User/CSS/Index/footer.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="https://img.freepik.com/vector-premium/logo-apple-gradient-estilo-colorido_116762-694.jpg" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Apple 123</title>
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
                <a class="header-top__navbar-item-link" href="User/System/dangnhap.php" target="_blank">BỐC THĂM TRÚNG THƯỞNG 13 PRO MAX</a>
              </li>
            </ul>
            <ul class="header-top__navbar-list">
              <!-- THÔNG BÁO -->

              <!-- HẾT THÔNG BÁO -->
              <li class="header-top__navbar-item header-top__navbar-item--separate">
                <a class="header-top__navbar-item-link" href="">Thông Báo</a>
              </li>
              <li class="header-top__navbar-item header-top__navbar-item--separate">
                <?php
                if (isset($_SESSION['user_name'])) {
                  $user_name = $_SESSION['user_name'];
                  $sql = "SELECT * FROM accounts WHERE username = '$user_name'";
                  $result = mysqli_query($conn, $sql);
                  while ($r = $result->fetch_assoc()) {

                    echo '<a class="header-top__navbar-item-link" href="#">' .  $r['name'] . '</a>';
                  }
                } else {
                  echo  '<a class="header-top__navbar-item-link" href="User/System/dangky.php">Đăng Ký</a>';
                }
                ?>

              </li>
              <li class="header-top__navbar-item">
                <?php
                if (isset($_SESSION['user_name'])) {
                  echo ' <a class="header-top__navbar-item-link " href="dangxuat.php">Đăng Xuất</a>';
                } else {
                  echo  '<a class="header-top__navbar-item-link" href="User/System/dangnhap.php">Đăng Nhập</a>';
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
              <a href="index.php"><img class="header-logo_img" src="https://beedesign.com.vn/wp-content/uploads/2020/08/Logo-Apple-123-02.png" alt="" /></a>
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
              <a class="giohang" href="giohang.php"><span class="header-cart-p">Giỏ Hàng</span></a>

            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom">
        <div class="gird">
          <div class="bottom">
            <ul class="header-bottom_list">
              <li class="header-bottom_item">
                <a href="User/Danh_Muc/dienthoai.php">
                  <i class="header-bottom_icon fa-solid fa-mobile-screen-button"></i><br />
                  <span class="header-bottom_phone">Điện Thoại</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="User/Danh_Muc/ipad.php">
                  <i class="header-bottom_icon fa-solid fa-tablet-screen-button"></i><br />
                  <span class="header-bottom_phone">Ipad</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="User/Danh_Muc/laptop.php">
                  <i class="header-bottom_icon fa-solid fa-laptop"></i><br />
                  <span class="header-bottom_phone">Laptop</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="User/Danh_Muc/watch.php">
                  <i class="header-bottom_icon fab fa-twitch"></i><br />
                  <span class="header-bottom_phone">Đồng Hồ</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="User/Danh_Muc/phukien.php">
                  <i class="header-bottom_icon fa-solid fa-headphones"></i><br />
                  <span class="header-bottom_phone">Phụ Kiện</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="User/Danh_Muc/dichvu.php">
                  <i class="header-bottom_icon fa-solid fa-house"></i><br />
                  <span class="header-bottom_phone">Dịch Vụ</span>
                </a>
              </li>
              <li class="header-bottom_item">
                <a href="User/Danh_Muc/chatluong.php">
                  <i class="header-bottom_icon fa-solid fa-gem"></i><br />
                  <span class="header-bottom_phone">Chất Lượng</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <!-- MAIN -->
    <div class="container">
      <div class="left">
        <img src="User/Images/ads/left.png" alt="" />
      </div>
      <div class="gird">
        <!-- main banner -->
        <div class="main-banner">
          <div class="main-banner__logo1">
            <img class="main-banner_img" src="User/Images/index/banner/1.png" alt="" />
            <span class="main-banner_p">Chỉ giảm Online</span>
          </div>
          <div class="main-banner__logo2">
            <img class="main-banner_img" src="User/Images/index/banner/2.png" alt="" />
            <span class="main-banner_p">Xả hàng giảm sốc</span>
          </div>
          <div class="main-banner__logo3">
            <img class="main-banner_img" src="User/Images/index/banner/3.png" alt="" />
            <span class="main-banner_p">Sale hè giảm đến 50%</span>
          </div>
          <div class="main-banner__logo4">
            <img class="main-banner_img" src="User/Images/index/banner/4.png" alt="" />
            <span class="main-banner_p">Bão sale đồng hồ</span>
          </div>
        </div>
        <!-- main img after banner -->
        <div class="main-img-after-banner">
          <img src="User/Images/index/banner/topzon.png" alt="" />
        </div>
        <!-- main Slideshow  -->
        <div class="main-slideshow">
          <div class="main-slideshow-header">
            <h1>GIẢM THÊM KHI THANH TOÁN ONLINE</h1>
          </div>
          <div class="main-slideshow-content">
            <div class="slideshow-wrapper">
              <div class="slide">
                <img id="slide-img" src="User/Images/index/thanh-toan/1.jpg" />
              </div>
              <div class="slide">
                <img id="slide-img" src="User/Images/index/thanh-toan/2.png" />
              </div>
              <div class="slide">
                <img id="slide-img" src="User/Images/index/thanh-toan/3.jpg" />
              </div>
              <div class="slide">
                <img id="slide-img" src="User/Images/index/thanh-toan/4.jpg" />
              </div>
              <div class="slide">
                <img id="slide-img" src="User/Images/index/thanh-toan/5.png" />
              </div>
              <div class="slide">
                <img id="slide-img" src="User/Images/index/thanh-toan/6.png" />
              </div>

              <!-- /// -->

              <div class="slide">
                <img id="slide-img" src="User/Images/index/thanh-toan/1.jpg" />
              </div>
              <div class="slide">
                <img id="slide-img" src="User/Images/index/thanh-toan/2.png" />
              </div>
              <div class="slide">
                <img id="slide-img" src="User/Images/index/thanh-toan/3.jpg" />
              </div>
              <div class="slide">
                <img id="slide-img" src="User/Images/index/thanh-toan/4.jpg" />
              </div>
              <div class="slide">
                <img id="slide-img" src="User/Images/index/thanh-toan/5.png" />
              </div>
              <div class="slide">
                <img id="slide-img" src="User/Images/index/thanh-toan/6.png" />
              </div>
            </div>
          </div>
        </div>

        <!-- main deal -->

        <div class="main-deal">
          <div class="main-deal_logo">
            <img src="User/Images/index/deal/banner.png" alt="" />
          </div>
          <div class="main-deal_product">
            <div class="main-product-row">
              <?php
              // $sql = "SELECT * FROM san_pham";
              $sql =  "SELECT * FROM san_pham LIMIT 0,5";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img class="main-deal_product-img" src="<?php
                                                          $img = $row['anh'];
                                                          echo 'Admin/QuanLy/quanlydienthoai/photo/' . "$img"
                                                          ?>" alt="" />
                  <a href="User/Danh_Muc/chitietsanpham.php?id=<?php echo $row['ma_san_pham'] ?>" class="a_sp">
                    <h5 class="main-deal_product_p">
                      <?php echo $row['ten_san_pham'] ?>
                    </h5>
                  </a>
                  <div class="main-deal_product_cost">
                    <!-- <h5>40.990.000 <sup>đ</sup></h5> -->
                    <h5><?php echo $row['gia'] ?> <sup>đ</sup></h5>
                    <p><?php echo rand(10,20) ?> %</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p><?php echo (rand(2, 5)) ?></p>
                    <i class="fa-solid fa-star"></i>
                    <span>(<?php echo (rand(10, 200)) ?>)</span>
                  </div>

                </div>
              <?php
              }
              ?>
            </div>
          </div>
          <div class="main-deal_btn">
            <button class="btn">
              <a href="#">Xem tất cả</a>
            </button>
          </div>
        </div>

        <!-- main ads -->
        <div class="main-ads">
          <h1>Tuần Lễ Vàng VIVO</h1>
          <div class="main-ads-banner">
            <div class="main-ads-banner_1">
              <img src="User/Images/index/ads/banner1.png" alt="" />
            </div>
            <div class="main-ads-banner_1">
              <img src="User/Images/index/ads/banner2.png" alt="" />
            </div>
            <div class="main-ads-banner_1">
              <img src="User/Images/index/ads/banner3.png" alt="" />
            </div>
          </div>
          <div class="main-ads-product">
            <div class="main-deal_product_1">
              <p class="main-deal_product-header">Trả góp 0%</p>
              <img class="main-deal_product-img" src="User/Images/index/ads/1.jpg" alt="" />
              <h5 class="main-deal_product_p">ViVo Y15a</h5>
              <div class="main-deal_product_cost">
                <h5>3.790.000<sup>đ</sup></h5>
                <p>-15%</p>
              </div>
              <div class="main-deal_product_start">
                <p>3.4</p>
                <i class="fa-solid fa-star"></i>
                <span>(45)</span>
              </div>
            </div>
            <div class="main-deal_product_1">
              <p class="main-deal_product-header">Trả góp 0%</p>
              <img class="main-deal_product-img" src="User/Images/index/ads/2.jpg" alt="" />
              <h5 class="main-deal_product_p">ViVo Y15s</h5>
              <div class="main-deal_product_cost">
                <h5>3.490.000<sup>đ</sup></h5>
                <p>-25%</p>
              </div>
              <div class="main-deal_product_start">
                <p>3.4</p>
                <i class="fa-solid fa-star"></i>
                <span>(95)</span>
              </div>
            </div>
            <div class="main-deal_product_1">
              <p class="main-deal_product-header">Trả góp 0%</p>
              <img class="main-deal_product-img" src="User/Images/index/ads/3.jpg" alt="" />
              <h5 class="main-deal_product_p">ViVo Y15s 4GB</h5>
              <div class="main-deal_product_cost">
                <h5>4.490.000<sup>đ</sup></h5>
                <p>-45%</p>
              </div>
              <div class="main-deal_product_start">
                <p>3.5</p>
                <i class="fa-solid fa-star"></i>
                <span>(95)</span>
              </div>
            </div>
            <div class="main-deal_product_1">
              <p class="main-deal_product-header">Trả góp 0%</p>
              <img class="main-deal_product-img" src="User/Images/index/ads/4.jpg" alt="" />
              <h5 class="main-deal_product_p">ViVo Y15s 6GB</h5>
              <div class="main-deal_product_cost">
                <h5>4.890.000<sup>đ</sup></h5>
                <p>-35%</p>
              </div>
              <div class="main-deal_product_start">
                <p>3.7</p>
                <i class="fa-solid fa-star"></i>
                <span>(113)</span>
              </div>
            </div>
            <div class="main-deal_product_1">
              <p class="main-deal_product-header">Trả góp 0%</p>
              <img class="main-deal_product-img" src="User/Images/index/ads/5.jpg" alt="" />
              <h5 class="main-deal_product_p">ViVo Y33s</h5>

              <div class="main-deal_product_cost">
                <h5>6.990.000<sup>đ</sup></h5>
                <p>-25%</p>
              </div>
              <div class="main-deal_product_start">
                <p>4.6</p>
                <i class="fa-solid fa-star"></i>
                <span>(64)</span>
              </div>
            </div>
          </div>
          <div class="main-ads-btn">
            <button class="btn">
              <a href="#">Xem tất cả</a>
            </button>
          </div>
        </div>


        <!-- main trending -->
        <div class="main-trending">
          <div class="main-trending-header">
            <h1>XU HƯỚNG MUA SẢN PHẨM</h1>
          </div>
          <div class="main-trending-mid">
            <div class="main-trending-item-1">
              <a href="#">
                <h4 class="h4-p">Điện thoại</h4>
                <img src="User/Images/index/trending/1.png" alt="" />
                <h5>Galaxy Z Fold Z Flip 4</h5>
              </a>
            </div>
            <div class="main-trending-item-1">
              <a href="#">
                <h4 class="h4-p">Laptop Gaming</h4>
                <img src="User/Images/index/trending/2.png" alt="" />
                <h5>Giá chỉ từ 14.990.000đ</h5>
              </a>
            </div>
            <div class="main-trending-item-1">
              <a href="#">
                <h4 class="h4-p">Tai nghe không dây</h4>
                <img src="User/Images/index/trending/3.png" alt="" />
                <h5>Đặt ngay</h5>
              </a>
            </div>
            <div class="main-trending-item-1">
              <a href="#">
                <h4 class="h4-p">realme Watch 3</h4>
                <img src="User/Images/index/trending/4.png" alt="" />
                <h5>Đặt trước ngay !</h5>
              </a>
            </div>
          </div>
        </div>

        <!-- main category -->
        <div class="main-category">
          <div class="main-category-header">
            <h1>DANH MỤC NỔI BẬT</h1>
          </div>
          <div class="main-category-content">
            <div class="main-category-content-item">
              <a href="">
                <img src="User/Images/index/danh-muc/1.png" alt="" /><br />
                <span>Điện thoại</span>
              </a>
            </div>
            <div class="main-category-content-item">
              <a href="">
                <img src="User/Images/index/danh-muc/2.png" alt="" /><br />
                <span>Laptop</span>
              </a>
            </div>
            <div class="main-category-content-item">
              <a href="">
                <img src="User/Images/index/danh-muc/3.png" alt="" /><br />
                <span>Tablet</span>
              </a>
            </div>
            <div class="main-category-content-item">
              <a href="">
                <img src="User/Images/index/danh-muc/4.png" alt="" /><br />
                <span>Đồng hồ thông minh</span>
              </a>
            </div>
            <div class="main-category-content-item">
              <a href="">
                <img src="User/Images/index/danh-muc/5.png" alt="" /><br />
                <span>Thiết bị mạng</span>
              </a>
            </div>
            <div class="main-category-content-item">
              <a href="">
                <img src="User/Images/index/danh-muc/6.png" alt="" /><br />
                <span>Chuột máy tinh</span>
              </a>
            </div>
          </div>
          <div class="main-category-content">
            <div class="main-category-content-item">
              <a href="">
                <img src="User/Images/index/danh-muc/7.png" alt="" /><br />
                <span>Bàn phím</span>
              </a>
            </div>
            <div class="main-category-content-item">
              <a href="">
                <img src="User/Images/index/danh-muc/8.png" alt="" /><br />
                <span>Loa</span>
              </a>
            </div>
            <div class="main-category-content-item">
              <a href="">
                <img src="User/Images/index/danh-muc/9.png" alt="" /><br />
                <span>Tai nghe</span>
              </a>
            </div>
            <div class="main-category-content-item">
              <a href="">
                <img src="User/Images/index/danh-muc/10.png" alt="" /><br />
                <span>Sạc dự phòng</span>
              </a>
            </div>
            <div class="main-category-content-item">
              <a href="">
                <img src="User/Images/index/danh-muc/11.png" alt="" /><br />
                <span>Cáp sạc</span>
              </a>
            </div>
            <div class="main-category-content-item">
              <a href="">
                <img src="User/Images/index/danh-muc/12.png" alt="" /><br />
                <span>Phụ kiện Gaming</span>
              </a>
            </div>
          </div>
        </div>

        <!-- main Slideshow  -->

        <!-- main utilities -->
        <div class="main-utilities">
          <div class="main-utilities-header">
            <h1>DỊCH VỤ TIỆN ÍCH</h1>
            <a href="">
              <h3>XEM THÊM DỊCH VỤ</h3>
            </a>
          </div>
          <div class="main-utilities-content">
            <div class="main-utilities-item1">
              <div class="main-utilities-icon">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="main-utilities-p">
                <h3>Mua mã thẻ cào</h3>
                <p>
                  <b style="color: red">Giảm 3%</b> mệnh giá từ 100.000 đ trở
                  lên
                </p>
              </div>
            </div>
            <div class="main-utilities-item2">
              <div class="main-utilities-icon">
                <i class="fa-solid fa-bolt-lightning"></i>
              </div>
              <div class="main-utilities-p">
                <h3>Dịch Vụ Đóng Tiền</h3>
                <p>
                  <b style="color: red">Giảm 10%</b> cho điện , nước,
                  internet, cước điện thoại trả sau
                </p>
              </div>
            </div>
            <div class="main-utilities-item3">
              <div class="main-utilities-icon">
                <i class="fa-solid fa-gamepad"></i>
              </div>
              <div class="main-utilities-p">
                <h3>Mua Thẻ Game</h3>
                <p>
                  <b style="color: red">Giảm 2%</b> cho tất cả nhà mạng, áp
                  dụng cho mệnh giá từ 300.000 trở lên
                </p>
              </div>
            </div>
            <div class="main-utilities-item4">
              <div class="main-utilities-icon">
                <i class="fa-solid fa-ticket"></i>
              </div>
              <div class="main-utilities-p">
                <h3>Vé Máy Bay, Tàu</h3>
                <p>Thu hộ tiền vé xe , vé tàu, vé máy bay</p>
              </div>
            </div>
          </div>
        </div>

        <!-- main product -->
        <div class="main-product">
          <div class="main-product-header">
            <h1>GỢI Ý HÔM NAY</h1>
          </div>
          <div class="main-product-content">
            <div class="main-product-row">
              <?php
              $sql_product = "SELECT * FROM san_pham LIMIT 5,5";
              // $sql_product = "SELECT * FROM san_pham ";
              $pr = mysqli_query($conn, $sql_product);
              while ($products = mysqli_fetch_assoc($pr)) {

              ?>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp <?php echo rand(0, 10) ?> %</p>
                  <img class="main-deal_product-img" src="<?php
                                                          $anh = $products['anh'];
                                                          echo 'Admin/QuanLy/quanlydienthoai/photo/' . "$anh"
                                                          ?>" title="ảnh sản phẩm" />
                  <a href="User/Danh_Muc/chitietsanpham.php?id=<?php echo $products['ma_san_pham'] ?>" class="a_sp">
                    <h5 class="main-deal_product_p"><?php echo $products['ten_san_pham'] ?></h5>
                  </a>
                  <div class="main-deal_product_cost">
                    <h5><?php echo $products['gia'] ?><sup>đ</sup></h5>
                    <p><?php echo rand(15, 30) ?> %</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p><?php echo rand(3, 5) ?></p>
                    <i class="fa-solid fa-star"></i>
                    <span><?php echo rand(10, 200) ?></span>
                  </div>
                </div>
              <?php
              }

              ?>
            </div>

            <div class="main-product-row">
              <?php
              $sql_product = "SELECT * FROM san_pham LIMIT 10,5";
              // $sql_product = "SELECT * FROM san_pham ";
              $pr = mysqli_query($conn, $sql_product);
              $tong = 0;
              while ($products = mysqli_fetch_assoc($pr)) {

              ?>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp <?php echo rand(0, 10) ?> %</p>
                  <img class="main-deal_product-img" src="<?php
                                                          $anh = $products['anh'];
                                                          echo 'Admin/QuanLy/quanlydienthoai/photo/' . "$anh"
                                                          ?>" title="ảnh sản phẩm" />
                  <a href="User/Danh_Muc/chitietsanpham.php?id=<?php echo $products['ma_san_pham'] ?>" class="a_sp">
                    <h5 class="main-deal_product_p"><?php echo $products['ten_san_pham'] ?></h5>
                  </a>
                  <div class="main-deal_product_cost">
                    <h5><?php echo $products['gia'] ?><sup>đ</sup></h5>
                    <p><?php echo rand(15, 30) ?> %</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p><?php echo rand(3, 5) ?></p>
                    <i class="fa-solid fa-star"></i>
                    <span><?php echo rand(10, 200) ?></span>
                  </div>
                </div>
              <?php
              }

              ?>

            </div>
            <br>

          </div>
        </div>

        <!-- main end -->
        <div class="main-end">
          <div class="main-end-header">
            <h1>CHUYÊN TRANG THƯƠNG HIỆU</h1>
          </div>
          <div class="main-end-content">
            <div class="main-end-item">
              <img src="https://cdn.tgdd.vn/2022/08/banner/samsung2samsung-390-210-390x210.png" alt="" />
            </div>
            <div class="main-end-item">
              <img src="https://cdn.tgdd.vn/2022/07/banner/6BD1D926-AFFA-45E4-A5C6-DE9386EED1CB-390x210.png" alt="" />
            </div>
            <div class="main-end-item">
              <img src="https://cdn.tgdd.vn/2022/07/banner/lenovoLaptop-390x210.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="right">
        <a href="https://www.facebook.com/VanNguyen280999" target="_blank">
          <img src="User/Images/ads/right.png" alt="" />
          <i class="right-icon fa-brands fa-facebook-messenger"></i>
        </a>
      </div>
    </div>
    <!-- FOOTER -->
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
            <a href="Admin_Login.php">Xem chính sách sử dụng</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</body>


</html>