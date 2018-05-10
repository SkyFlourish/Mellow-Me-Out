<!DOCTYPE html>
<html>
<head>
    <title>Products</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->

    <meta name="keywords" content="relaxing massages, eyelash extensions, ear candling, brow tint, other spa treatments">

    <meta name="description" content="Relaxing Spas. Book now today!">

    <link rel="stylesheet" type="text/css" href="products.css"> <!-- Link to external CSS file -->
    <script type="text/javascript" src="slideshow.js"></script>
</head>

<body onload="ChangeDots">
    <div class="wrapper">
<?php include('header.php')?>
        <?php include('nav.php')?>

    <!-- MAIN CONTENT -->
    <div class= "content">
     <div class= "textbody"><br> <br>
		<?php 
	  //if admin logged in
	  include_once("dbfunctions.php");
		 
	
		//show all data from database
		 showdatabaseproducts("SELECT user_body, user_image, user_header, user_price FROM datas");
	
?>
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
</body>
</html>