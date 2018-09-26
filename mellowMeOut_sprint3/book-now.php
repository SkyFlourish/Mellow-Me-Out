<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <!--Icon and Title-->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>Booking - MellowMeOut</title>
        <!--Keywords for search-->
        <meta name="keywords" content="Massage, eyelash extensions, beauty, melbourne, mellowMeOut, spas, Brow Tint, Aromatherapy Massage, Lymphatic massage, Indian head massage, Body Mud wrap, Body exfoliate, Eyelash Tint, Combat Stress, Revitalise ">
        <!--Description of page-->
        <meta name="description" content="Mellow Me Out wants to be your primary choice for all your beauty and relaxation needs. We have truly soothing and calming pampering experiences available for every client. It’s an ideal place to gather with friends, reconnect with loved ones or turn to as your destination for self-renewal and stress relief.">

        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Mobile view-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="book-now.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

        <script>
        // A $( document ).ready() block.
            $( document ).ready(function() {
                nav_Counter = 1;
            });
        </script>
    </head>

<!-- Style Sheet for Nav and Footer   -->
<style>
    <?php include 'nav_footer.css';?>
</style>

 <!-- ===CODE START=== -->
<body>
 <!-- NAVIGATION BAR CODE -->
<?php include'nav.php';?>
 <!-- End of Nav Code -->
<article id="booking-introStyle">
<div class="container" >
        <!-- BOOKING Intro Code -->
        <div class="col-md-12" id="">
            <h1 class="text-center">Book Now<br>
                <small class="text-muted">Making a online booking is incredibly easy as you only have to fill a few details.  </small>
                </h1>
        </div>
</div>


</article>
    
    
<article id="booking-styleOuter">
<div class="container shadow-sm" id="booking-styleInner">
        <!-- BOOKING FORM CODE -->
    
        <div class="col-md-12" id="">
            <form action="book-now.php" method="post">
            <h4>Booking Form</h4>
            <div class="form-group" >
                <label for="fullName">Full Name: </label>
                <input type="text" class="form-control" id="fullName" maxlength="24" placeholder="Enter full name here" name="fullName">
            </div>
            <div class="form-group">
                <label for="phone">Phone: </label>
                <input type="text" class="form-control" id="phone" maxlength="24" placeholder="Enter phone number" name="phone">
            </div>
            <div class="form-group">
			<form method='post' action='booking-time-show.inc.php'>
                <label for="select-booking">Please select date of booking: </label>
                <!-- <input type="date" class="form-control" id="select-booking" name="select-booking" min="2018-09-09" max="2019-09-09"> -->
                <?php require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/booking-time-selection.inc.php'); ?>
            </form>
			</div>
			<div id="result"></div>
			<script>
			$(function(){
				$('#booking-date').change(function() {
				var name=$("#booking-date").val();
				$.post("../mellowMeOut_Sprint3_includes/booking-time-show.inc.php?booking-date="+name,function(result){
				$('#result').html(result);
				});
				});
			})
			</script>
            <div class="form-group">
                <label for="service">Choose your service: </label>
                <br>
                <select id="service" name="service">
                <!-- <select required name="cars" id="service"> -->
                    <option value="" disabled selected hidden>Please choose...</option>
                    <!-- <option value="volvo">Test 1</option>
                    <option value="saab">Test 2</option>
                    <option value="fiat">Test 3</option>
                    <option value="audi">Audi</option> -->
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/booking-services-selection.inc.php'); ?>
                </select>
            </div>
			
			
            <!-- <div> -->
            <div class="form-group" >
                <label for="email">Confirm your email address: </label>
                <input type="text" class="form-control" id="email" maxlength="42" placeholder="Enter email here" name="email">
            </div>
            <div class="form-group" >
                <label for="confirm-email">Confirm your email address: </label>
                <input type="text" class="form-control" id="confirm-email" maxlength="42" placeholder="Enter email here" name="confirm-email">
            </div>
            <!-- </div> -->
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
        </form>
        <div class="Error message">
        <?php
        require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/booking-processing.inc.php');
        // Ideally the document root will be set on a single position, and the below require will be used.
        // require($_SERVER['DOCUMENT_ROOT'].'/../mellowMeOut_Sprint3_includes/booking-processing.inc.php');
        bookingProcessing();
        ?>
        </div>
        </div>
</div>
</article>
    
<!-- FOOTER CODE-->
<?php include 'footer.php';?>


</body>

</html>
