<?php

// Functions will be divided up once functionality is ok
// Remove blog entry
// Requries us to remove rows from all tables referencing the foreign key first

function addStaff() {
// Won't run until a submition value is sent
if (isset($_POST["submitstaff"])) {
	include 'db-connect.php';
        if (isset($_POST["firstname"])) {
            $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
            $firstnameMissing = false;
        }
        else {
            echo "firstname is missing";
            $firstnameMissing = true;
        }
        if (isset($_POST["lastname"])) {
            $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
            $lastnameMissing = false;
        }
		else {
            echo "lastname is missing";
            $lastnametMissing = true;
        }
        if (isset($_POST["username"])) {
            $username = mysqli_real_escape_string($conn, $_POST["username"]);
            $usernameMissing = false;
        }
        else {
            echo "username is missing";
            $usernameMissing = true;
        }
        if (isset($_POST["pass"])) {
            $password = mysqli_real_escape_string($conn, $_POST["pass"]);
            $passwordMissing = false;
        }
        else {
            echo "password is missing";
            $passwordMissing = true;
        }
        if ($firstnameMissing == true || $lastnameMissing == true ||
            $usernameMissing == true || $passwordMissing == true) {
            echo "Please fill the form and try again";
        }
        if ($firstnameMissing == false && $lastnameMissing == false &&
            $usernameMissing == false && $passwordMissing ==false) {
            global $conn;
            $sql = "INSERT INTO staff (FirstName,LastName,Username,Passphrase) VALUES ('$firstname', '$lastname', '$username', '$password');";
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
function removeStaff($input) {
include 'db-connect.php';
$firstname = mysqli_real_escape_string($conn, $input);
// Will error out if input is not an integer

$sql = "DELETE FROM staff WHERE FirstName = '$firstname'";
    if (mysqli_query($conn, $sql)) {
            // Due for cleanup
        echo "<p>Staff entry removed successfully.</p>";
    }
    else {
        echo "<p>Staff entry not removed successfully.</p>";
    }


}
