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
<div class= "content">
     <div class= "textbody"><br> <br>

		<?php 
		include_once 'code.php';
    $a = $_POST['datepickedform'];
$b = $_POST['time'];
$c = $_POST['deletethis'];
$d = $_POST['name'];
$e = $_POST['email'];
$f = $_POST['phone'];
$msg = "$a + $b + $c + $d + $e + $f";
mail("lach450@live.com.au","Booking",$msg);
echo '$msg';
?>
		
</div>



</div>
    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
        <?php include('footer.php')?>
</div>
</body>
</html>