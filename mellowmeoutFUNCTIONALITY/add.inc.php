<?php


if (isset($_POST['submitproduct'])) {
	//include database
	include 'code.php';
	//ASSING header and body values
	$header = mysqli_real_escape_string($conn, $_POST['header']);
	$body = mysqli_real_escape_string($conn, $_POST['body']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	$file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	
	$sql = "INSERT INTO datas (user_header, user_body, user_price, user_image) VALUES ('$header', '$body', '$price', '$file');";
	mysqli_query($conn, $sql);
	//show success in header
	header("Location: admin.products.php");
			exit();
			
}

//else if submitblog is posted sumbit to blog database instead
elseif (isset($_POST['submitblog'])) {
	include 'code.php';
	//ASSING header and body values
	$header = mysqli_real_escape_string($conn, $_POST['header']);
	$body = mysqli_real_escape_string($conn, $_POST['body']);
	$file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	//sql query
	$sql = "INSERT INTO datasblog (user_header, user_body, user_image) VALUES ('$header', '$body', '$file');";
	mysqli_query($conn, $sql);
	//show success in header
	header("Location: admin.blog.php");
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
	header("Location: admin.booking.php");
			exit();
			
}