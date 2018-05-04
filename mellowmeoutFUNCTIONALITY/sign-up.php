<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->
    
    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">
    
    <meta name="description" content="Relaxing Spas. Book now today!">
    
    <link rel="stylesheet" type="text/css" href="contact-us.css"> <!-- Link to external CSS file -->
    <script type="text/javascript" src="slideshow.js"></script>
</head>
    
<body onload="ChangeDots">
    <div class="wrapper">
<?php include 'header.php';?>
<?php include 'nav.php';?>
    

    <!-- MAIN CONTENT -->
    <div class= "content">
     <h2>Create Login</h2>
	 <!--form which invokes singup.inc.php with the action "POST" DO NOT MODIFY LINE BELOW-->
          <form class="needs-validation" action="signup.inc.php" method="POST">
	 
<div class = "formBody">
    <form>
        <label for="fname">First Name:</label>
         <br>
        <input type="text" class="form-control" name="first" placeholder="" value="" required>
    <br>
     <br>
        <label for="lname">Last Name:</label>
         <br>
        <input type="text" class="form-control" name="last" placeholder="" value="" required>
     <br>
     <br>
        <label for="email">Email:</label>
         <br>
        <input type="email" class="form-control" name="email" placeholder="you@example.com">
     <br>
     <br>
<label for="subject">Username:</label>     
 <br>
     <input type="text" class="form-control" name="uid" placeholder="Username" required><br>
     <br>
<label for="message">Password:</label>
         <br>
        <input type="password" class="form-control" name="pwd" >
        <br>
        <button type="submit" name ="submit">Create Account</button>
          </form>
  </div>
</div>
    
    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
        <?php include 'footer.php';?>

 </div>   
    
   

</body>
</html>