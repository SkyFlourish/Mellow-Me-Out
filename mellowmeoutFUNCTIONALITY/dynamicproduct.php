<!DOCTYPE html>
<html>
<head>
    <title>Products</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->
    <link rel="stylesheet" type="text/css" href="products.css"> <!-- Link to external CSS file -->
</head>

<body onload="ChangeDots">
    <div class="wrapper">
    <?php include('header.php')?>
        <?php include('nav.php')?>

    <!-- MAIN CONTENT -->
    <div class= "content">
     <div class= "textbody"><br> <br>

		<?php 
		include_once 'code.php';
		
		$price=str_replace("//", "<br/>", $_POST['price']);
		$body=str_replace("//", "<br/>", $_POST['body']);
		echo "<h2>". $_POST['header']. "</h2> <div class='imgDes'>";
		if($_POST['image'] != null) {echo '<img height="183" width="275" src="data:image/jpeg;base64,'.$_POST['image'] .'" /> ';} 
		//create new line character
		echo "<p>$body</p>
		</div>
		<p><br/></p>
		<p><strong>Pricing</strong></p>
		<p>
		$price
		</p>
		<br/><br/>
		";

	?>
		
</div>



</div>
    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
        <?php include('footer.php')?>
</div>
</body>
</html>