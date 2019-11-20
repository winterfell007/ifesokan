<?php
session_start();
	// $_SESSION['username'];
if (isset($_SESSION['username'])) {
		echo "welcome"." ".$_SESSION['username'];
	
}
else
{
	header("location:login.php");
}


	
	
?>