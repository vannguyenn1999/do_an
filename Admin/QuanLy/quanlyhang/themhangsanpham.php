<?php
require_once '../../Connection.php';
session_start();
if(!isset($_SESSION['admin_login'])){
  $_SESSION['error'] = 'Bạn chưa đăng nhập, xin vui lòng đăng nhập';
  header("Location: ../../../Admin_Login.php");
}

$errTen = '';
$errTT = '';


if (isset($_POST['submit'])) {
	$ten_nhan_hieu = $_POST['tennhanhieu'];
	$thong_tin = $_POST['thongtin'];
	

	if (empty($ten_nhan_hieu)) {
		$errTen = 'Mời bạn nhập mã sản phẩm';
	} else if (strlen($ten_nhan_hieu) < 4) {
		$errTen = 'Số ký tự phải lớn hơn 4';
	}else{
		$sql_masp = "select ten_nhan_hieu from nhan_hieu where ten_nhan_hieu = '$ten_nhan_hieu'";
		$result = mysqli_query($conn, $sql_masp);
		$num = mysqli_num_rows($result);
		if($num == 1){
			$errTen = "Tên Hãng Sản Phẩm Này Đã Tồn Tại";
		}
	}

	 
	if (empty($thong_tin)) {
		$errTT = 'Mời bạn nhập thông tin sản phẩm';
	}
	// && !empty($errPicture)
	if (empty($errTen) && empty($errTT)) {
		$sql = "INSERT INTO nhan_hieu(ten_nhan_hieu, thong_tin) VALUES ('$ten_nhan_hieu','$thong_tin')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$_SESSION['success_hang'] = "Thêm Thành Công ";
			header("Location: danhsachhangsanpham.php");
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
	<title>Thêm Hãng Sản Phẩm</title>
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
				<form action="themhangsanpham.php" method="POST" id="add" enctype="multipart/form-data">
					<div class="form-group">
						<label for="masp">Tên Nhãn Hiệu</label>
						<input type="text" name="tennhanhieu" class="form-control" value="<?php echo isset($_POST['tennhanhieu']) ? $_POST['tennhanhieu'] : '' ?>">
						<label for="err" class="err"> <?php echo $errTen; ?></label>
					</div>
					<div class="form-group">
						<label for="masp">Thông Tin</label>
						<input type="text" name="thongtin" class="form-control" value="<?php echo isset($_POST['thongtin']) ? $_POST['thongtin'] : '' ?>">
						<label for="err" class="err"> <?php echo $errTT; ?></label>
					</div>
					
					<button type="submit" class="btn btn-success" name="submit" ><i class="fa-solid fa-circle-plus"></i> Thêm Sản Phẩm</button>
					<a href="themhangsanpham.php" class="btn btn-dark" id="a_btn"><i class="fa-solid fa-arrow-rotate-left"></i> Làm Mới</a>
					<a href="danhsachhangsanpham.php" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Trở Lại</a>
				</form>

			</table>


		</div>
	</div>
</body>
<!-- <script src="../../JS/message.js"></script> -->

</html>