<?php
$servername = "localhost";
$username	= "root";
$password	= ""; //chua cai pass thi de trong
$database = "real_estate" ;
// creat connection
$conn = new mysqli($servername, $username, $password,$database);
mysqli_set_charset($conn,"utf8");
// check conection

if ($conn->connect_error) {
	die("connection failed: ". $conn->connect_error);
}
?>