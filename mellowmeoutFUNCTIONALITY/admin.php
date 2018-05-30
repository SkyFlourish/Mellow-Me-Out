<!DOCTYPE html>
<html>
<head>
    <title>Offers</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->
    
    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">
    
    <meta name="description" content="Relaxing Spas. Book now today!">
    
    <link rel="stylesheet" type="text/css" href="admin.css"> <!-- Link to external CSS file -->
    <script type="text/javascript" src="slideshow.js"></script>
</head>
    
<body onload="ChangeDots">
    <div class="wrapper">
        <!-- Header -->
        <?php include('header.php')?>
        
    
    <!-- Navigation bar -->
        <?php include('nav.php')?>
    
		<?php 
			if (isset($_SESSION['u_ad'])) 
			{
			echo '
			
		<!-- MAIN CONTENT -->
		<div class= "content"> 
		</br>
		<a href="admin.products.php">  ADD / REMOVE PRODUCTS</a>
		</br></br>
		<a href="admin.booking.php">  ADD / REMOVE BOOKING</a>
		</br></br>
		<a href="admin.blog.php">  ADD / REMOVE BLOG</a>
		</br>
		
	';
			} else 
				echo '<h1> must be admin </h1>';
		?>
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