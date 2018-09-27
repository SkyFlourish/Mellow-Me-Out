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

// require 'input-validation.inc.php';
// require 'input-cleanup.inc.php';
// Make relative later
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/input-validation.inc.php');
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/input-cleanup.inc.php');
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/booking-services-retrieval.inc.php');

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
$bookingTimeMissing = true;
$fullNameValid = false;
$phoneValid = false;
$selectBookingValid = false;
$serviceValid = false;
$emailValid = false;
$emailConfirmValid = false;
$bookingTimeValid = false;
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

global $conn;

if (isset($_POST["submit"])) {
    if (!empty($_POST["fullName"])) {
        $fullName = mysqli_real_escape_string($conn, $_POST["fullName"]);
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
        $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
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
    if (!empty($_POST["booking-date"])) {
        $selectBooking = mysqli_real_escape_string($conn, $_POST["booking-date"]);
        // if (validateInputNotNull($selectBooking) == true && validateDateInput($selectBooking) == true) {
        if (validateInputNotNull($selectBooking) == true) {
            // if (validateDateInput($selectBooking) == true) {
                $selectBooking = stripTagsFromInput($selectBooking);
                // Need to check date later
                $selectBookingValid = true;
                $selectBookingMissing = false;
                array_push($debugMsgArray, "Select booking found valid");
            // }
        }
    }
    else {
        $formComplete = false;
        $selectBookingMissing = true;
        array_push($errorMsgArray, "Please select a booking date");
    }
    if (!empty($_POST["add"])) {
        $bookingTime = mysqli_real_escape_string($conn, $_POST["add"]);
        if (validateInputNotNull($bookingTime) == true) {
            $bookingTime = stripTagsFromInput($bookingTime);
            $bookingTimeValid = true;
            $bookingTimeMissing = false;
            // echo "Phone found valid";
            array_push($debugMsgArray, "Booking time found valid");
        }
    }
    else {
        $formComplete = false;
        $bookingTimeMissing = true;
        array_push($errorMsgArray, "Please select a time");
    }
    // if (!empty($_POST["service"])) {
    //     $service = $_POST["service"];
    //     if (validateInputNotNull($service) == true) {
    //         $service = stripTagsFromInput($service);
    //         $serviceValid = true;
    //         $serviceMissing = false;
    //         // echo "Service found valid";
    //         array_push($debugMsgArray, "Service found valid");
    //     }
    // }
    // else {
    //     $formComplete = false;
    //     $serviceMissing = true;
    //     array_push($errorMsgArray, "Please select a service");
    // }
    if (!empty($_POST["service"])) {
        $service = mysqli_real_escape_string($conn, $_POST["service"]);
        $service = (int)$service;
        if (validateServiceSelection($service) == 1) {
            $serviceValid = true;
            $serviceMissing = false;
            array_push($debugMsgArray, "Service found valid");
        }
        else {
            $serviceValid = false;
            $serviceMissing = true;
            array_push($errorMsgArray, "Service not found");
        }
    }
    else {
        $formComplete = false;
        $selectServiceMissing = true;
        array_push($errorMsgArray, "Please select a service");
    }
    if (!empty($_POST["email"])) {
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
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
        $confirmEmail = mysqli_real_escape_string($conn, $_POST["confirm-email"]);
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
        $emailMissing == true || $emailConfirmMissing == true ||
        $bookingTimeMissing == true) {
            // echo "You have not filled out the entire form yet</br>";
            // echo "Please provide the required information above";
            $formComplete = false;
            echo "<p>";
            foreach ($errorMsgArray as $errorMsg) {
                echo $errorMsg;
                echo "</br>";
            }
            echo "</p>";
            // echo "<p>";
            // foreach ($debugMsgArray as $debugMsg) {
            //     // code...
            //     echo $debugMsg;
            //     echo "</br>";
            // }
            // echo "</p>";
    }
    // if ($fullNameValid == true && $phoneValid == true &&
    // $selectBookingValid == true && $serviceValid == true &&
    // $emailValid == true && $emailConfirmValid == true) {
    if ($fullNameMissing == false && $phoneMissing == false &&
        $selectBookingMissing == false && $serviceMissing == false &&
        $emailMissing == false && $emailConfirmMissing == false &&
        $bookingTimeMissing == false) {
        if ($email == $confirmEmail) {
            $formComplete = true;
            array_push($debugMsgArray, "Form apparently complete");
            echo "<p>";
            foreach ($errorMsgArray as $errorMsg) {
                echo $errorMsg;
                echo "</br>";
            }
            echo "</p>";
            // echo "<p>";
            // foreach ($debugMsgArray as $debugMsg) {
            //     // code...
            //     echo $debugMsg;
            //     echo "</br>";
            // }
            // echo "</p>";

            // Use service ID to determine service length if found
            // $serviceArray;
            // $i = $service - 1;
            // $serviceTime = $serviceArray[$i]['ServiceTime'];

            $sql = "SELECT ServicePricingID, ServicePrice, ServiceTime FROM mellowmeout.ServicesPricing WHERE ServicePricingID = '$service'";
            if ($result = mysqli_query($conn, $sql)) {
                while ($row = mysqli_fetch_assoc($result)){
                    $servicePricingID = $row['ServicePricingID'];
                    $servicePrice = $row['ServicePrice'];
                    $serviceTime = $row['ServiceTime'];
                    $serviceTime = (int)$serviceTime;
                }
            }

            // Insert booking data into the database
            // Time start and time end are both the same value for now,
            // this will need to be rectified later
            // $sql = "INSERT INTO mellowmeout.Bookings (BookingDateTimeStart,BookingDateTimeEnd,BookingFullName,BookingRegisteredEmail,BookingRegisteredPhone) VALUES ('$selectBooking','$selectBooking','$fullName','$email','$phone');";

            // $sql = "INSERT INTO mellowmeout.BookingsTemp (BookingRegisteredFullName,BookingRegisteredPhone,BookingRegisteredEmail,BookingDate,BookingDateTimeStart,BookingPrice) VALUES ('$fullName','$phone','$email','$selectBooking','$bookingTime','$serviceTime')";
            $user_booking = $selectBooking.'-'.$bookingTime;
            $sql = "INSERT INTO mellowmeout.BookingsTemp (BookingRegisteredFullName,BookingRegisteredPhone,BookingRegisteredEmail,BookingDate,BookingDateTimeStart,BookingPrice,BookingTime,user_booking) VALUES ('$fullName','$phone','$email','$selectBooking','$bookingTime','$servicePrice','$serviceTime','$user_booking')";
            $sql2 = "INSERT INTO mellowmeout.booking (user_booking) VALUES ('$user_booking')";
            // $selectBookingDate = DateTime::createFromFormat('Y-m-d', $selectBooking);
            // array_push($errorMsgArray, );
	        if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
                // A redirect aught to happen here
                echo "<p>";
                // echo "Records inserted successfully";
                echo "Booking made successfully! Thank you!";
                echo "</p>";
            }
            else {
                // echo "Records could not be inserted.</br>SQL Statement - ". $sql. "</br>SQL Error - ". mysqli_error($conn). "";
                array_push($errorMsgArray, "Booking could not be processed, please refresh and try again");
                foreach ($errorMsgArray as $errorMsg) {
                    echo $errorMsg;
                    echo "</br>";
                }
            }
            mysqli_close($conn);
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
            // echo "<p>";
            // foreach ($debugMsgArray as $debugMsg) {
            //     // code...
            //     echo $debugMsg;
            //     echo "</br>";
            // }
            // echo "</p>";
        }
    }
}

// echo "debug msg array <p>";
// var_dump($debugMsgArray);
// echo "</p>";
// unset($debugMsgArray);
// echo "error msg array <p>";
// var_dump($errorMsgArray);
// echo "</p>";
// unset($errorMsgArray);
// echo "POST array <p>";
// var_dump($_POST);
// echo "</p>";
// echo "Email <p>";
// var_dump($email);
// echo "</p>";
// echo "Confirm Email <p>";
// var_dump($confirmEmail);
// echo "</p>";
// echo "Service <p>";
// var_dump($service);
// echo "</p>";
// echo "service time <p>";
// var_dump($serviceTime);
// echo "</p>";
// echo "service array <p>";
// var_dump($serviceArray);
// echo "</p>";
// echo "booking time <p>";
// var_dump($bookingTime);
// echo "</p>";
// echo "Booking date <p>";
// var_dump($selectBooking);
// echo "</p>";
// echo "Modified booking date <p>";
// // var_dump($selectBookingDate);
// var_dump($user_booking);
// echo "</p>";

unset($errorMsgArray);
unset($debugMsgArray);

}
