<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
    $_SESSION['error'] = 'Bạn chưa đăng nhập, xin vui lòng đăng nhập';
    header("Location: ../../../Admin_Login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Tìm Kiếm Sản Phẩm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="container">
        <h1>Tìm Kiếm Sản Phẩm</h1>
        <a href="danhsachsanpham.php">Quay Lại</a>
        <div align="center">

            <form action="timkiemsanpham.php" method="get">
                Search: <input type="text" name="search" />
                <input type="submit" name="ok" value="search" />
                <input type="reset" value="Làm Mới" />
            </form>
        </div>

        <?php
        if (isset($_REQUEST['ok'])) {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);

            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } else {
                require_once "../../Connection.php";
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $sql = "select * from san_pham where ten_san_pham like '%$search%'";

                // Thực thi câu truy vấn
                $result = mysqli_query($conn, $sql);

                // Đếm số dong trả về trong sql.
                $num = mysqli_num_rows($result);

                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num kết quả trả về với từ khoá <b>$search</b>";

                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array

        ?>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>MÃ SẢN PHẨM</th>
                                <TH>TÊN SẢN PHẨM</TH>
                                <TH>ẢNH</TH>
                                <th>GIÁ</th>
                                <TH>SỐ LƯỢNG</TH>
                                <TH>LOẠI SẢN PHẨM</TH>
                                <TH>HÃNG</TH>
                                <TH>THÔNG TIN SẢN PHẨM</TH>
                                <TH colspan="2">THAO TÁC</TH>
                            </tr>
                        </thead>

                        <?php
                        while ($r = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $r['ma_san_pham'] ?></td>
                                <td><?php echo $r['ten_san_pham'] ?></td>
                                <td ><?php echo "<img src='photo/".$r['anh']."'  width='150' height='150'>" ?></td>
                                <td><?php echo $r['gia'] ?></td>
                                <td><?php echo $r['so_luong'] ?></td>

                                <td><?php echo $r['id_kieu'] ?></td>
                                <td><?php echo $r['ten_nhan_hieu'] ?></td>
                                <!-- <td><img src="image/<?php $r['picture'] ?>" alt="" width="60" height="60"></td> -->
                                <td><?php echo $r['thong_tin'] ?></td>
                                <td><a href="thongtinsanpham.php?ma_san_pham=<?php echo $r['ma_san_pham'] ?>" class="btn btn-info"> Sửa</a></td>
                                <td><a onclick="return confirm('bạn có muốn xoá sản phẩm này không ??')" href="xoasanpham.php?id=<?php echo $r['ma_san_pham'] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
                            </tr>

            <?php
                        }
                    } else {
                        echo "Khong tim thay ket qua!";
                    }
                }
            }
            ?>
                    </table>
    </div>
</body>

</html>