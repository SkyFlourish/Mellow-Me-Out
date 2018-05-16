<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->

    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">

    <meta name="description" content="Relaxing Spas. Book now today!">

    <link rel="stylesheet" type="text/css" href="main.css"> <!-- Link to external CSS file -->
</head>

<body>
    <div class="wrapper">
        <!-- Header -->
        <?php include('header.php')?>


    <!-- Navigation bar -->
        <?php include('nav.php')?>

    <!-- SLIDESHOW -->
        <div class="slideShowContainer">

          <div class = "slide fade">
            <img src="img/slideShow_Spa.jpg" alt="Refreshing Spa Bath" style ="width:100%">
          </div>

          <div class = "slide fade">
            <img src="img/slide_cucumber_mask.jpg" alt="Relaxing Cucumber Masks" style ="width:100%">
          </div>

          <div class = "slide fade">
            <img src="img/slide_back_massage.jpg" alt="Stress Releasing Back massage" style ="width:100%">
          </div>

          <div class = "slide fade">
            <img src="img/slide_foot_massage.jpg" alt="Theraputic Foot Massage" style ="width:100%">
          </div>

          <div class ="leftArrow" onclick="LeftArrow()"></div>

          <div class="slideShowContent">
              <h2>EXAMPLE TITLE GOES HERE</h2>
          </div>

         <div class ="rightArrow" onclick="RightArrow()"></div>

         <div class="slideShowDotCon">
            <span class="slideShowDot"></span>
            <span class="slideShowDot"></span>
            <span class="slideShowDot"></span>
            <span class="slideShowDot"></span>
        </div>

    </div>
    <!-- MAIN CONTENT -->
    <div class= "content">
        <h2>Our Featured Services</h2>
        <div class = "con_Image1"> <!-- First image container -->

            <div class="con_Image">
                <img src="img/eyelash.jpg" alt="Test" title="Test" width=240px height = 180px>
            </div>

            <div class="con_Body">
                <h3>Eyelash Extensions</h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed diam id ligula sollicitudin gravida et vel nulla. Aenean ac dignissim purus.
                </p>
            </div>

        </div>
        <div class = "con_Image2"> <!-- Second image container -->
            <div class="con_Image">
            <img src="img/massage.jpg" alt="Test" title="Test" width=240px height = 180px>
            </div>

            <div class="con_Body">
                <h3>Pampering Massages</h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed diam id ligula sollicitudin gravida et vel nulla. Aenean ac dignissim purus.
                </p>
            </div>
        </div>

        <div class = "con_Image3"><!-- Third image container -->
        <div class="con_Image">
            <img src="img/spa.jpg" alt="Test" title="Test" width=240px height = 180px>
            </div>

            <div class="con_Body">
                <h3>Relaxing Spas</h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed diam id ligula sollicitudin gravida et vel nulla. Aenean ac dignissim purus.
                </p>
            </div>
        </div>
    </div>
    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
       <?php include('footer.php')?>
        <style>
            /* dynamic styling of footer across all pages */
            <?php include 'footer.css'; ?>
        </style>
</div>



<script type="text/javascript" src="slideshow.js"></script>
</body>
</html>
