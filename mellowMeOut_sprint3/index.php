<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <!--Icon and Title-->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>Home - MellowMeOut</title>
        <!--Keywords for search-->
        <meta name="keywords" content="Massage, eyelash extensions, beauty, melbourne, mellowMeOut, spas, Brow Tint, Aromatherapy Massage, Lymphatic massage, Indian head massage, Body Mud wrap, Body exfoliate, Eyelash Tint, Combat Stress, Revitalise ">
        <!--Description of page-->
        <meta name="description" content="Mellow Me Out wants to be your primary choice for all your beauty and relaxation needs. We have truly soothing and calming pampering experiences available for every client. It’s an ideal place to gather with friends, reconnect with loved ones or turn to as your destination for self-renewal and stress relief."> 
    
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Mobile view-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">

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

<script>
    //====SLIDE SHOW CODE ======
    var slide_Counter = 0; //Variable chooses the image
    showSlides(); //function for seeing what image to display
    
    function showSlides(){
        var slide_Img = $("#slideshow-bg");
        
        if(slide_Counter==0){
            slide_Img.css("background-image", "url('img/flowers.jpg')");
        }
        else if(slide_Counter==1){
            slide_Img.css("background-image", "url('img/candles.jpg')");
        }
        else if(slide_Counter==2){
            slide_Img.css("background-image", "url('img/massage.jpg')");
        }
        
        
        setTimeout(showSlides,5000); //timer
        slide_Counter++;//increment
        
        if(slide_Counter>2){
            slide_Counter = 0;
        }
    }
</script>
    
 <!-- ===HOMEPAGE CODE START=== -->    
<body>
 <!-- NAVIGATION BAR CODE -->
<?php include'nav.php';?>
 <!-- End of Nav Code -->
<div class="container-fluid">
    <article id="slideshow-bg">
        <div class="row">
        <!-- SLIDESHOW Content Code-->
        <div class="col-sm-4 text-left" id="slideshow-content">
            
            <div class="jumbotron jumbotron-fluid" id="jumbo-style">
                <div class="container">
                <h1>Welcome to Mellow Me Out</h1>
                <h3>Book your service now!</h3>
                <button id="btn-book" type="button" class="btn" style=""><strong>BOOK NOW</strong></button>
            
                </div>
            </div>
            <!-- SLIDE CIRCLE SELECTORS -->
            <div class="slide-circle-container">
                <div class="slide-circle">
                </div>
                <div class="slide-circle">
                </div>
                <div class="slide-circle">
                </div>
            </div>
        </div>
        <div class="col-sm-4 ">
     
        </div>
        <div class="col-sm-4">
        
        </div>
    </div>
    </article>
    <!-- END OF SLIDESHOW -->
    <!-- SERVICES CODE -->
    <article id="services">
    <br>
    <h1 class="text-center">Our Services
    <small class="text-muted"><br>We offer many more services at our products page</small>
    </h1>
    <div class="row">
        <div class="col-sm-4 text-center ">
            <img id="img-services" class="img-fluid" src="img/massage.jpg">
            <h3>Pampering Massages</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia maximus sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus orci tortor, dictum sed neque vitae, tristique finibus orci. Phasellus pellentesque, felis eget aliquam ultrices, tellus arcu efficitur sem, quis dictum metus ipsum vel est. </p>
        </div>
        <div class="col-sm-4 text-center">
            <img id="img-services" class="img-fluid" src="img/candles.jpg">
            <h3>Relaxing Spas</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia maximus sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus orci tortor, dictum sed neque vitae, tristique finibus orci. Phasellus pellentesque, felis eget aliquam ultrices, tellus arcu efficitur sem, quis dictum metus ipsum vel est. </p>
        </div>
        <div class="col-sm-4 text-center">
            <div>
                <img class="img-fluid" src="img/eyelash.jpg" id="img-services" >
            </div>
            <h3>Eyelash Extensions</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia maximus sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus orci tortor, dictum sed neque vitae, tristique finibus orci. Phasellus pellentesque, felis eget aliquam ultrices, tellus arcu efficitur sem, quis dictum metus ipsum vel est. .</p>
            
        </div>
    </div>
        <br>
    </article>
    

<!-- end of SERVICES CODE -->
<!-- ABOUT US CODE -->
<article id="about">
    <div class="row">
        <div class="col-sm-6">
        
        <h1>About Us</h1>
        <p>Mellow Me Out wants to be your primary choice for all your beauty and relaxation needs. We have truly soothing and calming pampering experiences available for every client. It’s an ideal place to gather with friends, reconnect with loved ones or turn to as your destination for self-renewal and stress relief.</p>
        <p>
        Nestled in the heart of Boronia Victoria, Mellow Me Out offers a full range of beauty treatments, massage services and skin care amenities with a reputation for outstanding service in a relaxed and friendly environment. We pride ourselves on our one of a kind service, guaranteeing satisfaction each time you visit. 
        </p>    
        <p>
        Choose from a wide range of beauty, health and spa treatments. Retreat to this tranquil day spa and take a chance to unwind and replenish your body’s balance. 
        </p>         
        </div>
        <!--DISPLAY MAP -->
        <div class="col-sm-6">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.935164528827!2d145.2786028158304!3d-37.8618074445681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad63b7d295e7191%3A0x83ea75e9583d0bf3!2sRedefine+Life+Counselling+and+Support!5e0!3m2!1sen!2sau!4v1524644385451" width="100%" height="100%" align="left" padding-left="5%" padding-right="5%"padding-bottom="5%"frameborder="0" style="border:0" allowfullscreen></iframe>
            
        </div>
    </div>
    
</article>
<!-- END OF ABOUT US-->
<!-- FOOTER CODE-->
<?php include 'footer.php';?>
</div>    

</body>
    
</html>