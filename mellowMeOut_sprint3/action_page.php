<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/input-validation.inc.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/staff_account_processing.php');

@session_start();

// todo - Implement password encryption and correct password checking

$username=mysqli_real_escape_string($conn, $_POST['username']);
$pwd=mysqli_real_escape_string($conn, $_POST['pwd']);
$error_message="";

// if(validateUserName($username)==false)
if(validateInputNotNull($username) == false)
{
	$error_message.='Username must be alphabets and numbers only, between 3-20 characters';
	// $error_message.='Username required';
}
else if(validateInputNotNull($pwd) == false)
{
	$error_message.='Password must be alphabets and numbers only, between 3-20 characters';
	// $error_message.='Password required';
}
else
{
	// login to database and check
	$success = user_login($username,$pwd);
	if($success==true)
	{
		// $error_message.='Login successful';
		$_SESSION['staff_username']=$username;
		$_SESSION['staff_pwd']=$pwd;
		header('Location: admin-page.php');
		exit();
	}
	else
	{
		$error_message.='Login Unsuccessful';
	}
}
header('Location: account.php?message='.urlencode($error_message));
exit();
?>
