<?php

require 'input-validation.inc.php';
require 'input-cleanup.inc.php';

function bookingProcessing() {
    $formComplete = false;
    $fullNameMissing = true;
    $phoneMissing = true;
    $selectBookingMissing = true;
    $serviceMissing = true;
    $emailMissing = true;
    $emailConfirmMissing = true;
    $fullNameValid = false;
    $phoneValid = false;
    $selectBookingValid = false;
    $serviceValid = false;
    $emailValid = false;
    $emailConfirmValid = false;

    // There would also be an array of services that are crossed referenced with
    // the service that the user selects to ensure they haven't fooled around with
    // the values of the select box

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
                $fullNameMissing = false;
                echo "Full name found valid";
                // Note for later, echo out all your variables for each
                // of our IF statements to debug the issue. Thanks, Me...
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
                $phoneMissing = false;
                echo "Phone found valid";
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
                $selectBookingMissing = false;
                echo "Select booking found valid";
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
                $serviceMissing = false;
                echo "Service found valid";
            }
        }
        else {
            $formComplete = false;
            $serviceMissing = true;
        }
        if (isset($_POST["email"])) {
            $confirmEmail = $_POST["email"];
            if (validateInputNotNull($email) == true) {
                if (validateEmailAddressInputFormat($email) == true) {
                    $email = stripTagsFromInput($email);
                    $emailValid = true;
                    $emailMissing = false;
                    echo "Email found valid";
                }
                else {
                    echo "Email format invalid";
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
                    $emailConfirmMissing = false;
                    echo "Confirm Email found valid";
                }
                else {
                    echo "Confirm Email invalid";
                }
            }
        }
        else {
            $formComplete = false;
            $emailConfirmMissing = true;
        }
        if ($fullNameMissing == true || $phoneMissing == true ||
            $selectBookingMissing == true || $serviceMissing == true ||
            $emailMissing == true || $emailConfirmMissing == true) {
                echo "You have not filled out the entire form yet</br>";
                echo "Please provide the required information above";
            }
            else {
                if ($fullNameValid == true && $phoneValid == true &&
                $selectBookingValid == true && $serviceValid == true &&
                $emailValid == true && $emailConfirmValid == true &&
                $formComplete == true) {
                    if ($email == $confirmEmailValid) {
                        echo "This is where the next steps would be";
                    }
                    else {
                        echo "Email addresses entered do not match</br>";
                        echo "Please try again";
                    }
                }
            }
        }
        else {
            echo "You have not hit the submit button yet";
        }

    // if ($fullNameMissing == true || $phoneMissing == true ||
    //     $selectBookingMissing == true || $serviceMissing == true ||
    //     $emailMissing == true || $emailConfirmMissing == true) {
    //         echo "You have not filled out the entire form yet</br>";
    //         echo "Please provide the required information above";
    // }
    // else {
    //     if ($fullNameValid == true && $phoneValid == true &&
    //     $selectBookingValid == true && $serviceValid == true &&
    //     $emailValid == true && $emailConfirmValid == true &&
    //     $formComplete == true) {
    //         if ($email == $confirmEmailValid) {
    //             echo "This is where the next steps would be";
    //         }
    //         else {
    //             echo "Email addresses entered do not match</br>";
    //             echo "Please try again";
    //         }
    //     }
    // }
}
