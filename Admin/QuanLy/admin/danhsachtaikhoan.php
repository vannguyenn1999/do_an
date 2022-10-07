<!doctype html>
<html lang="en">

<head>
    <title>Danh Sách Tài Khoản Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../Css/css.css">
    <link rel="stylesheet" href="../../Css/css1.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- <div class="container"> -->
    <div class="header"></div>
    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
        <div class="spinner diagonal part-1"></div>
        <div class="spinner horizontal"></div>
        <div class="spinner diagonal part-2"></div>
    </label>
    <!-- <div id="sidebarMenu">
        <ul class="sidebarMenuInner">
            <a href="../../index.php">
                <li>APPLE 123<span>Chức Năng</span></li>
            </a>
            <li><a href="../quanlydienthoai/danhsachsanpham.php">Danh Sách Sản Phẩm Điện Thoại</a></li>
            <li><a href="../quanlythongtinsanpham/danhsachthongtin.php">Danh Sách Thông Tin Sản Phẩm </a></li>
            <li><a href="">Danh Sách Hãng Điện Thoại</a></li>
            <li><a href="#">Danh Sách Đơn Hàng</a></li>
            <li><a href="#">Thông Tin Khách Hàng</a></li>
            <li><a href="https://www.facebook.com/VanNguyen280999" target="_blank">Thông Tin Của Chúng Tôi</a></li>
            <li><a href="../../../index.html">Đăng Xuất</a></li>
        </ul>
    </div> -->
    <div class="container">
        <div class="product">
            <h1>Danh Sách Tài Khoản Admin</h1>
            <a href="themtaikhoan.php" class="btn btn-success" id="a_func"><i class="fa-solid fa-circle-plus"></i> Thêm Tài Khoản</a>
            <a href="timkiemtaikhoan.php" class="btn btn-success" id="a_func"> <i class="fa fa-search"></i>Tìm Kiếm Tài Khoản</a>
            <a href="../../index.php" class="btn btn-success" id="a_func"><i class="fa-solid fa-house"></i>
            Trang Chủ</a>


            <table class="table table-dark table-striped">

                <thead>
                    <tr>
                        <th>TÊN NGƯỜI DÙNG</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <TH>PASSWORD</TH>
                        <TH>THAO TÁC</TH>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "../../Connection.php";

                    $sql = "select * from admin_system";
                    $result = $conn->query($sql);
                    while ($r = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $r['name'] ?></td>
                            <td><?php echo $r['username_admin'] ?></td>
                            <td><?php echo $r['password_admin'] ?></td>
                            <td><a onclick="return confirm('bạn có muốn xoá tài khoản này không ??')" href="xoataikhoan.php?id=<?php echo $r['username_admin'] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>




    <!-- </div> -->

</body>

</html>