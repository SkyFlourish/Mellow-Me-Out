<?php 
	//UPDATES WHEN REFRESSHED
	//for each post added to database using add.inc.php
	include 'code.php';
	
	
	$sql = "SELECT user_body, user_header FROM datas";
	$result = mysqli_query($conn, $sql);
	
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		//display on screen using jumbotron theme the data. 
		echo "<div class='jumbotron'><h1>". $row["user_header"]. 
		"</h1><p class='lead'>". $row["user_body"]. "</p></div>";
    }
}
	
	?>