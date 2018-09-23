<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <!--Icon and Title-->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>Contact - MellowMeOut</title>
        <!--Keywords for search-->
        <meta name="keywords" content="Massage, eyelash extensions, beauty, melbourne, mellowMeOut, spas, Brow Tint, Aromatherapy Massage, Lymphatic massage, Indian head massage, Body Mud wrap, Body exfoliate, Eyelash Tint, Combat Stress, Revitalise ">
        <!--Description of page-->
        <meta name="description" content="Mellow Me Out wants to be your primary choice for all your beauty and relaxation needs. We have truly soothing and calming pampering experiences available for every client. It’s an ideal place to gather with friends, reconnect with loved ones or turn to as your destination for self-renewal and stress relief.">

        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Mobile view-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="contact-us.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

		<script>
		// overall check when submitting the form
		function validate_form(frm)
		{
			var fname, lname, mail, subject, message;
			fname = document.getElementById('fname').value;
			lname = document.getElementById('lname').value;
			message = document.getElementById('message').value;
			subject = document.getElementById('subject').value;
			mail = document.getElementById('mail').value;

			var alpha_pattern = /^[a-zA-Z\s]+$/;
			var email_pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

			if(fname=="")
			{
				alert('First name is mandatory');
				document.getElementById('fname').focus();
				return false;
			}
			else if(alpha_pattern.test(fname)==false)
			{
				alert('The first name must contain alphabets and spaces only');
				document.getElementById('fname').focus();
				return false;
			}
			else if(lname=="")
			{
				alert('Last name is mandatory');
				document.getElementById('lname').focus();
				return false;
			}
			else if(alpha_pattern.test(lname)==false)
			{
				alert('The last name must contain alphabets and spaces only');
				document.getElementById('lname').focus();
				return false;
			}
			else if(mail=="")
			{
				alert('E-Email name is mandatory');
				document.getElementById('mail').focus();
				return false;
			}
			else if(email_pattern.test(mail)==false)
			{
				alert('The email is not in the valid format');
				document.getElementById('mail').focus();
				return false;
			}
			else if(subject=="")
			{
				alert('Subject name is mandatory');
				document.getElementById('subject').focus();
				return false;
			}
			else if(message=="")
			{
				alert('Message is mandatory');
				document.getElementById('subject').focus();
				return false;
			}
			else
			{
				return true;
			}
		}

		// dynamic error messages
		$(document).ready(function(){

		  $('#fname').focusout(function(){
			fname_validate();
		  });

		  $('#lname').focusout(function(){
			lname_validate();
		  });

		  $('#mail').focusout(function(){
			mail_validate();
		  });

		  $('#subject').focusout(function(){
			subject_validate();
		  });

		  $('#message').focusout(function(){
			message_validate();
		  });

		  function fname_validate() {
			var pattern = /^[a-zA-Z\s]+$/;
			var fname = $('#fname').val();

			// check that firstname only contains alphabets
			if(fname !== '') {
			  if(pattern.test(fname))
			  {
				  $('#lblFirstName').css('color','green');
				  $('#fname').css('border','2px solid green');
				  $('#success_fname').css('display','inline-block');
				  $('#error_fname').css('display','none');
				  $('#warning_fname').css('display','none');
				  $('#span1_fname').css('display','none');
				  $('#span2_fname').css('display','none');
			  }
			  else
			  {
				$('#lblFirstName').css('color','red');
				$('#fname').css('border','2px solid red');
				$('#success_fname').css('display','none');
				$('#error_fname').css('display','inline-block');
				$('#warning_fname').css('display','none');
				$('#span1_fname').css('display','inline-block');
				$('#span2_fname').css('display','none');
			  }
			}
			else { // field is blank
				$('#lblFirstName').css('color','red');
				$('#fname').css('border','2px solid red');
				$('#success_fname').css('display','none');
				$('#error_fname').css('display','none');
				$('#warning_fname').css('display','inline-block');
				$('#span1_fname').css('display','none');
				$('#span2_fname').css('display','inline-block');
			}
		  }

		  function lname_validate() {
			var pattern = /^[a-zA-Z\s]+$/;
			var lname = $('#lname').val();

			// check that lastname only contains alphabets
			if(lname !== '') {
			  if(pattern.test(lname))
			  {
				  $('#lblLastName').css('color','green');
				  $('#lname').css('border','2px solid green');
				  $('#success_lname').css('display','inline-block');
				  $('#error_lname').css('display','none');
				  $('#warning_lname').css('display','none');
				  $('#span1_lname').css('display','none');
				  $('#span2_lname').css('display','none');
			  }
			  else
			  {
				$('#lblLastName').css('color','red');
				$('#lname').css('border','2px solid red');
				$('#success_lname').css('display','none');
				$('#error_lname').css('display','inline-block');
				$('#warning_lname').css('display','none');
				$('#span1_lname').css('display','inline-block');
				$('#span2_lname').css('display','none');
			  }
			}
			else { // field is blank
				$('#lblLastName').css('color','red');
				$('#lname').css('border','2px solid red');
				$('#success_lname').css('display','none');
				$('#error_lname').css('display','none');
				$('#warning_lname').css('display','inline-block');
				$('#span1_lname').css('display','none');
				$('#span2_lname').css('display','inline-block');
			}
		  }


		  function mail_validate() {
			var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/
			var mail = $('#mail').val();

			// check that email only contains alphabets
			if(mail !== '') {
			  if(pattern.test(mail))
			  {
				  $('#lblEmail').css('color','green');
				  $('#mail').css('border','2px solid green');
				  $('#success_mail').css('display','inline-block');
				  $('#error_mail').css('display','none');
				  $('#warning_mail').css('display','none');
				  $('#span1_mail').css('display','none');
				  $('#span2_mail').css('display','none');
			  }
			  else
			  {
				$('#lblEmail').css('color','red');
				$('#mail').css('border','2px solid red');
				$('#success_mail').css('display','none');
				$('#error_mail').css('display','inline-block');
				$('#warning_mail').css('display','none');
				$('#span1_mail').css('display','inline-block');
				$('#span2_mail').css('display','none');
			  }
			}
			else { // field is blank
				$('#lblEmail').css('color','red');
				$('#mail').css('border','2px solid red');
				$('#success_mail').css('display','none');
				$('#error_mail').css('display','none');
				$('#warning_mail').css('display','inline-block');
				$('#span1_mail').css('display','none');
				$('#span2_mail').css('display','inline-block');
			}
		  }


		  function subject_validate() {
			var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var subject = $('#subject').val();

			// check that subject is mandatory
			if(subject != '') {

			}
			else { // field is blank
				$('#lblSubject').css('color','red');
				$('#subject').css('border','2px solid red');
				$('#success_subject').css('display','none');
				$('#error_subject').css('display','none');
				$('#warning_subject').css('display','inline-block');
				$('#span1_subject').css('display','none');
				$('#span2_subject').css('display','inline-block');
			}
		  }

		function message_validate() {
			var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var message = $('#message').val();

			// check that message is mandatory
			if(message != '') {

			}
			else { // field is blank
				$('#lblMessage').css('color','red');
				$('#message').css('border','2px solid red');
				$('#success_message').css('display','none');
				$('#error_message').css('display','none');
				$('#warning_message').css('display','inline-block');
				$('#span1_message').css('display','none');
				$('#span2_message').css('display','inline-block');
		  }
		 }

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
<article id="bg-contact-header">
    <div class="container">
    <h1 class="text-center">Contact Us<br>
             <!-- CONTACT INFOMATION CODE -->
            <small class="text-muted">Here at MellowMeOut, your feedback helps improve our services so that everyone is satisfied.</small>
        </h1>
        <hr>
   
        <!--Contact Cards-->
        <div class="row">
             <!--Address-->
            <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h4 class="card-title contact-underline"><i class="fas fa-home"></i> Address</h4>
                    <p class="card-text ">123 dove road Boronia, VIC, AUSTRALIA</p>
                </div>
            </div>
            </div>
            <!--Phone-->
            <div class="col-md-4">
             <div class="card shadow">
                <div class="card-body text-center ">
                    <h4 class="card-title contact-underline"><i class="fas fa-mobile-alt"></i> Phone</h4>
                    <p class="card-text">(03)98278685</p>
                </div>
            </div>
            </div>
            <!--Email-->
            <div class="col-md-4">
             <div class="card shadow">
                <div class="card-body text-center">
                    <h4 class="card-title contact-underline"><i class="far fa-envelope"></i> Email</h4>
                    <p class="card-text">info@mellowmeout.com</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</article>
<article id="bg-form">
<div class="container">
    <div class="row" >
        <div class="col-md-12">
            <form name="myForm" class="shadow" method="post" action="form.php" id="contact-style" onsubmit="return validate_form(this)">
           <!-- FORM SECTION -->
            <div class="form-group">
                <h3>Contact Form</h3>
			  <label id="lblFirstName">First Name</label><br/>
			  
			  <input class="form-control" type="text" id="fname" name="fname" placeholder="First name here">
            <div class="feedback-container">
            <i class="fa fa-check" id="success_fname"></i>
			  <i class="fa fa-times" id="error_fname"></i>
			  <i class="fa fa-exclamation" id="warning_fname"></i>
			  <span class="span1" id="span1_fname">The first name can only contain alphabets</span>
			  <span class="span2" id="span2_fname">The first name is mandatory</span>
                </div>
			</div>
            <div class="form-group" >
			  <label id="lblLastName">Last Name</label><br />
			  <input  class="form-control" type="text" id="lname" name="lname" placeholder="Last name here">
            <div class="feedback-container">
                <i class="fa fa-check" id="success_lname"></i>
			  <i class="fa fa-times" id="error_lname"></i>
			  <i class="fa fa-exclamation" id="warning_lname"></i>
			  <span class="span1" id="span1_lname">The last name can only contain alphabets</span>
			  <span class="span2" id="span2_lname">The last name is mandatory</span>
                </div>
			</div>
            <div class="form-group">
			  <label id="lblEmail">Email</label><br />
			  <input class="form-control" type="text" id="mail" name="mail" placeholder="Email here">
               <div class="feedback-container">
                <i class="fa fa-check" id="success_mail"></i>
			  <i class="fa fa-times" id="error_mail"></i>
			  <i class="fa fa-exclamation" id="warning_mail"></i>
			  <span class="span1" id="span1_mail">The email is not in the valid format</span>
			  <span class="span2" id="span2_mail">The email is mandatory</span>
                </div>
			</div>
            <div class="form-group">
			  <label id="lblSubject">Subject</label><br />
			  <input class="form-control" type="text" id="subject" name="subject" placeholder="Subject here">
                <div class="feedback-container">
                <i class="fa fa-check" id="success_subject"></i>
			  <i class="fa fa-times" id="error_subject"></i>
			  <i class="fa fa-exclamation" id="warning_subject"></i>
			  <span class="span2" id="span2_subject">The subject is mandatory</span>
                </div>
			</div>
            <div class="form-group">
			  <label id="lblMessage">Message</label><br />
			  <i class="fa fa-check" id="success_message"></i>
			  <i class="fa fa-times" id="error_message"></i>
			  <i class="fa fa-exclamation" id="message_message"></i>
			  <span class="span2" id="span2_message">The message is mandatory</span>
              <textarea name="message" id="message" id="textarea" maxlength="300" placeholder="Enter your message here"></textarea>
            </div>

            <input type="submit" value="Submit" class="btn btn-primary">

        </form>
        </div>
       
    </div>
</div>
</article>

<!-- FOOTER CODE-->
<?php include 'footer.php';?>

</body>

</html>

