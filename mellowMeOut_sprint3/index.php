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

    <script>
    document.addEventListener("DOMContentLoaded", function(event) { //run when page loads
    //VARIABLE DECLARAION
    nav_Counter =0; //controls the nav highlight
    var slide_Counter = 0; //Variable chooses the image
    var slideLock = false; //When true, you cannot change slide.
    const TimerValue = 5000;
    var dot0 = document.getElementsByClassName("slide-circle")[0];
    var dot1 = document.getElementsByClassName("slide-circle")[1];
    var dot2 = document.getElementsByClassName("slide-circle")[2];

    showSlides();//display circles on start
    var myTimer = setInterval(showSlides, TimerValue); //run code on load

    //ONCLICK FUNCTIONS FOR DOTS
    $(".slide-circle").eq(0).on("click",function(){
        if(slideLock ==false){
            slideLock = true;
            setTimeout(function(){ slideLock=false; },1500); //resets the timeout function
            slide_Counter=0;
            clearInterval(myTimer);
            showSlides();
            myTimer = setInterval(showSlides,5000);
        }
    });

    $(".slide-circle").eq(1).on("click",function(){
        if(slideLock ==false){
            slideLock = true;
            setTimeout(function(){ slideLock=false; },1500); //resets the timeout function
            slide_Counter=1;
            clearInterval(myTimer);
            showSlides();
            myTimer = setInterval(showSlides,5000);
        }
    });

    $(".slide-circle").eq(2).on("click",function(){
        if(slideLock ==false){
            slideLock = true;
            setTimeout(function(){ slideLock=false; },1500); //resets the timeout function
            slide_Counter=2;
            clearInterval(myTimer);
            showSlides();
            myTimer = setInterval(showSlides,5000);
        }
    });

    //CHANGES THE IMAGE
    function showSlides(){
        //define varaible
        var slide_Img = $("#slideshow-bg");

        selectCircle();
        //choose image and circle
        if(slide_Counter==0){
            slide_Img.css("background-image", "url('img/flowers.jpg')");
        }

        else if(slide_Counter==1){
            slide_Img.css("background-image", "url('img/candles.jpg')");
        }
        else if(slide_Counter==2){
            slide_Img.css("background-image", "url('img/massage.jpg')");
        }

        slide_Counter++;//increment

        if(slide_Counter>2){
            slide_Counter = 0;
        }
    }
    //====CIRCLES CODE ======
    function selectCircle(){
        if(slide_Counter==0){
            dot0.style.backgroundColor="#ecf0f1";
            dot1.style.backgroundColor="transparent";
            dot2.style.backgroundColor="transparent";
        }
        else if(slide_Counter==1){
            dot0.style.backgroundColor="transparent";
            dot1.style.backgroundColor="#ecf0f1";
            dot2.style.backgroundColor="transparent";

        }
        else if(slide_Counter==2){
            dot0.style.backgroundColor="transparent";
            dot1.style.backgroundColor="transparent";
            dot2.style.backgroundColor="#ecf0f1";
        }
    }
    });
</script>
    </head>
<!-- Style Sheet for Nav and Footer-->
<style>
    <?php include 'nav_footer.css';?>
</style>



 <!-- ===HOMEPAGE CODE START=== -->
<body>
 <!-- NAVIGATION BAR CODE -->
<?php include'nav.php';?>
 <!-- End of Nav Code -->
  <article id="carousel-bg">

    <div id="demo" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">

<div class="carousel-caption">
    <h1>Welcome to Mellow Me Out</h1>
    <h3>Take a journey with us <i class="fas fa-spa"></i></h3>
    <a href="book-now.php"><button type="button" class="btn btn-lg btn-carousel">Book Now</button></a>
    <a href="products.php"><button type="button" class="btn btn-lg btn-carousel ">Services</button></a>
  </div>
    <!-- Indicators -->
<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/faceCream.jpg" alt="Applying cream">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/spa2.jpg" alt="Store Spa">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/candles.jpg" alt="Candles">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>


      </article>
    <!-- END OF SLIDESHOW -->
    <!-- SERVICES CODE -->
    <article id="services-header">
        <div class="container">
           <h1 class="text-center">Our Services
                <small class="text-muted"><br>Below are our featured services and we offer plenty more at our products page. </small>
            </h1>
            <hr>
        </div>
    </article>
    <article id="services">
    <div class="container">

    <div class="row">
        <!-- SERVICES 1 -->
        <div class="col-md-4 text-center ">
        <div class="card shadow">
            <img class="img-fluid img-services" src="img/massage.jpg">
            <div class="card-body">
                <h3 class="card-title">Pampering Massages</h3>
                <p class="card-text">Enjoy a swedish massage to feel refreshed and pain free. Using their firm and gentle touch our marvelous masseuses, you will be in a state of total relaxtion.</p>

            </div>
        </div>
        </div>
        <!-- SERVICES 2 -->
        <div class="col-md-4 text-center">
        <div class="card shadow">
            <img class="img-fluid img-services" src="img/candles.jpg">
            <div class="card-body">
                <h3 class="card-title">Relaxing Spas</h3>
                <p class="card-text">Come to our rejuvenating and relaxing spa treatments. Our spa treaments will leave you feeling refreshed in mind, body and spirit by providing healing techniques.</p>
            </div>
        </div>
        </div>
        <!-- Services 3 -->
        <div class="col-md-4 text-center">
            <div class="card shadow">
            <img class="img-fluid img-services" src="img/eyelash.jpg">
            <div class="card-body">
                <h3 class="card-title">Eyelash Extensions</h3>
                <p class="card-text">Let us begin your makeover with your eyes. Our lashes are availabe in multiple lenghts and thickness so it will look natural and will be seamless to your own lashes.</p>
            </div>
        </div>

        </div>
    </div>
    </div>
    <!--END OF CONTAINER -->
    </article>
 <!--END OF Outer CONTAINER -->


<!-- end of SERVICES CODE -->
<!-- ABOUT US CODE -->
<article id="about">
    <div class="container">
    <div class="row">
        <div class="col-md-6">

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
        <div class="col-md-6">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.935164528827!2d145.2786028158304!3d-37.8618074445681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad63b7d295e7191%3A0x83ea75e9583d0bf3!2sRedefine+Life+Counselling+and+Support!5e0!3m2!1sen!2sau!4v1524644385451" width="100%" height="100%" align="left" padding-left="5%" padding-right="5%"padding-bottom="5%"frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
        </div>
    </div>

</article>
<!--contact us section-->
<article id="contact-us">
    <div class="container">
    <div class="row">
        <div class="col-md-12 text-center" >
            <i class="far fa-envelope " style="font-size:48px;"></i>
            <h1>Have any queries regarding Mellow Me Out? </h1>
            <br>
            <button class="btn btn-secondary btn-lg">Contact Us</button>
        </div>
    </div>
    </div>
</article>
<!-- END OF ABOUT US-->
<!-- FOOTER CODE-->
<?php include 'footer.php';?>



</body>

</html>
