<?php

// Functions will be divided up once functionality is ok
// Remove blog entry
// Requries us to remove rows from all tables referencing the foreign key first

function addServicesEntry() {
// Won't run until a submition value is sent
if (isset($_POST["submitservice"])) {
	include 'db-connect.php';
	$target_dir = "img/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
        if (isset($_POST["servicename"])) {
            $servicename = mysqli_real_escape_string($conn, $_POST["servicename"]);
            $servicenameMissing = false;
        }
        else {
            echo "Title is missing";
            $servicenameMissing = true;
        }
        if (isset($_POST["serviceprice"])) {
            $serviceprice = mysqli_real_escape_string($conn, $_POST["serviceprice"]);
            $servicepriceMissing = false;
        }
		else {
            echo "price is missing";
            $servicepriceMissing = true;
        }
        if (isset($_POST["servicetype"])) {
            $servicetype = mysqli_real_escape_string($conn, $_POST["servicetype"]);
            $servicetypeMissing = false;
        }
        else {
            echo "type is missing";
            $servicetypeMissing = true;
        }
        if (isset($_POST["servicetime"])) {
            $servicetime = mysqli_real_escape_string($conn, $_POST["servicetime"]);
            $servicetimeMissing = false;
        }
        else {
            echo "time is not here";
            $servicetimeMissing = true;
        }
		if (isset($_POST["fileToUpload"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
						$uploadOk = 1;
					} else {
					echo "File is not an image.";
					$uploadOk = 0;
					}
				}
				// Check if file already exists
				if (file_exists($target_file)) {
					echo "Sorry, file already exists.";
					$serviceimgMissing = true;
					$uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					echo "Sorry, your file was not uploaded.";
					$serviceimgMissing = true;
					// if everything is ok, try to upload file
				} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					$serviceimg = basename( $_FILES["fileToUpload"]["name"]);
					$serviceimgMissing = false;
				} else {
					echo "Sorry, there was an error uploading your file.";
					$serviceimgMissing = true;
					}
				}
			}
		if (isset($_POST["servicedescription"])) {
            $servicedescription = mysqli_real_escape_string($conn, $_POST["servicedescription"]);
            $servicedescriptionMissing = false;
        }
        else {
            echo "description is not here";
            $servicedescriptionMissing = true;
        }
		
        if ($servicedescriptionMissing == true || $servicenameMissing == true ||
            $servicepriceMissing == true || $servicetypeMissing == true ||
            $servicetimeMissing == true || $serviceimgMissing == true) {
            echo "Please fill the form and true again";
        }
        if ($servicedescriptionMissing == false && $servicenameMissing == false &&
            $servicepriceMissing == false && $servicetypeMissing == false &&
            $servicetimeMissing == false && $serviceimgMissing == false) {
            global $conn;
            $sql = "INSERT INTO services (ServiceName,ServicePrice,ServiceType,ServiceTime,ServiceImg,ServiceDescription) VALUES ('$servicename', '$serviceprice', '$servicetype', '$servicetime', '$serviceimg', '$servicedescription');";
            if (mysqli_query($conn, $sql)) {
                echo "<p>Record inserted successfully</p>";
                mysqli_close($conn);
            }
            else {
                echo "<p>Record could not be inserted</p>";
                mysqli_close($conn);
            }
        }
}


function removeServiceEntry($input) {
include 'db-connect.php';
$serviceID = mysqli_real_escape_string($conn, $input);
// Will error out if input is not an integer

$sqlpricing = "DELETE FROM servicespricing WHERE ServiceID = '$serviceID'";
if (mysqli_query($conn, $sqlpricing)) {
            // Due for cleanup
        echo "<p>Servicepricing entries removed successfully.</p>";
    }
    else {
        echo "";
    }
$sql = "DELETE FROM services WHERE ServiceID = '$serviceID'";
    if (mysqli_query($conn, $sql)) {
            // Due for cleanup
        echo "<p>Service entry removed successfully.</p>";
    }
    else {
        echo "<p>Service entry not removed successfully.</p>";
    }


}
