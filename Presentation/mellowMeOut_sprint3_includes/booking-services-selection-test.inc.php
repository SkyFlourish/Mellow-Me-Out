<?php

// Grabs the services from the services database and adds them to an array

// require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/customer-datebase-connect.inc.php');
// require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/admin-staff-datebase-connect.inc.php');
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');
$sql = "SELECT ServiceName FROM mellowmeout.Services;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck >= 1) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["ServiceName"];
    }
}
