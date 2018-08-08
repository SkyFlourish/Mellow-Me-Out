<?php

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

require 'input-validation.inc.php';
require 'input-cleanup.inc.php';

function bookingProcessing() {

// $_POST variables don't need to be assigned initially as they
// are known as supervariables.

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
$errorMsgArray = [];
// Below variables are to be deleted after function works
$debugMsgArray = [];
$inputVariableArray = [];
// There would also be an array of services that are crossed referenced with
// the service that the user selects to ensure they haven't fooled around with
// the values of the select box
// If form is submitted, then the below code will run.
// Code checks all the form data for any discrepencies and
// echoes anything the user might be missing back to them.
// If any check returns false, then formComplete is set to false
// and the form will not progress.

if (isset($_POST["submit"])) {
    if (!empty($_POST["fullName"])) {
        $fullName = $_POST["fullName"];
        if (validateInputNotNull($fullName) == true) {
            $fullName = stripTagsFromInput($fullName);
            $fullNameValid = true;
            $fullNameMissing = false;
            array_push($debugMsgArray,"Full name found valid");
            // Note for later, echo out all your variables for each
            // of our IF statements to debug the issue. Thanks, Me...
        }
    }
    else {
        $formComplete = false;
        $fullNameMissing = true;
        array_push($errorMsgArray, "Please enter your full name");
    }
    if (!empty($_POST["phone"])) {
        $phone = $_POST["phone"];
        if (validateInputNotNull($phone) == true) {
            $phone = stripTagsFromInput($phone);
            $phoneValid = true;
            $phoneMissing = false;
            // echo "Phone found valid";
            array_push($debugMsgArray, "Phone found valid");
        }
    }
    else {
        $formComplete = false;
        $phoneMissing = true;
        array_push($errorMsgArray, "Please enter your phone number");
    }
    if (!empty($_POST["select-booking"])) {
        $selectBooking = $_POST["select-booking"];
        if (validateInputNotNull($selectBooking) == true) {
            // $selectBooking = stripTagsFromInput($selectBooking);
            // Need to check date later
            $selectBookingValid = true;
            $selectBookingMissing = false;
            array_push($debugMsgArray, "Select booking found valid");
        }
    }
    else {
        $formComplete = false;
        $selectBookingMissing = true;
        array_push($errorMsgArray, "Please select a booking date");
    }
    if (!empty($_POST["service"])) {
        $service = $_POST["service"];
        if (validateInputNotNull($service) == true) {
            $service = stripTagsFromInput($service);
            $serviceValid = true;
            $serviceMissing = false;
            // echo "Service found valid";
            array_push($debugMsgArray, "Service found valid");
        }
    }
    else {
        $formComplete = false;
        $serviceMissing = true;
        array_push($errorMsgArray, "Please select a service");
    }
    if (!empty($_POST["email"])) {
        $email = $_POST["email"];
        if (validateInputNotNull($email) == true) {
            if (validateEmailAddressInputFormat($email) == true) {
                $email = stripTagsFromInput($email);
                $emailValid = true;
                $emailMissing = false;
                // echo "Email found valid";
                array_push($debugMsgArray, "Email found valid");
            }
            else {
                $emailValid = false;
                array_push($errorMsgArray, "Email format invalid");
            }
        }
    }
    else {
        $formComplete = false;
        $emailMissing = true;
        array_push($errorMsgArray, "Please enter your Email Address");
    }
    if (!empty($_POST["confirm-email"])) {
        $confirmEmail = $_POST["confirm-email"];
        if (validateInputNotNull($confirmEmail) == true) {
            if (validateEmailAddressInputFormat($confirmEmail) == true) {
                $confirmEmail = stripTagsFromInput($confirmEmail);
                $confirmEmailValid = true;
                $emailConfirmMissing = false;
                // echo "Confirm Email found valid";
                array_push($debugMsgArray, "Confirm Email found valid");
            }
            else {
                $emailConfirmMissing = false;
                array_push($errorMsgArray, "Confirm Email Invalid");
            }
        }
    }
    else {
        $formComplete = false;
        $emailConfirmMissing = true;
        array_push($errorMsgArray, "Please confirm your Email Address");
    }
    if ($fullNameMissing == true || $phoneMissing == true ||
        $selectBookingMissing == true || $serviceMissing == true ||
        $emailMissing == true || $emailConfirmMissing == true) {
            // echo "You have not filled out the entire form yet</br>";
            // echo "Please provide the required information above";
            $formComplete = false;
            echo "<p>";
            foreach ($errorMsgArray as $errorMsg) {
                echo $errorMsg;
                echo "</br>";
            }
            echo "</p>";
            echo "<p>";
            foreach ($debugMsgArray as $debugMsg) {
                // code...
                echo $debugMsg;
                echo "</br>";
            }
            echo "</p>";
    }
    // if ($fullNameValid == true && $phoneValid == true &&
    // $selectBookingValid == true && $serviceValid == true &&
    // $emailValid == true && $emailConfirmValid == true) {
    if ($fullNameMissing == false && $phoneMissing == false &&
        $selectBookingMissing == false && $serviceMissing == false &&
        $emailMissing == false && $emailConfirmMissing == false) {
        if ($email == $confirmEmail) {
            $formComplete = true;
            array_push($debugMsgArray, "Form apparently complete");
            echo "<p>";
            foreach ($errorMsgArray as $errorMsg) {
                echo $errorMsg;
                echo "</br>";
            }
            echo "</p>";
            echo "<p>";
            foreach ($debugMsgArray as $debugMsg) {
                // code...
                echo $debugMsg;
                echo "</br>";
            }
            echo "</p>";
        }
        else {
            // echo "Email addresses entered do not match</br>";
            // echo "Please try again";
            array_push($errorMsgArray, "Email address entered do not match");
            array_push($errorMsgArray, "Please try again");
            $formComplete = false;
            echo "<p>";
            foreach ($errorMsgArray as $errorMsg) {
                echo $errorMsg;
                echo "</br>";
            }
            echo "</p>";
            echo "<p>";
            foreach ($debugMsgArray as $debugMsg) {
                // code...
                echo $debugMsg;
                echo "</br>";
            }
            echo "</p>";
        }
    }
}

echo "debug msg array <p>";
var_dump($debugMsgArray);
echo "</p>";
unset($debugMsgArray);
echo "error msg array <p>";
var_dump($errorMsgArray);
echo "</p>";
unset($errorMsgArray);
echo "POST array <p>";
var_dump($_POST);
echo "</p>";
echo "Email <p>";
var_dump($email);
echo "</p>";
echo "Confirm Email <p>";
var_dump($confirmEmail);
echo "</p>";

}
