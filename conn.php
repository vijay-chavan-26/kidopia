<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "admission";

$conn = mysqli_connect($server, $username, $password, $dbname);

if($conn){
	mysqli_select_db($conn,$dbname);	
	// echo "connected successfully";
}else{
	die("Connection failed: " . mysqli_error());
}
	
?>
