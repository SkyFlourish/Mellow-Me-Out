<?php

require 'input-validation.inc.php';
require 'input-cleanup.inc.php';

$formComplete = false;
$fullNameMissing = true;
$phoneMissing = true;
$selectBookingMissing = true;
$serviceMissing = true;
$emailMissing = true;
$emailConfirmMissing = true;

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
            $fullNameValid = true;
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
            $phoneValid = true;
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
            $selectBookingValid = true;
        }
    }
    else {
        $formComplete = false;
        $selectBookingMissing = true;
    }
    if (isset($_POST["service"])) {
        $service = $_POST["service"];
        if (validateInputNotNull($service) == true) {
            $service = stripTagsFromInput($service);
            $serviceValid = true;
        }
    }
    else {
        $formComplete = false;
        $serviceMissing = true;
    }
    if (isset($_POST["email"])) {
        $confirmEmail = $_POST["email"];
        if (validateInputNotNull($email) == true) {
            if (validateInputNotNull($email) == true) {
                $email = stripTagsFromInput($email);
                $emailValid = true;
            }
        }
    }
    else {
        $formComplete = false;
        $emailMissing = true;
    }
    if (isset($_POST["confirm-email"])) {
        $confirmEmail = $_POST["confirm-email"];
        if (validateInputNotNull($confirmEmail) == true) {
            if (validateEmailAddressInputFormat($confirmEmail) == true) {
                $email = stripTagsFromInput($confirmEmail);
                $confirmEmailValid = true;
            }
        }
    }
    else {
        $formComplete = false;
        $emailConfirmMissing = true;
    }
}

if ($fullNameValid == true && $phoneValid == true && $selectBookingValid == true && $serviceValid == true && $emailValid == true && $emailConfirmValid == true && $formComplete == true) {
    if ($email == $confirmEmailValid) {
        // Do things here
    }
}
