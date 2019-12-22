<?php

$servername = "localhost";
$user = "root";
$userpassword="";
$dbname = $_SESSION['cda'];
$errors=array();
$conn = new mysqli($servername, $user, $userpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	// echo "connected";
}

?>