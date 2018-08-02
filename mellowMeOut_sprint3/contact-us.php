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
                 
        <script type="text/javascript">
        $(document).ready(function() { //run when page loads
            nav_Counter=-1;
            var formErrorA = false;
            var formErrorB = false;
            var formErrorC = false;
            var formErrorD = false;
            var letters = /^[A-Za-z]+$/;
            var numbers = /^[0-9]+$/;
            var letterNumber = /^[0-9a-zA-Z]+$/;
            
            //CODE FOR TEXT AREA COUNTER
            var text_max = 300; //max character
            $('#textarea_feedback').html(text_max + ' characters remaining');
            $('#textarea').keyup(function() { //execute by keys
            var text_length = $('#textarea').val().length; //get the length
            var text_remaining = text_max - text_length; //get the new value
            
            if(text_remaining==0){
                 $("#textarea_feedback").css("color","red");
                        }
                        else if(text_remaining>0 && text_remaining<50 ){
                            $("#textarea_feedback").css("color","#f39c12");
                        }
                        else
                        {
                            $("#textarea_feedback").css("color","#3498db");
                        }
                
            $('#textarea_feedback').html(text_remaining + ' characters remaining');
            });
            
        });
            
       
 

        $('#textarea').keyup(function() { //execute by keys
            var text_length = $('#textarea').val().length; //get the length
            var text_remaining = text_max - text_length; //get the new value
             $('#textarea_feedback').html(text_remaining + ' characters remaining');
            
            });
            
            function validateForm() {
                //CHECK FIRST NAME
            if( document.myForm.fname.value == "" || document.myForm.fname.value.match(/[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/))
             {
                document.myForm.fname.focus() ;
                $(".alert-style").eq(0).css("display","block");
                formErrorA = true;
                
                
             }else{
                $(".alert-style").eq(0).css("display","none");
                 formErrorA = false;
             }
                //CHECK LAST NAME
            if( document.myForm.lname.value == ""|| document.myForm.lname.value.match(/[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/))
             {
                 document.myForm.fname.focus() ;
                $(".alert-style").eq(1).css("display","block");
                 formErrorB = true;
                
             }else{
                 $(".alert-style").eq(1).css("display","none");
                 formErrorB = false;
             }
                //CHECK EMAIL
            if( document.myForm.mail.value == "" )
             {
                 document.myForm.mail.focus() ;
                $(".alert-style").eq(2).css("display","block");
                 formErrorC = true;
                
             } else{
                 $(".alert-style").eq(2).css("display","none"); 
                 formErrorC = false;
             }  
                //CHECK SUBJECT
            if( document.myForm.subject.value == "" || document.myForm.subject.value.match(/[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/) )
             {
                 document.myForm.subject.focus() ;
                $(".alert-style").eq(3).css("display","block");
                 formErrorD = true;
               
             }else{
                 $(".alert-style").eq(3).css("display","none");
                 formErrorD = false;
             }
                //CHECK MESSAGE
                if(formErrorA ==false && formErrorB ==false && formErrorC ==false && formErrorD ==false){
                    return true;
                }else{
                    return false;
                    alert("errors");
                }
            }
            
    
            
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
<article id="bg-form">
<div class="container">
    <div class="row" >
        <div class="col-md-3">
        
        </div>
        <div class="col-md-6">
        <form name="myForm"  method="post" action="form.php" id="contact-style" onsubmit="return validateForm();" >
            <h1 class="text-center">Contact Us</h1>
             <!-- CONTACT INFOMATION CODE -->
            
            <ul class="list-unstyled">
                <li> <strong>Address:</strong> 123 dove road Boronia, VIC, AUSTRALIA </li>
                <li> <strong>Phone:</strong>  (03)98278685 </li>
                <li> <strong>Email:</strong>  info@mellowmeout.com</li>
            </ul>
            <hr>
            <p>Have some questions not covered by our FAQ? Send it from here and we'll be sure to respond as quickly as we can. Here at MellowMeOut, your feedback helps improve our services so that everyone is satisfied.</p>
           <!-- FORM SECTION -->
            <div class="form-group" >
                <label for="firstName">First Name: </label>
                <input name="fname" type="text" class="form-control" id="firstName" maxlength="24" placeholder="Enter first name here">
                <div class="alert alert-danger alert-style"><i class="fas fa-exclamation-circle"></i><strong>ERROR:</strong> First name cannot be blank and must contain only numbers or letters</div>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name: </label>
                <input name="lname" type="text" class="form-control" id="lastName" maxlength="24" placeholder="Enter last name here">
                <div class="alert alert-danger alert-style"><i class="fas fa-exclamation-circle"></i><strong>ERROR:</strong> Last name cannot be blank and must contain only numbers or letters</div>
            </div>
            <div class="form-group">
                <label for="mail">Email: </label>
                <input  name="mail" type="email" class="form-control" id="mail" maxlength="48" placeholder="janedoe@example.com">
                <div class="alert alert-danger alert-style"><i class="fas fa-exclamation-circle"></i>ERROR: Not a valid email address</div>
            </div>
            <div class="form-group">
                <label for="subject">Subject: </label>
                <input name="subject" type="text" class="form-control" id="subject" maxlength="64" placeholder="Subject of the message">
                <div class="alert alert-danger alert-style"><i class="fas fa-exclamation-circle"></i>ERROR: This field is required</div>
            </div>
            <div class="form-group">
                
                <label for="message">Message:</label>
                <textarea name="message" class="form-control" rows="5" id="textarea" maxlength="300" placeholder="Enter your message here"></textarea>
                <div class="alert alert-danger alert-style">ERROR: This field is required</div>
            </div>
            <div id="textarea_feedback">try</div>
            
            <input type="submit" value="Submit" class="btn btn-primary">
            
        </form>
        </div>
          <div class="col-md-3">
        
        </div>
    </div>
</div>    
</article>

<!-- FOOTER CODE-->
<?php include 'footer.php';?>

</body>

</html>

