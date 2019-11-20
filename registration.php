<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style type="text/css">
	#ui{
		background-color: #333;
		padding: 30px;
		margin-top: 40px;
		border-radius: 10px;
		opacity: 0.9;

	}

	#ui label, h1{
		color: #fff
	}

</style>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-3"></div>  
			<div class="col-lg-6">
				<div id="ui">
					<h1 class="text-center">REGISTRATION FORM</h1>
					<form class="form-group text-center" action="reg.php" method="post">
						<div class="row">
							<div class="col-lg-6">
								<label>User ID</label>
								<input type="text" name="id" class="form-control" placeholder="UserID">
							</div>
							
							<div class="col-lg-6">
								<label>Title</label>
								<input type="text" name="title" class="form-control" placeholder="Title">
							</div>

							<div class="col-lg-6">
								<label>Firstname</label>
								<input type="text" name="Firstname" class="form-control" placeholder=" Enter Firstname">
							</div>

							<div class="col-lg-6">
								<label>Lastname</label>
								<input type="text" name="Lastname" class="form-control" placeholder="Enter Lastname">
							</div>

							<div class="col-lg-6">
								<label>Mobile Number</label>
								<input type="tel" name="Mobile-Number" class="form-control" placeholder="Enter Mobile Number">
							</div>

							<div class="col-lg-6">
								<label>Occupation</label>
								<input type="text" name="Occupation" class="form-control" placeholder="Enter Occupation">
							</div>

							<div class="col-lg-6">
								<label>Zone Code</label>
								<input type="text" name="Zone" class="form-control" placeholder="Enter Zone Code">
							</div>

							<div class="col-lg-6">
								<label>Email</label>
								<input type="text" name="m" class="form-control" placeholder="Enter Email">
							</div>
							
						</div>
						<br>

						<label>Address</label>
						<input type="text" name="Address" class="form-control" placeholder="Enter Address">
						<br>	

						<div class="row">
							<div class="col-lg-6">
								<label>Username</label>
								<input type="text" name="Username" class="form-control" placeholder="Enter Username">
							</div>
							
							<div class="col-lg-6">
								<label>Password</label>
								<input type="password" name="password" class="form-control" placeholder="Enter Password">
							</div>

							<div class="col-lg-6">
								<label>Next of Kin</label>
								<input type="text" name="Next" class="form-control" placeholder="Enter Next of Kin">
							</div>
						
						</div>
						<br>

						<select class="form-control" name="Gender">
							<option>Choose Gender</option>
							<option>Male</option>
							<option>Female</option>
						</select>
						<br>

						<select class="form-control" name="MaritalStatus">
							<option>Marital Status</option>
							<option>Single</option>
							<option>Married</option>
						</select>

						<br>

						<select class="form-control" name="Memebership">
							<option>Membership</option>
							<option>Chairman</option>
							<option>Vice Chairman</option>
							<option>Secretary</option>
							<option>Fin-Secretary</option>
							<option>Treasurer</option>
							<option>Provost</option>
							<option>Member</option>
						</select>

						<br>

						<input type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-lg">

					</form>
				</div>
			</div> 
			<div class="col-lg-3"></div> 
			
		</div>
	
	</div>

</body>
</html>