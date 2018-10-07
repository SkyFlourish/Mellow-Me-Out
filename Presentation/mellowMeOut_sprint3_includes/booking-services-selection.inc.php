<?php

// Grabs the services from the services database and adds them to an array

// Also prints the results of the query into an options dropdown box
// for users to select from

// require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/customer-datebase-connect.inc.php');
// require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/admin-staff-datebase-connect.inc.php');
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');
// $sql = "SELECT ServiceID,ServiceName,ServicePrice,ServiceTime FROM mellowmeout.Services;";
// $sql = "SELECT ServiceID,ServiceTime,ServicePrice FROM mellowmeout.ServicesPricing;";
$sql = "SELECT ServiceID,ServicePricingID FROM mellowmeout.ServicesPricing;";
// $sql = "SELECT ServicePricingID FROM mellowmeout.ServicesPricing;";

// $sql = "SELECT s.ServiceName, sp.ServicePrice, sp.ServiceTime FROM Services AS s INNER JOIN ServicesPricing AS sp ON s.ServiceID = sp.ServiceID WHERE s.ServiceID = 1;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

// Initialise While variables
$serviceArray = array();
$i = 0;

if ($resultCheck >= 1) {
    while ($row = mysqli_fetch_assoc($result)) {
        // $serviceID = $row["ServicePricingID"];
        $serviceID = $row["ServiceID"];
        $servicePricingID = $row["ServicePricingID"];
        // $sql2 = "SELECT s.ServiceName,sp.ServicePrice,sp.ServiceTime,sp.ServicePricingID FROM mellowmeout.Services AS s INNER JOIN mellowmeout.ServicesPricing AS sp ON s.ServiceID = sp.ServiceID WHERE s.ServiceID = '$serviceID';";
        $sql2 = "SELECT s.ServiceName,sp.ServiceID,sp.ServicePrice,sp.ServiceTime,sp.ServicePricingID FROM mellowmeout.Services AS s INNER JOIN mellowmeout.ServicesPricing AS sp ON s.ServiceID = sp.ServiceID WHERE sp.ServicePricingID = '$servicePricingID' AND sp.ServiceID = '$serviceID';";
        // $sql2 = "SELECT s.ServiceName,sp.ServicePrice,sp.ServiceTime,sp.ServicePricingID FROM mellowmeout.Services AS s INNER JOIN mellowmeout.ServicesPricing AS sp ON s.ServiceID = sp.ServiceID WHERE sp.ServiceID = '$serviceID';";
        $result2 = mysqli_query($conn, $sql2);
        $result2Check = mysqli_num_rows($result2);
        while ($row2 = mysqli_fetch_assoc($result2)) {
            if ($result2Check >= 1) {
                if ($row2['ServiceTime'] != NULL) {
                    // echo "<option value=".$row2['ServicePricingID'].">".$row2['ServiceName']." - ".$row2['ServiceTime']." Minutes <div style='text-align: right;>".$row2['ServicePrice']."</div></option>";
                    echo "<option value=".$row2['ServicePricingID'].">".$row2['ServiceName']." - ".$row2['ServiceTime']." Minutes - $".$row2['ServicePrice']."</option>";
                }
                else {
                    // echo "<option value=".$row2['ServicePricingID'].">".$row2['ServiceName']."<div style='text-align: right;>".$row2['ServicePrice']."</div></option>";
                    echo "<option value=".$row2['ServicePricingID'].">".$row2['ServiceName']." - $".$row2['ServicePrice']."</option>";
                }
                // array_push($serviceIDArray, $row["serviceid"]);
                $serviceArray[$i]["serviceid"] = $row2["ServiceID"];
                $serviceArray[$i]["servicepricingid"] = $row2["ServicePricingID"];
                $serviceArray[$i]["servicename"] = $row2["ServiceName"];
                $serviceArray[$i]["servicetime"] = $row2["ServiceTime"];
                $serviceArray[$i]["serviceprice"] = $row2["ServicePrice"];
                $i++;
            }
        }
    }
}

// if ($resultCheck >= 1) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $serviceID = $row["ServiceID"];
//         $sql2 = "SELECT s.ServiceName FROM Services AS s INNER JOIN ServicesPricing AS sp ON s.ServiceID = sp.ServiceID WHERE s.ServiceID = '$serviceID';";
//         $result2 = mysqli_query($conn, $sql2);
//         $result2Check = mysqli_num_rows($result2);
//         while ($row2 = mysqli_fetch_assoc($result2)) {
//             if ($result2Check >= 1) {
//                 if ($row["ServiceTime"] != NULL) {
//                     echo "<option value=".$row["ServiceID"].">".$row2["ServiceName"]." - ".$row["ServiceTime"]." Minutes</option>";
//                 }
//                 else {
//                     echo "<option value=".$row["ServiceID"].">".$row2["ServiceName"]."</option>";
//                 }
//                 // array_push($serviceIDArray, $row["serviceid"]);
//                 $serviceArray[$i]["serviceid"] = $row["ServicePricingID"];
//                 $serviceArray[$i]["servicename"] = $row["ServiceName"];
//                 $serviceArray[$i]["servicetime"] = $row["ServiceTime"];
//                 $serviceArray[$i]["serviceprice"] = $row["ServicePrice"];
//                 $i++;
//             }
//         }
//     }
// }

// if ($resultCheck >= 1) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         if ($row["ServiceTime"] != NULL) {
//             echo "<option value=".$row["ServiceID"].">".$row["ServiceTime"]." - ".$row["ServiceTime"]." Minutes</option>";
//         }
//         else {
//             echo "<option value=".$row["ServiceID"].">".$row["ServiceTime"]."</option>";
//         }
//         // array_push($serviceIDArray, $row["serviceid"]);
//         $serviceArray[$i]["serviceid"] = $row["ServiceID"];
//         $serviceArray[$i]["servicename"] = $row["ServiceName"];
//         $serviceArray[$i]["servicetime"] = $row["ServiceTime"];
//         $serviceArray[$i]["serviceprice"] = $row["ServicePrice"];
//         $i++;
//     }
// }

// if ($resultCheck >= 1) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         if ($row["ServiceTime"] != NULL) {
//             echo "<option value=".$row["ServiceID"].">".$row["ServiceName"]." - ".$row["ServiceTime"]." Minutes</option>";
//         }
//         else {
//             echo "<option value=".$row["ServiceID"].">".$row["ServiceName"]."</option>";
//         }
//         // array_push($serviceIDArray, $row["serviceid"]);
//         $serviceArray[$i]["serviceid"] = $row["ServiceID"];
//         $serviceArray[$i]["servicename"] = $row["ServiceName"];
//         $serviceArray[$i]["servicetime"] = $row["ServiceTime"];
//         $serviceArray[$i]["serviceprice"] = $row["ServicePrice"];
//         $i++;
//     }
// }
