<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->
    
    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">
    
    <meta name="description" content="Relaxing Spas. Book now today!">
    
    <link rel="stylesheet" type="text/css" href="gallery.css"> <!-- Link to external CSS file -->
    <script type="text/javascript" src="slideshow.js"></script>
</head>
    
<body onload="ChangeDots">
    <div class="wrapper">
        <?php include 'header.php';?>
        <?php include 'nav.php';?>
    <!-- MAIN CONTENT -->
    <div class= "content"> 
     <div class= "textbody"><br> <br>
<h1>Gallery</h1>
Here are some photos of our amazing work. You will be as pampered as the people you see here.
<br><br>
<!--You can change the images by either replacing the image in the img folder or
 by renaming the img/gallery#.jpg with the image you want to use-->
<div class="row"> 
  <div class="column">
      <div class="gallery">
      <a target="_blank" href="img/gallery1.jpg"><img src="img/gallery1.jpg" height=170></a>
          </div>
      <div class="gallery">
      <a target="_blank" href="img/gallery2.jpg">
          <img src="img/gallery2.jpg" height=170></a>
      </div>
      <div class="gallery">
    <a target="_blank" href="img/gallery3.jpg">
      <img src="img/gallery3.jpg" height=170>
      </a>
    </div>
      <div class="gallery">
    <a target="_blank" href="img/gallery4.jpg">
      <img src="img/gallery4.jpg" height=170>
    </a>
         </div>
      <div class="gallery">
    <a target="_blank" href="img/gallery5.jpg">
      <img src="img/gallery5.jpg" height=170>
         </a>
        </div>
      <div class="gallery">
    <a target="_blank" href="img/gallery6.jpg">
      <img src="img/gallery6.jpg" height=170>
        </a>
        </div>
  
  </div>

<br><br><br><br><br>
<p>

</div>

    </div>
        </div>
    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
        <?php include 'footer.php';?>

  </div>  
</body>
</html>