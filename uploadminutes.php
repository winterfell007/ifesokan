<?php 
 session_start();
?>
<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1.0">
	<title>Upload Minutes</title>

	<link rel="stylesheet" href="global1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>
	
	</style>

</head>
<body>

<header>
		
			<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  				<a class="navbar-brand" href="nairaland.php"> <b>ICDA</b> <?php echo $_SESSION['cda'] ?></a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   				 <span class="navbar-toggler-icon"></span>
 				 </button>

 				 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   					<ul class="navbar-nav ml-lg-auto">
     			 <li class="nav-item active">
       			 <a class="nav-link" href="nairaland.php">Home <span class="sr-only">(current)</span></a>
     			 </li>

     			</li>
      <li class="nav-item">
        <a class="nav-link" href="viewminutes.php">View Minutes</a>    
      </li>
         		 
        </div>
      	</li>
     			 </ul>
  			</div>
		</nav>
			
	
	
<section class="col-md-8" style="margin: 70px auto; background: white; border: 5px solid lightgrey; border-radius: 5px; box-shadow: 1px 1px 5px grey; padding: 20px 15px;">
	<form action="handleMinuteUpload.php" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="inputAddress">Label</label>
    <input required name="uploadLabel" type="text" class="form-control" id="inputAddress" placeholder="Write a label for this minute to help you identify it. If it's one of several pages, use the same label for all pages of the same minute differentiating the labels with serial numbering...">
	</div>
<div class="input-group mb-3">
  <div class="custom-file">
    <input name="uploadFile" type="file" accept='image/*' class="custom-file-input" id="inputGroupFile02">
    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
  </div>
  <div class="input-group-append">
    <button type="submit" name="upload" class="btn btn-primary">Upload</button>
  </div>
</div>
</form>
<?php

	$uploadStatus = $_GET['upload'];
	if ($uploadStatus=='failure'){
		$uploadStatus = 'danger'; 
	}
	if ($uploadStatus == 'success'){
		$message = 'Minute has been successfully uploaded  <a href="viewminutes.php"><button type="button" class="btn btn-outline-success">view minutes</button></a>';
	}elseif($uploadStatus == 'danger'){
		$message = 'Failed to upload... ';
	}else{
		$message = null;
	}


?>
<?php

echo(
"<div class='alert alert-$uploadStatus' role='alert'>
		 $message
</div>"
)
	?>
</section>	


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>