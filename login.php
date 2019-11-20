<!DOCTYPE html>
<html>
<head>
<?php 
session_start();
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
if (isset($_POST['btn'])) {
	$username=$_POST['username'];
	$userpassword=$_POST['password'];
	if (count($errors)==0) {
		$query="SELECT * FROM users WHERE Username='$username' AND Password='$userpassword'";
		$result=mysqli_query($conn, $query);
		if (mysqli_num_rows($result)==1) {
			$_SESSION['Username']=$username;
			$_SESSION['success']='logged in';
			$row=mysqli_fetch_array($result);
			if ($row['approval']=='0') {
			array_push($errors, "Still Awaiting Approval");

			}
			else{
			header("location:nairaland.php");
		}
		}
		else{
			array_push($errors, "Invalid Login Details");
		}
	}
}
?>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="sign">
		<?php include("errors.php");?>
		<form method="POST" >
			<h1>Sign In</h1>
			<input type="text" name="username" placeholder="username">
			<input type="text" name="password" placeholder="password">
			<input type="submit" name="btn" name="btn"  value="Sign in" class="btn"/>
		</form>		
	</div>
</body>
</html>