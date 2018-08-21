<?php
include_once('includes/input-validation.inc.php');
include_once('includes/db-connect.php');
include_once('includes/staff_account_processing.php');

@session_start();

$username=$_POST['username'];
$pwd=$_POST['pwd'];
$error_message="";

if(validateUserName($username)==false)
{
	$error_message.='Username must be alphabets and numbers only, between 3-20 characters';
}
else if(validateUserName($pwd)==false)
{
	$error_message.='Password must be alphabets and numbers only, between 3-20 characters';
}
else
{
	// login to database and check
	$success = user_login($username,$pwd);
	if($success==true)
	{
		$error_message.='Login successful';
		$_SESSION['staff_username']=$username;
		$_SESSION['staff_pwd']=$pwd;
	}
	else
	{
		$error_message.='Login Unsuccessful';
	}
}
header('Location: account.php?message='.urlencode($error_message));
exit();
?>