<!DOCTYPE html>
<html>
<head>
    <title>Blog</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->

    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">

    <meta name="description" content="Relaxing Spas. Book now today!">

    <link rel="stylesheet" type="text/css" href="blog.css"> <!-- Link to external CSS file -->
    <script type="text/javascript" src="slideshow.js"></script>
	<style>

	</style>
</head>

<body onload="ChangeDots">
    <div class="wrapper">
        <!-- Header -->
        <?php include('header.php')?>


    <!-- Navigation bar -->
        <?php include('nav.php')?>

	<!-- MAIN CONTENT -->
    <div class= "content">
       <div id="left">
		<h2 style="text-align:center">Mellow Me Out Blog</h2>
    <?php
    include_once("dbfunctions.php");
    // Function parameters would be here
    showblog("SELECT BlogTitle,BlogContent,BlogContentTimestamp FROM BlogContent");
    ?>
    </div>
	   <div id="right">
		<h1 style="text-align:center">Blog Bar</h1><hr>
		<h3 id="bar">CATEGORIES</h3>
		<p id="tags"><a href>Dairy</a></p>
		<p id="tags"><a href>Discount</a></p>
		<p id="tags"><a href>Special</a></p>
		<p id="tags"><a href>Pictures</a></p>
		<p id="tags"><a href>Uncategories</a></p>
		<hr>
		<h3 id="bar">TAG</h3>
		<p id="tags"><a href>Students,Business,Games,</a></p>
		<p id="tags"><a href>RRS,Widgets,Video</a></p>

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
