<?php 

const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = "php0722_apple123";

	$conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}
	
 ?>