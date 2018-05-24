<?php

if (isset($_GET["BlogID"])) {

  include_once 'db-connect.php';

  $BlogID = mysqli_real_escape_string($conn,$_GET['BlogID']);

  $sqlquery1 = "SELECT BlogContent,BlogContentTimestamp,BlogTitle FROM BlogContent";
  $sqlquery2 = "SELECT bc.BlogCommentText, bc.Username as Username, bc.BlogCommentTimestamp FROM BlogContent AS b INNER JOIN BlogComments AS bc ON b.BlogID = bc.BlogID WHERE b.BlogID = 1";

  $contentqueryresult = mysqli_query($conn, $sqlquery1);
  $commentqueryresult = mysqli_query($conn, $sqlquery2);

  if (mysqli_num_rows($contentqueryresult) == 1) {
      $row = mysqli_fetch_assoc($contentqueryresult);
      // Timie string should be grabbed and made into something that fits
      // our agreed format format.
      // Comment count will be a seperate query that will be needed (or a subquery).
      echo "
		    <h2 style='text-align:left'>". $row["BlogTitle"]. "</h2>
        <!-- Title & comment count -->
        <!-- Comment link would either open another page where the comment and the blog post would
        be on the one page, alongside a back button -->
	        <p class='categories'>". $row["BlogContentTimestamp"]. "</p><hr>
        <!-- Content -->
	        <p class= 'contents'>". $row["BlogContent"]. "
          </p>
        </hr>
      ";
  }

  if (mysqli_num_rows($commentqueryresult) > 0) {
    while ($row = mysqli_fetch_assoc($commentqueryresult)) {
      echo "
        <hr><p class='contents'>". $row["BlogCommentText"]. "</p></hr>
        <br>
        <br>
        <hr><p class='Contents'>". $row["BlogCommentTimestamp"]. "</pc></hr>
        <hr><p class='contents'>". $row["Username"]. "</p></hr>
      ";
    }
  }
}

?>
