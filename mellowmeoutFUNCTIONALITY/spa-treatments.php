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

		<h2>Spa Treatments</h2>
		<div class="imgDes">
		<img src="img/spa-treatments.jpg" alt="Spa Treatments"/>
		<p>
		Don't have a reason for makeup, just looking to pamper yourself? Call us today to book a Spa Treatmnet. A glass of wine and some spa treatment, life can't be any better!
			<br/><br/>
			More details to be added here.
			<br/><br/>
			More details to be added here.
			<br/><br/>
		</p>
		</div>

		<p><br/></p>
		<p><strong>Pricing</strong></p>


		30 Minutes - $50.00<br/>
		45 Minutes - $70.00<br/>
		60 Minutes - $80.00<br/>
		90 Minutes - $120.00<br/>
</div>



    </div>
    <!-- MAIN CONTENT END -->
    <?php include('footer.php')?> 
             <style>
            /* dynamic styling of footer across all pages */
            <?php include 'footer.css'; ?>
        </style>
</div>




</body>
</html>