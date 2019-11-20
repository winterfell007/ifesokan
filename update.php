<?php 
if (isset($_POST['Approve'])) {
include('server.php');
  $d= $_POST['id'];
 //echo $d;
   $query="UPDATE `users` SET `approval` =1 WHERE user_id=".$d;
    $result=mysqli_query($conn, $query);
    // echo $d;
   if ($result) {
  // echo "done";
    header("location:registry.php");
   }
   else{
   	echo $conn->error;
   }
}
?>