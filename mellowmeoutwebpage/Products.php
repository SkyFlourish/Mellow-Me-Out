<?php include_once('header.php');
?>
	<!--using bootstraps css for the funky boxes-->
    <main role="main" class="container">
	
	<?php 
	  //if admin logged in
		 if (isset($_SESSION['u_ad'])) {
			 
			 //show whatever admin function inside the echo..
			 echo '
		<!--WILL NEED TO Add to DATABASE, DROPDOWN ADD-->
		 <p>The below will add to database, Then refresh page to show what you have just added :) </p>
		 <form class="form-inline mt-2 mt-md-0" action="add.inc.php" method="POST">
		 <input class="form-control mr-sm-2"  type="text" name="header">
		  <input class="form-control mr-sm-2" type="text" name="body">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Add</button>
		 </form>
		 
		<!--WILL NEED TO select all post headings display as then click and display add to database screen with previous info-->
		 <form class="form-inline mt-2 mt-md-0" action="#" method="POST">
		 STILL NEED TO ADD FUNCTION TO THIS
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Edit</button>
		 </form>
		 
		 <!--WILL NEED TO select all post headings display as then click and REMOVE ROW-->
		 <form class="form-inline mt-2 mt-md-0" action="#" method="POST">';
		 include_once("dropdown.box.php");
		 echo '
		 STILL NEED TO ADD FUNCTION TO THIS
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Delete</button>
		 </form>'
		 ;
		 }
		 ?>
	LOADED FROM DATABASE: 
	<?php include_once('add.php');
	//loads items from database and display in nice way on page, go into add.php to understand!
	?>
	
      
    </main>