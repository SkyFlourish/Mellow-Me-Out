<?php

require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');

function createStaffAccount($firstName,$lastName,$Username,$pwd,$conn) {
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = "INSERT INTO staff (FirstName,LastName,Username,Passphrase) VALUES ('$firstName','$lastName','$Username','$hashedPwd');";
    if(mysqli_query($conn,$sql)) {
        return true;
    }
    else {
        return false;
    }
}
