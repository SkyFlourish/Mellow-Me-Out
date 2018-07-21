<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <!--Icon and Title-->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>Contact - MellowMeOut</title>
        <!--Keywords for search-->
        <meta name="keywords" content="Massage, eyelash extensions, beauty, melbourne, mellowMeOut, spas, Brow Tint, Aromatherapy Massage, Lymphatic massage, Indian head massage, Body Mud wrap, Body exfoliate, Eyelash Tint, Combat Stress, Revitalise ">
        <!--Description of page-->
        <meta name="description" content="Mellow Me Out wants to be your primary choice for all your beauty and relaxation needs. We have truly soothing and calming pampering experiences available for every client. It’s an ideal place to gather with friends, reconnect with loved ones or turn to as your destination for self-renewal and stress relief."> 
    
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Mobile view-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="contact-us.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

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
<div class="container-fluid">
    <div class="row" id="bg-form">
        <div class="col-sm-3">
        
        </div>
        <div class="col-sm-6">
        <form action="/action_page.php" id="contact-style">
            <h1 class="text-center">Contact Us</h1>
             <!-- CONTACT INFOMATION CODE -->
            
            <ul class="list-unstyled">
                <li> <strong>Address:</strong> 123 dove road Boronia, VIC, AUSTRALIA </li>
                <li> <strong>Phone:</strong>  (03)98278685 </li>
                <li> <strong>Email:</strong>  info@mellowmeout.com</li>
            </ul>
            <hr>
            <p>Have some questions not covered by our FAQ? Send it from here and we'll be sure to respond as quickly as we can. Here at MellowMeOut, your feedback helps improve our services so that everyone is satisfied.</p>
           <!-- FORM SECTION -->
            <div class="form-group" >
                <label for="firstName">First Name: </label>
                <input type="text" class="form-control" id="firstName" maxlength="24" placeholder="Enter first name here">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name: </label>
                <input type="text" class="form-control" id="lastName" maxlength="24" placeholder="Enter last name here">
            </div>
            <div class="form-group">
                <label for="mail">Email: </label>
                <input type="email" class="form-control" id="mail" maxlength="48" placeholder="janedoe@example.com">
            </div>
            <div class="form-group">
                <label for="subject">Subject: </label>
                <input type="text" class="form-control" id="subject" maxlength="64" placeholder="Subject of the message">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" rows="5" id="message" maxlength="300" placeholder="Enter your message here"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
          <div class="col-sm-3">
        
        </div>
    </div>
    


<!-- FOOTER CODE-->
<?php include 'footer.php';?>
</div>    

</body>
    
</html>

