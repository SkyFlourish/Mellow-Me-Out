<?php

// Load functions
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-blog-content.inc.php');
$administerBlogFunctions = $_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-blog-content.inc.php';
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-services-content.inc.php');
require ($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-services-price.inc.php');
require ($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-staff.inc.php');
//require ($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-booking.inc.php');

if (isset($_GET["selection"])) {
    $selection = $_GET["selection"];
	echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">';
    switch($selection) {
        case '1':
		
           

        case '2':
            // code...
            break;

        case '3':
            // code...
            break;

        case '4':
             echo '<form action="admin-page.php?action=addServicePricing" method="POST">
				<div class="col-md-8 order-md-1">';
			
				include 'db-connect.php';
				$result = mysqli_query($conn, "SELECT * FROM services");
					if (mysqli_num_rows($result) > 0) {
				// output data of each row
				echo "
                <h8>Select Service to add time and price to:</h8>
				<select class='custom-select d-block w-100' name = 'serviceid'>";
				while($row = mysqli_fetch_assoc($result)) {
				echo "<option value=" .$row["ServiceID"]. ">". $row["ServiceName"]. "</option>";
				}	
				echo '</select>	
				<p>
                <h8>Service Price</h8>
                <textarea class="form-control" placeholder="Service Price..." name="serviceprice" type="text" rows=1 cols=80></textarea>
                </p>
				<p>
				<p>
                <h8>Service Time</h8>
                <textarea class="form-control" placeholder="Service Time..." name="servicetime" type="text" rows=1 cols=80></textarea>
                </p>
				</div>
				<p> </p>
				<button class="btn btn-primary" type="submit" name="addToThis" sytle="background-color: green; height: 340px; width: 340px; color: white; ">ADD TIME
                </button>
				
                </form>';
				
		}
            break;

        case '5':
            // code...
            break;

        case '6':
            echo '<form action="admin-page.php?action=removeBlog" method="POST">';
			
				include 'db-connect.php';
				$result = mysqli_query($conn, "SELECT * FROM blogcontent");
					
				// output data of each row
				echo "<p></p><select class='custom-select d-block w-100' name = 'deleteThis'>";
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
				echo "<option value=" .$row["BlogID"]. ">". $row["BlogTitle"]. "</option>";
				}	
				}
				echo '</select>	
				<p> </p>
				<button class="btn btn-primary" type="submit" name="removeblog" sytle="background-color: green; height: 340px; width: 340px; color: white; ">REMOVE BLOG
                </button>
                </form>';
				
		
            break;

        case '7':
            echo '<form action="admin-page.php?action=removeService" method="POST">';
			
				include 'db-connect.php';
				$result = mysqli_query($conn, "SELECT * FROM services");
					
				// output data of each row
				echo "<p></p><select class='custom-select d-block w-100' name = 'deleteThisService'>";
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
				echo "<option value=" .$row["ServiceID"]. ">". $row["ServiceName"]. "</option>";
				}
				}				
				echo '</select>	
				<p> </p>
				<button class="btn btn-primary" type="submit" name="removeservice" sytle="background-color: green; height: 340px; width: 340px; color: white; ">REMOVE SERVICE
                </button>
                </form>';
				
		
            break;

        case '8':
            echo '<form action="admin-page.php?action=removeStaff" method="POST">';
			
				include 'db-connect.php';
				$result = mysqli_query($conn, "SELECT * FROM staff");
					
				// output data of each row
				echo "<p> </p><select class='custom-select d-block w-100' name = 'deleteStaff'>";
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
				echo "<option value=" .$row["FirstName"]. ">". $row["FirstName"]. " ". $row["LastName"]. "; ". $row["Username"]. "</option>";
				}	
				}
				echo '</select>	
				<p> </p>
				<button class="btn btn-primary" type="submit" name="removestaff" sytle="background-color: green; height: 340px; width: 340px; color: white; ">REMOVE STAFF
                </button>
                </form>';
				
		
            break;

        case '9':
            echo '<form action="admin-page.php?action=addBlog" method="POST">
                <p>
                <div class="col-md-8 order-md-1">
				<div class="row">
				<h8>  Title</h8>
                <textarea class="form-control" placeholder="Title..." name="title" type="text"></textarea>
                <p>
				</p>
				</div>
				<div class="row">
                <p> </p>
                <h8>  Blog Category</h8>
                <textarea class="form-control" placeholder="Category..." name="category" type="text"></textarea>
                <p></p>
				</div>
				<div class="row">
                <p>
                <h8>  Blog Contents</h8>
                <textarea class="form-control" placeholder="Blog content..." name="content" type="text" rows=10 cols=80></textarea>
                </p>
				</div>
				</div>
				<p> </p>
                <button  class="btn btn-primary" type="submit" name="submitblog" >SUBMIT BLOG
                </button>
				<p> </p>
                </form>';
            break;

        case '10':
            echo '<form action="admin-page.php?action=addService" method="POST" enctype="multipart/form-data">
                <p>
				<div class="col-md-8 order-md-1">
                <h8>  Service Name</h8>
                <textarea class="form-control" placeholder="Service Name..." name="servicename" type="text" rows=1 cols=80></textarea>
                </p>
				<p>
                <h8>  Service Price</h8>
                <textarea class="form-control" placeholder="Service Price..." name="serviceprice" type="text" rows=1 cols=80></textarea>
                </p>
				<p>
                <h8>  Service Type</h8>
                <textarea class="form-control" placeholder="Service Type..." name="servicetype" type="text" rows=1 cols=80></textarea>
                </p>
				<p>
                <h8>  Service Time</h8>
                <textarea class="form-control" placeholder="Service Time..." name="servicetime" type="text" rows=1 cols=80></textarea>
                </p>
				<p>
                  Select image to upload:
				<input type="file" name="fileToUpload" id="fileToUpload">
				</p>
                <p>
                <h8>  Service Description</h8>
                <textarea class="form-control" placeholder="Service Description..." name="servicedescription" type="text" rows=10 cols=80></textarea>
                </p>
				</div>
				<p> </p>
                <button type="submit" class="btn btn-primary" name="submitservice" sytle="background-color: green; height: 340px; width: 340px; color: white; ">SUBMIT SERVICE
                </button>
                </form>';
            break;
        case '11':
            echo '<form action="admin-page.php?action=addStaff" method="POST">
                <p>
				<div class="col-md-8 order-md-1">
                <h8>FirstName</h8>
                <textarea class="form-control" placeholder="Blog content..." name="firstname" type="text" rows=1 cols=80></textarea>
                </p>
				<h8>LastName</h8>
                <textarea class="form-control" placeholder="Blog content..." name="lastname" type="text" rows=1 cols=80></textarea>
                </p>
                <h8>Username</h8>
                <textarea class="form-control" placeholder="Blog content..." name="username" type="text" rows=1 cols=80></textarea>
                </p>
				<h8>Password</h8>
                <input class="form-control" type="password" name="pass">
                </p>
				<p> </p>
				</div>
                <button type="submit" class="btn btn-primary" name="submitstaff" sytle="background-color: green; height: 340px; width: 340px; color: white; ">SUBMIT BLOG
                </button>
                </form>';
            break;
		case '13':
            echo '<form action="admin-page.php?action=removeServicePricing" method="POST">';
			
				include 'db-connect.php';
				$resultlocal = mysqli_query($conn, "SELECT * FROM servicespricing");
				
					
				// output data of each row
				
				echo "<p> </p><select class='custom-select d-block w-100' name = 'deleteThisServicePricing'>";
				if (mysqli_num_rows($resultlocal) > 0) {
					while($rowlocal = mysqli_fetch_assoc($resultlocal)) {
					$sqlid = mysqli_real_escape_string($conn, $rowlocal["ServiceID"]);
					$services = mysqli_query($conn, "SELECT * FROM services WHERE ServiceID = $sqlid");
					while($rowname = mysqli_fetch_assoc($services)) 
					{
						
					
					echo "<option value=" .$rowlocal["ServicePricingID"]. "> " . $rowname["ServiceName"]. " ". $rowlocal["ServicePrice"]. ", " . $rowlocal["ServiceTime"]. "</option>";
					}
				}	
				}
				echo '</select>	
				<p> </p>
				<button type="submit" class="btn btn-primary" name="removeservicepricing" sytle="background-color: green; height: 340px; width: 340px; color: white; ">REMOVE TIME
                </button>
                </form>';
				
		
        default:
            // code...
            break;
    }
}

if (isset($_GET["action"])) {
    $action = $_GET["action"];
    switch ($action) {
    case 'addBlog':
        // code...
        addBlogEntry();
        break;
	case 'addService':
        // code...
        addServicesEntry();
        break;
	case 'addServicePricing':
        // code...
        addServicesPricingEntry();
        break;
	case 'addStaff':
        // code...
        addStaff();
        break;
	case 'removeBlog':
        // code...
		if(isset($_POST["deleteThis"])) {
        removeBlogEntry($_POST["deleteThis"]);
		}
        break;
	case 'removeService':
        // code...
		if(isset($_POST["deleteThisService"])) {
        removeServiceEntry($_POST["deleteThisService"]);
		}
        break;
	case 'removeServicePricing':
        // code...
		if(isset($_POST["deleteThisServicePricing"])) {
        removeServicePricingEntry($_POST["deleteThisServicePricing"]);
		}
        break;
	case 'removeStaff':
        // code...
		if(isset($_POST["deleteStaff"])) {
        removeStaff($_POST["deleteStaff"]);
		}
        break;
    default:
        // code...
        break;
    }
}
