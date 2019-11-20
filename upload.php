<?php 
include('server.php');
$content='';
$date='';
$id='';
if (isset($_POST['submit'])) {
	$content=$_POST['content'];
	$date=$_POST['date'];
	$query="INSERT INTO `minutes`(`Id`, `Date`, `Content`) VALUES ('','$date','$content')";
	$result=mysqli_query($conn,$query);
	if ($result) {
	err("Minute Upload successful");
			}
			else{
				err("Oops!!! Something went wrong...");
			}
}
function err($msg){
	echo $msg;
}
?>