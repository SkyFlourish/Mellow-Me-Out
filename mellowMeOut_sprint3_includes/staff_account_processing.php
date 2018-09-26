<?php
// user login
function user_login($username,$pwd) {

		global $conn;

		$sql="select * from staff where upper(username)='". strtoupper($username) ."' AND passphrase='".strtoupper($password)."'";

		$result=mysqli_query($conn,$sql);

		$total_row_count=mysqli_num_rows($result);
		$count=0;
		$login=false;

		while($count<$total_row_count)
		{
			$login=true;
			$count=$count+1;
		}


		return $login;
	}

// 	global $conn;
//
// 	// $sql="select * from staff where upper(username)='". strtoupper($username) ."' AND passphrase='".strtoupper($password)."'";
// 	// $sql="select * from staff where upper(username)='". strtoupper($username) ."'";
// 	// $sql="select * from staff where upper(username)='". $username ."'";
// 	$sql="select * from staff where username='". $username ."'";
//
// 	$result=mysqli_query($conn,$sql);
//
// 	// $total_row_count=mysqli_num_rows($result);
// 	$count=0;
//
// 	// if($total_row_count == 1) {
// 	if(mysqli_num_rows($total_row_count) == 1) {
// 		if($row = mysqli_fetch_assoc($result)) {
// 			// $hashedPwdCheck = password_verify($pwd, $row['Passphrase']);
// 			// if($hashedPwdCheck == false) {
// 			if ($row['Passphrase'] != $pwd)
// 				// echo "</br>";
// 				$login=false;
// 				// var_dump($hashedPwd);
// 				// echo "</br>";
// 				// var_dump($row);
// 				// echo "</br>";
// 				// var_dump($result);
// 				// echo "</br>";
// 				// var_dump($sql);
// 				// echo "</br>";
// 			}
// 			else {
// 				$login=true;
// 			}
// 		}
// 	// }
// 	else {
// 			// echo "</br>";
// 			$login=false;
// 				// var_dump($hashedPwd);
// 				// echo "</br>";
// 				// var_dump($row);
// 				// echo "</br>";
// 				// var_dump($result);
// 				// echo "</br>";
// 				// var_dump($sql);
// 				// echo "</br>";
// 	}
//
// 	// $login=false;
// 	//
// 	// while($count<$total_row_count)
// 	// {
// 	// 	$login=true;
// 	// 	$count=$count+1;
// 	// }
//
// 	if ($login == true) {
// 		return true;
// 	}
// 	else {
// 		return false;
// 	}
// }
