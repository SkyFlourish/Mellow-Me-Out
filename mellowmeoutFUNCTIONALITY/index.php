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

        
<script type="text/javascript"> 
var counter = 0; //keeps track of slideshow

    function toggle(){
    var dots = document.getElementsByClassName("slideShowDot")[counter];
    var slideCon = document.getElementsByClassName("slideShowContainer")[0];
   
if (counter >3)
        {
            counter = 0;
        }
if (counter <0)
        {
            counter = 3;
        }

if(counter == 0)
            {
                var slideText = document.getElementsByClassName("slideShowHeader")[0].innerHTML=("EXAMPLE TEXT 1");
                    slideCon.style.background="linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(img/slideShow_Spa1.jpg) ";
                slideCon.style.backgroundRepeat="no-repeat";
                 slideCon.style.backgroundSize="cover";
             
           
            }

if(counter == 1)
            {
                
                  var slideText = document.getElementsByClassName("slideShowHeader")[0].innerHTML=("EXAMPLE TEXT 2");
                slideCon.style.background="linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(img/spa.jpg) ";
                slideCon.style.backgroundRepeat="no-repeat";
                 slideCon.style.backgroundSize="cover";
           
            }
if(counter == 2)
            {
                var slideText = document.getElementsByClassName("slideShowHeader")[0].innerHTML=("EXAMPLE TEXT 3");
                   slideCon.style.background="linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(img/ourTeam.jpg) ";
                slideCon.style.backgroundRepeat="no-repeat";
                 slideCon.style.backgroundSize="cover";
            
                
            }
if(counter == 3)
            {
               var slideText = document.getElementsByClassName("slideShowHeader")[0].innerHTML=("EXAMPLE TEXT 4");
                   slideCon.style.background="linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(img/massage.jpg) ";
                slideCon.style.backgroundRepeat="no-repeat";
                 slideCon.style.backgroundSize="cover";
              
            }
}
//arrow incrementing
function LeftArrow() /* Increment counter*/
{
   
    counter--;
     toggle();
}

function RightArrow() /* Decrement counter*/
{
     
    counter++;
     toggle();
}
    const slideTime = 3000;
    var myTimer = setInterval(RightArrow, slideTime); //run code on load  
        </script>
    <!-- SLIDESHOW -->
        <div class="slideShowContainer">

          <div class ="leftArrow" onclick="LeftArrow(); clearInterval(myTimer); myTimer = setInterval(RightArrow, slideTime); "></div>

          <div class="slideShowContent">
              <h2 class="slideShowHeader">EXAMPLE TEXT 1</h2>
          </div>

         <div class ="rightArrow" onclick="RightArrow(); clearInterval(myTimer); myTimer = setInterval(RightArrow, slideTime); "></div>

         <div class="slideShowDotCon">
            <div class="slideShowDot" onclick="counter=0; toggle(); clearInterval(myTimer); myTimer = setInterval(RightArrow, slideTime);"></div>
            <div class="slideShowDot" onclick="counter=1; toggle(); clearInterval(myTimer); myTimer = setInterval(RightArrow, slideTime);"></div>
            <div class="slideShowDot" onclick="counter=2; toggle(); clearInterval(myTimer); myTimer = setInterval(RightArrow, slideTime);"></div>
            <div class="slideShowDot" onclick="counter=3; toggle(); clearInterval(myTimer); myTimer = setInterval(RightArrow, slideTime); "></div>
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
