<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width user-scalable:no">
	<title>nairaland/ Uoload Minute</title>
	<!-- <link rel="stylesheet"  href="style.css"> -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<style type="">
		.i{
			width: 1000px;
			height: 390px;
			margin-top: 40px;
		}
		.ub{
	width: 200px;
	height: 40px;
	border-radius: 8px;
	border:0px;
	outline: 0px;
	/*margin-top: %;*/
	margin-left: -4%;
}
.sb{
	width: 200px;
	height: 40px;
	padding: 11px;
	color: black;
	border-radius: 8px;
	border:0px;
	background-color: #e8e8e8;
	outline: 0px;
	margin-top: 2px;
	margin-left: 4%;
}
.de{
	position: absolute;
	top: 140px;
}
.custom{
	margin: 30px;
	border:1px solid grey;
	border-radius: 8px;
	color:#000;
}
	</style>
	<header>
		<div class="container">
		<div class="navbar">
   
  <!--Dropdown Starts-->
   <div class="dropdown">
    <a href="nairaland.php">Home</a>
  </div>

  <!--dropdwon starts-->
    	
  <!-- Dropdown Ends -->
 <h1>Ifesokan CDA</h1>
</header>

	<section id="snow">
		<?php 
   session_start();
   include("server.php"); 
   $mem='';
   $user=$_SESSION['Username'];
    $query="SELECT * FROM users WHERE Username='$user'";
    $result=mysqli_query($conn, $query);
    $rows=mysqli_fetch_array($result);
    $mem=$rows['Membership'];
   // $mem=$rows['Memebership']=='Secreatary'
      if ($rows['Membership']=="Secretary") {
        echo " <div>
     <form action='upload.php' method='POST'>,<p class='se'>Select Date: <input class='de' name='date' type='date'/> <input type='file'></input>
        <input value ='Upload Minute' name='submit' class='ub' type='submit'/>
        </form>

    </div>";
      }
      else
      {
        $query="SELECT * FROM Minutes";
    $result=mysqli_query($conn, $query);
    $rows=mysqli_fetch_array($result);
      while ($rows=mysqli_fetch_array($result)) {
      	echo "<div class='card custom'>
  <div class='card-body'>
  <form method='POST' action='view.php'>
  <input style='opacity:0' name='submit' type='submit'> <p>".($rows['Date'])."</p></a>
<input style='display:none' name='id' value='".($rows['Id'])."'/>
  </form>
  </div>
</div>";
    }
 }
   ?>
 
 <input type='file'/>
	</section>
</body>
</html>