<?php

if (isset($_post['submitproduct'])) {
	//include database
	include 'db-connect.php';
	$servicename = mysqli_real_escape_string($conn, $_POST['servicename']);
	$serviceprice = mysqli_real_escape_string($conn, $_POST['serviceprice']);
	$servicetype = mysqli_real_escape_string($conn, $_POST['servicetype']);
	$servicetime = mysqli_real_escape_string($conn, $_POST['servicetime']);
  $date = date('dmy');
  $firedir = "img/";
  $filetoupload = $_FILES(['serviceimage']['name']);
  $fileextension = $filetoupload['extention'];
  $filesize = $filetoupload['filesize'];
  $fileextensionarray = array("jpeg", "png", "jpg", "gifL");
  $serviceimg = $filedir . $date . uniqid() . '.' . $fileextension;

  // Assign variable based on service type selected in the drop down menu
  switch ($servicetype) {
    case 'Massage':
      $servicetype = 1;
      break;

    case 'Spa':
      $servicetype = 2;
      break;

    case 'Nails':
      $servicetype = 3;
      break;

    case 'Eyelash Extensions':
      $servicetype = 4;
      break;

    default:
      $servicetype = 0;
      break;
  }

  if (!in_array($fileextension, $fileextensionarray) || ) {
    // Echo failure
  }
  else {
    if (isset($serviceimg, $servicename, $servicetype, $serviceprice)) {
      $sql = "INSERT INTO Services(ServiceName, ServicePrice, ServiceType, ServiceTime, ServiceImg) VALUES ('$servicename', '$serviceprice', '$servicetype','$servicetime', '$serviceimg');";
  	  mysqli_query($conn, $sql);
  	   //show success in header
  	   header("location: admin.products.php");
  			 exit();

    }
    else {
      // Echo failure
      header("location: admin.products.php");
        exit();

    }
  }
}
