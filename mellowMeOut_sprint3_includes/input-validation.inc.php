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

function validateServiceSelection($input) {
    // Called after determining a selection was made in the options menu
    // Will refer to the database, and ensure that a match is found
    // Should aleviate issues of input tampering by not allowing mismatches to pass
    $serviceArrayIndex = $input - 1;
    global $serviceArray;
    require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');

    // $sql = "SELECT EXISTS(SELECT ServiceID,ServiceName,ServicePrice,ServiceTime FROM mellowmeout.Services WHERE ServiceName='$input["SerivceID"]');";
    // $sql = "SELECT EXISTS(SELECT ServiceID,ServiceName,ServicePrice,ServiceTime FROM mellowmeout.Services WHERE ServiceID='$serviceArray[$serviceArrayIndex]["serviceid"]' AND ServiceName='$serviceArray[$serviceArrayIndex]["servicename"]' AND ServiceTime='$serviceArray[$serviceArrayIndex]["servicetime"]' AND ServicePrice='$serviceArray[$serviceArrayIndex]["serviceprice"]');)";

    $serviceIDQ = mysqli_real_escape_string($conn, $serviceArray[$serviceArrayIndex]["serviceid"]);
    $serviceNameQ = mysqli_real_escape_string($conn, $serviceArray[$serviceArrayIndex]["servicename"]);
    $servicePriceQ = mysqli_real_escape_string($conn, $serviceArray[$serviceArrayIndex]["serviceprice"]);
    $serviceTimeQ = mysqli_real_escape_string($conn, $serviceArray[$serviceArrayIndex]["servicetime"]);

    // $sql = "SELECT EXISTS(SELECT ServiceID,ServiceName,ServicePrice,ServiceTime FROM mellowmeout.Services WHERE ServiceID='$serviceIDQ' AND ServiceName='$serviceNameQ' AND ServiceTime='$serviceTimeQ' AND ServicePrice='$servicePriceQ');)";
    $sql = "SELECT EXISTS(SELECT ServiceID,ServiceName,ServicePrice,ServiceTime FROM mellowmeout.Services WHERE ServiceID='$serviceIDQ' AND ServiceName='$serviceNameQ' AND ServiceTime='$serviceTimeQ' AND ServicePrice='$servicePriceQ')";

    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck >= 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["EXISTS(SELECT ServiceID,ServiceName,ServicePrice,ServiceTime FROM mellowmeout.Services WHERE ServiceID='$serviceIDQ' AND ServiceName='$serviceNameQ' AND ServiceTime='$serviceTimeQ' AND ServicePrice='$servicePriceQ')"] == 1) {
                // $result1 = "success";
                return true;
            }
            else {
                // $result2 = "failure";
                return false;
            }
        }
    }


    // if ($resultCheck >= 1) {
    //     $row = mysqli_fetch_assoc($result);
    //     // $exists = (int)$row[0];
    //     // if ($exists == 1) {
    //     //     return true;
    //     // }
    //     // else {
    //     //     return false;
    //     // }
    // }
    mysqli_close($conn);

// echo "Service ID <p>";
// var_dump($serviceIDQ);
// echo "</p>";
// echo "Service Name<p>";
// var_dump($serviceNameQ);
// echo "</p>";
// echo "Service Price<p>";
// var_dump($servicePriceQ);
// echo "</p>";
// echo "Service Time<p>";
// var_dump($serviceTimeQ);
// echo "</p>";
// echo "SQL<p>";
// var_dump($sql);
// echo "</p>";
// echo "Results<p>";
// var_dump($result);
// echo "</p>";
// echo "Result Check<p>";
// var_dump($resultCheck);
// echo "</p>";
// echo "Row<p>";
// var_dump($row);
// echo "</p>";
// echo "Result 1<p>";
// var_dump($result1);
// echo "</p>";
// echo "Result 2<p>";
// var_dump($result2);
// echo "</p>";

}
