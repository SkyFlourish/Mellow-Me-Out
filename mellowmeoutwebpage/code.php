<?php
//connect to local database 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "user";

//internet database
//$dbServername = "sql12.freemysqlhosting.net";
//$dbUsername = "sql12228516";
//$dbPassword = "eDmz3nTDMg";
//$dbName = "sql12228516";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);