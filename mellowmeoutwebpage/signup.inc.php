<?php

if(isset($_POST['submit'])) {
	//connect to database 
	include_once 'code.php';
	
	//assign attributes as the forms will post the things on the right if you go back and look at form name
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	//if anything is empty show error
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) 
	{
		header("Location: signup.php?signup=empty");
		exit();
	} 
	else {
		//check no existing
		$sql = "SELECT * FROM users WHERE user_username = '$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		//if user already exist show error in top bar WILL NEED TO MAKE BETTER
		if ($resultCheck > 0) {
			header("Location: signup.php?signup=usertaken");
			exit();
		} else {
			//hash password
			$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
			//insert user into the databse
			$sql = "INSERT INTO users (user_first, user_last, user_email, user_username, user_password) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
			mysqli_query($conn, $sql);
			//show success in top bar
			header("Location: signup.php?signup=success");
			exit();
		}
	}
//all else fails reload page
} else {
	header("Location: signup.php");
	exit();
}