<?php
require_once "../../Connection.php";
session_start();
if(!isset($_SESSION['admin_login'])){
  $_SESSION['error'] = 'Bạn chưa đăng nhập, xin vui lòng đăng nhập';
  header("Location: ../../../Admin_Login.php");
}

if(!isset($_GET['ten_nhan_hieu'])){
  $_SESSION['err_id'] = "Tên Nhãn Hiệu Không Hợp Lệ";
  header('Location: danhsachhangsanpham.php');
  exit();
}else {
  $ten_nhan_hieu = $_GET["ten_nhan_hieu"];
}

$update_sql = "select * from san_pham where ten_nhan_hieu = '$ten_nhan_hieu'";

$result = mysqli_query($conn, $update_sql);
$row = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Thông Tin Hãng Sản Phẩm</title>
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
                <input type="hidden" name="tennhanhieu" value="<?php echo $ten_nhan_hieu; ?>">

					
					<div class="form-group">
						<label for="masp">Thông Tin Hãng Sản Phẩm</label>
						<textarea name="thongtin" id="add" rows="5" cols="40" class="form-control"><?php echo $row['thong_tin'] ;?></textarea>
					</div>
					<button type="submit" class="btn btn-success" name="submit" >Sửa Thông Tin Sản Phẩm</button>
					<!-- <a href="themsanpham.php" class="btn btn-dark" id="a_btn">Làm Mới</a> -->
					<a href="danhsachsanpham.php" class="btn btn-success" id="a_btn">Trở Lại</a>
				</form>

			</table>


		</div>
	</div>

  </body>
</html>