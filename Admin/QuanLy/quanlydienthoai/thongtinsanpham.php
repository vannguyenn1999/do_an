<?php
session_start();
if(!isset($_SESSION['admin_login'])){
  $_SESSION['error'] = 'Bạn chưa đăng nhập, xin vui lòng đăng nhập';
  header("Location: ../../../Admin_Login.php");
}
require_once "../../Connection.php";

if(!isset($_GET['ma_san_pham'])){
    $_SESSION['err_id'] = "Mã Sản Phẩm Không Hợp Lệ";
    header('Location: danhsachsanpham.php');
    exit();
}else {
	$ma_san_pham = $_GET["ma_san_pham"];
}

$update_sql = "select * from san_pham where ma_san_pham = '$ma_san_pham'";

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

					<div class="form-group">
						<label for="tensp">Tên Sản Phẩm</label>
						<input type="text" name="tensp" class="form-control" value="<?php echo $row['ten_san_pham'];?>">
						<!-- <label for="err" class="err"> <?php echo $errTenSP; ?></label> -->
					</div>
					<div class="form-group">
						<label for="picture">Ảnh</label><br>
						<?php echo "<img src='photo/".$row['anh']."'  width='150' height='150'>" ?>
						<input type="file" name="anh" class="form-control" >
						<!-- <label for="err" class="err"> <?php echo $errPicture; ?></label> -->
					</div>
					<div class="form-group">
						<label for="giasp">Giá Sản Phẩm</label>
						<input type="text" name="giasp" class="form-control" value="<?php echo $row['gia'];?>">
						<!-- <label for="err" class="err"> <?php echo $errGiaSP; ?></label> -->
					</div>
					<div class="form-group">
						<label for="soluong">Số Lượng</label>
						<input type="text" name="soluong" class="form-control" value="<?php echo $row['so_luong'];?>">
						<!-- <label for="err" class="err"> <?php echo $errSoluong; ?></label> -->
					</div>
					<div class="form-group">
						<label for="kieu">Kiểu Sản Phẩm</label><br>
						<select name="kieu" id="" class="form-group">
							
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
						<!-- <label for="err" class="err"> <?php echo $errKieuSp; ?></label> -->
					</div>

					<div class="form-group">
						<label for="hang">Hãng Điện Thoại</label><br>
						<select name="hang" id="" class="form-group">
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
						<!-- <label for="err" class="err"> <?php echo $errHang; ?></label> -->
					</div>
					<div class="form-group">
						<label for="masp">Thông Tin Sản Phẩm</label>
						<textarea name="thongtin" id="add" rows="5" cols="40" class="form-control"><?php echo $row['thong_tin'] ;?></textarea>
						<!-- <label for="err" class="err"> <?php echo $errThongtin; ?></label> -->
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