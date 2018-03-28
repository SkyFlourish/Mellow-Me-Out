<?php

if (isset($_POST['submit'])) {
	include 'code.php';
	//ASSING header and body
	$deletethis = mysqli_real_escape_string($conn, $_POST['deletethis']);
	$sql = "DELETE FROM datas WHERE user_header = '$deletethis'";
	mysqli_query($conn, $sql);
	header("Location: products.php?signup=success");
			exit();
			
}
//else if blog sumbit
elseif (isset($_POST['submitblog'])) {
	include 'code.php';
	//ASSING header and body
	$deletethis = mysqli_real_escape_string($conn, $_POST['deletethis']);
	$sql = "DELETE FROM datasblog WHERE user_header = '$deletethis'";
	mysqli_query($conn, $sql);
	header("Location: blog.php?signup=success");
			exit();
			
}
