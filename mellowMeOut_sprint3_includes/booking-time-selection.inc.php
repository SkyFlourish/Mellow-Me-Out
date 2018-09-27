<?php

// Retrieves dates and times from the database and determines what
// booking times are available.
// This should be considered very alpha, and will certainly require a
// rework once more staff are hired and availability
// depends on other factors.

date_default_timezone_set('Australia/Victoria');

$currentDate1 = new DateTime;
$currentDate2 = new DateTime;

// Cannot select the current date in order to give client time to
// process clients.
$minDate = $currentDate1->modify('+1 day');
$minDate = $minDate->format('Y-m-d');
 // $minDate = date("d-m-Y", strtotime($minDate));
// Cannot select a date more than a year in advance.
$maxDate = $currentDate2->modify('+1 year');
$maxDate = $maxDate->format('Y-m-d');
 // $maxDate = date("d-m-Y", strtotime($maxDate));

// echo "<p>";
// echo "Date:";
// var_dump($currentDate1);
// echo "</br>";
// echo "Date:";
// var_dump($currentDate2);
// echo "</br>";
// echo "minimum date";
// var_dump($minDate);
// echo "</br>";
// echo "maximum date";
// var_dump($maxDate);


echo "<input type='date' class='form-control' name='booking-date' id='booking-date' min='".$minDate."' max='".$maxDate."'>";
?>
<!-- <html>
  <div id="result"></div>
  </html> -->
