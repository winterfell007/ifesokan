<?php

if(isset($_POST['upload'])){

    $uploadLabel = $_POST['uploadLabel'];
   
 $uploadFiles = $_FILES['uploadFile'];    
 print_r($uploadFiles);

 //upload into folder
if($uploadFiles['error']===0){
    $tempPath = $uploadFiles['tmp_name'];
    $ext = 'jpg';
    $fileNewName = uniqid('', true).".".$ext;

    $newPath = './uploadedMinutes/'.$fileNewName;
    move_uploaded_file($tempPath, $newPath);

session_start();

include('connection.php');
 $today = date("F j, Y, g:i a");
 $query="INSERT INTO minutes_table(`filePath`,`label`,`dateTime`) VALUES ('$newPath','$uploadLabel', '$today')";
        $result=mysqli_query($conn, $query);
        print_r($result);
		if ($result==1) {
  header('Location: uploadminutes.php?upload=success');
}else{
    header('Location: uploadminutes.php?upload=failure');
}



   


}else{
    header('Location: uploadminutes.php?upload=failure');
    echo "Error uploading file";
}



 // ensure only jpg format is accepted
     


}
?>
