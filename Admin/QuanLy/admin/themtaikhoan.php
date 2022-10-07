<?php
require_once '../../Connection.php';

$errUser = '';
$errPass = '';
$errPass_1 = '';
$errName = '';

if (isset($_POST['submit'])) {
	$user_admin = $_POST['user'];
	$pass_admin = $_POST['pass'];
	$pass_admin_1 = $_POST['pass1'];
	$name = $_POST['name'];

	if (empty($user_admin)) {
		$errUser = 'Mời bạn nhập tài khoản';
	} else if (strlen($user_admin) < 4) {
		$errUser = 'Số ký tự phải lớn hơn 4';
	}else{
		$sql_user = "select username_admin from admin_system where username_admin = '$user_admin'";
		$result = mysqli_query($conn, $sql_user);
		$num = mysqli_num_rows($result);
		if($num == 1){
			$errUser = "Tài Khoản Này Đã Tồn Tại";
		}
	}

	if (empty($pass_admin_1)) {
		$errPass_1 = 'Mời bạn nhập lại mật khẩu';
	} else if (strlen($pass_admin_1) < 6) {
		$errPass_1 = 'Số ký tự phải lớn hơn 6';
	}

	if (empty($pass_admin)) {
		$errPass = 'Mời bạn nhập mật khẩu';
	} else if (strlen($pass_admin) < 6) {
		$errPass = 'Số ký tự phải lớn hơn 6';
	}

	if (empty($name)) {
		$errName = 'Mời bạn nhập tên người dùng';
	} else if (strlen($name) < 4) {
		$errName = 'Số ký tự phải lớn hơn 4';
	}

	if($pass_admin != $pass_admin_1){
		$errPass = 'Kiểm tra lại mật khẩu';
	}

	
	// && !empty($errPicture)
	if (empty($errUser) && empty($errName)  && empty($errPass_1) && empty($errPass)) {
		$sql = "INSERT INTO admin_system(username_admin, password_admin, name) VALUES ('$user_admin','$pass_admin','$name')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$message = "Thêm thành công , Bạn có muốn trở lại trang chủ ?";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Location: danhsachtaikhoan.php");
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
	<title>Thêm Tài Khoản</title>
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
				<form action="themtaikhoan.php" method="POST" id="add" enctype="multipart/form-data">
					<div class="form-group">
						<label for="masp">Tài Khoản</label>
						<input type="text" name="user" class="form-control" value="<?php echo isset($_POST['user']) ? $_POST['user'] : '' ?>">
						<label for="err" class="err"> <?php echo $errUser; ?></label>
					</div>
					
					<div class="form-group">
						<label for="">Mật Khẩu</label>
						<input type="password" name="pass" class="form-control" value="<?php echo isset($_POST['pass']) ? $_POST['pass'] : '' ?>">
						<label for="err" class="err"> <?php echo $errPass; ?></label>
					</div>
					<div class="form-group">
						<label for="">Nhâp Lại Mật Khẩu</label>
						<input type="password" name="pass1" class="form-control" value="<?php echo isset($_POST['pass1']) ? $_POST['pass1'] : '' ?>">
						<label for="err" class="err"> <?php echo $errPass_1; ?></label>
					</div>
					
					<div class="form-group">
						<label for="">Tên Người Dùng</label>
						<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
						<label for="err" class="err"> <?php echo $errName; ?></label>
					</div>
					
					<button type="submit" class="btn btn-success" name="submit" ><i class="fa-solid fa-circle-plus"></i> Thêm Tài Khoản</button>
					<a href="themtaikhoan.php" class="btn btn-dark" id="a_btn"><i class="fa-solid fa-arrow-rotate-left"></i> Làm Mới</a>
					<a href="danhsachtaikhoan.php" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Trở Lại</a>
				</form>

			</table>


		</div>
	</div>
</body>
<!-- <script src="../../JS/message.js"></script> -->

</html>