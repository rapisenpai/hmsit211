<?php

function connection()
{
    $dbServerName = "localhost";
    $dbUsername = "root";
    $dbPassword = "password";
    $dbName = "hospitalmanagementsystem";

    $conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName, 3307);

    if ($conn->connect_error) {
        echo $conn->connect_error;
    } else {
        return $conn;
    }
}
$conn = connection();

$sql = "SELECT * FROM patientinformation";
$patientInformation = $conn->query($sql) or die($conn->error);
$row = $patientInformation->fetch_assoc();
