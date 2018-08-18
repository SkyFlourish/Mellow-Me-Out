<?php

// Grabs the services from the services database and adds them to an array

// Also prints the results of the query into an options dropdown box
// for users to select from

// require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/customer-datebase-connect.inc.php');
// require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/admin-staff-datebase-connect.inc.php');
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');
$sql = "SELECT ServiceID,ServiceName,ServicePrice,ServiceTime FROM mellowmeout.Services;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

// Initialise While variables
$serviceArray = array();
$i = 0;

if ($resultCheck >= 1) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["ServiceTime"] != NULL) {
            echo "<option value=".$row["ServiceID"].">".$row["ServiceName"]." - ".$row["ServiceTime"]." Minutes</option>";
        }
        else {
            echo "<option value=".$row["ServiceID"].">".$row["ServiceName"]."</option>";
        }
        // array_push($serviceIDArray, $row["serviceid"]);
        $serviceArray[$i]["serviceid"] = $row["ServiceID"];
        $serviceArray[$i]["servicename"] = $row["ServiceName"];
        $serviceArray[$i]["servicetime"] = $row["ServiceTime"];
        $serviceArray[$i]["serviceprice"] = $row["ServicePrice"];
        $i++;
    }
}
