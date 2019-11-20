<?php 
$servername = "localhost";
$user = "root";
$userpassword="";
$dbname = "ifesokan";
$username = "";
$password = "";
$errors=array();
$conn = new mysqli($servername, $user, $userpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	 // echo "connected";
}
?>