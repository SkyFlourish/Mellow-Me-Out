<?php include_once('header.php');
?>

    <body class="bg-light">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Create Login</h4>
		  
		  <!--form which invokes singup.inc.php with the action "POST" DO NOT MODIFY LINE BELOW-->
          <form class="needs-validation" action="signup.inc.php" method="POST">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" name="first" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" name="last" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" name="uid" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="password">Password <span class="text-muted"></span></label>
              <input type="password" class="form-control" name="pwd" placeholder="password">
              
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for updates.
              </div>
            </div>

            </div>
            </div>
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name ="submit">Create Account</button>
          </form>
        </div>
      </div>
	  </body>