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
 
<style>
    /* dynamic styling of footer across all pages */
    <?php include 'footer.css'; ?>
</style>
    
<body onload="ChangeDots">
    <div class="wrapper">
        <!-- Header -->
		<?php include('header.php')?>
        <?php include('nav.php')?>
		<div class= "content"> 
		<!-- MAIN CONTENT -->
		<h2>Make Booking</h2>
        
        <div class ="parentContainer"> 
            <div class = "con_Image1">
			<div class="con_Body">
                <h3>Show Available Times</h3>
                <p>
                Please Select Date<br> Of Booking:</p>
						
            
	<?php //If logged in as standard user 
		  if (isset($_SESSION['u_id'])) {
			  echo '
			<form name="submit" action="" id="name" method="POST">
				<input name = "datepicked" type="date"/></br>
				<br><button type="submit" name="submit" style="background-color: green; 
					height: 40px;
					width: 145px;
					color: white;">Show Available Times</button><br>
				</form>
		';
		  }
		//if user submit
		if (isset($_POST['submit']) && $_POST['datepicked'] != "") {
		include 'code.php';
		$ar = array("6:30", "6:45", "7:00","7:15", "7:30","7:45", "8:00","8:15", "8:30", "8:45","9:00","9:15", "9:30",
		"9:45","10:00","10:15", "10:30","10:45", "11:00","11:15", "11:30","11:45", "12:00", "12:15",	
		"12:30", "12:45","13:00", "13:15","13:30","13:45", "14:00","14:15", "14:30", "14:45","15:00", 
		"15:15","15:30","15:45", "16:00", "16:15","16:30", "16:45","17:00","17:15", "17:30");
		$datepicked = $_POST['datepicked'];
		
		echo '
		Available sessions for: </br>' . $_POST["datepicked"] . '  </br> ';
		echo'
		<form name="insideform" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="datepickedvalue" value="' . $_POST["datepicked"] . '"/>
		<select name ="add">';
		for($i=1;$i <= 45; $i++) {
			$start = $_POST["datepicked"];
			$str = "$start-$i";
			
			$result = mysqli_query($conn, "SELECT user_booking FROM booking WHERE user_booking = '$str'");
			if(mysqli_num_rows($result) == 0)
			{echo "<option >" .  $ar[($i-1)] . "</option>";	}	
			else {echo "<option disabled>Booked Out" .  $ar[($i-1)] . "</option>";	}
		}
		echo'
		</select>
		';
		}
		  //if not logged in
		else if (isset($_SESSION['u_id']) == false) {
			  echo '<h1>Please log in to make a booking<h1>';
		  }
		?>
		</div>
		</div>
		
        <div class = "con_Image2">
            
            <div class="con_Body">
                <h3>Choose Your Service</h3>
                <p>
                Select Service:
				<?php include_once("dbfunctions.php");
				//show products stored in database so its dynamic rather than static
				datas("SELECT user_body, user_header FROM datas"); 
				?>
                    <br>
                    <br>
				Confirmation Email Address: 
				<input name='email' type='email'>
                    </p><br><br>
            </div>
        </div>
        
        <div class = "con_Image3">
            <div class="con_Body">
                <h3>Enter Your Details</h3>
                <p>
				Your Full Name:
				<input name='name' type='text'/><br><br>
				
				Your Phone Number:
				<input name='phone' type='text' >
                </p>
				<button type="submit" name="submitform"  >BOOK NOW!</button>
				</form>
				<!--email form-->
				<?php 
					//if submitform posted set values of everything and send email or echo on page for testing
					if(isset($_POST['submitform'])) {
						$a = $_POST['datepickedvalue'];
						$b = $_POST['add'];
						$c = $_POST['deletethis'];
						$d = $_POST['name'];
						$e = $_POST['email'];
						$f = $_POST['phone'];
						
						$msg = "Date Picked: $a </br> Time Picked: $b </br> Booking Type: $c </br> Name: $d </br> Email: $e </br> Phone: $f";
						//email thing below.
						//mail("lach450@live.com.au","Booking",$msg,"From: lach450@live.com.au");
						echo "<p>$msg</p>";
					}
					?>
            </div>
        </div>
    </div>
    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
       <?php include('footer.php')?>  
	
    </div>
    
   

</body>
</html>