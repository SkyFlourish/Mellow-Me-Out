<?php

// Functions will be divided up once functionality is ok

require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/input-validation.inc.php');
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/input-cleanup.inc.php');

// Add blog entry


// Remove blog entry
// Requries us to remove rows from all tables referencing the foreign key first

function addBlogEntry() {
// $title = mysqli_real_escape_string($_POST["title"]);
// $content = mysqli_real_escape_string($_POST["content"]);
date_default_timezone_set('Australia/Victoria');
$date = new DateTime;
// $image = mysqli_real_escape_string($_POST["image"]);

// Staff member name can be grabbed by querying via session and using result
// Do we need that though?

// Won't run until a submition value is sent
if (isset($_POST["submit"]) {
        if (isset($_POST["title"])) {
            $title = mysqli_real_escape_string($_POST["title"]);
            $titleMissing = true;
        }
        else {
            echo "Title is missing";
            $titleMissing = true;
        }
        if (isset($_POST["content"])) {
            $content = mysqli_real_escape_string($_POST["content"]);
            $contentMissing = false;
        }
        if (isset($_POST["category"])) {
            $category = mysqli_real_escape_string($_POST["category"]);
            $categoryMissing = false;
        }
        else {
            echo "Category is missing"
            $categoryMissing = true;
        }
        if ($_SESSION["staff_username"])
        if ($titleMissing == true || $contentMissing == true || $categoryMissing == true) {
            echo "Please fill the form and true again"
        }
        if ($titleMissing == false && $contentMissing == false && $categoryMissing == false) {
            global $conn;
            $sql = "INSERT INTO BlogContent (BlogTitle,BlogContent,BlogCategory,Username)"
        }
}

}

function addBlogTags($input) {
// Tags will be

}

function removeBlogEntry($input) {
$blogID = mysqli_real_escape_string($input);
// Will error out if input is not an integer
$blogID = (int)$input;

$blogTableArray = $arrayName = array('table' => 'mellowmeout.blogcomments',
                                     'table' => 'mellowmeout.blogtags',
                                     'table' => 'mellowmeout.blogcontent');

foreach ($blogTableArray as $table) {
    global $conn;
    $sql = "DELETE FROM '$table' WHERE BlogID='$blogID';";
    if (mysqli_query($conn, $sql)) {
            // Due for cleanup
        echo "<p>Blog entry removed successfully.</p>";
    }
    else {
        echo "<p>Blog entry not removed successfully.</p>";
    }
}

}
