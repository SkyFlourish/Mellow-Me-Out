<?php

// Puts the next years months from the time of call into an array to work with
// First array key is always assumed to be the current month, and remaining days
// need to be accounted for, the rest can be iterated through without issue.
// Additionally, we can use the keys/values within arrays 1 and 2 to accurately
// display days available for booking.

function displayMonthsFromDate() {

date_default_timezone_set('Australia/Victoria');

$currentDate = new DateTime;
$currentDateUnmodified = new DateTime;
$firstDayOfNextMonth = $currentDate->modify('first day of next month');
// $endDate = date('d/m/Y', strtotime('+1 Year'));
$interval = DateInterval::createFromDateString('1 months');
$recurrences = 11;
// $recurrences = 12;

// $dateRange = new DatePeriod($currentDate, $interval, $recurrences);
$dateRange = new DatePeriod($firstDayOfNextMonth, $interval, $recurrences);

$dateMonthYear = $currentDateUnmodified->format("M Y");
$dateDayInt = (int)$currentDateUnmodified->format("d");
$dateMonthInt = (int)$currentDateUnmodified->format("n");
$dateYearInt = (int)$currentDateUnmodified->format("y");
$dateDayOfWeek = $currentDateUnmodified->format("l");
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $dateMonthInt, $dateYearInt);

echo "<p>";
echo "Date:";
var_dump($currentDate);
echo "</br>";
echo "Date Month:";
var_dump($dateMonthYear);
echo "</br>";
echo "Date day int:";
var_dump($dateDayInt);
echo "</br>";
echo "Date month int:";
var_dump($dateMonthInt);
echo "</br>";
echo "Date year int:";
var_dump($dateYearInt);
echo "</br>";
echo "Days in month:";
var_dump($daysInMonth);
echo "</br>";
echo "Days remaining:";
echo $daysInMonth - $dateDayInt;
echo "</br>";
echo "Day of the week:";
var_dump($dateDayOfWeek);
echo "</br>";
echo "</p>";

foreach ($dateRange as $date) {
    // code...
    // echo $date->format("M Y");
    $dateMonthYear = $date->format("M Y");
    $dateDayInt = (int)$date->format("d");
    $dateMonthInt = (int)$date->format("n");
    $dateYearInt = (int)$date->format("y");
    // echo "</br>";
    // $dateToDateTime = new DateTime($date);
    // var_dump($dateToDateTime);
    // echo "</br>";
    // echo cal_days_in_month(CAL_GREGORIAN, $date('n'), $date('y'));
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $dateMonthInt, $dateYearInt);

    // echo date('t', strtotime($currentDate)) - date('j', strtotime($currentDate));
    // echo date('t', $date('n')) - date('j', $date('n'));
    // echo date('t', $date) - date('j', $date);
    // echo "</br>";

    echo "<p>";
    echo "Date:";
    var_dump($date);
    echo "</br>";
    echo "Date Month:";
    var_dump($dateMonthYear);
    echo "</br>";
    echo "Date day int:";
    var_dump($dateDayInt);
    echo "</br>";
    echo "Date month int:";
    var_dump($dateMonthInt);
    echo "</br>";
    echo "Date year int:";
    var_dump($dateYearInt);
    echo "</br>";
    echo "Days in month:";
    var_dump($daysInMonth);
    echo "</br>";
    // echo "Days remaining:";
    // echo $daysInMonth - $dateDayInt;
    // echo "</br>";
    echo "</p>";
}

var_dump($dateRange);

// For implementation later
if ($dateDayOfWeek == "Saturday" || $dateDayOfWeek == "Sunday") {
    echo '<select disabled value="">$dayValue</select>';
}
else {
    echo '<select value="$dayValue">$dayValue</select>';
}


}
