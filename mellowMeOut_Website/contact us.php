<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->
    
    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">
    
    <meta name="description" content="Relaxing Spas. Book now today!">
    
    <link rel="stylesheet" type="text/css" href="contact us.css"> <!-- Link to external CSS file -->
    <script type="text/javascript" src="slideshow.js"></script>
</head>
    
<body onload="ChangeDots">
    <div class="wrapper">
<?php include 'header.php';?>
<?php include 'nav.php';?>
    
    <!-- MAIN CONTENT -->
    <div class= "content">
     <h2>Contact Us</h2>
   <p>Have some questions not covered by our FAQ? Send it from here and we'll be sure to respond as quickly as we can. Here at MellowMeOut, your feedback helps improve our services. </p>
  
<div class = "formBody">
    <form>
        <label for="fname">First Name:</label>
         <br>
        <input type="text"  id="fname" name="firstname" placeholder="Please enter first name" maxlength="32"/>
    <br>
     <br>
        <label for="lname">Last Name:</label>
         <br>
        <input type="text" id="lname" name="lastname" placeholder="Please enter last name" size="16" maxlength="32"//>
     <br>
     <br>
        <label for="email">Email:</label>
         <br>
        <input type="email" id="email" name="email" placeholder="Example: JaneDoe@gmail.com" size="32" maxlength="48"/>
     <br>
     <br>
<label for="subject">Subject:</label>     
 <br>
        <input type="text" id="subject" name="subject" placeholder="What's your question regarding" size="35" maxlength="100"/>
     <br>
     <br>
<label for="message">Message:</label>
         <br>
        <textarea name="message" id="message" class="messagebox" placeholder="Write something..." maxlength="300">
       </textarea>
        <br>
        <input type="submit" value="Submit">
</form>
  </div>
</div>
    
    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
        <?php include 'footer.php';?>

 </div>   
    
   

</body>
</html>