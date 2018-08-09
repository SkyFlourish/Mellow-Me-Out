<<<<<<< HEAD
<?php

// Iterate through the months within the year
//

function displayMonthsFromDate() {

$limit = 12;
$currentDate = new DateTime;
$endDate = date_modify($currentDate, "+ 12 Month");
// P1D is plus one day
$interval = new DateInterval('P1D');
$dateRange = new DatePeriod($currentDate, $interval, $endDate);

foreach ($date as $dateRange) {
    // code...
    echo $date;
    echo "</br>";
}


// $dates = array($currentDate);


// for($i = 1; $i <= $limit; $i++) {
//     $dates[$i]
// }

}
=======
<?php

// Iterate through the months within the year
//

function displayMonthsFromDate() {

$limit = 12;
$currentDate = new DateTime;
$endDate = date_modify($currentDate, "+ 12 Month");
// P1D is plus one day
$interval = DateInterval('P1D');
$dateRange = new DatePeriod($currentDate, $interval, $endDate);

foreach ($date as $dateRange) {
    // code...
    echo $date;
    echo "</br>";
}


// $dates = array($currentDate);


// for($i = 1; $i <= $limit; $i++) {
//     $dates[$i]
// }

}
>>>>>>> edf17ce629f6a0da7eadd2d1e75fce8227067b92
