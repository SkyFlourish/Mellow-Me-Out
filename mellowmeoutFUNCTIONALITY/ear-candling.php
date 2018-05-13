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


		<h2>Ear Candling</h2>
		<div class="imgDes">
		<img src="img/ear-candling.jpg" alt="Ear Candling"/>
		<p>
		Ear Candling is a proven therapy for headaches, ear infections, excessive wax, ear ringing, migrains and ear aches. All of our ear candles are handmade using cotton clothes and beewax. Our therapists are trained in this and have done thousands of threatments; we guarantee relaxation after this therapy.
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