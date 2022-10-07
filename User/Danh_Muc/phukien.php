<?php
session_start();
require_once "../../Admin/Connection.php";
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
    <link rel="stylesheet" href="../CSS/main/phukien.css" />
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
    <title>Phụ Kiện</title>
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
                  while ($r = $result->fetch_assoc()) {
                  
                    echo '<a class="header-top__navbar-item-link" href="#">'.  $r['name'] .'</a>';
                  }
                }else {
                  echo  '<a class="header-top__navbar-item-link" href="..//System/dangkyphp">Đăng Ký</a>';
                }
                ?>
                
              </li>
              <li class="header-top__navbar-item">
                <?php 
                    if(isset($_SESSION['user_name'])){
                      echo ' <a class="header-top__navbar-item-link " href="../../dangxuat.php">Đăng Xuất</a>';
                    }else{
                      echo  '<a class="header-top__navbar-item-link" href="..//System/dangnhap.php">Đăng Nhập</a>';
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
          <div class="main">
            <!-- main banner -->
            <div class="main-banner">
              <div class="main-banner-top">
                <div class="main-banner-top-left">
                  <img
                    src="https://cdn.tgdd.vn/2022/08/banner/800-200-800x200-33.png"
                    alt=""
                  />
                </div>
                <div class="main-banner-bottom-right">
                  <img
                    class="img-right"
                    src="https://cdn.tgdd.vn/2022/05/banner/sticky-airpod-390-97-390x97.png"
                    alt=""
                  />
                  <img
                    class="img-right"
                    src="https://cdn.tgdd.vn/2022/06/banner/390x97-(1)-390x97-1.png"
                    alt=""
                  />
                </div>
              </div>
            </div>

            <!-- main trademark -->
            <div class="main-trademark">
              <div class="main-trademark-header">
                <h1>THƯƠNG HIỆU HÀNG ĐẦU</h1>
              </div>
              <div class="main-trademark-list">
                <div class="main-trademark-item">
                  <img
                    src="https://cdn.tgdd.vn/Brand/1/Apple482-b_37.jpg"
                    alt=""
                  />
                </div>
                <div class="main-trademark-item">
                  <img
                    src="https://cdn.tgdd.vn/Brand/1/Beats482-b_28.jpg"
                    alt=""
                  />
                </div>
                <div class="main-trademark-item">
                  <img
                    src="https://cdn.tgdd.vn/Brand/1/Harman-Kardon482-b_23.jpg"
                    alt=""
                  />
                </div>
                <div class="main-trademark-item">
                  <img
                    src="https://cdn.tgdd.vn/Brand/1/samsungnew-220x48-220x48-1.png"
                    alt=""
                  />
                </div>
                <div class="main-trademark-item">
                  <img
                    src="https://cdn.tgdd.vn/Brand/1/Sony482-b_41.jpg"
                    alt=""
                  />
                </div>
                <div class="main-trademark-item">
                  <img
                    src="https://cdn.tgdd.vn/Brand/1/Belkin9499-s39-160x40.jpg"
                    alt=""
                  />
                </div>
                <div class="main-trademark-item">
                  <img
                    src="https://cdn.tgdd.vn/Brand/1/Anker482-b_18.png"
                    alt=""
                  />
                </div>
                <div class="main-trademark-item">
                  <img
                    src="https://cdn.tgdd.vn/Brand/1/Logitech482-b_47.jpg"
                    alt=""
                  />
                </div>
                <div class="main-trademark-item">
                  <img
                    src="https://cdn.tgdd.vn/Brand/1/JBL-220x48-1.jpeg"
                    alt=""
                  />
                </div>
                <!-- <div class="main-trademark-item">
                            <span class="main-trademark-p">Xem thêm</span>
                        </div> -->
              </div>
            </div>

            <!-- main deal -->
            <div class="main-deal">
              <div class="main-deal-banner">
                <img
                  src="https://cdn.tgdd.vn/2022/04/banner/DESKTOPTagline11-1200x100-6.png"
                  alt=""
                />
                <p>30%</p>
              </div>
              <div class="main-deal_product">
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/54/250701/airpods-3-hop-sac-khong-day-thumb-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    AirPods 3 Apple MME73 Trắng
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>34.790.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>4</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(45)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/54/286335/tai-nghe-bluetooth-true-wireless-oppo-enco-air-2-pro-ete21-220822-051149-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    True Wireless OPPO ENCO Air 2 Pro ETE21
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>1.790.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>4.5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(45)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/57/245254/pin-polymer-10000mah-type-c-ava-pb100s-thumb-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">AVA+ PB100S</h5>
                  <div class="main-deal_product_cost">
                    <h5>440.000<sup>đ</sup></h5>
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
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/4727/247335/bo-phat-song-wifi-6-bang-tan-kep-asus-ax53u-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">Asus AX53U Đen</h5>
                  <div class="main-deal_product_cost">
                    <h5>1.350.000<sup>đ</sup></h5>
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
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/2162/247516/bluetooth-mozard-x21-ava-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">Mozard X21</h5>
                  <div class="main-deal_product_cost">
                    <h5>440.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>4</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(45)</span>
                  </div>
                </div>
              </div>
              <div class="main-deal_btn">
                <button class="btn">
                  <a href="#">Xem tất cả</a>
                </button>
              </div>
            </div>

            <!-- main apple -->
            <div class="main-deal">
              <div class="main-deal-banner">
                <img
                  src="https://cdn.tgdd.vn/2022/03/banner/DESKTOPTagline8-1200x150.png"
                  alt=""
                />
              </div>
              <div class="main-deal_product">
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/54/250701/airpods-3-hop-sac-khong-day-thumb-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    AirPods 3 Apple MME73 Trắng
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>4.790.000<sup>đ</sup></h5>
                    <p>-35%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(75)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/86/251787/chuot-bluetooth-apple-mk2e3-trang-thumb-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">Apple MK2E3 Trắng</h5>
                  <div class="main-deal_product_cost">
                    <h5>2.240.000<sup>đ</sup></h5>
                    <p>-25%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(8)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-thumb-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    AirPods Pro Wireless Charge Apple MWP22
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>4.990.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>3</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(45)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/54/253802/bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-thumb-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    AirPods Pro MagSafe Charge Apple MLWK3 Trắng
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>5.390.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(99)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/54/236016/bluetooth-airpods-2-apple-mv7n2-imei-ava-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">AirPods 2 Apple MV7N2</h5>
                  <div class="main-deal_product_cost">
                    <h5>3.390.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>4</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(245)</span>
                  </div>
                </div>
              </div>
              <div class="main-deal_product">
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/54/88053/tai-nghe-earpods-cong-lightning-apple-mmtn2-14-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    EarPods Lightning Apple MMTN2
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>690.000<sup>đ</sup></h5>
                    <p>-35%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>4</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(75)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/1882/237415/but-cam-ung-apple-pencil-2-mu8f2-180722-105300-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    Bút cảm ứng Apple Pencil 2 MU8F2
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>3.500.000<sup>đ</sup></h5>
                    <p>-25%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(8)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/60/269508/op-lung-magsafe-iphone-13-pro-max-nhua-deo-apple-mm2u3-290722-011202-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    Ốp lưng MagSafe iPhone 13 Pro Max Nhựa dẻo Apple MM2U3
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>950.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(5)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/9499/229595/adapter-sac-5w-cho-iphone-ipad-ipod-apple-mgn13-thumb-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    AirPods Pro MagSafe Charge Apple MLWK3 Trắng
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>5.390.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(99)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/58/156780/12-cap-type-c-type-c-80cm-apple-mq4h2-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">Apple MGN13 Trắng</h5>
                  <div class="main-deal_product_cost">
                    <h5>405.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>4</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(7)</span>
                  </div>
                </div>
              </div>
              <div class="main-deal_btn">
                <button class="btn">
                  <a href="#">Xem tất cả</a>
                </button>
              </div>
            </div>

            <!-- main pin -->
            <div class="main-deal">
              <div class="main-deal-banner">
                <img
                  src="https://cdn.tgdd.vn/2022/03/banner/DESKTOPTagline2-1200x150-3.png"
                  alt=""
                />
              </div>
              <div class="main-deal_product">
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/57/241166/ava-plus-ds005-pp-thumb-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">AVA+ DS005-PP</h5>
                  <div class="main-deal_product_cost">
                    <h5>245.000<sup>đ</sup></h5>
                    <p>-35%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>4</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(22)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/57/244687/pin-polymer-10000mah-ava-plus-jp208-thumb-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">AVA+ JP208</h5>
                  <div class="main-deal_product_cost">
                    <h5>400.000<sup>đ</sup></h5>
                    <p>-25%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>3</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(33)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/57/245112/pin-polymer-10000mah-type-c-ava-ds2107-thumb-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">AVA+ DS2107</h5>
                  <div class="main-deal_product_cost">
                    <h5>440.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>4</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(45)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/57/228892/sac-du-phong-10000mah-type-c-powerslim-jp213-190722-055953-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    Xmobile PowerSlim PJ JP213
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>630.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(99)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/57/245112/pin-polymer-10000mah-type-c-ava-ds2107-thumb-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">AVA+ DS2107</h5>
                  <div class="main-deal_product_cost">
                    <h5>390.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>4</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(30)</span>
                  </div>
                </div>
              </div>
              <div class="main-deal_btn">
                <button class="btn">
                  <a href="#">Xem tất cả</a>
                </button>
              </div>
            </div>

            <!-- /// -->
            <div class="main-deal">
              <div class="main-deal-banner">
                <img
                  src="https://cdn.tgdd.vn/2022/03/banner/DESKTOPTagline3-1200x150.png"
                  alt=""
                />
              </div>
              <div class="main-deal_product">
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/58/226745/226745-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    Cáp Lightning MFI 1m Mophie
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>230.000<sup>đ</sup></h5>
                    <p>-35%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>4.5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(75)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/9499/258266/adapter-2-cong-pd-qc-30-gan-65w-xmobile-mfr65-thumb-1-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    PD QC 3.0 GaN 65W Xmobile MFR65
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>630.000<sup>đ</sup></h5>
                    <p>-25%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>3</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(8)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/9499/227067/adapter-sac-34a-dual-xmobile-ds730-db-thumb-1-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">Dual Xmobile DS730-DB</h5>
                  <div class="main-deal_product_cost">
                    <h5>200.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>3</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(11)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/9499/229595/adapter-sac-5w-cho-iphone-ipad-ipod-apple-mgn13-thumb-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">5W Hydrus CS-TC027</h5>
                  <div class="main-deal_product_cost">
                    <h5>90.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(99)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <p class="main-deal_product-header">Trả góp 0%</p>
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/58/242989/cap-lightning-xmobile-ljet-l11-ava-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    Cáp Lightning Xmobile LJET-L11 Xám
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>70.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>4</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(7)</span>
                  </div>
                </div>
              </div>
              <div class="main-deal_btn">
                <button class="btn">
                  <a href="#">Xem tất cả</a>
                </button>
              </div>
            </div>

            <!-- main gaming -->
            <div class="main-deal">
              <div class="main-deal-banner">
                <img
                  src="https://cdn.tgdd.vn/2022/03/banner/DESKTOPTagline7-1200x138.png"
                  alt=""
                />
              </div>
              <div class="main-deal_product">
                <div class="main-deal_product_1">
                  <!-- <p class="main-deal_product-header">Trả góp 0%</p> -->
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/54/223020/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-250722-054831-600x600.jpeg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    Tai nghe chụp tai Gaming Asus TUF H3 Đen Đỏ
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>790.000<sup>đ</sup></h5>
                    <p>-35%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(75)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <!-- <p class="main-deal_product-header">Trả góp 0%</p> -->
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/54/246765/ep-gaming-asus-rog-cetra-ii-core-den-12-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    Tai nghe EP Gaming Asus Rog Cetra II Core Đen
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>1.030.000<sup>đ</sup></h5>
                    <p>-25%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(22)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <!-- <p class="main-deal_product-header">Trả góp 0%</p> -->
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/86/235591/chuot-gaming-hyperx-pulsefire-surge-rgb-den-01-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    Chuột Gaming HyperX Pulsefire Surge RGB Đen
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>910.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(5)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <!-- <p class="main-deal_product-header">Trả góp 0%</p> -->
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/6858/250607/corsair-mm300-pro-ava-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    Miếng lót chuột Corsair MM300 Pro
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>390.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>5</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(99)</span>
                  </div>
                </div>
                <div class="main-deal_product_1">
                  <!-- <p class="main-deal_product-header">Trả góp 0%</p> -->
                  <img
                    class="main-deal_product-img"
                    src="https://cdn.tgdd.vn/Products/Images/4728/242328/webcam-1080p-rapoo-c260-ava-600x600.jpg"
                    alt=""
                  />
                  <h5 class="main-deal_product_p">
                    Webcam 720P Logitech C505 Đen
                  </h5>
                  <div class="main-deal_product_cost">
                    <h5>845.000<sup>đ</sup></h5>
                    <p>-15%</p>
                  </div>
                  <div class="main-deal_product_start">
                    <p>4.9</p>
                    <i class="fa-solid fa-star"></i>
                    <span>(34)</span>
                  </div>
                </div>
              </div>
              <div class="main-deal_btn">
                <button class="btn">
                  <a href="#">Xem tất cả</a>
                </button>
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
