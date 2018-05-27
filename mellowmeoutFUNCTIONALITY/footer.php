<script tupe ="text/javascript">

function validateLogin()
{
  var x = document.forms["login"]["uid"].value;
  var y = document.forms["login"]["pwd"].value;

  if (x == "")
  {
      alert("A username is required to login.");
      return false;
  }
  if(y == "")
  {
    alert("A password is required to login");
    return false;
  }
}

// Validation for the Newsletter
function validateNewsletter()
{
  // Gets the input
  var x = document.forms["newsLetter"]["email"].value;
  //checks if empty
  if (x == "")
  {
    //alerts and returns false if true
    alert("An email needs to be supplied");
    return false;
  }
  else if (!x.includes("@") || !x.includes("."))
  {
    alert("That email is not in the proper format please try again.")
    return false;
  }

}


</script>


<footer>
<!-- Social Media -->

<!--KEEP LOGIN SESSION RUNNING THROUGHOUT PAGES -->

        <div class="footer1">
        <h4>Follow Us</h4>

            <ul>
                <li><a href="a">Facebook</a></li>
                <li><a href="a">Instagram</a></li>
                <li><a href="a">Twitter</a></li>
            </ul>
        </div>

        <!-- Help area -->
        <div class="footer2">
        <h4>Help</h4>

             <ul>
                 <li><a href="contact-us.php">Contact Us</a></li>
                 <li><a href="faq.php">FAQ</a></li>
                 <li><a href="policy.php">Privacy Policy</a></li>

            </ul>
        </div>

        <div class="footer4">
        <h4>Store Hours</h4>

             <ul>
                 <li><b>Mon:</b> 9am - 5pm</li>
                 <li><b>Tue:</b> 9am - 5pm</li>
                 <li><b>Wed:</b> 9am - 5pm</li>
                 <li><b>Thu:</b> 9am - 5pm</li>
                 <li><b>Fri:</b> 9am - 5pm</li>
                 <li><b>Sat:</b> Closed</li>
                 <li><b>Sun:</b> Closed</li>

            </ul>
        </div>
        <!-- Newsletter area -->
        <div class="footer3">
            <h4>Newsletter</h4>
            <p>Signup to our newsletter for the latest news</p>
            <form name="newsLetter" action="footer.php" method="post">
                <input type="email" name="email"  placeholder="Email address"  maxlength="32" size="14">
                <!-- Disabled for validation testing for now -->
              <!--  <button type="submit" onsubmit="return validateNewsletter()">SUBSCRIBE</button> -->
                <button type="button" onclick="return validateNewsletter()">SUBSCRIBE</button>
            </form>

        </div>

		<div class="footer4">
            <h4>Account</h4>
			<?php
			//if admin logged in
			if (isset($_SESSION['u_ad'])) {
				echo '<form action="logout.inc.php" method="POST">
						<a href="admin.php">  Admin Portal</a>
						<button type="submit" name="submit">Admin Logout</button>

					  </form>';}
			//if standard user logged in
			elseif (isset($_SESSION['u_id'])) {
				echo '<form action="logout.inc.php" method="POST">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Logout</button>
					  </form>';}
		 //if not logged in at all
			else {
				echo'<ul>
						<a href="sign-up.php"><b><u>Sign Up</u></b></br></a>
						Or Log In Below
					</ul>
					<form action="login.inc.php" method="POST" name="login">
						<input type="username" name="uid"  placeholder="Username"  maxlength="32" size="14">
						<input type="password" name="pwd"  placeholder="Password"  maxlength="32" size="14">
            <button type="button" name ="button" onclick="return validateLogin()">LOG IN</button>
            <!--- Disabled for testing at the moment -->
            <!---  <button type="submit" name ="submit">LOG IN</button> -->
					</form>';}
			?>
        </div>

		<div class="footerCopyright">
            <p>© 2018 Mellow Me Out</p>
        </div>
</footer>
