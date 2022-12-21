<?php
include_once 'includes/dbs.inc.php';
$conn = connection();


if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];

    $sql = "DELETE FROM `patientinformation` WHERE  patientID = '$ID'";
    $conn->query($sql) or die($conn->error);
    header('Location: home.php?delete');
}
