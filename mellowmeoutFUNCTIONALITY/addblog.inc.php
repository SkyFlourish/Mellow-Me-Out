<?php

include('header.php');
include('nav.php');

if (isset($_POST['submitblog'])) {
	//include database
	include 'db-connect.php';
	//ASSING header and body values
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$category = mysqli_real_escape_string($conn, $_POST['category']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);
  $username = mysqli_real_escape_string($conn, $_SESSION['u_uid']);

	$sql = "INSERT INTO BlogContent (BlogTitle,BlogContent,BlogCategory,Username) VALUES ('$title', '$category', '$content','$username');";
	if(mysqli_query($conn, $sql)) {
    echo "Records inserted successfully";
  }
  else {
    echo "Records could not be inserted.</br>SQL Statement - ". $sql. "</br>SQL Error - ". mysqli_error($conn). "";
  }
	//show success in header
  mysqli_close($conn);

}

include('footer.php');
