<?php
require_once '../../Connection.php';
session_start();
if(!isset($_SESSION['admin_login'])){
  $_SESSION['error'] = 'Bạn chưa đăng nhập, xin vui lòng đăng nhập';
  header("Location: ../../../Admin_Login.php");
}

$errMaSP = '';
$errCH = '';
$errT = '';
$errS = '';
$errRam = '';
$errDl = '';
$errKm = '';

if (isset($_POST['submit'])) {
	$ma_san_pham = $_POST['masp'];
	$cau_hinh = $_POST['cauhinh'];
	$cam_truoc = $_POST['truoc'];
	$cam_sau = $_POST['sau'];
	$ram = $_POST['ram'];
	$dung_luong = $_POST['dungluong'];
	$giam_gia = $_POST['khuyenmai'];

	if (empty($ma_san_pham)) {
		$errMaSP = 'Mời bạn nhập mã sản phẩm';
	} else if (strlen($ma_san_pham) < 4) {
		$errMaSP = 'Số ký tự phải lớn hơn 4';
	}else{
		$sql_masp = "select ma_san_pham from thong_tin_chi_tiet where ma_san_pham = '$ma_san_pham'";
		$result = mysqli_query($conn, $sql_masp);
		$num = mysqli_num_rows($result);
		if($num == 1){
			$errMaSP = "Mã Sản Phẩm Này Đã Tồn Tại";
		}
	}

	if (empty($cau_hinh)) {
		$errCH = 'Mời bạn nhập thông tin cấu hình';
	} else if (strlen($cau_hinh) < 4) {
		$errCH = 'Số ký tự phải lớn hơn 4';
	}



	if (empty($cam_truoc)) {
		$errT = 'Mời bạn nhập thông số cam trước';
	} else if (strlen($cam_truoc) < 4) {
		$errT = 'Thông Số Cam Trước Phải Lớn Hơn 4 Ký Tự';
	} 

    if (empty($cam_sau)) {
		$errS = 'Mời bạn nhập thông số cam sau';
	} else if (strlen($cam_sau) < 4) {
		$errS = 'Thông Số Cam Sau Phải Lớn Hơn 4 Ký Tự';
	} 

	if (empty($ram)) {
		$errRam = 'Mời bạn nhập thông số ram';
	} else if (strlen($ram) < 4) {
		$errRam = 'Thông Số Ram Phải Lớn Hơn 4 Ký Tự';
	} 
	
    if (empty($dung_luong)) {
		$errDl = 'Mời bạn nhập thông số dung lượng';
	} else if (strlen($dung_luong) < 1) {
		$errDl = 'Thông Số Dung Lượng Phải Lớn Hơn 1 Ký Tự';
	} 

    if (empty($giam_gia)) {
		$giam_gia = 0;
	} 
	if (empty($errMaSP) && empty($errCH)  && empty($errT) && empty($errS) && empty($errRam) && empty($errDl)) {
		$newDl = $dung_luong . ' GB';
		$sql = "INSERT INTO thong_tin_chi_tiet( ma_san_pham, cau_hinh, cam_truoc, cam_sau, ram, dung_luong, giam_gia) VALUES ('$ma_san_pham','$cau_hinh','$cam_truoc','$cam_sau','$ram','$newDl','$giam_gia')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$_SESSION['success'] = "Thêm thành công ";
			header("Location: danhsachthongtin.php");
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}else{
		$message = "Kiểm Tra Lại";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}



?>

<!doctype html>
<html lang="en">

<head>
	<title>Thêm Thông Tin Sản Phẩm</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../../Css/css1.css">


	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
			<h1>Thêm Thông Tin Sản Phẩm</h1>
			<table class="table table-dark table-hover">
				<form action="themthongtin.php" method="POST" id="add" enctype="multipart/form-data">
                <div class="form-group">
						<label for="hang">Mã Sản Phẩm</label><br>
						<select name="masp" id="" class="form-group">
							
							<?php
							$select = "select * from san_pham";
							$result = mysqli_query($conn, $select);
							while ($row1 = mysqli_fetch_array($result)) :;
							?>
								<option value="<?php echo $row1['ma_san_pham']; ?>">
									<?php
									echo $row1['ten_san_pham'];
									?>

								</option>
							<?php endwhile; ?>
						</select>
						<br>
						<label for="err" class="err"> <?php echo $errMaSP; ?></label>
					</div>
					<div class="form-group">
						<label for="tensp">Thông Số Cấu Hình</label>
						<input type="text" name="cauhinh" class="form-control" value="<?php echo isset($_POST['cauhinh']) ? $_POST['cauhinh'] : '' ?>">
						<label for="err" class="err"> <?php echo $errCH; ?></label>
					</div>
					<div class="form-group">
						<label for="soluong">Thông Số Cam Sau</label>
						<input type="text" name="sau" class="form-control" value="<?php echo isset($_POST['sau']) ? $_POST['sau'] : '' ?>">
						<label for="err" class="err"> <?php echo $errS; ?></label>
					</div>
					<div class="form-group">
						<label for="giasp">Thông Số Cam Trước</label>
						<input type="text" name="truoc" class="form-control" value="<?php echo isset($_POST['truoc']) ? $_POST['truoc'] : '' ?>">
						<label for="err" class="err"> <?php echo $errT; ?></label>
					</div>
					
					<div class="form-group">
						<label for="soluong">Thông Số Chip</label>
						<input type="text" name="ram" class="form-control" value="<?php echo isset($_POST['ram']) ? $_POST['ram'] : '' ?>">
						<label for="err" class="err"> <?php echo $errRam; ?></label>
					</div>

					<div class="form-group">
						<label for="soluong">Thông Số Dung Lượng</label>
						<input type="text" name="dungluong" class="form-control" value="<?php echo isset($_POST['dungluong']) ? $_POST['dungluong'] : '' ?>">
						<label for="err" class="err"> <?php echo $errDl; ?></label>
					</div>
					<div class="form-group">
						<label for="soluong">Thông Tin Khuyến Mãi</label>
						<input type="text" name="khuyenmai" class="form-control" value="<?php echo isset($_POST['khuyenmai']) ? $_POST['khuyenmai'] : '' ?>">
					</div>
					<button type="submit" class="btn btn-success" name="submit" ><i class="fa-solid fa-circle-plus"></i> Thêm Thông Sản Phẩm</button>
					<a href="themthongtin.php" class="btn btn-dark" id="a_btn"><i class="fa-solid fa-arrow-rotate-left"></i> Làm Mới</a>
					<a href="danhsachthongtin.php" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Trở Lại</a>
				</form>`

			</table>


		</div>
	</div>
</body>
<!-- <script src="../../JS/message.js"></script> -->

</html>