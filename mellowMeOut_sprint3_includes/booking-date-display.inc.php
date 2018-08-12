<?php

// Puts the next years months from the time of call into an array to work with
// First array key is always assumed to be the current month, and remaining days
// need to be accounted for, the rest can be iterated through without issue.

function displayMonthsFromDate() {

date_default_timezone_set('Australia/Victoria');

$limit = 12;
$currentDate = new DateTime;
$endDate = date('d/m/Y', strtotime('+1 Year'));
$interval = DateInterval::createFromDateString('1 months');
$recurrences = 12;

$dateRange = new DatePeriod($currentDate, $interval, $recurrences);

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
    echo "Days remaining:";
    echo $daysInMonth - $dateDayInt;
    echo "</br>";
    echo "</p>";
}

var_dump($dateRange);

}
