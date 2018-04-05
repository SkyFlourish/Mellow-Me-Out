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
		echo "<div class='jumbotron'><h1>". $row["user_header"]. 
		"</h1><p class='lead'>". $row["user_body"]. "</p></div>";
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
	
?>