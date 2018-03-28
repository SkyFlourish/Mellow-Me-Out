<?php 
	//UPDATES WHEN REFRESSHED
	//for each post added to database using add.inc.php
	include 'code.php';
	
	
	$sql = "SELECT user_body, user_header FROM datas";
	$result = mysqli_query($conn, $sql);
	
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<select>";
    while($row = mysqli_fetch_assoc($result)) {
		echo "<option>". $row["user_header"]. "</option>";
    }
	echo "</select>";
}
?>