<!DOCTYPE html>
<html>
<script type="text/javascript">

function validate()
{
  var x = document.forms["signUp"]["first"].value;
  var y = document.forms["signUp"]["last"].value;
  var z = document.forms["signUp"]["email"].value;
  var a = document.forms["signUp"]["uid"].value;
  var b = document.forms["signUp"]["pwd"].value;

  if(x == "")
  {
    alert("A first name is required.");
    return false;
  }

  if(y == "")
  {
    alert("A last name is required.");
    return false;
  }

  if(z == "")
  {
    alert("An email address is required.");
    return false;
  }
  else if(!z.includes("@") || !z.includes("."))
  {
    alert("The email is not in the proper form.");
    return false;
  }

  if(a == "")
  {
    alert("A username is required.");
    return false;
  }

  if(b == "")
  {
    alert("A password is required.")
    return false;
  }


}



</script>
<head>
    <title>Create your account</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->

    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">

    <meta name="description" content="Relaxing Spas. Book now today!">

    <link rel="stylesheet" type="text/css" href="contact-us.css"> <!-- Link to external CSS file -->
    <script type="text/javascript" src="slideshow.js"></script>
</head>
       <style>
            /* dynamic styling of footer across all pages */
            <?php include 'footer.css'; ?>
        </style>
<body onload="ChangeDots">
    <div class="wrapper">
<?php include 'header.php';?>
<?php include 'nav.php';?>


    <!-- MAIN CONTENT -->
    <div class= "content">
     <h2>Create Login</h2>
        <p>By creating an account, you will be able to reserve a spot for any of our services. </p>
	 <!--form which invokes singup.inc.php with the action "POST" DO NOT MODIFY LINE BELOW-->
          <form class="needs-validation" action="signup.inc.php" method="POST">
        </form>
<div class = "formBody">
    <form name="signUp">
        <label for="fname">First Name:</label>
         <br>
        <input type="text" class="form-control" name="first" placeholder="Jane" value="" required maxlength="24">
    <br>
     <br>
        <label for="lname">Last Name:</label>
         <br>
        <input type="text" class="form-control" name="last" placeholder="Doe" value="" required maxlength="24">
     <br>
     <br>
        <label for="email">Email:</label>
         <br>
        <input type="email" class="form-control" name="email" placeholder="you@example.com" maxlength="64">
     <br>
     <br>
<label for="subject">Username:</label>
 <br>
     <input type="text" class="form-control" name="uid" placeholder="Enter your username here" required maxlength="24"> <br>
     <br>
<label for="message">Password:</label>
         <br>
        <input type="password" class="form-control" name="pwd" placeholder="Enter your password here" required maxlength="24">
        <br>
        <input type="submit" value="Create Account" name="submit" onclick="return validate()">
        <p>By Submitting, you  are agreeing on terms and services and have read the privacy policy.</p>
          </form>
  </div>
        <br><br><br>
</div>

    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
        <?php include 'footer.php';?>

 </div>
</body>
</html>
