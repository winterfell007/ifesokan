<?php
$servername = "localhost";
$user = "root";
$userpassword="";
$dbname = "ifesokan";
$Firstname="";
$Lastname= "";
$mail02 = "";
$PhoneNumber="";
$address = "";
$id="";
$title="";
$zone ="";
$occupation = "";
$nextofkin = "";
$username = "";
$Gender ="";
$MaritalStatus="";
$Memebership="";
$pass= "";
$conn = new mysqli($servername, $user, $userpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	echo "connected";
}

if (isset($_POST["submit"])) {
	$Firstname= $_POST["Firstname"];
	$Lastname = $_POST["Lastname"];
	$id=$_POST['id'];
	$title=$_POST["title"];
	// $mail = $_POST["mail"];
	$username=$_POST['Username'];
	$mail02=$_POST['m'];
	$PhoneNumber =$_POST["Mobile-Number"];
	$pass=$_POST["password"];
	$address=$_POST["Address"];
	$zone=$_POST["Zone"];
	$nextofkin= $_POST["Next"];
	$occupation=$_POST["Occupation"];
	$zone = $_POST["Zone"];
	$Gender =$_POST["Gender"];
	$MaritalStatus=$_POST["MaritalStatus"];
	$Memebership=$_POST["Memebership"];
	$pass=($pass);
	$sql = "INSERT INTO users (user_id,Firstname, Lastname, email, mobile, Username, Password, Gender, Address,ZoneCode,NextofKin, Occupation, MaritalStatus, Membership,title,approval )
VALUES ('$id','$Firstname', '$Lastname','$mail02','$PhoneNumber','$username','$pass','$Gender','$address', '$zone', '$nextofkin', '$occupation', '$MaritalStatus', '$Memebership','$title','0')";

if ($conn->query($sql) === TRUE) {
	header("");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

