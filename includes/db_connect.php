<?php 

$user = "root";
$pass = "hb28180@";
$server = "localhost";
$conn = new mysqli($server, $user, $pass);

if ($conn->connect_error) {

	die("connection failed:" . $conn->connect_error);
}
$db_select = mysqli_select_db($conn,cms);
if(!$db_select){
	die("Database selection failed: " . mysqli_error());
}
 
 ?>