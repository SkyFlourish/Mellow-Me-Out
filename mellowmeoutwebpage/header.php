<?php
//KEEP LOGIN SESSION RUNNING THROUGHOUT PAGES
session_start();

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="someicon.png">

    <title>Mellow Me Out Beauty Therapy</title>
	<!--bootstrap stuff for the header-->
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="index.php" style="color:pink;">Mellow Me Out Beauty</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="Blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="MakeBooking.php">Make A Booking</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="Products.php">Products</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="About.php">About Us</a>
          </li>
        </ul>
        <!--IF SESSION IS ON show LOGOUT BUTTON else SHOW LOGIN-->
		<?php 
		 if (isset($_SESSION['u_id'])) {
			 echo '<form class="form-inline mt-2 mt-md-0" action="logout.inc.php" method="POST">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Logout</button>
        </form>';
		 } else { echo'<form class="form-inline mt-2 mt-md-0" action="login.inc.php" method="POST">
          <input class="form-control mr-sm-2"  type="text" placeholder="Username" name="uid" aria-label="Username">
		  <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password"  aria-label="Password">
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Login</button><br> </br>
		  
		 </form>';}
		?>
		<button style="margin-left: 10px" class="btn btn-outline-success my-2 my-sm-0" ><a href="signup.php">Sign Up</a></button>
		
		
      </div>
    </nav>
	<!--bootstrap stuff for the header-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
