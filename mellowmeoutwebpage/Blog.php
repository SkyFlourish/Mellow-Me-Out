<?php include_once('header.php');
?>

    <body>
      Logged in as ADMIN will show add delete items. 
      Will add to DB so will need a BlogPost (heading, body+image/video) etc.
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
    </body>