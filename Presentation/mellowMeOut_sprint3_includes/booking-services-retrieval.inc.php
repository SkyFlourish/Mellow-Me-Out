<?php

// Grabs the services from the services database and adds them to an array

require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');
$sql = "SELECT ServiceID,ServicePricingID FROM mellowmeout.ServicesPricing;";

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
