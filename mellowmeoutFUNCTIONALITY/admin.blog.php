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
<?php	  //if admin logged in
		 if (isset($_SESSION['u_ad'])) {

			 //show whatever admin function inside the echo..
			 echo '
        <form action="addblog.inc.php" method="POST">
            <p>
            <h4>Blog Title:</h4>
            <textarea placeholder="Title..." name="title" type="text"></textarea>
            </p>
            <p>
            <h4>Blog Category:</h4>
            <textarea placeholder="Category..." name="category" type="text"></textarea>
            </p>
            <p>
            <h4>Blog Contents</h4>
            <textarea placeholder="Blog content..." name="content" type="text" rows=15 cols=80></textarea>
            </p>
            <button type="submit" name="submitblog" sytle="background-color: green; height: 340px; width: 340px; color: white; ">
            </button>
          </form>
       ';
		 }
		 ?>
		 </div>



    </div>
    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
<?php include('footer.php')?>
</div>
</body>
</html>
