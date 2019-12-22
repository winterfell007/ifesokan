<!DOCTYPE html>
<html>
<head>
<?php 
session_start();

if (isset($_POST['btn'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cda = $_POST['cda'];
	$_SESSION['cda'] = $cda;
	include('connection.php');
	if (count($errors)==0) {
		$query="SELECT * FROM users WHERE Username='$username' AND Password='$password'";
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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="login.css">
<style>
	.icda{
		color: black;
		font-size: 25px;
		margin: 10px;
		position: fixed;
	}
</style>
</head>
<body>
<a href="login.php" class='icda'> <b>ICDA</b></a>

<section class="container-fluid bg">
	<section class="row justify-content-center ">
		<section class="col-12 col-sm-6 col-md-3" id="form-card" >
	 <?php include("errors.php"); ?>
<form class="form-container " method="POST">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Enter CDA</label>
    <select name="cda" class="form-control" id="exampleFormControlSelect1">
      <option value="ifesokan">Ifesokan</option>
      <option value="irewolde">Irewolde</option>
      <option value="ifesowapo">Ifesowapo</option>
      <option value="estaport">Estaport</option>
      <option value="jajo">Jajo</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Username</label>
    <input name="username" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
  </div>
  <button name="btn" type="submit" class="btn btn-primary btn-block">Sign in</button>
</form>
		</section>		
	</section>
	
</section>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>


</body>
</html>

</html>

<!-- jUST EDITED THE PAGE-->


