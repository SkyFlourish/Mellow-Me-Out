<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <!--Icon and Title-->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>FAQ - MellowMeOut</title>
        <!--Keywords for search-->
        <meta name="keywords" content="Massage, eyelash extensions, beauty, melbourne, mellowMeOut, spas, Brow Tint, Aromatherapy Massage, Lymphatic massage, Indian head massage, Body Mud wrap, Body exfoliate, Eyelash Tint, Combat Stress, Revitalise ">
        <!--Description of page-->
        <meta name="description" content="Mellow Me Out wants to be your primary choice for all your beauty and relaxation needs. We have truly soothing and calming pampering experiences available for every client. It’s an ideal place to gather with friends, reconnect with loved ones or turn to as your destination for self-renewal and stress relief."> 
    
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Mobile view-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="faq.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script>
        $(document).ready(function(){
            nav_Counter=-1; //Stop the error in js console
            
            var i;
            var acc = document.getElementsByClassName("btn-faq");

            for(i=0; i < acc.length; i++){
                acc[i].addEventListener("click", function(){
                    
                    var faqContent = this.nextElementSibling;
                    if(faqContent.style.display==="block"){
                        $(faqContent).slideUp();
                        $(this).css("background-color", "#bdc3c7");
                    }else{
                        $(faqContent).slideDown();
                        $(this).css("background-color", "#7f8c8d");
                    }
                });
            }
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
<article class="faq-padding">
<div class="container ">
    <!-- FAQ CONTENT -->

    <div class="row" style="padding:0px;">
        <div class="col-md-8">
            
    <h1>FAQ - Frequently Asked Questions<br>
        <small class="text-muted">Looking for answers? Some of the most common questions can be answered by expanding the boxes bellow.</small>
    </h1>
            <h3>General Inquiries</h3>
                <button class="btn btn-faq"><h5>What payment offers do you offer in store?</h5></button>
                    <div class="faq-box-style faqBox" id=""> 
                        We offer a wide range of payment options in store. You can either pay with cash or card. Currently there is no online payment for security reasons.
                    </div>
                <button class="btn btn-faq "><h5>What is the massage attire?</h5></button>
                 <div class="faq-box-style faqBox" id=""> 
                        We offer a wide range of payment options in store. You can either pay with cash or card. Currently there is no online payment for security reasons.
                    </div>
            <h3>Massage and Skin Treatment</h3>
                <button class="btn btn-faq "><h5>Is Mellow Me Out suitable for men?</h5></button>
                 <div class="faq-box-style faqBox" id=""> 
                        We offer a wide range of payment options in store. You can either pay with cash or card. Currently there is no online payment for security reasons.
                    </div>
        </div>
         <div class="col-md-4">
             
        </div>
    </div>
</div>  
</article>


<!-- FOOTER CODE-->
<?php include 'footer.php';?>


</body>
    
</html>

