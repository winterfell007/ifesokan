<?php 
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1.0">
	<title>Reponsive Navbar</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
  #modalImage{
    width: 100%;
  }
  </style>
</head>
<body> 
	<header>
		
			<nav class="navbar navbar-expand-lg navbar-light">
  				<a class="navbar-brand" href="nairaland.php">ICDA <small><?php echo $_SESSION['cda'] ?></small></a>
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
        <a class="nav-link" href="uploadminutes.php">Upload Minutes</a>    
      </li>
         		 
        </div>
      	</li>
     			 </ul>
  			</div>
		</nav>
			
	
  </header>
  

	<section class="banner">


<?php

include('connection.php');


if (count($errors)==0) {
  $query="SELECT * FROM minutes_table ORDER BY `dateTime` DESC";
   $result=mysqli_query($conn, $query);

  if (mysqli_num_rows($result)>=1) {

    
   while($row = mysqli_fetch_assoc($result)){
     $dateTime = $row['dateTime'];
     $label = $row['label'];
     $path = $row['filePath'];
  echo "
  <div onclick='sendImage()' info='$path' class='list-group' style='margin: 20px;'>
  <a href='' info='$path' class='list-group-item list-group-item-action' data-toggle='modal' data-target='#staticBackdrop'>
    <div class='d-flex w-100 justify-content-between' info='$path'>
      <h5 class='mb-1' info='$path'>$label</h5>
      <small info='$path'> $dateTime </small>
    </div>
  </a>
</div>
  " ;
    
  }

}
}
    
  ?>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php
       echo "
          <img id='modalImage' src='' alt='scanned minute' />
       ";
      ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Download</button>
      </div>
    </div>
  </div>
</div>

</section>





<script>
  let imgURL;
 const sendImage = () =>{
   imgURL = event.target.attributes.info.value; 
   document.querySelector('#modalImage').src = imgURL;
 }


</script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>