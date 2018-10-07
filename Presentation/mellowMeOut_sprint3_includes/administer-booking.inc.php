<?php

// Functions will be divided up once functionality is ok
// Remove blog entry
// Requries us to remove rows from all tables referencing the foreign key first

function addBooking() {
// Won't run until a submition value is sent
if (isset($_POST['addbooking'])) {
	include 'db-connect.php';
	if (isset($_POST["add"])) {
            $add = mysqli_real_escape_string($conn, $_POST["add"]);
            $addMissing = false;
        }
        else {
            echo "add is missing";
            $addMissing = true;
        }
}
        if ($addMissing == false) {
            global $conn;
            $sql = "INSERT INTO booking (user_booking) VALUES ('$add');";
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


function removeBooking() {
if (isset($_POST['deletebooking'])) {
	include 'db-connect.php';
	$deletethis = mysqli_real_escape_string($conn, $_POST['deletebooked']);
	//assign query to variable
	$sql = "DELETE FROM booking WHERE user_booking = '$deletethis'";
	//run query
	if (mysqli_query($conn, $sql)) {
            // Due for cleanup
        echo "<p>Service pricing entry removed successfully.</p>";
    }
    else {
        echo "<p>Service pricing entry not removed successfully.</p>";
    }
			
}
}
