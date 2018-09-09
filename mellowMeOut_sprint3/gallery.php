<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <!--Icon and Title-->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>Gallery - MellowMeOut</title>
        <!--Keywords for search-->
        <meta name="keywords" content="Massage, eyelash extensions, beauty, melbourne, mellowMeOut, spas, Brow Tint, Aromatherapy Massage, Lymphatic massage, Indian head massage, Body Mud wrap, Body exfoliate, Eyelash Tint, Combat Stress, Revitalise ">
        <!--Description of page-->
        <meta name="description" content="Mellow Me Out wants to be your primary choice for all your beauty and relaxation needs. We have truly soothing and calming pampering experiences available for every client. It’s an ideal place to gather with friends, reconnect with loved ones or turn to as your destination for self-renewal and stress relief."> 
    
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Mobile view-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="gallery.css">

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
                nav_Counter=3;
                $('[data-toggle="tooltip"]').tooltip() //enable tooltips
                //MODAL CONTENT DETERMINE
                $(".popupimage").click(function(){
                    var imgValue = ($(this).attr("src")); //get image source
                    $("#img-modal").attr('src',imgValue);
                    var index = $(".popupimage").index(this);//get index number
                    $("#img-title").html("Image: " + index);
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
    <!-- Gallery CONTENT -->

    <h1>Gallery<br>
    <small class="text-muted">Here are some photos of our amazing work. You will be as pampered as the people you see here. </small>
    </h1>
    <!-- Modal popup -->
    <div class="modal fade" id="mymodal">
        <div class= "modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 id="img-title" class="modal-title">Image</h2>
                    <button class="close" type="button" data-dismiss="modal">x</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                            <img id="img-modal" src="img/eyelash2.jpg" class="img-modal-settings img-fluid">
                            </div>
                        </div>
                    </div>
             </div>
        </div>
    </div>
             <!-- Modal popup END-->
    <div class="row">
        <div class="col-md-4">
            <a href="#" data-toggle="modal" data-target="#mymodal"><img data-toggle="tooltip" data-placement="top" title="Click to enlarge" class="img-fluid gallery-style popupimage" src="img/eyelash2.jpg"></a>
        </div>
            <div class="col-md-4">
        <a href="#" data-toggle="modal" data-target="#mymodal"><img data-toggle="tooltip" data-placement="top" title="Click to enlarge" class="img-fluid gallery-style popupimage" src="img/eyelash.jpg"></a>
        </div>
        <div class="col-md-4">
            <a href="#" data-toggle="modal" data-target="#mymodal"><img data-toggle="tooltip" data-placement="top" title="Click to enlarge"  class="img-fluid gallery-style popupimage"  src="img/spa2.jpg"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="#" data-toggle="modal" data-target="#mymodal"><img data-toggle="tooltip" data-placement="top" title="Click to enlarge"  class="img-fluid gallery-style popupimage" src="img/oils.jpg"></a>
        </div>
            <div class="col-md-4">
        <a data-toggle="modal" data-target="#mymodal" href=""><img data-toggle="tooltip" data-placement="top" title="Click to enlarge" class="img-fluid gallery-style popupimage"  src="img/spa.jpg"></a>
        </div>
        <div class="col-md-4">
            <a data-toggle="modal" data-target="#mymodal" href=""><img data-toggle="tooltip" data-placement="top" title="Click to enlarge"  class="img-fluid gallery-style popupimage"  src="img/candles.jpg"></a>
        </div>
    </div>
    

</div> 
    </article>

<!-- FOOTER CODE-->
<?php include 'footer.php';?>
  

</body>
    
</html>

