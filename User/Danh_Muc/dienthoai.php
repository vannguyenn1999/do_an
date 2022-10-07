<?php
session_start();
require_once "../../Admin/Connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../CSS/base.css">
    <link rel="stylesheet" href="../CSS/Index/header.css">
    <link rel="stylesheet" href="../CSS/Index/main.css">
    <link rel="stylesheet" href="../CSS/Index/footer.css">
    <link rel="stylesheet" href="../CSS/main/phukien.css">
    <link rel="stylesheet" href="../CSS/main/dienthoai_laptop.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://img.freepik.com/vector-premium/logo-apple-gradient-estilo-colorido_116762-694.jpg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Điện Thoại</title>
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

                            <li class="header-top__navbar-item header-top__navbar-item--separate">
                                <a class="header-top__navbar-item-link" href="">Mua máy mới</a>
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
                                    echo  '<a class="header-top__navbar-item-link" href="..//System/dangkyphp">Đăng Ký</a>';
                                }
                                ?>

                            </li>
                            <li class="header-top__navbar-item">
                                <?php
                                if (isset($_SESSION['user_name'])) {
                                    echo ' <a class="header-top__navbar-item-link " href="../../dangxuat.php">Đăng Xuất</a>';
                                } else {
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
                            <a href="../../giohang.php" class="giohang"><span class="header-cart-p">Giỏ Hàng</span></a>
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
                                    <i class="header-bottom_icon fa-solid fa-mobile-screen-button"></i><br>
                                    <span class="header-bottom_phone">Điện Thoại</span>
                                </a>
                            </li>
                            <li class="header-bottom_item">
                                <a href="ipad.php">
                                    <i class="header-bottom_icon fa-solid fa-tablet-screen-button"></i><br>
                                    <span class="header-bottom_phone">Ipad</span>
                                </a>
                            </li>
                            <li class="header-bottom_item">
                                <a href="laptop.php">
                                    <i class="header-bottom_icon fa-solid fa-laptop"></i><br>
                                    <span class="header-bottom_phone">Laptop</span>
                                </a>
                            </li>
                            <li class="header-bottom_item">
                                <a href="watch.php">
                                    <i class="header-bottom_icon fab fa-twitch"></i><br>
                                    <span class="header-bottom_phone">Đồng Hồ</span>
                                </a>
                            </li>
                            <li class="header-bottom_item">
                                <a href="phukien.php">
                                    <i class="header-bottom_icon fa-solid fa-headphones"></i><br>
                                    <span class="header-bottom_phone">Phụ Kiện</span>
                                </a>

                            </li>
                            <li class="header-bottom_item">
                                <a href="dichvu.php">
                                    <i class="header-bottom_icon fa-solid fa-house"></i><br>
                                    <span class="header-bottom_phone">Dịch Vụ</span>
                                </a>
                            </li>
                            <li class="header-bottom_item">
                                <a href="chatluong.php">
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

                <!-- main banner -->
                <div class="main-banner">
                    <div class="main-banner-left">
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                                <img src="https://cdn.tgdd.vn/2022/08/banner/800-200-800x200-117.png" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                <img src="https://cdn.tgdd.vn/2022/08/banner/800-200-800x200-136.png  " style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                <img src="https://cdn.tgdd.vn/2022/08/banner/reno7-800-200-800x200.png" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                <img src="https://cdn.tgdd.vn/2022/08/banner/800-200-800x200-97.png" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                <img src="https://cdn.tgdd.vn/2022/09/banner/800-200-800x200-12.png" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                <img src="https://cdn.tgdd.vn/2022/08/banner/800-200-800x200-79.png" style="width:100%">
                            </div>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>
                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            <span class="dot" onclick="currentSlide(4)"></span>
                            <span class="dot" onclick="currentSlide(5)"></span>
                            <span class="dot" onclick="currentSlide(6)"></span>
                        </div>
                    </div>
                    <div class="main-banner-right">
                        <img src="https://cdn.tgdd.vn/2022/09/banner/M-series-390x97.png" alt="">
                        <img src="https://cdn.tgdd.vn/2022/09/banner/Oppo-A54-390x97.png" alt="">
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
                            <span>Hãng</span>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <div class="main-search-item">
                            <span>Giá</span>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <div class="main-search-item">
                            <span>Loại điện thoại</span>
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
                            <span>Bộ nhớ trong</span>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <div class="main-search-item">
                            <span>Pin & sạc</span>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <div class="main-search-item">
                            <span>Tính năng đặc biệt</span>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                </div>

                <!-- main trademark -->
                <div class="main-trademark">
                    <div class="main-trademark-item">
                        <img src="https://cdn.tgdd.vn/Brand/1/logo-iphone-220x48.png" alt="">
                    </div>
                    <div class="main-trademark-item">
                        <img src="https://cdn.tgdd.vn/Brand/1/samsungnew-220x48-1.png" alt="">
                    </div>
                    <div class="main-trademark-item">
                        <img src="https://cdn.tgdd.vn/Brand/1/OPPO42-b_5.jpg" alt="">
                    </div>
                    <div class="main-trademark-item">
                        <img src="https://cdn.tgdd.vn/Brand/1/logo-xiaomi-220x48-5.png" alt="">
                    </div>
                    <div class="main-trademark-item">
                        <img src="https://cdn.tgdd.vn/Brand/1/vivo-logo-220-220x48-3.png" alt="">
                    </div>
                    <div class="main-trademark-item">
                        <img src="https://cdn.tgdd.vn/Brand/1/Realme42-b_37.png" alt="">
                    </div>
                    <div class="main-trademark-item">
                        <img src="https://cdn.tgdd.vn/Brand/1/Nokia42-b_21.jpg" alt="">
                    </div>
                    <div class="main-trademark-item">
                        <img src="https://cdn.tgdd.vn/Brand/1/Mobell42-b_19.jpg" alt="">
                    </div>
                    <div class="main-trademark-item">
                        <img src="https://cdn.tgdd.vn/Brand/1/Itel42-b_54.jpg" alt="">
                    </div>
                    <div class="main-trademark-item">
                        <img src="https://cdn.tgdd.vn/Brand/1/Masstel42-b_0.png" alt="">
                    </div>
                </div>

                <!-- main search -->
                <div class="main-search">
                    <div class="main-search-p">
                        <p>Chọn điện thoại theo nhu cầu :</p>
                    </div>
                    <div class="main-search-list">
                        <div class="main-search-item">
                            <span>Chơi game / cấu hình cao</span>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <div class="main-search-item">
                            <span>Chụp ảnh / quay phim</span>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <div class="main-search-item">
                            <span>Mỏng nhẹ</span>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <div class="main-search-item">
                            <span>Nhỏ gọn dễ cầm</span>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>

                    </div>
                </div>

                <!-- main product apple -->
                <div class="main-deal">
                    <div class="main-deal-banner">
                        <img src="https://cdn.tgdd.vn/2022/08/banner/desk-1200x100-1200x100-1200x100.png" alt="">
                    </div>
                    <div class="main-deal_product">
                        <div class="main-deal_product_1">
                            <p class="main-deal_product-header">Trả góp 0%</p>
                            <img class="main-deal_product-img" src="https://cdn.tgdd.vn/Products/Images/42/153856/TimerThumb/iphone-11-(50).jpg" alt="">
                            <h5 class="main-deal_product_p">iPhone 11 64GB</h5>
                            <div class="main-deal_product_cost">
                                <h5>11.190.000<sup>đ</sup></h5>
                                <p>-30%</p>
                            </div>
                            <div class="main-deal_product_start">
                                <p>4</p>
                                <i class="fa-solid fa-star"></i>
                                <span>(795)</span>
                            </div>
                        </div>
                        <div class="main-deal_product_1">
                            <p class="main-deal_product-header">Trả góp 0%</p>
                            <img class="main-deal_product-img" src="https://cdn.tgdd.vn/Products/Images/42/230529/TimerThumb/iphone-13-pro-max-(20).jpg" alt="">
                            <h5 class="main-deal_product_p">iPhone 13 Pro Max 128GB</h5>
                            <div class="main-deal_product_cost">
                                <h5>28.490.000<sup>đ</sup></h5>
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
                            <img class="main-deal_product-img" src="https://cdn.tgdd.vn/Products/Images/42/230521/TimerThumb/iphone-13-pro-(16).jpg" alt="">
                            <h5 class="main-deal_product_p">iPhone 13 Pro 128GB</h5>
                            <div class="main-deal_product_cost">
                                <h5>25.490.000<sup>đ</sup></h5>
                                <p>-15%</p>
                            </div>
                            <div class="main-deal_product_start">
                                <p>4</p>
                                <i class="fa-solid fa-star"></i>
                                <span>(145)</span>
                            </div>
                        </div>
                        <div class="main-deal_product_1">
                            <p class="main-deal_product-header">Trả góp 0%</p>
                            <img class="main-deal_product-img" src="https://cdn.tgdd.vn/Products/Images/42/223602/TimerThumb/iphone-13-(16).jpg" alt="">
                            <h5 class="main-deal_product_p">iPhone 13 128GB</h5>
                            <div class="main-deal_product_cost">
                                <h5>19.990.000<sup>đ</sup></h5>
                                <p>-15%</p>
                            </div>
                            <div class="main-deal_product_start">
                                <p>4</p>
                                <i class="fa-solid fa-star"></i>
                                <span>(99)</span>
                            </div>
                        </div>
                        <div class="main-deal_product_1">
                            <p class="main-deal_product-header">Trả góp 0%</p>
                            <img class="main-deal_product-img" src="https://cdn.tgdd.vn/Products/Images/42/236780/iphone-13-mini-xanh-la-thumb-600x600.jpg" alt="">
                            <h5 class="main-deal_product_p">iPhone 13 mini 128GB</h5>
                            <div class="main-deal_product_cost">
                                <h5>18.990.000<sup>đ</sup></h5>
                                <p>-15%</p>
                            </div>
                            <div class="main-deal_product_start">
                                <p>5</p>
                                <i class="fa-solid fa-star"></i>
                                <span>(44)</span>
                            </div>
                        </div>

                    </div>
                    
                    <div class="main-deal_btn">
                        <button class="btn">
                            <a href="#">Xem tất cả</a>

                        </button>
                    </div>
                </div>

                <!-- main product -->
                <div class="main-deal">
                    <div class="main-deal_product1">
                        <?php               
                        // $sql_product = "SELECT * FROM san_pham where ma_san_pham BETWEEN 'SP001' AND 'SP005'";
                        $sql_product = "SELECT * FROM san_pham ";
                        $pr = mysqli_query($conn, $sql_product);
                        $tong = 0;
                        while ($products = mysqli_fetch_assoc($pr)) {
                           
                        ?>
                            <div class="main-deal_product_1">
                                <p class="main-deal_product-header">Trả góp <?php echo rand(0, 10) ?> %</p>
                                <img class="main-deal_product-img" src="<?php
                                                                        echo '../../Admin/QuanLy/quanlydienthoai/photo/' . $products['anh']
                                                                        ?>" title="ảnh sản phẩm" />
                                <a href="chitietsanpham.php?id=<?php echo $products['ma_san_pham'] ?>" class="a_sp">
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
                    <!-- <div class="main-deal_product1">
                        <?php               
                        // $sql_product = "SELECT * FROM san_pham where ma_san_pham BETWEEN 'SP001' AND 'SP005'";
                        $sql_product = "SELECT * FROM san_pham limit 5  ";
                        $pr = mysqli_query($conn, $sql_product);
                        $tong = 0;
                        while ($products = mysqli_fetch_assoc($pr)) {
                           
                        ?>
                            <div class="main-deal_product_1">
                                <p class="main-deal_product-header">Trả góp <?php echo rand(0, 10) ?> %</p>
                                <img class="main-deal_product-img" src="<?php
                                                                        echo '../../Admin/QuanLy/quanlydienthoai/photo/' . $products['anh']
                                                                        ?>" title="ảnh sản phẩm" />
                                <a href="chitietsanpham.php?id=<?php echo $products['ma_san_pham'] ?>" class="a_sp">
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

                    </div> -->
                   
                    <div class="main-deal_btn1">
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
    <script src="../JS/banner.js"></script>
</body>

</html>