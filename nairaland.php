<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial scale=1.0">
  <title>Reponsive Navbar</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <?php 
  session_start();
  include("server.php"); 
  ?>
</head>
<body>
  <header>
    
      <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#">Icda <small> <?php echo ($_SESSION['cda']) ?> </small> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto">
           <li class="nav-item active">
             <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
           </li>
 <?php 
   
   $mem='';
   $user=$_SESSION['Username'];
    $query="SELECT * FROM users WHERE Username='$user'";
    $result=mysqli_query($conn, $query);
    $rows=mysqli_fetch_array($result);
    $mem=$rows['Membership'];
   // $mem=$rows['Memebership']=='Secreatary'
      if ($rows['Membership']=="Secretary") {
        echo "<li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> SEC </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <a class='dropdown-item' href='viewminutes.php'>View Minutes</a>
              <a class='dropdown-item' href='uploadminutes.php'>Upload Minutes</a>
              <a class='dropdown-item' href='registry.php'>Registry</a>
             

             <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> Funds </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <a class='dropdown-item' href='#'>Action</a>
              <a class='dropdown-item' href='#'>Another action</a>

             <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> EXCOs </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <a class='dropdown-item' href='#'>Minutes</a>
              <a class='dropdown-item' href='#'>CDC</a>
              <a class='dropdown-item' href='#'>JCDA</a>

             <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> User </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <a class='dropdown-item' href='#'>Option</a>
              <a class='dropdown-item' href='#'>Sign-out</a>
             
        </div>
        </li>
           </ul>
        </div>";
      }
       elseif ($rows['Membership']=="Chairman") {
        echo "<li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> SEC </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
            <a class='dropdown-item' href='viewminutes.php'>View Minutes</a>
            <a class='dropdown-item' href='registry.php'>Registry</a>
             

             <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> Funds </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <a class='dropdown-item' href='#'>Action</a>
              <a class='dropdown-item' href='#'>Another action</a>

             <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> EXCOs </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <a class='dropdown-item' href='#'>Minutes</a>
              <a class='dropdown-item' href='#'>CDC</a>
              <a class='dropdown-item' href='#'>JCDA</a>

             <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> User </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <a class='dropdown-item' href='#'>Option</a>
              <a class='dropdown-item' href='#'>Sign-out</a>
             
        </div>
        </li>
           </ul>
        </div>";
      }
      else
      {
        echo "<li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> SEC </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <a class='dropdown-item' href='minutes.html'>Minutes</a>
              <!-- <a class='dropdown-item' href='registry.html'>Registry</a> -->
             

             <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> Funds </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <a class='dropdown-item' href='#'>Action</a>
              <a class='dropdown-item' href='#'>Another action</a>

             <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> EXCOs </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <a class='dropdown-item' href='#'>Minutes</a>
              <a class='dropdown-item' href='#'>CDC</a>
              <a class='dropdown-item' href='#'>JCDA</a>

             <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> User </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <a class='dropdown-item' href='#'>Option</a>
              <a class='dropdown-item' href='#'>Sign-out</a>
             
        </div>
        </li>
           </ul>
        </div>"; 
    }

   ?>
      
    </nav>
      
  
  </header>

  <section class="banner">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h2>lorem ipsum dolor sit amet</h2>
          <p>In Henry VIII and Elizabeth I's reign, the Tudor dynasty produced the two of the most fantatastic monarchs that shaped England's history and projected forth the birth of Great Britain</p>
          <a href="" class="btnD1">Read more</a>
        </div>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>