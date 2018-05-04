<!DOCTYPE html>
<html>
<head>
    <title>Book Now</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->
    
    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">
    
    <meta name="description" content="Relaxing Spas. Book now today!">
    
    <link rel="stylesheet" type="text/css" href="book-now.css"> <!-- Link to external CSS file -->
    <script type="text/javascript" src="slideshow.js"></script>
</head>
    
<body onload="ChangeDots">
    <div class="wrapper">
        <!-- Header -->
		<?php include('header.php')?>
        <?php include('nav.php')?>
		<div class= "content"> 
		<!-- MAIN CONTENT -->
		<h2>ADD / DELETE BOOKING</h2>
        
            <div class = "con_Image1">
			<div class="con_Body">
                <h3>Add Booking</h3>
					<?php //If logged in as standard user 
		  if (isset($_SESSION['u_ad'])) {
			  echo 'Please Select Date of Booking:
		<form name="submit" action="" id="name" method="POST">
		<input name = "datepicked" type="date"/>
		<br><button type="submit" name="submit" style ="background-color: green; height: 40px; width: 145px; color: white; ">
			Show Available Sessions</button><br>
		
		 </form>'; 
		//if date is submitted and not null show dates 
		if (isset($_POST['submit']) && $_POST['datepicked'] != "") {
		include 'code.php';
		$ar = array("6:30", "6:45", "7:00","7:15", "7:30","7:45", "8:00","8:15", "8:30", "8:45","9:00","9:15", "9:30",
		"9:45","10:00","10:15", "10:30","10:45", "11:00","11:15", "11:30","11:45", "12:00", "12:15",	
		"12:30", "12:45","13:00", "13:15","13:30","13:45", "14:00","14:15", "14:30", "14:45","15:00", 
		"15:15","15:30","15:45", "16:00", "16:15","16:30", "16:45","17:00","17:15", "17:30");
		echo 'Available sessions for: ' . $_POST["datepicked"] . '   ';
		echo'<form name="addbooking" action="add.inc.php" method="POST">
		<select name ="add">';
		for($i=1;$i <= 45; $i++) {
			$start = $_POST["datepicked"];
			$str = "$start-$i";
			
			$result = mysqli_query($conn, "SELECT user_booking FROM booking WHERE user_booking = '$str'");
			if(mysqli_num_rows($result) == 0)
			{echo "<option value='$str'>" .  $ar[($i-1)] . "</option>";	}	
			else {echo "<option disabled>Booked Out" .  $ar[($i-1)] . "</option>";	}
		}
		echo'
		</select>
		<br><button type="submit" name="addbooking" style ="background-color: green; height: 40px; width: 145px; color: white; ">
			Book Out Selected Session</button>
		</form>';
		}
		
		//admin version to delete booking
		if (isset($_SESSION['u_ad']) && isset($_POST['addbooking']) && $_POST['datepicked'] != "") {
		include 'code.php';
		$ar = array("6:30", "6:45", "7:00","7:15", "7:30","7:45", "8:00","8:15", "8:30", "8:45","9:00","9:15", "9:30",
		"9:45","10:00","10:15", "10:30","10:45", "11:00","11:15", "11:30","11:45", "12:00", "12:15",	
		"12:30", "12:45","13:00", "13:15","13:30","13:45", "14:00","14:15", "14:30", "14:45","15:00", 
		"15:15","15:30","15:45", "16:00", "16:15","16:30", "16:45","17:00","17:15", "17:30");
		echo 'Booked sessions to delete: ' . $_POST["datepicked"] . '   ';
		echo'<form name="deletebooking" action="delete.inc.php" method="POST">
		<select name ="deletebooked">';
		for($i=1;$i <= 45; $i++) {
			$start = $_POST["datepicked"];
			$str = "$start-$i";
			
			$result = mysqli_query($conn, "SELECT user_booking FROM booking WHERE user_booking = '$str'");
			if(mysqli_num_rows($result) == 0)
			{echo "<option disabled>" .  $ar[($i-1)] . "</option>";	}	
			else {echo "<option value = '$str'>Booked " .  $ar[($i-1)] . "</option>";	}
		}
		echo'
		</select>
		<br><button type="submit" name="deletebooking" style ="background-color: red; height: 40px; width: 145px; color: white; ">
			Unbook Selected Session</button>
		</form>';
			}	
		  }
		 //end if
		  
		  
		  //if not logged in
		  else {
			  echo '<h1>LOG IN AS ADMIN<h1>';
		  }
?>
		</div>
		</div>
		
        <div class = "con_Image2">
            <div class="con_Body">
			<h3>Delete Booking</h3>
				<?php //If logged in as standard user 
		  if (isset($_SESSION['u_ad'])) {
			  echo 'Please Select Date of Booking:
		<form name="submitdelete" action="" id="name" method="POST">
		<input name = "datepickeddelete" type="date"/>
		</br><button type="submit" name="submitdelete" style ="background-color: red; height: 40px; width: 145px; color: white; ">
			Show Sessions to delete/unbook</button></br>
		
		 </form>'; 
		
		//admin version to delete booking
		if (isset($_SESSION['u_ad']) && isset($_POST['submitdelete']) && $_POST['datepickeddelete'] != "") {
		include 'code.php';
		$ar = array("6:30", "6:45", "7:00","7:15", "7:30","7:45", "8:00","8:15", "8:30", "8:45","9:00","9:15", "9:30",
		"9:45","10:00","10:15", "10:30","10:45", "11:00","11:15", "11:30","11:45", "12:00", "12:15",	
		"12:30", "12:45","13:00", "13:15","13:30","13:45", "14:00","14:15", "14:30", "14:45","15:00", 
		"15:15","15:30","15:45", "16:00", "16:15","16:30", "16:45","17:00","17:15", "17:30");
		echo 'Booked sessions to delete: ' . $_POST["datepickeddelete"] . '   ';
		echo'<form name="deletebooking" action="delete.inc.php" method="POST">
		<select name ="deletebooked">';
		for($i=1;$i <= 45; $i++) {
			$start = $_POST["datepickeddelete"];
			$str = "$start-$i";
			
			$result = mysqli_query($conn, "SELECT user_booking FROM booking WHERE user_booking = '$str'");
			if(mysqli_num_rows($result) == 0)
			{echo "<option disabled>" .  $ar[($i-1)] . "</option>";	}	
			else {echo "<option value = '$str'>Booked " .  $ar[($i-1)] . "</option>";	}
		}
		echo'
		</select>
		<br><button type="submit" name="deletebooking" style ="background-color: red; height: 40px; width: 145px; color: white; ">
			Unbook Selected Session</button>
		</form>';
			}	
		  }
?>
            </div>
        </div>
        <div class = "con_Image3">
            <div class="con_Body">
			
            </div>
        </div>
    </div>
    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
       <?php include('footer.php')?>  
	
    </div>
    
    
   

</body>
</html>