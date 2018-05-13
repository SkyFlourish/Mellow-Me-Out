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


		<h2>Eyelash Extensions</h2>
		<div class="imgDes">
		<img src="img/eyelash-products.jpg" alt="Eyelash Extensions"/>
		<p>
			We offer specialized eyelash makeup. After an eyelash makeup with us, your eyelashes will appear longer, fuller and darker. Overall, your eyes will look larger, better defined and even more beautiful. Our makeup of the eyelashes is completely pain free and non invasive.
			<br/><br/>
			More details to be added here.
			<br/><br/>
			More details to be added here.
		</p>
		</div>

		<p><br/></p>
		<p><strong>Pricing</strong></p>


		Basic - $50.00<br/>
		Standard - $70.00<br/>
		Premium - $80.00<br/>
		Exclusive - $120.00<br/>
		<br/><br/>
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