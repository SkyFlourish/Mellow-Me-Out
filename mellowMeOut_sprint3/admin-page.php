<?php
session_start();
// include_once($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/input-validation.inc.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/staff_account_processing.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <!--Icon and Title-->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>Admin page - MellowMeOut</title>
        <!--Keywords for search-->
        <meta name="keywords" content="Massage, eyelash extensions, beauty, melbourne, mellowMeOut, spas, Brow Tint, Aromatherapy Massage, Lymphatic massage, Indian head massage, Body Mud wrap, Body exfoliate, Eyelash Tint, Combat Stress, Revitalise ">
        <!--Description of page-->
        <meta name="description" content="Mellow Me Out wants to be your primary choice for all your beauty and relaxation needs. We have truly soothing and calming pampering experiences available for every client. It’s an ideal place to gather with friends, reconnect with loved ones or turn to as your destination for self-renewal and stress relief.">

        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Mobile view-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="blog.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { //run when page loads
                nav_Counter=4;
            });
        </script>
    </head>
<!-- Style Sheet for Nav and Footer-->
<style>
    <?php include 'nav_footer.css';?>
</style>

 <!-- ===CODE START=== -->
<body>
 <!-- NAVIGATION BAR CODE -->
<?php include'nav.php';?>
 <!-- End of Nav Code -->

        <!-- Administrator console would go here for now -->
        <!--  -->
		<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky" >
		  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Add</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="admin-page.php?selection=9" style="color:#A9A9A9">Add blogs</a>
              </li>
			  <li class="nav-item">
                <a href="admin-page.php?selection=15" style="color:#A9A9A9">Add blog category</a>
              </li>
			  <li class="nav-item">
                <a href="admin-page.php?selection=5" style="color:#A9A9A9">Add bookings</a>
              </li>
              <li class="nav-item">
                <a href="admin-page.php?selection=10" style="color:#A9A9A9">Add services</a>
              </li>
			  <li class="nav-item">
                <a href="admin-page.php?selection=2" style="color:#A9A9A9">Add service category</a>
              </li>
              <li class="nav-item">
                <a href="admin-page.php?selection=4" style="color:#A9A9A9">Add service price + time</a>
              </li>
              <li class="nav-item">
                <a href="admin-page.php?selection=11" style="color:#A9A9A9">Add staff</a>
              </li>
			  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <!--<span>Manage</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
              <li class="nav-item">
                <a href="admin-page.php?selection=1" style="color:#A9A9A9">Manage bookings</a>
              </li>
              <li class="nav-item">
                <a href="admin-page.php?selection=3" style="color:#A9A9A9">Manage blogs</a>
              </li>
			  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">-->
              <span>Delete</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
			  <li class="nav-item">
                <a href="admin-page.php?selection=6" style="color:#A9A9A9">Delete blogs</a>
              </li>
			  <li class="nav-item">
                <a href="admin-page.php?selection=16" style="color:#A9A9A9">Delete blog category</a>
              </li>
			  <li class="nav-item">
                <a href="admin-page.php?selection=17" style="color:#A9A9A9">Delete bookings</a>
              </li>
			  <li class="nav-item">
                <a href="admin-page.php?selection=7" style="color:#A9A9A9">Delete services</a>
              </li>
			  <li class="nav-item">
                <a href="admin-page.php?selection=12" style="color:#A9A9A9">Delete service category</a>
              </li>
			  <li class="nav-item">
                <a href="admin-page.php?selection=8" style="color:#A9A9A9">Delete staff</a>
              </li>
			  <li class="nav-item">
                <a href="admin-page.php?selection=13" style="color:#A9A9A9">Delete service price + time</a>
              </li>
			  <p>
			  </p>
			  <p>
			  </p>
			  <p>
			  </p>
			  <p>
			  </p>
            </ul>

            
          </div>
        </nav>
			
    <div id="manage-center">
        
		</div>
        <div id="manage-right" style="padding-left: 25px">
            <?php include_once($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/admin-page.inc.php'); ?>
        </div>
    </div>

<!-- FOOTER CODE-->
<?php include 'footer.php';?>


</body>

</html>
