<?php

if(isset($_GET["booking-date"])){
	include 'db-connect.php';
		$ar = array("6:30", "6:45", "7:00","7:15", "7:30","7:45", "8:00","8:15", "8:30", "8:45","9:00","9:15", "9:30",
		"9:45","10:00","10:15", "10:30","10:45", "11:00","11:15", "11:30","11:45", "12:00", "12:15",
		"12:30", "12:45","13:00", "13:15","13:30","13:45", "14:00","14:15", "14:30", "14:45","15:00",
		"15:15","15:30","15:45", "16:00", "16:15","16:30", "16:45","17:00","17:15", "17:30");
		$datepicked = $_GET['booking-date'];

		echo '
		<p></p>Available sessions for: </br>' . $_GET["booking-date"] . '  </br> ';
		echo'
		<form name="insideform" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="datepickedvalue" value="' . $_GET["booking-date"] . '"/>
		<select name ="add">';
		for($i=1;$i <= 45; $i++) {
			$start = $_GET["booking-date"];
			$str = "$start-$i";

			$result = mysqli_query($conn, "SELECT user_booking FROM booking WHERE user_booking = '$str'");
			if(mysqli_num_rows($result) == 0) {
				$arrayPosition = $i-1;
				echo "<option value=".$arrayPosition.">" .  $ar[($i-1)] . "</option>";
			}
			else {
				// echo "<option disabled>Booked Out" .  $ar[($i-1)] . "</option>";
				echo "<option disabled>" .  $ar[($i-1)] . " - Booked Out</option>";
			}
		}
		echo'
		</select>
		';

			}
				?>
