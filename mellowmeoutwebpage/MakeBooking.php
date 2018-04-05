<?php include_once('header.php');
	  //if admin logged in
		 if (isset($_SESSION['u_ad'])) {
			 
			 //show whatever admin function inside the echo..
			 echo 'ADMIN FEATURES HERE
				   Acceppt Booking button(show bookings)'
		 ;
		 
		 }
		 //if just standard log in 
		 elseif (isset($_SESSION['u_id'])) {
			 echo 'PLACE BOOKING:
			 TIME SELECT
			 EMAIL ACCOUNT
			 BOOKING FOR
			 
			 (EMAILS HER THE TIME SO SHE CAN UPDATE THIS)
			 '
			 
		 ;
		 
		 }
			 ?>
	<br>
    <br> Booking systems: 
	<br>
	<br> Request Booking: 
	
	
    </body>