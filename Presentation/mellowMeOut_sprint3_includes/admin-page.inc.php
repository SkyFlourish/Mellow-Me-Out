<?php

// Load functions
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-blog-content.inc.php');
$administerBlogFunctions = $_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-blog-content.inc.php';
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-services-content.inc.php');
require ($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-services-price.inc.php');
require ($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-services-category.inc.php');
require ($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-blog-category.inc.php');
require ($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-staff.inc.php');
require ($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-booking.inc.php');

if (isset($_GET["selection"])) {
    $selection = $_GET["selection"];
	echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">';
    switch($selection) {
        case '1':
		
           

        case '15':
			echo '<form action="admin-page.php?action=addBlogCategory" method="POST">
                <p>
				<div class="col-md-8 order-md-1">
                <h8>Add a category to Blog</h8>
                <textarea class="form-control" placeholder="Category Add.." name="category" type="text" rows=1 cols=80></textarea>
                </p>
				</div>
                <button type="submit" class="btn btn-primary" name="submitblogcategory" sytle="background-color: green; height: 340px; width: 340px; color: white; ">ADD CATEGORY
                </button>
                </form>';
            break;
		case '2':
			echo '<form action="admin-page.php?action=addCategory" method="POST">
                <p>
				<div class="col-md-8 order-md-1">
                <h8>Add a category to Services</h8>
                <textarea class="form-control" placeholder="Category Add.." name="category" type="text" rows=1 cols=80></textarea>
                </p>
				</div>
                <button type="submit" class="btn btn-primary" name="submitcategory" sytle="background-color: green; height: 340px; width: 340px; color: white; ">ADD CATEGORY
                </button>
                </form>';
            break;
        case '3':
            // code...
            break;

        case '4':
             echo '<form action="admin-page.php?action=addServicePricing" method="POST">
				<div class="col-md-8 order-md-1"><p></p>';
			
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
            //ADD BOOKING
			echo '
			<div class="col-md-20 order-md-1"><p></p>Please Select Date of Booking:
		<form name="submit" action="" id="name" method="POST">
		<input name = "datepicked" type="date"/><p>
		<br><button type="submit" name="submit" class="btn btn-primary">
			Show Available Sessions</button><br>
		
		 </form>'; 
		//if date is submitted and not null show dates 
		if (isset($_POST['submit']) && $_POST['datepicked'] != "") {
		include 'db-connect.php';
		$ar = array("6:30", "6:45", "7:00","7:15", "7:30","7:45", "8:00","8:15", "8:30", "8:45","9:00","9:15", "9:30",
		"9:45","10:00","10:15", "10:30","10:45", "11:00","11:15", "11:30","11:45", "12:00", "12:15",	
		"12:30", "12:45","13:00", "13:15","13:30","13:45", "14:00","14:15", "14:30", "14:45","15:00", 
		"15:15","15:30","15:45", "16:00", "16:15","16:30", "16:45","17:00","17:15", "17:30");
		echo '   Available sessions for: ' . $_POST["datepicked"] . '   ';
		echo'<p><div class="col-md-8 order-md-1">
		<form name="addbooking" action="admin-page.php?action=addBooking" method="POST">
		<div class="col-md-20 order-md-1">
		<select name ="add">';
		for($i=1;$i <= 45; $i++) {
			$start = $_POST["datepicked"];
			$str = "$start-$i";
			
			$result = mysqli_query($conn, "SELECT user_booking FROM booking WHERE user_booking = '$str'");
			if(mysqli_num_rows($result) == 0)
			{echo "<option value='$str'>" .  $ar[($i-1)] . "</option>";	}	
			else {echo "<option disabled>Booked Out" .  $ar[($i-1)] . "</option>";	}
		}
		echo'
		</select>
		<p></p><button type="submit" name="addbooking" class="btn btn-primary" >
			Book Out Selected Session</button>
		</form>
		</div>';
		}
		echo'</div></div>';
			
            break;
		case '17':
            //DELETE BOOKING
			if (isset($_POST['addbooking']) && $_POST['datepicked'] != "") {
		include 'db-connect.php';
		$ar = array("6:30", "6:45", "7:00","7:15", "7:30","7:45", "8:00","8:15", "8:30", "8:45","9:00","9:15", "9:30",
		"9:45","10:00","10:15", "10:30","10:45", "11:00","11:15", "11:30","11:45", "12:00", "12:15",	
		"12:30", "12:45","13:00", "13:15","13:30","13:45", "14:00","14:15", "14:30", "14:45","15:00", 
		"15:15","15:30","15:45", "16:00", "16:15","16:30", "16:45","17:00","17:15", "17:30");
		echo 'Booked sessions to delete: ' . $_POST["datepicked"] . '   ';
		echo'<form name="deletebooking" action="delete.inc.php" method="POST">
		<select name ="deletebooked">';
		for($i=1;$i <= 45; $i++) {
			$start = $_POST["datepicked"];
			$str = "$start-$i";
			
			$result = mysqli_query($conn, "SELECT user_booking FROM booking WHERE user_booking = '$str'");
			if(mysqli_num_rows($result) == 0)
			{echo "<option disabled>" .  $ar[($i-1)] . "</option>";	}	
			else {echo "<option value = '$str'>Booked " .  $ar[($i-1)] . "</option>";	}
		}
		echo'
		</select>
		<br><div class="col-md-20 order-md-1"><p></p><button type="submit" name="deletebooking" class="btn btn-primary">
			Unbook Selected Session</button></div>
		</form>';
			}	
			
			  echo '<div class="col-md-20 order-md-1"><p></p>Please Select Date of Booking:
		<form name="submitdelete" action="" id="name" method="POST">
		<input name = "datepickeddelete" type="date"/>
		<p></p><button type="submit" name="submitdelete" class="btn btn-primary">
			Show Sessions to delete/unbook</button></br></div>
		
		 </form>'; 
		
		//admin version to delete booking
		if (isset($_POST['submitdelete']) && $_POST['datepickeddelete'] != "") {
		include 'db-connect.php';
		$ar = array("6:30", "6:45", "7:00","7:15", "7:30","7:45", "8:00","8:15", "8:30", "8:45","9:00","9:15", "9:30",
		"9:45","10:00","10:15", "10:30","10:45", "11:00","11:15", "11:30","11:45", "12:00", "12:15",	
		"12:30", "12:45","13:00", "13:15","13:30","13:45", "14:00","14:15", "14:30", "14:45","15:00", 
		"15:15","15:30","15:45", "16:00", "16:15","16:30", "16:45","17:00","17:15", "17:30");
		echo 'Booked sessions to delete: ' . $_POST["datepickeddelete"] . '   ';
		echo'<form name="deletebooking" action="admin-page.php?action=deleteBooking" method="POST">
		<select name ="deletebooked">';
		for($i=1;$i <= 45; $i++) {
			$start = $_POST["datepickeddelete"];
			$str = "$start-$i";
			
			$result = mysqli_query($conn, "SELECT user_booking FROM booking WHERE user_booking = '$str'");
			if(mysqli_num_rows($result) == 0)
			{echo "<option disabled>" .  $ar[($i-1)] . "</option>";	}	
			else {echo "<option value = '$str'>Booked " .  $ar[($i-1)] . "</option>";	}
		}
		echo'
		</select>
		<p></p><button type="submit" name="deletebooking" class="btn btn-primary">
			Unbook Selected Session</button>
		</form>';
			}	
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
            echo '<form action="admin-page.php?action=addBlog" method="POST" enctype="multipart/form-data">
                <p>
                <div class="col-md-8 order-md-1">
				<h8>  Title</h8>
                <textarea class="form-control" placeholder="Title..." name="title" type="text" rows=1 cols=80></textarea>
                <p>
				</p>
                <p> </p>';
                include 'db-connect.php';
				$result = mysqli_query($conn, "SELECT * FROM blogcategorys");
				if (mysqli_num_rows($result) > 0) {
				// output data of each row
				echo "
                <h8>Select blog category to add to</h8>
				<select class='custom-select d-block w-100' name = 'category'>";
				while($row = mysqli_fetch_assoc($result)) {
				echo "<option value=" .$row["BlogCategoryID"]. ">". $row["BlogCategory"]. "</option>";
				}	
				echo"</select>";
				}
				else
				{
					echo
					"<h8>PLEASE ADD A BLOG CATEGORY FIRST BEFORE YOU CONTINUE</h8>
					<select class='custom-select d-block w-100' name = 'serviceid'>
					<option disabled>PLEASE ADD A BLOG CATEGORY FIRST</option>
					</select>
					";
				}
				echo'<p></p><p>
                Select image to upload:
				<input type="file" name="fileToUploadBlog" id="fileToUploadBlog">
				</p>
                <p>
                <h8>  Blog Contents</h8>
                <textarea class="form-control" placeholder="Blog content..." name="content" type="text" rows=10 cols=80></textarea>
                </p>
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
				<p>';
				include 'db-connect.php';
				$result = mysqli_query($conn, "SELECT * FROM servicetypes");
				if (mysqli_num_rows($result) > 0) {
				// output data of each row
				echo "
                <h8>Select Service category/type to add to</h8>
				<select class='custom-select d-block w-100' name = 'servicetype'>";
				while($row = mysqli_fetch_assoc($result)) {
				echo "<option value=" .$row["ServiceTypeID"]. ">". $row["ServiceType"]. "</option>";
				}	
				echo"</select>";
				}
				else
				{
					echo
					"<h8>PLEASE ADD A SERVICE TYPE/CATEGORY FIRST BEFORE YOU CONTINUE</h8>
					<select class='custom-select d-block w-100' name = 'serviceid'>
					<option disabled>PLEASE ADD A SERVICE TYPE/CATEGORY FIRST</option>
					</select>
					";
				}
				echo'<p>
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
		case '12':
			//DELETE SERVICE TYPE
			echo '<form action="admin-page.php?action=removeCategory" method="POST">';
			
				include 'db-connect.php';
				$result = mysqli_query($conn, "SELECT * FROM servicetypes");
					
				// output data of each row
				echo "<p></p><select class='custom-select d-block w-100' name = 'deleteThisCategory'>";
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
				echo "<option value=" .$row["ServiceTypeID"]. ">". $row["ServiceType"]. "</option>";
				}
				}				
				echo '</select>	
				<p> </p>
				<button class="btn btn-primary" type="submit" name="removecategory" sytle="background-color: green; height: 340px; width: 340px; color: white; ">REMOVE CATEGORY
                </button>
                </form>';
				
		
			break;
			case '16':
			//DELETE SERVICE TYPE
			echo '<form action="admin-page.php?action=removeBlogCategory" method="POST">';
			
				include 'db-connect.php';
				$result = mysqli_query($conn, "SELECT * FROM blogcategorys");
					
				// output data of each row
				echo "<p></p><select class='custom-select d-block w-100' name = 'deleteThisBlogCategory'>";
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
				echo "<option value=" .$row["BlogCategoryID"]. ">". $row["BlogCategory"]. "</option>";
				}
				}				
				echo '</select>	
				<p> </p>
				<button class="btn btn-primary" type="submit" name="removeblogcategory" sytle="background-color: green; height: 340px; width: 340px; color: white; ">REMOVE CATEGORY
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
	case 'addBooking':
        // code...
        addBooking();
        break;
	case 'deleteBooking':
        // code...
        removeBooking();
        break;
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
	case 'addCategory':
        // code...
        addCategory();
        break;
	case 'removeCategory':
        // code...
		if(isset($_POST["deleteThisCategory"])) {
        removeCategoryEntry($_POST["deleteThisCategory"]);
		}
        break;
	case 'addBlogCategory':
        // code...
        addBlogCategory();
        break;
	case 'removeBlogCategory':
        // code...
		if(isset($_POST["deleteThisBlogCategory"])) {
        removeBlogCategoryEntry($_POST["deleteThisBlogCategory"]);
		}
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
