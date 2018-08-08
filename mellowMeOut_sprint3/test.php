<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <!--Icon and Title-->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>Privacy Policy - MellowMeOut</title>
        <!--Keywords for search-->
        <meta name="keywords" content="Massage, eyelash extensions, beauty, melbourne, mellowMeOut, spas, Brow Tint, Aromatherapy Massage, Lymphatic massage, Indian head massage, Body Mud wrap, Body exfoliate, Eyelash Tint, Combat Stress, Revitalise ">
        <!--Description of page-->
        <meta name="description" content="Mellow Me Out wants to be your primary choice for all your beauty and relaxation needs. We have truly soothing and calming pampering experiences available for every client. It’s an ideal place to gather with friends, reconnect with loved ones or turn to as your destination for self-renewal and stress relief."> 
    
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Mobile view-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="policy.css">

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
            nav_Counter=-1;
          
        });
              function validateForm() {
                var x = document.forms["myForm"]["fname"].value;
                    if (x == "") {
                    alert("Name must be filled out");
                    return false;
                    }
                }
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
<div class="container-fluid">
    <!-- POLICY CONTENT -->
<div class="row" style="padding:0px; background-color: #ecf0f1">
    
    <div class="col-sm-12">
        <article class="policy-padding">
            <h1>Coding Ground: </h1>
<form name="myForm" action="/action_page.php"
onsubmit="return validateForm()" method="post">
Name: <input type="text" name="fname">
<input type="submit" value="Submit">
</form>
        </article>
    </div>
</div>

<!-- FOOTER CODE-->
<?php include 'footer.php';?>
</div>    

</body>
    
</html>

