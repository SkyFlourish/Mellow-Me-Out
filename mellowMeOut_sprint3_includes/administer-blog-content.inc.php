<?php

// Functions will be divided up once functionality is ok

require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/input-validation.inc.php');
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/input-cleanup.inc.php');


// Remove blog entry
// Requries us to remove rows from all tables referencing the foreign key first

function addBlogEntry() {
// $title = mysqli_real_escape_string($_POST["title"]);
// $content = mysqli_real_escape_string($_POST["content"]);
//session already started
//session_start();
date_default_timezone_set('Australia/Victoria');
$date = new DateTime;
// $image = mysqli_real_escape_string($_POST["image"]);

// Staff member name can be grabbed by querying via session and using result
// Do we need that though?

// Won't run until a submition value is sent
if (isset($_POST["submitblog"])) {
	include 'db-connect.php';
        if (isset($_POST["title"])) {
            $title = mysqli_real_escape_string($conn, $_POST["title"]);
            $titleMissing = false;
        }
        else {
            echo "Title is missing";
            $titleMissing = true;
        }
        if (isset($_POST["content"])) {
            $content = mysqli_real_escape_string($conn, $_POST["content"]);
            $contentMissing = false;
        }
		else {
            echo "Content is missing";
            $contentMissing = true;
        }
        if (isset($_POST["category"])) {
            $category = mysqli_real_escape_string($conn, $_POST["category"]);
            $categoryMissing = false;
        }
        else {
            echo "Category is missing";
            $categoryMissing = true;
        }
        if (isset($_SESSION["staff_username"])) {
            $staffUsername = mysqli_real_escape_string($conn, $_SESSION["staff_username"]);
            $staffUsernameMissing = false;
        }
        else {
            echo "Session not active";
            $staffUsernameMissing = true;
        }
        if ($titleMissing == true || $contentMissing == true ||
            $categoryMissing == true || $staffUsernameMissing == true) {
            echo "Please fill the form and true again";
        }
        if ($titleMissing == false && $contentMissing == false &&
            $categoryMissing == false && $staffUsernameMissing ==false) {
            global $conn;
            $sql = "INSERT INTO blogcontent (BlogTitle,BlogContent,BlogCategory,Username) VALUES ('$title', '$content', '$category', '$staffUsername');";
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

function addBlogTags($input) {
// Tags will be
session_start();

}

function removeBlogEntry($input) {
//session already started
//session_start();
include 'db-connect.php';
$blogID = mysqli_real_escape_string($conn, $input);
// Will error out if input is not an integer

$blogTableArray = $arrayName = array('table' => 'mellowmeout.blogcomments',
                                     'table' => 'mellowmeout.blogtags',
                                     'table' => 'mellowmeout.blogcontent');

foreach ($blogTableArray as $table) {
    $sql = "DELETE FROM blogcontent WHERE BlogID = '$blogID'";
    if (mysqli_query($conn, $sql)) {
            // Due for cleanup
        echo "<p>Blog entry removed successfully.</p>";
    }
    else {
        echo "<p>Blog entry not removed successfully.</p>";
    }
}

}
