<?php
//IF LOGOUT BUTTON IS PRESSED SESSION UNSET IN HEADER AND RETURN TO INDEX
if (isset($_POST['submit'])) {
	session_start();
	session_unset();
	session_destroy();
	header("Location: index.php");
	exit();
}