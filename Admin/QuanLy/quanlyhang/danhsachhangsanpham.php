<?php
session_start();
if(!isset($_SESSION['admin_login'])){
  $_SESSION['error'] = 'Bạn chưa đăng nhập, xin vui lòng đăng nhập';
  header("Location: ../../../Admin_Login.php");
}
if(isset($_SESSION['success_hang'])){
	$message = $_SESSION['success_hang'];
	echo "<script type='text/javascript'>alert('$message');</script>";
	unset($_SESSION['success_hang']);
}
if(isset($_SESSION['update_hang'])){
	$message = $_SESSION['update_hang'];
	echo "<script type='text/javascript'>alert('$message');</script>";
	unset($_SESSION['update_hang']);
}
if(isset($_SESSION['delete_hang'])){
	$message = $_SESSION['delete_hang'];
	echo "<script type='text/javascript'>alert('$message');</script>";
	unset($_SESSION['delete_hang']);
}
?>

<!doctype html>
<html lang="en">

<head>
	<title>Danh Sách Hãng Sản Phẩm</title>
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
	<div id="sidebarMenu">
		<ul class="sidebarMenuInner">
			<a href="../../index.php"><li>APPLE 123<span>Chức Năng</span></li></a>
			<a href="../quanlydienthoai/danhsachsanpham.php"><li>Danh Sách Sản Phẩm Điện Thoại</li></a>
			<a href="../quanlythongtinsanpham/danhsachthongtin.php"><li>Danh Sách Thông Tin Sản Phẩm </li></a>
			<a href="../quanlyhang/danhsachhangsanpham.php"><li>Danh Sách Hãng Điện Thoại</li></a>
			<a href="../quanlyhoadon/danhsachhoadon.php"><li>Danh Sách Đơn Hàng</li></a>
			<a href="../quanlytaikhoan/danhsachtaikhoan.php"><li>Thông Tin Khách Hàng</li></a>
			<a href="https://www.facebook.com/VanNguyen280999" target="_blank"><li>Thông Tin Của Chúng Tôi</li></a>
            <a href="../../dangxuat.php"><li>Đăng Xuất</li></a>
		</ul>
	</div>
	<div class="container">
		<div class="product">
			<h1>Danh Sách Hãng Sản Phẩm</h1>
			<a href="themhangsanpham.php" class="btn btn-success" id="a_func"><i class="fa-solid fa-circle-plus"></i> Thêm Hãng Sản Phẩm</a>
			<a href="timkiemhangsanpham.php" class="btn btn-success" id="a_func"> <i class="fa fa-search"> </i> Tìm Kiếm Hãng Sản Phẩm </a>


			<table class="table table-dark table-striped">

				<thead>
				<tr>
						<th>TÊN HÃNG SẢN PHẨM</th>
						<TH>THÔNG TIN</TH>
						<TH colspan="2">THAO TÁC</TH>
					</tr>
				</thead>
				<tbody>
					<?php
					require_once "../../Connection.php";

					$sql = "select * from nhan_hieu";
					$result = $conn->query($sql);
					while ($r = $result->fetch_assoc()) {
					?>
						<tr>
							<td><?php echo $r['ten_nhan_hieu'] ?></td>
							<td><?php echo $r['thong_tin'] ?></td>
							<td><a href="thongtinhangsanpham.php?ten_nhan_hieu=<?php echo $r['ten_nhan_hieu']?>" class="btn btn-info"> Sửa</a></td>
							<td><a onclick="return confirm('bạn có muốn xoá hãng sản phẩm này không ??')" href="xoahang.php?id=<?php echo $r['ten_nhan_hieu'] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
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