<?php

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
    echo $date->format("M Y");
    echo cal_days_in_month(CAL_GREGORIAN, $currentDate('n'), $currentDate('y'));
    echo "</br>";
}

}
