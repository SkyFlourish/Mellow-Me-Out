<?php
//delete from database if sumbit is posted to this

if (isset($_POST['submit'])) {
	include 'code.php';
	//assign deletethis with what was posted inside deletethis as a string
	$deletethis = mysqli_real_escape_string($conn, $_POST['deletethis']);
	//assign query to variable
	$sql = "DELETE FROM datas WHERE user_header = '$deletethis'";
	//run query
	mysqli_query($conn, $sql);
	//show success in header
	header("Location: admin.products.php");
			exit();
			
}

//else if sumbitblog is posted delete from blog database
elseif (isset($_POST['submitblog'])) {
	include 'code.php';
	//assign deletethis with what was posted inside deletethis as a string 
	//look in dbfunciton.php and name="delethis" 
	$deletethis = mysqli_real_escape_string($conn, $_POST['deletethis']);
	
	//assign query to variable
	$sql = "DELETE FROM datasblog WHERE user_header = '$deletethis'";
	//run query
	mysqli_query($conn, $sql);
	//show sucess in header
	header("Location: admin.blog.php");
			exit();

			
}
elseif (isset($_POST['deletebooking'])) {
	include 'code.php';
	$deletethis = mysqli_real_escape_string($conn, $_POST['deletebooked']);
	//assign query to variable
	$sql = "DELETE FROM booking WHERE user_booking = '$deletethis'";
	//run query
	mysqli_query($conn, $sql);
	//show sucess in header
	header("Location: admin.booking.php");
			exit();
			
}