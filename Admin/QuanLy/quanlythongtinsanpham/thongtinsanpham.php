<?php
require_once "../../Connection.php";
session_start();
if(!isset($_SESSION['admin_login'])){
  $_SESSION['error'] = 'Bạn chưa đăng nhập, xin vui lòng đăng nhập';
  header("Location: ../../../Admin_Login.php");
}
$ma_san_pham = $_GET["ma_san_pham"];
$update_sql = "select * from thong_tin_chi_tiet where ma_san_pham = '$ma_san_pham'";

$result = mysqli_query($conn, $update_sql);
$row = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">

<head>
	<title>Thông Tin Sản Phẩm</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../../Css/css1.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<div class="product_add">
		<div class="container">
			<h1>Sửa Thông Tin Sản Phẩm</h1>
			<table class="table table-dark table-hover">
				<form action="update.php" method="GET" id="add" enctype="multipart/form-data">
					<input type="hidden" name="masp" value="<?php echo $ma_san_pham; ?>">
					<h2 style="color: #FACB0B;">
						<?php
							$msp = $row['ma_san_pham'];
							$sql_h1 = "select * from san_pham where ma_san_pham = '$msp'";
							$rs = mysqli_query($conn, $sql_h1);
							$h = mysqli_fetch_assoc($rs);
							echo $h['ten_san_pham'];
						?>
					</h2>
					<div class="form-group">
						<label for="tensp">Thông Tin Cấu Hình</label>
						<input type="text" name="cauhinh" class="form-control" value="<?php echo $row['cau_hinh']; ?>">
					</div>

					<div class="form-group">
						<label for="giasp">Thông Tin Cam Sau</label>
						<input type="text" name="camsau" class="form-control" value="<?php echo $row['cam_sau']; ?>">
					</div>
					<div class="form-group">
						<label for="soluong">Thông Tin Cam Trước</label>
						<input type="text" name="camtruoc" class="form-control" value="<?php echo $row['cam_truoc']; ?>">
					</div>
					<div class="form-group">
						<label for="soluong">Thông Tin Chip</label>
						<input type="text" name="ram" class="form-control" value="<?php echo $row['ram']; ?>">
					</div>
					<div class="form-group">
						<label for="soluong">Thông Tin Dung Lượng</label>
						<input type="text" name="dungluong" class="form-control" value="<?php echo $row['dung_luong']; ?>">
					</div>
					<div class="form-group">
						<label for="soluong">Khuyến Mại</label>
						<input type="text" name="giamgia" class="form-control" value="<?php echo $row['giam_gia']; ?>">
					</div>




					<button type="submit" class="btn btn-success" name="submit">Sửa Thông Tin Sản Phẩm</button>
					<!-- <a href="themsanpham.php" class="btn btn-dark" id="a_btn">Làm Mới</a> -->
					<a href="danhsachthongtin.php" class="btn btn-success" id="a_btn">Trở Lại</a>
				</form>

			</table>


		</div>
	</div>

</body>

</html>