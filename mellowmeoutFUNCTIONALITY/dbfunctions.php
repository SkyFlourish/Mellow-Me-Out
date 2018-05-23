<head>
    <title>Products</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->

    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">

    <meta name="description" content="Relaxing Spas. Book now today!">

    <link rel="stylesheet" type="text/css" href="m/products.css"> <!-- Link to external CSS file -->
</head>
<?php
	//function for displaying database in dropdown menu!!
	function datas($sqli) {
	//include database
	include 'code.php';
	$sql = $sqli;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<select name = 'deletethis'>";
    while($row = mysqli_fetch_assoc($result)) {
		echo "<option >". $row["user_header"]. "</option>";
    }
	echo "</select>";
}
	}


	//function for displaying the whole database items on screen in a nice wrapper
	function showdatabase($sqli) {
	include 'code.php';

	$sql = $sqli;
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		//display on screen using jumbotron theme the data.
		echo "<div class='jumbotron'><h1 style='text-align:center'>". $row["user_header"].
		"</h1> ";
		if($row['user_image'] != null) {echo '<img style="display: block;
		margin-left: auto;
		margin-right: auto;
		width: 30%;"
		src="data:image/jpeg;base64,'.base64_encode($row['user_image'] ).'" />
		';}
		echo "<p class='lead' style='text-align:center'>". $row["user_body"]. "</p>
		</div>";
    }
}
	}
	function showdatabaseproducts($sqli) {
	include 'code.php';

	$sql = $sqli;
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$localresult = $result;
		//display on screen using jumbotron theme the data.
		echo "<div><h2>". $row["user_header"]. "</h2> <div class='imgDes'>";
		if($row['user_image'] != null) {echo '<img height=183 width=275 src="data:image/jpeg;base64,'.base64_encode($row['user_image'] ).'" />
		';}
		//USE // FOR NEWLINE
		$body1 = str_replace("//", "<br/>", $row['user_body']);
		echo "<p> $body1 </p>
		</div>
		<br/>
		<div>
		<form id='my_form' action='dynamicproduct.php' method='POST' enctype='multipart/form-data'>
		<input type='hidden'name='header' value='". $row["user_header"]. "'>
		<input type='hidden' name='body' value='" . $row["user_body"] . "'>
		<input type='hidden' name='image' value='" . base64_encode($row["user_image"]) . "'>
		<input type='hidden' name='price' value='". $row['user_price']."'>
		<button class='button default' name='submit' style='background-color: rgb(169, 210, 85);'>Details</button>
		</form>
		</div>
		<br/><br/>
		</div>
		";
    }

}
	}


	function showedit($sqli) {
	//need to add to this..
	//include database
	include 'code.php';
	$sql = $sqli;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<select name = 'editethis'>";
    while($row = mysqli_fetch_assoc($result)) {
		echo "<option >". $row["user_header"]. "</option>";
    }
	echo "</select>";

}
}

function showblog($sqli) {
include 'code.php';
$sql = $sqli;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $localresult = $result;
    // Timie string should be grabbed and made into something that fits
    // our agreed format format.
    // Comment count will be a seperate query that will be needed (or a subquery).
    echo "
		<h2 style='text-align:left'>". $row["BlogTitle"]. "First blog</h2>
      <!-- Title & comment count -->
      <!-- Comment link would either open another page where the comment and the blog post would
      be on the one page, alongside a back button -->
			<p class='categories'>". $row["BlogContentTimestamp"]. " | <a href>View Comments...</a></p><hr>
      <!-- Content -->
			<p class= 'contents'>". $row["BlogContent"]. "
      </p>
		<p style='text-align:right;margin-right:10px'>Tagged: <a href>Students</a></p><hr>
    ";
  }
}
}

?>
