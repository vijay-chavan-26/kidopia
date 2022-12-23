<?php
$username = "root";
$password = "";
$server = "localhost";
$dbname = "customers";
$connection = mysqli_connect($server,$username,$password,$dbname);
if($connection){
	echo "Conncted successfully to the database!!";
	mysqli_select_db($connection,$dbname);
	
}else {
    echo "Not connected with the database";
}
	
?>