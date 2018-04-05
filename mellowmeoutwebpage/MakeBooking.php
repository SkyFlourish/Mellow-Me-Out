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
			 echo 'STANDARD USER LOGGED IN FEATURES HERE
					Place booking button (form data and times)'
		 ;
		 
		 }
			 ?>
	<br>
    <br> Booking systems: 
	<br>
	<br> Request Booking: 
	
	
    </body>