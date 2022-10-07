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
    <link rel="stylesheet" href="../CSS/main/dichvu.css" />
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
    <title>Bảng giá dịch vụ sửa chữa</title>
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
            <div class="main-header-h1">
              <h1>BẢNG GIÁ DỊCH VỤ SỬA CHỮA</h1>
            </div>
            <hr />
            <div class="main-img">
              <img
                src="https://file.hstatic.net/1000359786/file/bgscpc_copy_9f2e27f57bbe473eb43c98187553597f.jpg"
                alt=""
              />
            </div>
            <div class="main-content-p">
              <p>
                Chúng tôi xin gửi bạn bảng giá sửa chữa dịch vụ. Với thay màn
                hình, chúng tôi có mức giá hỗ trợ dành cho khách hàng mua máy.
                Tất cả các mục khác, chúng tôi áp dụng mức giá chung. (Đơn vị:
                Nghìn đồng)
              </p>
            </div>
            <div class="main-table">
              <table>
                <tr>
                  <th>Dòng</th>
                  <th colspan="2">Thay màn</th>
                  <th>Ép kính màn</th>
                  <th>Thay mặt lưng</th>
                  <th>Thay Pin</th>
                  <th>Cam trước</th>
                  <th>Cam sau</th>
                  <th>Cáp sạc</th>
                  <th>Cáp Volume</th>
                  <th>Thay vỏ</th>
                </tr>
                <tr>
                  <td></td>
                  <td>Giá hỗ trợ</td>
                  <td>Giá dịch vụ</td>
                  <td>Giá dịch vụ</td>
                  <td>Giá dịch vụ</td>
                  <td>Giá dịch vụ</td>
                  <td>Giá dịch vụ</td>
                  <td>Giá dịch vụ</td>
                  <td>Giá dịch vụ</td>
                  <td>Giá dịch vụ</td>
                  <td>Giá dịch vụ</td>
                </tr>
                <tr>
                  <td><b>iPhone 5</b></td>
                  <td>450</td>
                  <td>500</td>
                  <td>150</td>
                  <td>-</td>
                  <td>190</td>
                  <td>100</td>
                  <td>150</td>
                  <td>150</td>
                  <td>150</td>
                  <td>200</td>
                </tr>
                <tr>
                  <td><b>iPhone 5C</b></td>
                  <td>450</td>
                  <td>500</td>
                  <td>150</td>
                  <td>-</td>
                  <td>190</td>
                  <td>100</td>
                  <td>150</td>
                  <td>150</td>
                  <td>150</td>
                  <td>--</td>
                </tr>
                <tr>
                  <td><b>iPhone 5S</b></td>
                  <td>650</td>
                  <td>700</td>
                  <td>150</td>
                  <td>-</td>
                  <td>190</td>
                  <td>100</td>
                  <td>200</td>
                  <td>150</td>
                  <td>150</td>
                  <td>200</td>
                </tr>
                <tr>
                  <td><b>iPhone 6</b></td>
                  <td>650</td>
                  <td>600</td>
                  <td>250</td>
                  <td>-</td>
                  <td>250</td>
                  <td>200</td>
                  <td>200</td>
                  <td>250</td>
                  <td>200</td>
                  <td>400</td>
                </tr>
                <tr>
                  <td><b>iPhone 6+</b></td>
                  <td>1200</td>
                  <td>1300</td>
                  <td>250</td>
                  <td>-</td>
                  <td>280</td>
                  <td>300</td>
                  <td>400</td>
                  <td>350</td>
                  <td>200</td>
                  <td>400</td>
                </tr>
                <tr>
                  <td><b>iPhone 6S</b></td>
                  <td>900</td>
                  <td>1000</td>
                  <td>350</td>
                  <td>-</td>
                  <td>250</td>
                  <td>300</td>
                  <td>400</td>
                  <td>350</td>
                  <td>200</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td><b>iPhone 6S+</b></td>
                  <td>1500</td>
                  <td>1600</td>
                  <td>350</td>
                  <td>-</td>
                  <td>250</td>
                  <td>300</td>
                  <td>400</td>
                  <td>350</td>
                  <td>200</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td><b>iPhone 7</b></td>
                  <td>1400</td>
                  <td>1600</td>
                  <td>350</td>
                  <td>-</td>
                  <td>250</td>
                  <td>300</td>
                  <td>400</td>
                  <td>350</td>
                  <td>300</td>
                  <td>700</td>
                </tr>
                <tr>
                  <td><b>iPhone 8</b></td>
                  <td>2700</td>
                  <td>2900</td>
                  <td>600</td>
                  <td>800</td>
                  <td>400</td>
                  <td>--</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td><b>iPhone X</b></td>
                  <td>-</td>
                  <td>-</td>
                  <td>1400</td>
                  <td>1000</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td><b>iPhone XS Max</b></td>
                  <td>-</td>
                  <td>-</td>
                  <td>2100</td>
                  <td>1300</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td colspan="11"><b> Sửa chữa iPad, vui lòng liên hệ.</b></td>
                </tr>
              </table>
            </div>
            <div class="main-content">
              <div class="main-content-header">
                <h3>A. QUY ĐỊNH SỬA CHỮA DỊCH VỤ</h3>
              </div>
              <div class="main-content-ol">
                <ol>
                  <li>
                    Quý khách không để lại thẻ sim hoặc bất kỳ phụ kiện nào
                    khác. Táo Xanh không chịu trách nhiệm bảo quản các vật dụng
                    này.
                  </li>
                  <li>
                    Quá trình sửa chữa có thể sẽ phải chạy lại phần mềm. Điều
                    này sẽ xóa dữ liệu có trên máy. Quý khách có trách nhiệm tự
                    sao lưu dữ liệu của mình. Táo Xanh không chịu trách nhiệm
                    nếu xảy ra bất kỳ mất mát dữ liệu nào.
                  </li>
                  <li>
                    Do thiết bị là sản phẩm phức tạp có rất nhiều tính năng, khi
                    nhận máy, kỹ thuật viên chỉ có thể ghi nhận và làm việc với
                    lỗi mà quý khách thông báo, yêu cầu sửa chữa. Có thể trên
                    thiết bị đã có sẵn lỗi khác - đã hiện hữu hoặc dưới dạng
                    tiềm ẩn chưa biết. Vì vậy, chúng tôi từ chối trách nhiệm đối
                    với các cáo buộc gây ra lỗi khác trên thiết bị của quý
                    khách. Rất mong quý khách hàng hiểu và thông cảm. Chúng tôi
                    chỉ tiến hành giao dịch nếu quý khách đồng ý các điều khoản
                    này.
                  </li>
                  <li>
                    Khi nhận lại máy, quý khách kiểm tra lại hiện trạng máy và
                    các tài khoản trên máy, chỉ nhận lại máy khi đã đạt yêu cầu.
                  </li>
                </ol>
              </div>
            </div>
            <div class="main-content">
              <div class="main-content-header">
                <h3>B. CHÍNH SÁCH BẢO HÀNH SỬA CHỮA DỊCH VỤ</h3>
              </div>
              <div class="main-content-ol">
                <ol>
                  <li>Thời hạn bảo hành sửa chữa: 30 ngày.</li>
                  <li>Dịch vụ thay vỏ không áp dụng bảo hành.</li>
                  <li>
                    Ép kính màn hình và thay mặt lưng là bảo hành bong keo.
                  </li>
                  <li>
                    Riêng thay Pin bảo hành 12 tháng với các lỗi: Pin hỏng (Sạc
                    không vào điện); Pin chai quá 20%.
                  </li>
                  <li>
                    Màn hình không được bảo hành các lỗi: Sọc, loang mực, lỗi
                    phản quang, bụi lọt vào bên trong xảy ra trong quá trình sử
                    dụng.
                  </li>
                  <li>
                    Không bảo hành nếu có dấu hiệu ngoại lực tác động, vào nước
                    hoặc khách hàng sử dụng sai cách.
                  </li>
                </ol>
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
