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
    <link rel="stylesheet" href="../CSS/main/dienthoai.css" />
    <link rel="stylesheet" href="../CSS/main/dienthoai_laptop.css" />

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
    <title>Laptop</title>
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
          <!-- main banner -->
          <div class="main-banner">
            <div class="main-banner-left">
              <div class="slideshow-container">
                <div class="mySlides fade">
                  <img
                    src="https://cdn.tgdd.vn/2022/08/banner/800-200-800x200-66.png"
                    style="width: 100%"
                  />
                </div>
                <div class="mySlides fade">
                  <img
                    src="https://cdn.tgdd.vn/2022/08/banner/Acer-800-200-800x200.png"
                    style="width: 100%"
                  />
                </div>
                <div class="mySlides fade">
                  <img
                    src="https://cdn.tgdd.vn/2022/09/banner/800-200-800x200.png"
                    style="width: 100%"
                  />
                </div>
                <div class="mySlides fade">
                  <img
                    src="https://cdn.tgdd.vn/2022/08/banner/asus-800-200-800x200-2.png"
                    style="width: 100%"
                  />
                </div>
                <div class="mySlides fade">
                  <img
                    src="https://cdn.tgdd.vn/2022/08/banner/lapevo-800-200-800x200.png"
                    style="width: 100%"
                  />
                </div>
                <div class="mySlides fade">
                  <img
                    src="https://cdn.tgdd.vn/2022/06/banner/800-200-800x200-103.png"
                    style="width: 100%"
                  />
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br />
              <div style="text-align: center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
              </div>
            </div>
            <div class="main-banner-right">
              <img
                src="https://cdn.tgdd.vn/2022/09/banner/sticky-le-laptop--1--390x97.png"
                alt=""
              />
              <img
                src="https://cdn.tgdd.vn/2022/08/banner/sam-laptop390-97-copy-390x97-1.png"
                alt=""
              />
            </div>
          </div>

          <!-- main search -->
          <div class="main-search">
            <div class="main-search-header">
              <p>Tìm Kiếm Nhanh</p>
            </div>
            <div class="main-search-list">
              <div class="main-search-item">
                <span>Bộ lọc</span>
              </div>
              <div class="main-search-item">
                <span>Gaming</span>
                <i class="fa-solid fa-caret-down"></i>
              </div>
              <div class="main-search-item">
                <span>Học tập , văn phòng</span>
                <i class="fa-solid fa-caret-down"></i>
              </div>
              <div class="main-search-item">
                <span>Đồ hoạ ,kỹ thuật</span>
                <i class="fa-solid fa-caret-down"></i>
              </div>
              <div class="main-search-item">
                <span>Nhu cầu</span>
                <i class="fa-solid fa-caret-down"></i>
              </div>
              <div class="main-search-item">
                <span>RAM</span>
                <i class="fa-solid fa-caret-down"></i>
              </div>
              <div class="main-search-item">
                <span>Mỏng nhẹ</span>
                <i class="fa-solid fa-caret-down"></i>
              </div>
              <div class="main-search-item">
                <span>Cao cấp , sang trọng</span>
                <i class="fa-solid fa-caret-down"></i>
              </div>
              <div class="main-search-item">
                <span>Phần mềm</span>
                <i class="fa-solid fa-caret-down"></i>
              </div>
            </div>
          </div>

          <!-- main trademark -->
          <div class="main-trademark">
            <div class="main-trademark-item">
              <img
                src="https://cdn.tgdd.vn/Brand/1/logo-macbook-149x40.png"
                alt=""
              />
            </div>
            <div class="main-trademark-item">
              <img
                src="https://cdn.tgdd.vn/Brand/1/logo-asus-149x40.png"
                alt=""
              />
            </div>
            <div class="main-trademark-item">
              <img
                src="https://cdn.tgdd.vn/Brand/1/logo-hp-149x40-1.png"
                alt=""
              />
            </div>
            <div class="main-trademark-item">
              <img
                src="https://cdn.tgdd.vn/Brand/1/logo-lenovo-149x40.png"
                alt=""
              />
            </div>
            <div class="main-trademark-item">
              <img
                src="https://cdn.tgdd.vn/Brand/1/logo-acer-149x40.png"
                alt=""
              />
            </div>
            <div class="main-trademark-item">
              <img
                src="https://cdn.tgdd.vn/Brand/1/logo-dell-149x40.png"
                alt=""
              />
            </div>
            <div class="main-trademark-item">
              <img
                src="https://cdn.tgdd.vn/Brand/1/logo-msi-149x40.png"
                alt=""
              />
            </div>
            <div class="main-trademark-item">
              <img
                src="https://cdn.tgdd.vn/Brand/1/logo-surface-149x40-1.png"
                alt=""
              />
            </div>
            <div class="main-trademark-item">
              <img
                src="https://cdn.tgdd.vn/Brand/1/logo-gigabyte-149x40.png"
                alt=""
              />
            </div>
            <div class="main-trademark-item">
              <img
                src="https://cdn.tgdd.vn/Brand/1/logo-intel-149x40.png"
                alt=""
              />
            </div>
          </div>

          <!-- main gaming -->
          <div class="main-deal">
            <div class="main-deal-banner1">
              <img
                src="https://cdn.tgdd.vn/2022/08/banner/banner-gaming-desk-1200x200.png"
                alt=""
              />
            </div>
            <div class="main-deal_product gaming">
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/268775/TimerThumb/acer-aspire-7-gaming-a715-42g-r4xx-r5-nhqaysv008-(16).jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  Acer Aspire 7 Gaming A715 42G R4XX R5
                </h5>
                <div class="main-deal_product_cost">
                  <h5>18.490.000<sup>đ</sup></h5>
                  <!-- <p></p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>4</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(37)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/279259/TimerThumb/asus-tuf-gaming-fx506lhb-i5-hn188w-(14).jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  Asus TUF Gaming FX506LHB i5 10300H
                </h5>
                <div class="main-deal_product_cost">
                  <h5>15.590.000<sup>đ</sup></h5>
                  <p>-25%</p>
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(256)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/270154/TimerThumb/270154.png"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  HP Gaming VICTUS 16 d0202TX i5 11400H
                </h5>
                <div class="main-deal_product_cost">
                  <h5>28.990.000<sup>đ</sup></h5>
                  <!-- <p>-15%</p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>4</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(145)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/272005/TimerThumb/272005.png"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  Lenovo Gaming Legion 5 15ITH6 i7 11800H
                </h5>
                <div class="main-deal_product_cost">
                  <h5>39.990.000<sup>đ</sup></h5>
                  <!-- <p>-15%</p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>4</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(99)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/272282/TimerThumb/acer-nitro-5-tiger-an515-58-52sp-i5-nhqfhsv001-(2).jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  Acer Nitro 5 Tiger AN515 58 52SP i5 12500H
                </h5>
                <div class="main-deal_product_cost">
                  <h5>25.090.000<sup>đ</sup></h5>
                  <p>-10%</p>
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(44)</span>
                </div>
              </div>
            </div>

            <div class="main-deal_btn1 gaming">
              <button class="btn">
                <a href="#">Xem tất cả</a>
              </button>
            </div>
          </div>

          <!-- main macbook -->
          <div class="main-deal">
            <div class="main-deal-banner1">
              <img
                src="https://cdn.tgdd.vn/2022/08/banner/macbook-air-m1-desk-1-1200x200.png"
                alt=""
              />
            </div>
            <div class="main-deal_product macbook">
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-xam-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">MacBook Air M2 2022</h5>
                <div class="main-deal_product_cost">
                  <h5>30.490.000<sup>đ</sup></h5>
                  <!-- <p></p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(3)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/282828/apple-macbook-pro-13-inch-m2-2022-xam-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">MacBook Pro M2 2022</h5>
                <div class="main-deal_product_cost">
                  <h5>33.490.000<sup>đ</sup></h5>
                  <!-- <p>-25%</p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(7)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/282885/apple-macbook-pro-m2-2022-xam-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">MacBook Pro M2 2022 8GB</h5>
                <div class="main-deal_product_cost">
                  <h5>39.190.000<sup>đ</sup></h5>
                  <!-- <p>-15%</p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>4</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(5)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/253636/apple-macbook-pro-16-m1-pro-2021-10-core-cpu-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">MacBook Pro 16 M1 Pro 2021</h5>
                <div class="main-deal_product_cost">
                  <h5>60.990.000<sup>đ</sup></h5>
                  <!-- <p>-15%</p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(3)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/253581/apple-macbook-pro-14-m1-pro-2021-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">MacBook Pro M1 2020</h5>
                <div class="main-deal_product_cost">
                  <h5>44.490.000<sup>đ</sup></h5>
                  <p>-10%</p>
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(10)</span>
                </div>
              </div>
            </div>

            <div class="main-deal_btn1 macbook">
              <button class="btn">
                <a href="#">Xem tất cả</a>
              </button>
            </div>
          </div>

          <!-- main office -->
          <div class="main-deal">
            <div class="main-deal-banner1">
              <img
                src="https://cdn.tgdd.vn/2022/08/banner/banner-hoc-tap-desk-1-1200x200.png"
                alt=""
              />
            </div>
            <div class="main-deal_product office">
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/274207/TimerThumb/274207.png"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  Aspire A315 56 32TP i3 1005G1
                </h5>
                <div class="main-deal_product_cost">
                  <h5>11.990.000<sup>đ</sup></h5>
                  <!-- <p></p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(3)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/274463/TimerThumb/lenovo-ideapad-1-11igl05-n5030-81vt006fvn-(6).jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  Lenovo Ideapad 1 11IGL05 N5030
                </h5>
                <div class="main-deal_product_cost">
                  <h5>8.990.000<sup>đ</sup></h5>
                  <!-- <p>-25%</p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(7)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/263977/TimerThumb/acer-travelmate-b3-tmb311-31-p49d-n5030-nxvnfsv005-(24).jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  Acer TravelMate B3 TMB311 31 P49D N5030
                </h5>
                <div class="main-deal_product_cost">
                  <h5>10.990.000<sup>đ</sup></h5>
                  <!-- <p>-15%</p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>4</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(5)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/237630/TimerThumb/237630.png"
                  alt=""
                />
                <h5 class="main-deal_product_p">HP 340s G7 i3 1005G1</h5>
                <div class="main-deal_product_cost">
                  <h5>12.990.000<sup>đ</sup></h5>
                  <!-- <p>-15%</p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(3)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/266904/surface-pro-7-i5-vdv00001-291221-102059-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">Surface Pro 7 i5 1035G4</h5>
                <div class="main-deal_product_cost">
                  <h5>21.890.000<sup>đ</sup></h5>
                  <p>-10%</p>
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(10)</span>
                </div>
              </div>
            </div>

            <div class="main-deal_btn1 office">
              <button class="btn">
                <a href="#">Xem tất cả</a>
              </button>
            </div>
          </div>

          <!-- main graphics -->
          <div class="main-deal">
            <div class="main-deal-banner1">
              <img
                src="https://cdn.tgdd.vn/2022/08/banner/banner-do-hoa-desk-1200x200-1.png"
                alt=""
              />
            </div>
            <div class="main-deal_product graphics">
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/269607/lenovo-gaming-legion-5-15ach6-r7-82jw00kmvn-090522-085406-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  Lenovo Gaming Legion 5 15ACH6 R7 5800H
                </h5>
                <div class="main-deal_product_cost">
                  <h5>27.990.000<sup>đ</sup></h5>
                  <p>-12%</p>
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(3)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/274829/msi-creator-m16-a12uc-i7-292vn-200322-121736-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  MSI Creator M16 A12UC i7 12700H
                </h5>
                <div class="main-deal_product_cost">
                  <h5>29.990.000<sup>đ</sup></h5>
                  <!-- <p>-25%</p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(7)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/267557/dell-vostro-3400-i7-1165g7-8gb-512gb-2gb-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">Dell Vostro 3400 i7 1165G7</h5>
                <div class="main-deal_product_cost">
                  <h5>25.190.000<sup>đ</sup></h5>
                  <!-- <p>-15%</p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>4</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(5)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/285771/asus-zenbook-14-oled-ux3402za-i7-km221w-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  Asus Zenbook 14 OLED UX3402ZA i7 1260P
                </h5>
                <div class="main-deal_product_cost">
                  <h5>30.990.000<sup>đ</sup></h5>
                  <!-- <p>-15%</p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(3)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/269314/acer-swift-x-sfx16-51g-516q-i5-nxayksv002-120122-023135-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  Acer Swift X SFX16 51G 516Q i5 11320H
                </h5>
                <div class="main-deal_product_cost">
                  <h5>28.990.000<sup>đ</sup></h5>
                  <p>-10%</p>
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(10)</span>
                </div>
              </div>
            </div>

            <div class="main-deal_btn1 graphics">
              <button class="btn">
                <a href="#">Xem tất cả</a>
              </button>
            </div>
          </div>

          <!-- main laptop -->
          <div class="main-deal">
            <div class="main-deal-banner1">
              <img
                src="https://cdn.tgdd.vn/2022/08/banner/banner-cao-cao-desktop-1200x200.png"
                alt=""
              />
            </div>
            <div class="main-deal_product laptop">
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/279450/lenovo-yoga-duet-7-13itl6-i7-82ma003uvn-300522-085302-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  Lenovo Yoga Duet 7 13ITL6 i7 1165G7
                </h5>
                <div class="main-deal_product_cost">
                  <h5>33.490.000<sup>đ</sup></h5>
                  <!-- <p></p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(3)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/285765/acer-swift-3-sf314-512-56qn-i5-nxk0fsv002-ab-thumb-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  Acer Swift 3 SF314 512 56QN i5 1240P
                </h5>
                <div class="main-deal_product_cost">
                  <h5>22.290.000<sup>đ</sup></h5>
                  <p>-5%</p>
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(7)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/256218/hp-envy-13-ba1535tu-i7-4u6m4pa-291021-035216-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  HP Envy 13 ba1535TU i7 1165G7
                </h5>
                <div class="main-deal_product_cost">
                  <h5>26.890.000<sup>đ</sup></h5>
                  <p>-8%</p>
                </div>
                <div class="main-deal_product_start">
                  <p>4</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(5)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/253703/apple-macbook-pro-14-m1-pro-2021-10-core-cpu-1-1-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">
                  MacBook Pro 14 M1 Pro 2021 10-core CPU
                </h5>
                <div class="main-deal_product_cost">
                  <h5>61.990.000<sup>đ</sup></h5>
                  <!-- <p>-15%</p> -->
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(3)</span>
                </div>
              </div>
              <div class="main-deal_product_1">
                <p class="main-deal_product-header">Trả góp 0%</p>
                <img
                  class="main-deal_product-img-laptop"
                  src="https://cdn.tgdd.vn/Products/Images/44/269554/dell-xps-13-9310-i5-1135g7-8gb-512gb-cap-office-600x600.jpg"
                  alt=""
                />
                <h5 class="main-deal_product_p">Dell XPS 13 9310 i5 1135G7</h5>
                <div class="main-deal_product_cost">
                  <h5>41.990.000<sup>đ</sup></h5>
                  <p>-10%</p>
                </div>
                <div class="main-deal_product_start">
                  <p>5</p>
                  <i class="fa-solid fa-star"></i>
                  <span>(10)</span>
                </div>
              </div>
            </div>

            <div class="main-deal_btn1 laptop">
              <button class="btn">
                <a href="#">Xem tất cả</a>
              </button>
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
    <script src="../JS/banner.js"></script>
  </body>
</html>
