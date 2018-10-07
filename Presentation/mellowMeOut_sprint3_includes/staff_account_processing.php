<?php
	// user login
	function user_login($username,$password)
	{
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
?>