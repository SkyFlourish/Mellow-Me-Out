<?php 
	//UPDATES WHEN REFRESSHED
	//for each post added to database using add.inc.php
	
	
	function datas($sqli) {
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
	//function for showing data on screen if called
	function showdatabase($sqli) {
	include 'code.php';
	
	$sql = $sqli;
	$result = mysqli_query($conn, $sql);
	
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		//display on screen using jumbotron theme the data. 
		echo "<div class='jumbotron'><h1>". $row["user_header"]. 
		"</h1><p class='lead'>". $row["user_body"]. "</p></div>";
    }
}
	}	
?>