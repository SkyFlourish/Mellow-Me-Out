<?php

require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/create-staff-member-login.inc.php');

$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
$Username = mysqli_real_escape_string($conn, $_POST['username']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

$createAccountSuccess = false;

if(createStaffAccount($firstName,$lastName,$Username,$pwd,$conn) == true) {
    $createAccountSuccess = true;
}
else {
    $createAccountSuccess = false;
}

if($createAccountSuccess == true) {
    echo "Account created";
}
else {
    echo "Account not created";
}
