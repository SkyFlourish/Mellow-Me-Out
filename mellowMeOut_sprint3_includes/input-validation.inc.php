<?php

function validateInputNotNull($input) {
     // Null is not data type specific
    if ($input != null) {
      // Input is not null, code behaviour is not specified.
      // as it is assumed that the input is present (but perhaps not valid).
      return true;
    }
    else {
      // Input is null, code behaviour is specified on the
      // section calling the function.
      return false;
    }
  }

// function validateUserName($input) {
//     if(preg_match('/^[a-zA-Z0-9]{5,}$/', $input) && strlen($input)>3 && strlen($input)<20)
//     {
// 	     return true;
// 	}
// 	else
// 	{
// 		return false;
// 	}
// }
//
// function validatePassword($input) {
//     if(preg_match('/^[a-zA-Z0-9]{5,}$/', $input) && strlen($input)>3 && strlen($input)<20)
//     {
// 	     return true;
// 	}
// 	else
// 	{
// 		return false;
// 	}
// }

function validateEmailAddressInputFormat($input) {
    // Called after determining that the input is not empty.
    // Uses a native php function to evaluate the validity of the email address.
    if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
      return true;
    }
    else {
      return false;
    }
}

// function validateDateInput($input) {
//     // Called after determining the input is not empty.
//     // Uses a native php format to evaluate the validity of the date input.
//
// }

// funciton validateServiceSelection(Array $input) {

function validateDateInput($input) {
    // Check if input date falls between our date range
    $inputDate = $input;
    $currentDate1 = new DateTime;
    $currentDate2 = new DateTime;
    $minDate = $currentDate1->modify('+1 day');
    $maxDate = $currentDate2->modify('+1 year');

    if ($inputDate >= $minDate && $inputDate <= $maxDate) {
        return true;
    }
    else {
        return false;
    }
}

function validateServiceSelection($input) {
    // Called after determining a selection was made in the options menu
    // Will refer to the database, and ensure that a match is found
    // Should aleviate issues of input tampering by not allowing mismatches to pass
    $serviceArrayIndex = $input - 1;
    global $serviceArray;
    require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');

    $serviceIDQ = mysqli_real_escape_string($conn, $serviceArray[$serviceArrayIndex]["serviceid"]);
    $servicePricingIDQ = mysqli_real_escape_string($conn, $serviceArray[$serviceArrayIndex]["servicepricingid"]);
    $serviceNameQ = mysqli_real_escape_string($conn, $serviceArray[$serviceArrayIndex]["servicename"]);
    $servicePriceQ = mysqli_real_escape_string($conn, $serviceArray[$serviceArrayIndex]["serviceprice"]);
    $serviceTimeQ = mysqli_real_escape_string($conn, $serviceArray[$serviceArrayIndex]["servicetime"]);
    $serviceTimeInt = (int)$serviceTimeQ;

    // If service time is empty/null, then service time is removed from the query
    if ($serviceTimeInt == 0) {
        $sql = "SELECT EXISTS(SELECT s.ServiceName, sp.ServicePrice, sp.ServicePricingID FROM mellowmeout.Services AS s INNER JOIN ServicesPricing AS sp ON sp.ServiceID = s.ServiceID WHERE sp.ServiceID='$serviceIDQ' AND sp.ServicePricingID='$servicePricingIDQ' AND s.ServiceName='$serviceNameQ' AND sp.ServicePrice='$servicePriceQ')";
        $loop = 1;
    }
    else {
        $sql = "SELECT EXISTS(SELECT s.ServiceName, sp.ServicePrice, sp.ServicePricingID, sp.ServiceTime FROM mellowmeout.Services AS s INNER JOIN ServicesPricing AS sp ON sp.ServiceID = s.ServiceID WHERE sp.ServiceID='$serviceIDQ' AND sp.ServicePricingID='$servicePricingIDQ' AND s.ServiceName='$serviceNameQ' AND sp.ServiceTime='$serviceTimeQ' AND sp.ServicePrice='$servicePriceQ')";
        $loop = 2;
    }

    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck >= 1) {
        if ($loop == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
            $sql2 = "SELECT s.ServiceName, sp.ServicePrice, sp.ServicePricingID FROM Services AS s INNER JOIN ServicesPricing AS sp ON sp.ServiceID = s.ServiceID WHERE sp.ServicePricingID ='$servicePricingIDQ' AND s.ServiceName ='$serviceNameQ' AND sp.ServicePrice ='$servicePriceQ'";
            $result2 = mysqli_query($conn, $sql2);
            $resultCheck2 = mysqli_num_rows($result2);
                if ($resultCheck2 == 1) {
                    mysqli_close($conn);
                    return 1;
                }
                else {
                    mysqli_close($conn);
                    return 0;
                }
            }
        }
        else {
            while ($row = mysqli_fetch_assoc($result)) {
            $sql2 = "SELECT s.ServiceName, sp.ServicePrice, sp.ServicePricingID, sp.ServiceTime FROM mellowmeout.Services AS s INNER JOIN ServicesPricing AS sp ON sp.ServiceID = s.ServiceID WHERE sp.ServiceID='$serviceIDQ' AND sp.ServicePricingID='$servicePricingIDQ' AND s.ServiceName='$serviceNameQ' AND sp.ServiceTime='$serviceTimeQ' AND sp.ServicePrice='$servicePriceQ'";
            $result2 = mysqli_query($conn, $sql2);
            $resultCheck2 = mysqli_num_rows($result2);
                if ($resultCheck2 == 1) {
                    mysqli_close($conn);
                    return 1;
                }
                else {
                    mysqli_close($conn);
                    return 0;
                }
            }
        }
    }
}
