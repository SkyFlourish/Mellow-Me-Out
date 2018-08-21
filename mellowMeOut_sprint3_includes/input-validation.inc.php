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

function validateUserName($input) {
    if(preg_match('/^[a-zA-Z0-9]{5,}$/', $input) && strlen($input)>3 && strlen($input)<20)
    {
	     return true;
	}
	else
	{
		return false;
	}
}

function validatePassword($input) {
    if(preg_match('/^[a-zA-Z0-9]{5,}$/', $input) && strlen($input)>3 && strlen($input)<20)
    {
	     return true;
	}
	else
	{
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

    $serviceIDQ = mysqli_real_escape_string($conn, $serviceArray[$serviceArrayIndex]["serviceid"]);
    $serviceNameQ = mysqli_real_escape_string($conn, $serviceArray[$serviceArrayIndex]["servicename"]);
    $servicePriceQ = mysqli_real_escape_string($conn, $serviceArray[$serviceArrayIndex]["serviceprice"]);
    $serviceTimeQ = mysqli_real_escape_string($conn, $serviceArray[$serviceArrayIndex]["servicetime"]);

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

    mysqli_close($conn);

}
