<?php

// Functions will be divided up once functionality is ok
// Remove blog entry
// Requries us to remove rows from all tables referencing the foreign key first

function addCategory() {
// Won't run until a submition value is sent
if (isset($_POST["submitcategory"])) {
	include 'db-connect.php';
        if (isset($_POST["category"])) {
            $id = mysqli_real_escape_string($conn, $_POST["category"]);
            $idMissing = false;
        }
        else {
            echo "categoryis missing";
            $idMissing = true;
        }
}
	
        if ($idMissing == false) {
            global $conn;
            $sql = "INSERT INTO servicetypes (ServiceType) VALUES ('$id');";
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


function removeCategoryEntry($input) {
include 'db-connect.php';
$servicedeleteID = mysqli_real_escape_string($conn, $input);
// Will error out if input is not an integer

$sql = "DELETE FROM servicetypes WHERE ServiceTypeID = '$servicedeleteID'";
    if (mysqli_query($conn, $sql)) {
            // Due for cleanup
        echo "<p>Service pricing entry removed successfully.</p>";
    }
    else {
        echo "<p>Service pricing entry not removed successfully.</p>";
    }


}
