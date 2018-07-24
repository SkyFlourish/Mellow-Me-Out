<?php

require 'input-validation.inc.php';
require 'input-cleanup.inc.php';

$formComplete = true;

// If form is submitted, then the below code will run.
// Code checks all the form data for any discrepencies and
// echoes anything the user might be missing back to them.
// If any check returns false, then formComplete is set to false
// and the form will not progress.

if (isset($_POST["submit"])) {
    if (isset($_POST["fullName"])) {
        $fullName = $_POST["fullName"];
        if (validateInputNotNull($fullName) == true) {
            $fullName = stripTagsFromInput($fullName);
        }
    }
    else {
        $formComplete = false;
        $fullNameMissing = true;
    }
    if (isset($_POST["phone"])) {
        $phone = $_POST["phone"];
        if (validateInputNotNull($phone) == true) {
            $phone = stripTagsFromInput($phone);
        }
    }
    else {
        $formComplete = false;
        $phoneMissing = true;
    }
    if (isset($_POST["select-booking"])) {
        $selectBooking = $_POST["select-booking"];
        if (validateInputNotNull($selectBooking) == true) {
            $selectBooking = stripTagsFromInput($selectBooking);
        }
    }
    else {
        $formComplete = false;
        $selectBookingMissing = true;
    }
    if (isset($_POST["service"])) {
        $phone = $_POST["service"];
        if (validateInputNotNull($service) == true) {
            $service = stripTagsFromInput($service);
        }
    }
    else {
        $formComplete = false;
        $serviceMissing = true;
    }
    if (isset($_POST["phone"])) {
        $confirmEmail = $_POST["phone"];
        if (validateInputNotNull($confirmEmail) == true) {
            if (validateInputNotNull($email) == true) {
                $email = stripTagsFromInput($email);
            }
            else {
              $formComplete = false;
              $email = true;
            }
        }
    }
    else {
        $formComplete = false;
        $confirmEmail = true;
    }
}
