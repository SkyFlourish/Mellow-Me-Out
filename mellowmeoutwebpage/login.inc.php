<?php
//CREATE LOGIN SESSION
session_start();

if (isset($_POST['submit'])) {
	include 'code.php';
	//ASSING UID AND PWD VARIABLE
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	//IF Username OR Password EMTPY EXIT
	
if(empty($uid) || empty($pwd)) {
	header("Location: header.php?login=empty");
		exit();
	} else {
		//select from users the username typed in LOOK AT VARIABLE ABOVE IF DO NOT UNDERSTAND
		$sql = "SELECT * FROM users WHERE user_username = '$uid'";
		$result = mysqli_query($conn, $sql);
		//if no of the user results exit
		if (mysqli_num_rows($result) < 0) 
		{
		header("Location: header.php?login=sqlerror");
		exit();
		}

		else { 
		 if ($row = mysqli_fetch_assoc($result)) {
			 //de-hash password
			 $hashedPwdCheck = password_verify($pwd, $row['user_password']);
			 //if not correct exit
			 if ($hashedPwdCheck == false) {
				header("Location: header.php?login=hasherror");
				exit();
			 //if correct log in
			 } elseif($hashedPwdCheck == true) {
				 //log in user
				 $_SESSION['u_id'] = $row['user_id'];
				 $_SESSION['u_first'] = $row['user_first'];
				 $_SESSION['u_last'] = $row['user_last'];
				 $_SESSION['u_email'] = $row['user_email'];
				 $_SESSION['u_uid'] = $row['user_username'];
				 header("Location: header.php?login=success");
				exit();
			 }
				
		 }
		}
	}
	//if all else fails error
} else {
	header("Location: header.php?login=error");
		exit();
		
}
	