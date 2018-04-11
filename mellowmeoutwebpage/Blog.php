<?php include_once('header.php');
?>
	<!--using bootstraps css for the funky boxes-->
    <main role="main" class="container">
	
	<?php 
	  //if admin logged in
	  include_once("dbfunctions.php");
		 if (isset($_SESSION['u_ad'])) {
			 
			 //show whatever admin function inside the echo..
			 echo '
		<!--WILL NEED TO Add to DATABASE, DROPDOWN ADD-->
		 <p>The below will add to database, Then refresh page to show what you have just added :) </p>
		 <form class="form-inline mt-2 mt-md-0" action="add.inc.php" method="POST">
		 <input class="form-control mr-sm-2"  type="text" name="header" placeholder="header">
		  <input class="form-control mr-sm-2" type="text" name="body" placeholder="body of product">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitblog">Add</button>
		 </form>
		 
		<!--WILL NEED TO select all post headings display as then click and display add to database screen with previous info-->
		 <form class="form-inline mt-2 mt-md-0" action="edit.inc.php" method="POST">';
		  //show items in dropdown
		 showedit("SELECT user_body, user_header FROM datasblog");
		 echo '
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Save</button>
		 </form>
		 
		 <!--WILL NEED TO select all post headings display as then click and REMOVE ROW-->
		 <form class="form-inline mt-2 mt-md-0" action="delete.inc.php" method="POST">';
		 
		 //show items in dropdown
		 datas("SELECT user_body, user_header FROM datasblog");
		 echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitblog">Delete</button>
		 </form>'
		 ;
		 }
		 //show all data from database for blog
		 showdatabase("SELECT user_body, user_header FROM datasblog");
	
	
?>
      
    </main>