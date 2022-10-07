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
    <link rel="stylesheet" href="../CSS/main/chatluong.css" />
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
    <title>Quan Điểm Chất Lượng</title>
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
              <h1>QUAN ĐIỂM CHẤT LƯỢNG</h1>
            </div>
            <hr />
            <div class="main-content-p">
              <p>
                Sản phẩm iPhone, iPad, Watch tại Apple 123 đều là chính hãng do
                Apple sản xuất, không kinh doanh hàng tàu nhái.
              </p>
            </div>
            <div class="main-content">
              <div class="main-content-header">
                <h3>Tiêu chuẩn phân loại sản phẩm</h3>
              </div>
              <div class="main-content-ol">
                <ol>
                  <li>
                    <b>HÀNG 99%:</b> Là hàng qua sử dụng mà hình thức đẹp (không
                    trầy xước, móp). Sử dụng phải còn tốt và tuổi thọ còn dài.
                  </li>
                  <li>
                    <b>HÀNG BRANDNEW:</b> Là hàng mới nguyên hộp thông thường
                    như mua tại các siêu thị. Thị trường còn quen gọi là hàng
                    Fullbox.
                  </li>
                  <li>
                    <b>HÀNG CPO:</b> Certified Pre-Owned tiền thân là hàng mới
                    Fullbox như trên, tuy nhiên khi xuất xưởng gặp sự cố nên
                    được Apple kiểm tra và đóng gói lại, giá bán theo quy định
                    sẽ rẻ hơn.
                  </li>
                  <li>
                    <b>HÀNG FPT:</b> Là các máy được phân phối chính hãng tại
                    thị trường VN qua FPT Trading. Phổ biến nhất là mã VN/A (Có
                    thể gặp mã khác như S/A, TH/A...vv)
                  </li>
                  <li>
                    <b>HÀNG TRÔI BẢO HÀNH (TBH):</b> Là máy mới (chưa kích
                    hoạt), kích hoạt ra sẽ không đủ 12 tháng bảo hành trên hệ
                    thống (hoặc hết bảo hành). Lý do vì đây là máy dùng để trả
                    bảo hành 1 đổi 1, nên sẽ kế thừa thời hạn bảo hành còn lại
                    của thiết bị cũ.
                  </li>
                  <li>
                    <b>HÀNG MỚI KÍCH HOẠT (ATV):</b> Là máy cận mới, gần như rất
                    ít sử dụng, kích hoạt máy chưa lâu. Hàng này giá thấp hơn
                    hàng mới Fullbox và cao hơn hàng 99%.
                  </li>
                  <li>
                    <b>HÀNG TRAY:</b> Là máy Mới chưa kích hoạt sử dụng - nhưng
                    vận chuyển về VN chỉ có máy trần không kèm hộp để tiết kiệm
                    chi phí. Hoặc có thể là hàng thuộc diện Trôi bảo hành (Máy
                    đổi bảo hành chỉ có máy trần)
                  </li>
                  <li>
                    <b>IPHONE QUỐC TẾ:</b> Là iPhone sử dụng được mọi Sim. Các
                    máy mua tại siêu thị ở VN là hàng quốc tế. Nếu không phải
                    quốc tế thì sẽ là iPhone Lock. (Nếu sản phẩm không ghi là
                    Lock thì mặc định hiểu là hàng Quốc tế).
                  </li>
                  <li>
                    <b>IPHONE LOCK:</b> Tại các nước phát triển, iPhone thường
                    được nhà mạng bán ra kèm ràng buộc hợp đồng => Không sử dụng
                    được sim nhà mạng khác => Muốn dùng tại VN phải kèm thêm sim
                    ghép (là miếng vi mạch mỏng lắp cùng sim số của mình trong
                    khay sim.) Giá rẻ hơn hàng Quốc tế.
                  </li>
                </ol>
              </div>
            </div>
            <div class="main-header-h1">
              <h1>Máy bán ra được chọn tỉ mỉ từng chiếc một</h1>
            </div>
            <div class="main-content-p">
              <p>
                Tại Apple, chúng tôi bảo hành dài cho khách hàng, nên việc chọn
                lọc sản phẩm luôn được đề cao, đặc biệt là sản phẩm đã qua sử
                dụng.
              </p>
            </div>
            <div class="main-content-ol">
              <ol>
                <li>
                  Thứ nhất, máy đầu vào được chọn tỉ mỉ từng chiếc một từ các
                  bạn đối tác thân thiết. Bạn có thể thấy hàng tại Táo Xanh
                  không có nhiều, không có cả lô đại trà như mọi nơi, nhưng đã
                  xem thì hầu như đều ưng ý. Chúng tôi chọn nhặt lẻ tẻ từng
                  chiếc máy nhưng giá lại không hề đắt, đó là do sắp xếp tối ưu
                  để loại bỏ chi phí không cần thiết.
                </li>
                <li>
                  Các sản phẩm cũ được test bài bản theo quy trình và Táo Xanh
                  có hệ thống đánh giá việc tuân thủ, chất lượng sản phẩm trả về
                  ứng với các nhân viên test máy. Các mục này được phân nhóm và
                  quy thành điểm chất lượng, điểm này liên quan trực tiếp đến
                  thu nhập của nhân viên. Thế nên chi phí test máy không nhiều
                  mà vẫn đảm bảo.
                </li>
                <li>
                  Táo Xanh lựa chọn sản phẩm theo 3 tiêu chí: Tính nguyên bản,
                  Hình thức (độ nuột), Chất lượng vận hành các tính năng.
                </li>
              </ol>
            </div>
            <div class="main-header-h1">
              <h1>Đối với phụ kiện</h1>
            </div>
            <div class="main-content-p">
              <p>
                Phụ kiện bán ở Táo Xanh đều là sản phẩm chính hãng (như Rock,
                Pisen, Remax, Apple...) có tiếng trên thị trường và được Táo
                Xanh đánh giá so sánh trước. Chúng tôi chọn sản phẩm có mức giá
                hợp lý và chất lượng đồng nhất, không bán sản phẩm trôi nổi.
              </p>
            </div>
            <div class="main-content-p">
              <p>
                Hiện tại Táo Xanh đang bán các phụ kiện như Sạc, Cáp, Ốp, Gậy
                chụp ảnh, Pin dự phòng, Loa bluetooth....
                <a href="#">xem tại đây</a>
              </p>
            </div>
            <div class="main-content-p">
              <p>Xem thêm :</p>
            </div>
            <div class="main-content-p">
              <p><a href="#">Câu hỏi thường gặp khi mua iPhone cũ</a></p>
            </div>
            <div class="main-content-p">
              <p><a href="#">Văn hoá Apple 123</a></p>
            </div>
            <div class="main-content-p">
              <p><i>- From Văn Nguyễn with love -</i></p>
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
