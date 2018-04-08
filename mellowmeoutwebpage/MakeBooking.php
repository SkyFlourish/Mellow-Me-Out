<?php include_once('header.php');
?>
<?php //If logged in as standard user 
		  if (isset($_SESSION['u_id'])) {
			  echo 'Please Select Date of Booking:
		<form name="submit" action="" id="name" method="POST">
		<input name = "datepicked" type="date"/>
		<br><button type="submit" name="submit">Show Available Sessions</button><br>
		';
		
		
		//if admin is logged in show delete button
		if (isset($_SESSION['u_ad'])) { echo'<button type="submit" name="submitdelete">Show Sessions to delete/unbook</button>' ;}
		echo'</form>';

		//ifdate is submitted and not null show dates
		if (isset($_POST['submit']) && $_POST['datepicked'] != "") {
		include 'code.php';
		$ar = array('6:30', '7:00', "7:30", "8:00", "8:30", "9:00", "9:30", "10:00", "10:30", "11:00", "11:30", "12:00", 
		"12:30", "13:00", "13:30", "14:00", "14:30", "15:00", "15:30", "16:00", "16:30", "17:00", "17:30");
		
		echo 'Available sessions for: ' . $_POST["datepicked"] . '   ';
		echo'<form name="addbooking" action="add.inc.php" method="POST">
		<select name ="add">';
		
		for($i=1;$i <= 22; $i++) {
			$start = $_POST["datepicked"];
			$str = "$start-$i";
			
			$result = mysqli_query($conn, "SELECT user_booking FROM booking WHERE user_booking = '$str'");
			if(mysqli_num_rows($result) == 0)
			{echo "<option value='$str'>" .  $ar[($i-1)] . "</option>";	}	
			else {echo "<option disabled>Booked Out" .  $ar[($i-1)] . "</option>";	}
		}
		echo'
		</select>
		<br><button type="submit" name="addbooking">Book Selected Session</button>
		</form>';
		}
		
		
		//admin version to delete instead of book
		if (isset($_SESSION['u_ad']) && isset($_POST['submitdelete']) && $_POST['datepicked'] != "") {
		include 'code.php';
		$ar = array('6:30', '7:00', "7:30", "8:00", "8:30", "9:00", "9:30", "10:00", "10:30", "11:00", "11:30", "12:00", 
		"12:30", "13:00", "13:30", "14:00", "14:30", "15:00", "15:30", "16:00", "16:30", "17:00", "17:30");
		
		echo 'Booked sessions to delete: ' . $_POST["datepicked"] . '   ';
		echo'<form name="deletebooking" action="delete.inc.php" method="POST">
		<select name ="deletebooked">';
		
		for($i=1;$i <= 22; $i++) {
			$start = $_POST["datepicked"];
			$str = "$start-$i";
			
			$result = mysqli_query($conn, "SELECT user_booking FROM booking WHERE user_booking = '$str'");
			if(mysqli_num_rows($result) == 0)
			{echo "<option disabled>" .  $ar[($i-1)] . "</option>";	}	
			else {echo "<option value = '$str'>Booked " .  $ar[($i-1)] . "</option>";	}
		}
		echo'
		</select>
		<br><button type="submit" name="deletebooking">Unbook Selected Session</button>
		</form>';
			}	
		  }
		  
		  
		  
		  //if not logged in
		  else {
			  echo '<h1>Please log in to make a booking<h1>';
		  }


?>
<!--
ADMIN DELETE BOOKING FUNCTION
SQL WILL HAVE 2018-02-12


CHECK AVAILABLE SESSIONS:
!!!!COULD HAVE DIFFERENT PAGES FOR DIFFERENT ITEMS!!


click YEAR
Click MONTH
THEN CLICK DAY 
ALL AVAILABLE TIMES ON THAT DATE:
(CHECKS DATABASE WHEN ALL OPTIONS ARE SELECTED FOR THAT DAY)
DISPLAYS OPTIONS NOT IN DATABASE

BOOK THIS SESSIONS:
NAME:
EMAIL:
PHONE:
TYPE (CHECKS WETHER AVAILABLE AND TIME SLOTS.

CAPTCHA
-->