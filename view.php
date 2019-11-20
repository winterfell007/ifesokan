<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="">
	p{
		columns: 4
	}
</style>
<?php
include("server.php");
$id='';
if (isset($_POST['submit'])) {
$id=$_POST['id'];
$query="SELECT * FROM Minutes WHERE id=".$id;
$result=mysqli_query($conn,$query);
$minutes=mysqli_fetch_array($result);

echo "<div class='card' style='width: 18rem;'>";
  echo "<div class='card-body'>";
   echo $minutes['Content'];
 echo  "</div></div>";
}
?>
</html>




