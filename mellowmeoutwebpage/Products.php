<?php include_once('header.php');
?>
	<!--using bootstraps css for the funky boxes-->
    <main role="main" class="container">
	
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
	
      <div class="jumbotron">
        <h1>3 PCS of something</h1>
        <p class="lead">This example is a quick exercise to illustrateo.</p>
        
      </div>
	  <div class="jumbotron">
        <h1>3 PCS of something</h1>
        <p class="lead">This example is a quick exercise to illustrateo.</p>
        
      </div>
    </main>