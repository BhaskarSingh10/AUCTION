<?php
$hostname = "localhost";
$dbUsername = "auction";
$dbPPWD = "auction4410#$";
$dbName = "auction";


$conn = new mysqli($hostname, $dbUsername, $dbPPWD, $dbName);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
