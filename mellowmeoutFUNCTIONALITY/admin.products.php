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
	  include_once("dbfunctions.php");
		 if (isset($_SESSION['u_ad'])) {
			 
			 //show whatever admin function inside the echo..
			 echo '
		 <form action="add.inc.php" method="POST" enctype="multipart/form-data">
		 <h4>Insert details for product post:</h4>
		 <textarea placeholder="Product Name"  name="header" type="text"></textarea><p></p>
		 <h>Product Image: </br></h> <input type="file" name="image"/><p></p>
		<textarea placeholder="Describe your product here..."  name="body" type="text"></textarea><p></p>
		<textarea placeholder="Pricing Here... eg. 1 Hour: $55"  name="price" type="text"></textarea><p></p>
         <button type="submit" name="submitproduct" style ="background-color: green; height: 40px; width: 145px; color: white; ">
		 Add Product</button>
		 </form>
		 
		 <form action="delete.inc.php" method="POST">
		 </br>
		 </br>
		 <h4>Select Post to Delete:</h4>';
		 
		 
		 //show data in dropdown
		 
		 datas("SELECT user_body, user_header FROM datas");
		 
		 echo '</br></br><button type="submit" name="submit" style ="background-color: red; height: 40px; width: 145px; color: white; ">
			Delete selected Product</button>
		 </form>
		 </br>
		 </br>
		 </div>'
		 ;
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