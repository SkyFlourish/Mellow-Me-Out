<?php
// Used to cleanup user input in the booking page
// Includes stripping tags from string input and the like
// Calls input-validation.inc.php for functions

require 'input-validation.inc.php';

function stripTagsFromInput ($input) {
    // Should remove all web tags from user input and allow for safer use of
    // input given by the user. in this context, it would be input that the staff
    // would be viewing and using after the data has been stored in the tables previously.
    if (validateInputNotNull($input) == true) {
        $strippedInput = strip_tags($input);
        return $strippedInput;
    }
    else {
        exit;
    }

}