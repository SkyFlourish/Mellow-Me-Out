<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <!--Icon and Title-->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>Blog - MellowMeOut</title>
        <!--Keywords for search-->
        <meta name="keywords" content="Massage, eyelash extensions, beauty, melbourne, mellowMeOut, spas, Brow Tint, Aromatherapy Massage, Lymphatic massage, Indian head massage, Body Mud wrap, Body exfoliate, Eyelash Tint, Combat Stress, Revitalise ">
        <!--Description of page-->
        <meta name="description" content="Mellow Me Out wants to be your primary choice for all your beauty and relaxation needs. We have truly soothing and calming pampering experiences available for every client. It’s an ideal place to gather with friends, reconnect with loved ones or turn to as your destination for self-renewal and stress relief.">

        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Mobile view-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="blog.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { //run when page loads
                nav_Counter=4;
            });
        </script>
    </head>
<!-- Style Sheet for Nav and Footer-->
<style>
    <?php include 'nav_footer.css';?>
</style>

 <!-- ===CODE START=== -->
<body>
 <!-- NAVIGATION BAR CODE -->
<?php include'nav.php';?>
 <!-- End of Nav Code -->


   <!-- Blog Banner -->

<div class="row" id="blog-banner">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <div  class="text-center">
        <div class="jumbotron jumbotron-fluid" id="jumbo-style">
            <div class="container">
                 <h1>Mellow Me Out Blog</h1>
                    <h4>Keep up to date with the latest news about our store</h4>
            </div>
            </div>
    </div>
    </div>
    <div class="col-md-3"></div>
</div>

<article>
    <div class="container">
    <div class="row">
        <!-- CONTAINS CODE FOR BLOG SIDE BAR -->
        <div class="col-md-2">
            <div class="card card-style text-left" style="margin-top:30px;">
                <div class="card-body">
                 <!-- Catergories section-->
                <h6>Catergories</h6>
				<ul class="list-unstyled">
				<?php
				include($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');
				$result = mysqli_query($conn, "SELECT * FROM blogcategorys");
				if (mysqli_num_rows($result) > 0) {
				$loc = 1;
					while($row = mysqli_fetch_assoc($result))
						{
							echo'<li><a href="blog-dynamic.php?blogid='.$row["BlogCategoryID"].'">'.$row["BlogCategory"].'</a></li>';
						}
				} ?>
                </ul>
                </div>
            </div>
        </div>

         <!-- CONTAINS MAIN CONTENT FOR BLOG POSTS -->
		 <div class="col-md-10 text-left">
		<?php
		if (isset($_GET["blogid"]))
		{
			$id = mysqli_real_escape_string($conn, $_GET["blogid"]);
			$result = mysqli_query($conn, "SELECT * FROM blogcontent WHERE BlogCategory = $id");
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result))
						{
				echo'<article>
                <div class="card card-style" style="margin-top:30px; margin-bottom:30px;">
                    <div class="card-body" >
                         <!-- Post title and sub titles -->
                        <h3 class="card-title">'.$row["BlogTitle"].'</h3>
                        <h6 class="card-subtitle mb-2 text-muted">'.$row["BlogContentTimestamp"].'</h6>
                         <!-- Post image -->
                        <img class="card-img-top" src="img/'.$row["BlogContentImg"].'" alt="Card image cap" style="max-height:500px; margin-bottom:20px;">
                        <!-- Post Body -->
                        <p class="card-text">
                        '.$row["BlogContent"].'</p>
                        <div class = "comment-box">
                            <hr>
                            <h4>Comments - 0</h4>
                            <form action="/action_page.php">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="name" class="form-control" id="name" maxlength="32">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Message:</label>
                                    <textarea class="form-control" rows="5" id="comment" maxlength="300"></textarea>
                                </div>
                                 <button type="button" class="btn btn-primary">Comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>';
						}
				}
		}
		else
		{
			$result = mysqli_query($conn, "SELECT * FROM blogcontent");
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result))
						{
				echo'<article>
                <div class="card card-style" style="margin-top:30px; margin-bottom:30px;">
                    <div class="card-body" >
                         <!-- Post title and sub titles -->
                        <h3 class="card-title">'.$row["BlogTitle"].'</h3>
                        <h6 class="card-subtitle mb-2 text-muted">'.$row["BlogContentTimestamp"].'</h6>
                         <!-- Post image -->
                        <img class="card-img-top" src="img/'.$row["BlogContentImg"].'" alt="Card image cap" style="max-height:500px; margin-bottom:20px;">
                        <!-- Post Body -->
                        <p class="card-text">
                        '.$row["BlogContent"].'</p>
                        <div class = "comment-box">
                            <hr>
                            <h4>Comments - 0</h4>
                            <form action="/action_page.php">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="name" class="form-control" id="name" maxlength="32">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Message:</label>
                                    <textarea class="form-control" rows="5" id="comment" maxlength="300"></textarea>
                                </div>
                                 <button type="button" class="btn btn-primary">Comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>';
						}
				}
		}
		?>


</div>
</div>
</div>
</article>
<!-- FOOTER CODE-->
<?php include 'footer.php';?>

</body>

</html>
