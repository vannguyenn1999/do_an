<?php
require_once '../../Connection.php';
session_start();
if(!isset($_SESSION['admin_login'])){
  $_SESSION['error'] = 'Bạn chưa đăng nhập, xin vui lòng đăng nhập';
  header("Location: ../../../Admin_Login.php");
}

$errMaSP = '';
$errTenSP = '';
$errPicture = '';
$errGiaSP = '';
$errSoluong = '';
$errKieuSp = '';
$errHang = '';
$errThongtin = '';

if (isset($_POST['submit'])) {
	$ma_san_pham = $_POST['masp'];
	$ten_san_pham = $_POST['tensp'];
	// $anh = $_POST['anh'];
	$gia = $_POST['giasp'];
	$so_luong = $_POST['soluong'];
	$id_kieu = $_POST['kieu'];
	$ten_nhan_hieu = $_POST['hang'];
	$thong_tin = $_POST['thongtin'];

	if (empty($ma_san_pham)) {
		$errMaSP = 'Mời bạn nhập mã sản phẩm';
	} else if (strlen($ma_san_pham) < 4) {
		$errMaSP = 'Số ký tự phải lớn hơn 4';
	}else{
		$sql_masp = "select ma_san_pham from san_pham where ma_san_pham = '$ma_san_pham'";
		$result = mysqli_query($conn, $sql_masp);
		$num = mysqli_num_rows($result);
		if($num == 1){
			$errMaSP = "Mã Sản Phẩm Này Đã Tồn Tại";
		}
	}

	if (empty($ten_san_pham)) {
		$errTenSP = 'Mời bạn nhập tên sản phẩm';
	} else if (strlen($ten_san_pham) < 4) {
		$errTenSP = 'Số ký tự phải lớn hơn 4';
	}
	// Xử lý ảnh
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$file_parts =explode('.',$_FILES['image']['name']);
	$file_ext=strtolower(end($file_parts));
	$expensions= array("jpeg","jpg","png");
	if(in_array($file_ext,$expensions)=== false){
	$errPicture="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
	}
	if($file_size > 2097152) {
	$errPicture='Kích thước file không được lớn hơn 2MB';
	}
	$image = $_FILES['image']['name'];
	$target = "photo/".basename($image);
	// $sql = "INSERT INTO san_pham (anh) VALUES ('$image')";
	// mysqli_query($conn, $sql);
	move_uploaded_file($_FILES['image']['tmp_name'], $target);
	

	// kết thúc
	
	if (empty($gia)) {
		$errGiaSP = 'Mời bạn nhập giá sản phẩm';
	} else if (!is_numeric($gia)) {
		$errGiaSP = 'Giá Sản Phẩm Phải Là 1 số';
	} else if (strlen($gia) < 4) {
		$errGiaSP = 'Số ký tự phải lớn hơn 4';
	}

	if (empty($so_luong)) {
		$errSoluong = 'Mời bạn nhập số lượng sản phẩm';
	} else if (!is_numeric($so_luong)) {
		$errSoluong = 'Giá Sản Phẩm Phải Là 1 số';
	}

	if (empty($id_kieu)) {
		$errKieuSp = 'Mời bạn nhập kiểu sản phẩm';
	}
	if (empty($ten_nhan_hieu)) {
		$errHang = 'Mời bạn nhập hãng sản phẩm';
	}
	if (empty($thong_tin)) {
		$errThongtin = 'Mời bạn nhập thông tin sản phẩm';
	}
	// && !empty($errPicture)
	if (empty($errMaSP) && empty($errTenSP)  && empty($errGiaSP) && empty($errSoluong) && empty($errKieuSp) && empty($errHang) && empty($errThongtin)) {
		$sql = "INSERT INTO san_pham(ma_san_pham, ten_san_pham, anh, gia, so_luong, id_kieu, ten_nhan_hieu, thong_tin) VALUES ('$ma_san_pham','$ten_san_pham','$image','$gia','$so_luong','$id_kieu','$ten_nhan_hieu','$thong_tin')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$_SESSION['success_sp'] = "Thêm Thành Công";
			header("Location: danhsachsanpham.php");
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
	<title>Thêm Sản Phẩm</title>
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
			<h1>Thêm Sản Phẩm</h1>
			<table class="table table-dark table-hover">
				<form action="themsanpham.php" method="POST" id="add" enctype="multipart/form-data">
					<div class="form-group">
						<label for="masp">Mã Sản Phẩm</label>
						<input type="text" name="masp" class="form-control" value="<?php echo isset($_POST['masp']) ? $_POST['masp'] : '' ?>">
						<label for="err" class="err"> <?php echo $errMaSP; ?></label>
					</div>
					<div class="form-group">
						<label for="tensp">Tên Sản Phẩm</label>
						<input type="text" name="tensp" class="form-control" value="<?php echo isset($_POST['tensp']) ? $_POST['tensp'] : '' ?>">
						<label for="err" class="err"> <?php echo $errTenSP; ?></label>
					</div>
					<div class="form-group">
						<label for="picture">Ảnh</label>
						<input type="file" name="image" class="form-control">
						<label for="err" class="err"> <?php echo $errPicture; ?></label>
					</div>
					<div class="form-group">
						<label for="giasp">Giá Sản Phẩm</label>
						<input type="text" name="giasp" class="form-control" value="<?php echo isset($_POST['giasp']) ? $_POST['giasp'] : '' ?>">
						<label for="err" class="err"> <?php echo $errGiaSP; ?></label>
					</div>
					<div class="form-group">
						<label for="soluong">Số Lượng</label>
						<input type="text" name="soluong" class="form-control" value="<?php echo isset($_POST['soluong']) ? $_POST['soluong'] : '' ?>">
						<label for="err" class="err"> <?php echo $errSoluong; ?></label>
					</div>
					<div class="form-group">
						<label for="kieu">Kiểu Sản Phẩm</label><br>
						<select name="kieu" id="" class="form-group">
							<option value="">-----Kiểu------</option>
							<?php
							$select = "select * from kieu";
							$result = mysqli_query($conn, $select);
							while ($row1 = mysqli_fetch_array($result)) :;
							?>
								<option value="<?php echo $row1['id_kieu']; ?>">
									<?php
									echo $row1['id_kieu'];
									?>

								</option>
							<?php endwhile; ?>
						</select>
						<br>
						<label for="err" class="err"> <?php echo $errKieuSp; ?></label>
					</div>

					<div class="form-group">
						<label for="hang">Hãng Điện Thoại</label><br>
						<select name="hang" id="" class="form-group">
							<option value="">-----Hãng------</option>
							<?php
							$select = "select * from nhan_hieu";
							$result = mysqli_query($conn, $select);
							while ($row1 = mysqli_fetch_array($result)) :;
							?>
								<option value="<?php echo $row1['ten_nhan_hieu']; ?>">
									<?php
									echo $row1['ten_nhan_hieu'];
									?>

								</option>
							<?php endwhile; ?>
						</select>
						<br>
						<label for="err" class="err"> <?php echo $errHang; ?></label>
					</div>
					<div class="form-group">
						<label for="masp">Thông Tin Sản Phẩm</label>
						<textarea name="thongtin" id="add" rows="5" cols="40" class="form-control"><?php echo isset($_POST['thongtin']) ? $_POST['thongtin'] : '' ?></textarea>
						<label for="err" class="err"> <?php echo $errThongtin; ?></label>
					</div>
					<button type="submit" class="btn btn-success" name="submit" ><i class="fa-solid fa-circle-plus"></i> Thêm Sản Phẩm</button>
					<a href="themsanpham.php" class="btn btn-dark" id="a_btn"><i class="fa-solid fa-arrow-rotate-left"></i> Làm Mới</a>
					<a href="danhsachsanpham.php" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Trở Lại</a>
				</form>

			</table>


		</div>
	</div>
</body>
<!-- <script src="../../JS/message.js"></script> -->

</html>