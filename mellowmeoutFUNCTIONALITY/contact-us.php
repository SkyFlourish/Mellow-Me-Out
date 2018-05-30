<!DOCTYPE html>
<html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    var text_max = 300;
    $('#charLimit').html(text_max + ' characters remaining');

    $('#message').keyup(function() {
        var text_length = $('#message').val().length;
        var text_remaining = text_max - text_length;

        $('#charLimit').html(text_remaining + ' characters remaining');
    });
});
    
function validate()
  {
    var x = document.forms["contactUs"]["firstname"].value;
    var y = document.forms["contactUs"]["lastname"].value;
    var z = document.forms["contactUs"]["email"].value;
    var b = document.forms["contactUs"]["subject"].value;
    var a = document.forms["contactUs"]["message"].value;
    
    var x_Mes = document.getElementsByClassName("errorMessage")[0];
    var y_Mes = document.getElementsByClassName("errorMessage")[1];
    var z_Mes = document.getElementsByClassName("errorMessage")[2];
    var b_Mes = document.getElementsByClassName("errorMessage")[3];
    var a_Mes = document.getElementsByClassName("errorMessage")[4];
    
    if(x == "")
    {
    x_Mes.style.display="block";  
    
      return false;
    }
    else
    {
        x_Mes.style.display="none";  
    }

    if(y == "")
    {
    y_Mes.style.display="block";   
      return false;
    }
      else
        {
            y_Mes.style.display="none";  
        }

    if(z == "")
    {
      z_Mes.style.display="block"; 
      return false;
    }
    else if (!z.includes("@") || !z.includes("."))
    {
      z_Mes.style.display="block"; 
      return false;
    }
    else{
        z_Mes.style.display="none";  
    }  

    if(b == "")
    {
        b_Mes.style.display="block";
         return false;
    }
  else{
        b_Mes.style.display="none";  
    }  

    if(a == "")
    {
    a_Mes.style.display="block";
        return false;
    }
  else{
        a_Mes.style.display="none";  
    }

  }

</script>
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
     <h2>Contact Us</h2>
   <p>Have some questions not covered by our FAQ? Send it from here and we'll be sure to respond as quickly as we can. Here at MellowMeOut, your feedback helps improve our services so that everyone is satisfied. </p>
        <div class = "contactInfoContainer">
            <div class = "contactOpeningTimes"><h3>Store Opening Times</h3>
                    <ul>
                        <li><b>Monday:</b> 9am - 5pm</li>
                    <li><b>Tuesday:</b>  9am - 5pm</li>
                    <li><b>Wednesday:</b>  9am - 5pm</li>
                    <li><b>Thursday:</b>  9am - 5pm</li>
                    <li><b>Friday:</b>  9am - 5pm</li>
                    <li><b>Saturday:</b>  Closed</li>
                        <li><b>Sunday:</b> Closed</li>
                </ul>
            </div>
            <div class = "contactDetails">
                <h3>Contact Details</h3>
                <p><b>Address:</b> 123 dove road Boronia, VIC, AUSTRALIA
                <br>
                <b>Phone:</b> (03)98278685
                 <br>
                <b>Email:</b> info@mellowmeout.com
                </p>


            </div>
        </div>

<div class = "formBody">
    <form name="contactUs" action="contact-us.php" method="post">
        <label for="fname">First Name:</label>
         <br>
        <input type="text"  id="fname" name="firstname" placeholder="Please enter first name" maxlength="32"/>
        <div class="errorMessage">ERROR: You must specify a first name.</div>
    
     <br>
        <label for="lname">Last Name:</label>
         <br>
        <input type="text" id="lname" name="lastname" placeholder="Please enter last name" size="16" maxlength="32"/>
     <div class="errorMessage">ERROR: You must specify a last name.</div>
     <br>
        <label for="email">Email:</label>
         <br>
        <input type="email" id="email" name="email" placeholder="Example: JaneDoe@gmail.com" size="32" maxlength="48"/>
     <div class="errorMessage">ERROR: Email must be a proper format (Ex: you@gmail.com).</div>
     <br>
<label for="subject">Subject:</label>
 <br>
        <input type="text" id="subject" name="subject" placeholder="What's your question regarding" size="35" maxlength="100"/>
     <div class="errorMessage">ERROR: You must specify the subject of the message.</div>
     <br>
<label for="message">Message:</label>
         <br>
        <textarea name="message" id="message" class="messagebox" placeholder="Write something..." maxlength="300"></textarea>
        <div id="charLimit" class="characterLimit">test</div>
        <div class="errorMessage">ERROR: You must specify a message that is less than 300 characters.</div>
        <br>
        <input type="submit" value="Submit" onclick="return validate()">
</form>
  </div>
        <br><br>
</div>

    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
        <?php include 'footer.php';?>
             <style>
            /* dynamic styling of footer across all pages */
            <?php include 'footer.css'; ?>
        </style>

 </div>



</body>
</html>
