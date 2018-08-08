<?php
// Used for validating whether user input is empty or not
// It should not be responsible for much more than that 

function validateInputNotNull($input) {
    // Null is not data type specific
    if ($input != null) {
        // Input is not null, code behaviour is not specified
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
    // Called after determining that the input is not empty
    // Uses a native php function to evaluate the validity of the email address.
    if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    else {
        return false;
    }
}