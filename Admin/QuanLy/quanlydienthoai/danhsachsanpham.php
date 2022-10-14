
<?php
session_start();
if(!isset($_SESSION['admin_login'])){
  $_SESSION['error'] = 'Bạn chưa đăng nhập, xin vui lòng đăng nhập';
  header("Location: ../../../Admin_Login.php");
}
if(isset($_SESSION['success_sp'])){
	$message = $_SESSION['success_sp'];
	echo "<script type='text/javascript'>alert('$message');</script>";
	unset($_SESSION['success_sp']);
}
if(isset($_SESSION['update_sp'])){
	$message = $_SESSION['update_sp'];
	echo "<script type='text/javascript'>alert('$message');</script>";
	unset($_SESSION['update_sp']);
}
if(isset($_SESSION['delete_sp'])){
	$message = $_SESSION['delete_sp'];
	echo "<script type='text/javascript'>alert('$message');</script>";
	unset($_SESSION['delete_sp']);
}
if(isset($_SESSION['err_id'])){
	$message = $_SESSION['err_id'];
	echo "<script type='text/javascript'>alert('$message');</script>";
	unset($_SESSION['err_id']);
}
?>
<!doctype html>
<html lang="en">

<head>
	<title>Danh Sách Sản Phẩm</title>
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
			<li><a href="#">Danh Sách Sản Phẩm Điện Thoại</a></li>
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
			<h1>Danh Sách Sản Phẩm</h1>
			<a href="themsanpham.php" class="btn btn-success" id="a_func"><i class="fa-solid fa-circle-plus"></i> Thêm Sản Phẩm</a>
			<a href="timkiemsanpham.php" class="btn btn-success" id="a_func"> <i class="fa fa-search"> </i> Tìm Kiếm Sản Phẩm </a>


			<table class="table table-dark table-striped">

				<thead>
				<tr>
						<th>MÃ SẢN PHẨM</th>
						<TH>TÊN SẢN PHẨM</TH>
						<TH>ẢNH</TH>
						<th>GIÁ</th>
						<TH>SỐ LƯỢNG</TH>
						<!-- <TH>LOẠI SẢN PHẨM</TH> -->
						<TH>HÃNG</TH>
						<TH>THÔNG TIN SẢN PHẨM</TH>
						<TH>NGÀY TẠO</TH>
						<TH colspan="2">THAO TÁC</TH>
					</tr>
				</thead>
				<tbody>
					<?php
					require_once "../../Connection.php";

					$sql = "select * from san_pham ORDER BY ngay_tao DESC";
					// $sql =  "SELECT * FROM san_pham WHERE ma_san_pham BETWEEN 'SP001' AND 'SP005'";
					$result = $conn->query($sql);
					while ($r = $result->fetch_assoc()) {
					?>
						<tr>
							<td><?php echo $r['ma_san_pham'] ?></td>
							<td><?php echo $r['ten_san_pham'] ?></td>
							<td ><?php echo "<img src='photo/".$r['anh']."'  width='150' height='150'>" ?></td>
							<td><?php echo $r['gia'] ?></td>
							<td><?php echo $r['so_luong'] ?></td>
							<!-- <td><?php echo $r['id_kieu'] ?></td> -->
							<td><?php echo $r['ten_nhan_hieu'] ?></td>
							<!-- <td><img src="image/<?php $r['picture'] ?>" alt="" width="60" height="60"></td> -->
							<td><?php echo $r['thong_tin'] ?></td>
							<td><?php echo $r['ngay_tao'] ?></td>
							<td><a href="thongtinsanpham.php?ma_san_pham=<?php echo $r['ma_san_pham']?>" class="btn btn-info"> Sửa</a></td>
							<td><a onclick="return confirm('bạn có muốn xoá sản phẩm này không ??')" href="xoasanpham.php?id=<?php echo $r['ma_san_pham'] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
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