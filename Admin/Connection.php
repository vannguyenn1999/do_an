<?php 

	$username = "root";
	$password = "";
	$host = "localhost";
	$dbName = "php0722_apple123";

	// try{
	// 	$conn = new PDO("mysql:host=$host;database=$dbName",$username,$password);
	// 	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	echo "ket noi thanh cong";

	// }catch(PDOException $e){
	// 	echo " ket noi that bai: ".$e->getMessage();
	// }


	$conn = new mysqli($host,$username,$password,$dbName);
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}
	
 ?>