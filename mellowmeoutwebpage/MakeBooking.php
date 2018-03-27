<?php include_once('header.php');
?>

    <body>
	<?php 
	  //if admin logged in
		 if (isset($_SESSION['u_ad'])) {
			 
			 //show whatever admin function inside the echo..
			 echo '
			 <form class="form-inline mt-2 mt-md-0" action="#" method="POST">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Add</button>
		 </form>
		 
		 <form class="form-inline mt-2 mt-md-0" action="#" method="POST">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Edit</button>
		 </form>
		 
		 <form class="form-inline mt-2 mt-md-0" action="#" method="POST">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Delete</button>
		 </form>'
		 ;
		 
		 }
		 ?>
	
      Booking system based on dates using a database??
	Then Proceed to checkout once payed fill database with extra information. 
    </body>