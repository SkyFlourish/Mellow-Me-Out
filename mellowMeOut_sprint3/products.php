<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <!--Icon and Title-->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>Services - MellowMeOut</title>
        <!--Keywords for search-->
        <meta name="keywords" content="Massage, eyelash extensions, beauty, melbourne, mellowMeOut, spas, Brow Tint, Aromatherapy Massage, Lymphatic massage, Indian head massage, Body Mud wrap, Body exfoliate, Eyelash Tint, Combat Stress, Revitalise ">
        <!--Description of page-->
        <meta name="description" content="Mellow Me Out wants to be your primary choice for all your beauty and relaxation needs. We have truly soothing and calming pampering experiences available for every client. It’s an ideal place to gather with friends, reconnect with loved ones or turn to as your destination for self-renewal and stress relief.">

        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Mobile view-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="products.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <script>
        $( document ).ready(function() { //run when page loads
            nav_Counter=2;

            //animated scrolling
            $('#link-1').click(function(){
                $("html, body").animate({ scrollTop: $(".sub-header").eq(0).offset().top }, 600);

            });

            $('#link-2').click(function(){
                $("html, body").animate({ scrollTop: $(".sub-header").eq(1).offset().top }, 600);

            });

            $('#link-3').click(function(){
                $("html, body").animate({ scrollTop: $(".sub-header").eq(2).offset().top }, 600);

            });
             $('#link-4').click(function(){
                $("html, body").animate({ scrollTop: $("#specialOffers-styling").offset().top }, 600);

            });


            //Show and Hide sections
            var i;
            var acc = $(".btn-section");
            var section = $(".products-section");

            for(i=0; i < acc.length; i++){
                acc[i].addEventListener("click", function(){
                    var index = $(".btn-section").index(this);//get index number on click
                    section.eq(index).stop().slideToggle(250);

                    //change change text and icons
                    if ($(this).children("span").text() == 'Open') {
                        $(this).children("span").text("Close");
                        $(this).children("i").removeClass("fa-plus").addClass("fa-minus");
                    }else{
                        $(this).children("span").text("Open");
                        $(this).children("i").removeClass("fa-minus").addClass("fa-plus");
                    }
                });
            }
            //Item count badges
            var eyelashCount = $('#products-section-1 .card').length;
            var massageCount = $('#products-section-2 .card').length;
            var cleansingCount = $('#products-section-3 .card').length;


            $(document).ready(function() {
                $('#link-1').siblings('span').html(eyelashCount);
                $('#link-2').siblings('span').html(massageCount);
                $('#link-3').siblings('span').html(cleansingCount);
            });

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
<article class="gallery-padding text-center">
<div class="container">
    <!-- SERVICES CONTENT -->

    <h1>Services<br>
    <small class="text-muted">Mellow Me Out offers many services with a wide variety of massages to eyelash extensions</small>
    </h1>
    <!-- Jump to section -->
    <h2 class="text-left">Categories</h2>
    <ul class="text-left list-unstyled">
        <li><a href='#' id="link-1">Eyelashes and Eyebrows</a> <span class="badge badge-pill badge-secondary">0</span></li>
        <li><a href='#' id="link-2">Massages</a> <span class="badge badge-pill badge-secondary">0</span></li>
        <li><a href='#' id="link-3">Body Cleansing</a> <span class="badge badge-pill badge-secondary">0</span></li>
        <li><a href='#' id="link-4">Special Offers</a></li>
    </ul>

    <!--Section Subheader-->
        <div class="sub-header">
            <h3 class= "text-left">Eyelashes and Eyebrows <button class="btn btn-outline-secondary btn-section" style="float:right;"><i class="fas fa-minus"></i> <span>Close</span></button></h3>
        </div>
        <hr>
     <!--Section Subheader END-->

    <div id="products-section-1" class="row products-section">
        <div class="col-md-4">
            <!-- Service cards -->
            <div class="card shadow-sm card-style" style="width:100%">
                <img class="card-img-top img-fluid img-style" src="img/eyelash2.jpg" alt="Card Image">
                <div class="card-body">
                    <h4 class="card-title">Eyelash Extensions</h4>
                    <h6 class="mb-2 text-muted">Price: $40-90</h6>
                    <p class="card-text">Stand out in the crowd with our attractive eyelash extensions</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card shadow-sm card-style" style="width:100%">
                <img class="card-img-top img-fluid img-style" src="img/eyelash.jpg" alt="Card Image">
                <div class="card-body">
                    <h4 class="card-title">Eyelash Tinting</h4>
                    <h6 class="mb-2 text-muted">Price: $25</h6>
                    <p class="card-text">Define your brows and lashes with our safe dyes. No need for mascara.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm card-style" style="width:100%">
                <img class="card-img-top img-fluid img-style" src="img/eyebrow.jpg" alt="Card Image">
                <div class="card-body">
                    <h4 class="card-title">Eyebrow Tinting</h4>
                    <h6 class="mb-2 text-muted">Price: $15</h6>
                    <p class="card-text">Tint your brows with our safe but long lasting dyes</p>
                </div>
            </div>
        </div>
    </div>
    <!--Section Subheader-->
        <div class="sub-header">
            <h3 class= "text-left">Massages <button class="btn btn-outline-secondary btn-section" style="float:right;"><i class="fas fa-minus"></i> <span>Close</span></button></h3>
        </div>
        <hr>
     <!--Section Subheader END-->
    <div id="products-section-2" class="row products-section">
        <div class="col-md-4">
            <!-- Service cards -->
            <div class="card shadow-sm card-style" style="width:100%">
                <img class="card-img-top img-fluid img-style" src="img/massage.jpg" alt="Card Image">
                <div class="card-body">
                    <h4 class="card-title">Aromatherapy Massage</h4>
                    <h6 class="mb-2 text-muted">Price: $45-75</h6>
                    <p class="card-text">Combat stress and revitalize your body with essential oils</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card shadow-sm card-style" style="width:100%">
                <img class="card-img-top img-fluid img-style" src="img/massage2.jpg" alt="Card Image">
                <div class="card-body">
                    <h4 class="card-title">Lymphatic massage</h4>
                    <h6 class="mb-2 text-muted">Price: $45-75</h6>
                    <p class="card-text">Circulation of the lymph which helps you feel healthier than ever</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm card-style" style="width:100%">
                <img class="card-img-top img-fluid img-style" src="img/spa2.jpg" alt="Card Image">
                <div class="card-body">
                    <h4 class="card-title">Indian head massage</h4>
                    <h6 class="mb-2 text-muted">Price: $45</h6>
                    <p class="card-text">Energize your mind and slip away with this ancient technique</p>
                </div>
            </div>
        </div>

    </div>
    <!--Section Subheader-->
        <div class="sub-header">
            <h3 class= "text-left">Body Cleansing <button class="btn btn-outline-secondary btn-section" style="float:right;"><i class="fas fa-minus"></i> <span>Close</span></button></h3>
        </div>
        <hr>
     <!--Section Subheader END-->
    <div id="products-section-3" class="row products-section">
        <div class="col-md-4">
            <!-- Service cards -->
            <div class="card shadow-sm card-style" style="width:100%">
                <img class="card-img-top img-fluid img-style" src="img/massage.jpg" alt="Card Image">
                <div class="card-body">
                    <h4 class="card-title">Body mud wrap</h4>
                    <h6 class="mb-2 text-muted">Price: $45-75</h6>
                    <p class="card-text">Revive and detoxify your body with aromotherapy oils. </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card shadow-sm card-style" style="width:100%">
                <img class="card-img-top img-fluid img-style" src="img/oils.jpg" alt="Card Image">
                <div class="card-body">
                    <h4 class="card-title">Body exfoliate</h4>
                    <h6 class="mb-2 text-muted">Price: $45-75</h6>
                    <p class="card-text">Circulation of the lymph which helps you feel healthier than ever</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">

        </div>

    </div>
    </div>
</article>
<!--END OF SERVICES-->
<!--SPECIAL OFFERS CODE-->
<article id="specialOffers-styling">
    <div class="container">
    <h1 class="text-center">Special Offers<br>
        <small class="text-muted">We offer discounts on certain circumstances and offer vouchers.</small>
    </h1>
    <br>
    <div class="row">
        <div class="col-md-4 text-center">
            <!--Offer 1-->
            <i class="far fa-money-bill-alt icon-styles"></i>
            <h6>Get your first aromatic massage with 20% off</h6>
        </div>
        <div class="col-md-4 text-center">
            <!--Offer 2-->
            <i class="fas fa-users icon-styles"></i>
            <h6>Bring a friend get 25% off your next treatment</h6>
        </div>
        <!--Offer 3-->
        <div class="col-md-4 text-center">
            <i class="far fa-heart icon-styles"></i>
            <h6>Like us on facebook, get 10% your bill</h6>
        </div>
    </div>
    </div>
</article>

<!-- FOOTER CODE-->
<?php include 'footer.php';?>


</body>

</html>
