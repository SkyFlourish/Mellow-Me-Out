<?php
	//will need to add to this...
	if (isset($_POST['submit'])) {
	include 'code.php';
	$editthis = mysqli_real_escape_string($conn, $_POST['deletethis']);
	$sql = "SELECT FROM datas WHERE user_header = '$editthis'";
	$result = mysqli_query($conn, $sql);
		//display on screen using jumbotron theme the data. 
		echo "<div class='jumbotron'><h1>". $editthis . 
		"</h1><p class='lead'>". $editthis . "</p></div>";
    header("Location: blog.php");
	exit();
    }
?>
