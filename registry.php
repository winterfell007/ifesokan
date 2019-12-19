<?php
  session_start();
  include("server.php");
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial scale=1.0">
  <title>Reponsive Navbar</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
</head>
<body>
  <header>
    
      <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#">Icda <?php $_SESSION['cda'] ?></a>
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
            <a class="nav-link" href=""  data-toggle="modal" data-target="#reg" >Register New Memeber</a>
           </li>
             

          </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModalLong">Approval</a>
           </li>


          </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#Approved">Approved</a>
           </li>
        </div>
        </li>
           </ul>
        </div>
    </nav>
      
  
  </header>

  <section class="banner">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h2>lorem ipsum dolor sit amet</h2>
          <p>In Henry VIII and Elizabeth I's reign, the Tudor dynasty produced the two of the most fantatastic monarchs that shaped England's history and projected the forth the birth of Great Britain</p>
          <a href="" class="btnD1">Read more</a>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registered Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <?php 
    session_start();
   include("server.php"); 
   $mem='';
   $user=$_SESSION['Username'];
    $query="SELECT * FROM users WHERE Approval='0'";
    $result=mysqli_query($conn, $query);
    // $mem=$rows['Membership'];
   // $mem=$rows['Memebership']=='Secreatary'
    // echo "<table>";
     echo "<div id='scroll' class='modal-body' style='overflow: scroll'><table style='color:dimgrey'>";
            echo  "<tr>";
    echo "<th>ID</th>";
   echo  "<th>Firstname</th>";
   echo  "<th>Lastname</th>";
   echo  "<th>Zone</th>";
   echo "<th>Action</th>";
 echo "</tr>";
        while ($rows=mysqli_fetch_array($result)) {
     $user=$_SESSION['Username'];
    $q1="SELECT * FROM users WHERE Username='$user'";
    $r1=mysqli_query($conn, $q1);
    $r2=mysqli_fetch_array($r1);
   // $mem=$rows['Membership'];
     if ($r2['Membership']=="Secretary") {
       echo "<form method='POST' action='update.php'><tr><td><input name='id' disabled class='borderless' value='".($rows['user_id'])."'/></td><td>".($rows['Firstname'])."</td><td>".($rows['Lastname'])."</td><td>".($rows['ZoneCode'])."</td><td><input name='view' type='button' value='View' class='btn btn-primary'></input></td></tr></form>";  
 }
 if ($r2['Membership']=="Chairman") {
       echo "<form method='POST' action='update.php'><tr><td><input name='id' class='borderless' value='".($rows['user_id'])."'/></td><td>".($rows['Firstname'])."</td><td>".($rows['Lastname'])."</td><td>".($rows['ZoneCode'])."</td><td><input name='view' type='button' value='View' class='btn btn-primary'></input><input name='Approve' value='Approve' type='submit' class='btn btn-danger'></input></td></tr></form>";  
 }
     
      }
          echo "</table></div>";
   ?>
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Approved" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
    <?php 
    // session_start();
   include("server.php"); 
   $mem='';
   $user=$_SESSION['Username'];
    $query="SELECT * FROM users WHERE Approval='1'";
    $result=mysqli_query($conn, $query);
    // $mem=$rows['Membership'];
   // $mem=$rows['Memebership']=='Secreatary'
    // echo "<table>";
     echo "<div class='modal-body'><table style='color:red'>";
            echo  "<tr>";
    echo "<th>ID</th>";
   echo  "<th>Firstname</th>";
   echo  "<th>Lastname</th>";
   echo  "<th>Zone</th>";
   echo "<th>Action</th>";
 echo "</tr>";
        while ($rows=mysqli_fetch_array($result)) {
    
 echo "<tr><td>".($rows['user_id'])."</td><td>".($rows['Firstname'])."</td><td>".($rows['Lastname'])."</td><td>".($rows['ZoneCode'])."</td><td><Button class='btn btn-primary'>View</Button></td></tr>";
     }
      echo "</table></div>";
   ?>






<!--  echo "<div class='modal-body'><table style='color:red'>";
   echo  "<tr>";
    echo "<th>ID</th>";
   echo  "<th>Firstname</th>";
   echo  "<th>Lastname</th>";
 echo "</tr>";
 echo "<tr><td>Hell</td> <td>Hell</td> <td>Hell</td></tr>";

  echo "</table></div> -->

      <!-- </div> -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <div class="row">
      <div class="col-lg-3"></div>  
      <div class="col-lg-12">
        <div id="ui">
          <h1 class="text-center h1">REGISTRATION FORM</h1>
          <form class="form-group text-center" action="reg.php" method="post">
            <div class="row">
              <div class="col-lg-6">
                <label>User ID</label>
                <input type="number" name="id" class="form-control" placeholder="UserID">
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
                <input type="number" name="Mobile-Number" class="form-control" placeholder="Enter Mobile Number">
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
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
