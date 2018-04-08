<?php
//if post submit then add to database
if (isset($_POST['submit'])) {
	//include database
	include 'code.php';
	//ASSING header and body values
	$header = mysqli_real_escape_string($conn, $_POST['header']);
	$body = mysqli_real_escape_string($conn, $_POST['body']);
	
	$sql = "INSERT INTO datas (user_header, user_body) VALUES ('$header', '$body');";
	mysqli_query($conn, $sql);
	//show success in header
	header("Location: Products.php");
			exit();
			
}

//else if submitblog is posted sumbit to blog database instead
elseif (isset($_POST['submitblog'])) {
	include 'code.php';
	//ASSING header and body values
	$header = mysqli_real_escape_string($conn, $_POST['header']);
	$body = mysqli_real_escape_string($conn, $_POST['body']);
	//sql query
	$sql = "INSERT INTO datasblog (user_header, user_body) VALUES ('$header', '$body');";
	mysqli_query($conn, $sql);
	//show success in header
	header("Location: Blog.php");
			exit();
			
}
elseif (isset($_POST['addbooking'])) {
	include 'code.php';
	$addthis = mysqli_real_escape_string($conn, $_POST['add']);
	//assign query to variable
	$sql = "INSERT INTO booking (user_booking) VALUES ('$addthis');";
	//run query
	mysqli_query($conn, $sql);
	//show sucess in header
	header("Location: MakeBooking.php");
			exit();
			
}