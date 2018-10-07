<?php

// Functions will be divided up once functionality is ok
// Remove blog entry
// Requries us to remove rows from all tables referencing the foreign key first

function addServicesPricingEntry() {
// Won't run until a submition value is sent
if (isset($_POST["addToThis"])) {
	include 'db-connect.php';
        if (isset($_POST["serviceid"])) {
            $id = mysqli_real_escape_string($conn, $_POST["serviceid"]);
            $idMissing = false;
        }
        else {
            echo "serviceid is missing";
            $idMissing = true;
        }
        if (isset($_POST["servicetime"])) {
            $time = mysqli_real_escape_string($conn, $_POST["servicetime"]);
            $timeMissing = false;
        }
        else {
            echo "servicetime is missing";
            $timeMissing = true;
        }
		if (isset($_POST["serviceprice"])) {
            $price = mysqli_real_escape_string($conn, $_POST["serviceprice"]);
            $priceMissing = false;
        }
        else {
            echo "serviceprice is missing";
            $priceMissing = true;
        }
        if ($timeMissing == true || $priceMissing == true ||
            $idMissing == true) {
            echo "Please fill the form and true again";
        }
        if ($timeMissing == false && $priceMissing == false &&
            $idMissing == false) {
            global $conn;
            $sql = "INSERT INTO servicespricing (ServiceID,ServicePrice,ServiceTime) VALUES ('$id', '$price', '$time');";
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

}
function removeServicePricingEntry($input) {
include 'db-connect.php';
$servicePricingID = mysqli_real_escape_string($conn, $input);
// Will error out if input is not an integer

$sql = "DELETE FROM servicespricing WHERE ServicePricingID = '$servicePricingID'";
    if (mysqli_query($conn, $sql)) {
            // Due for cleanup
        echo "<p>Service pricing entry removed successfully.</p>";
    }
    else {
        echo "<p>Service pricing entry not removed successfully.</p>";
    }


}
