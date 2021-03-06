<?php require 'booking-processing.inc.php'; ?>
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
<div class="container-fluid">
    <!-- Booking Content -->
    <div class="row" style="padding-left:0px; padding-right:0px;">
        <div class="col-sm-6" id="booking-content">
            <!-- BOOKING JUMBO CODE -->
            <article>
                <h1 class="text-center"></h1>
                <div class="jumbotron" id="booking-jumbo-style">
                    <h1>Booking is flexible at Mellow Me Out</h1>
                    <p>See what dates are booked and cancel a booking on demand.</p>
                </div>
            </article>
        </div>
        <!-- BOOKING FORM CODE -->
        <div class="col-sm-6" id="booking-style">
            <form name="booking-form" action="<?php bookingProcessing() ?>" method="post">
            <h1 class="text-center">Make a booking</h1>
            <div class="form-group" >
                <label for="fullName">Full Name: </label>
                <input type="text" class="form-control" id="fullName" name="fullName" maxlength="24" placeholder="Enter full name here">
            </div>
            <div class="form-group">
                <label for="phone">Phone: </label>
                <input type="text" class="form-control" id="phone" name="phone" maxlength="24" placeholder="Enter phone number" requried oninvalid="">
            </div>
            <div class="form-group">
                 <label for="select-booking">Please select date of booking: </label>
                <input type="date" class="form-control" id="select-booking" name="select-booking" >
            </div>
            <div class="form-group">
                <label for="service">Choose your service: </label>
                <br>
                <select id="service" name="service">
                    <option value="volvo">Test 1</option>
                    <option value="saab">Test 2</option>
                    <option value="fiat">Test 3</option>
                    <option value="audi">Audi</option>
                    <option value="" selected hidden disabled>Select a service...</option>
                </select>
            </div>
            <!-- <div> -->
            <div class="form-group" >
                <label for="email">Enter your email address: </label>
                <input type="text" class="form-control" id="email" name"email" maxlength="42" placeholder="Enter email here">
            </div>
            <div class="form-group" >
                <label for="confirm-email">Confirm your email address: </label>
                <input type="text" class="form-control" id="confirm-email" name="confirm-email" maxlength="42" placeholder="Enter email here">
            </div>
            <!-- </div> -->
            <button type="submit" class="btn btn-secondary" name="submit" value="submit" >Submit</button>
        </form>
        <div class="Error message">
        <?php bookingProcessing(); ?>
        </div>
        </div>

    </div>


<!-- FOOTER CODE-->
<?php include 'footer.php';?>
</div>

</body>

</html>
