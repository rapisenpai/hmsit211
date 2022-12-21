<?php
include_once 'includes/dbs.inc.php';
$conn = connection();

if (isset($_POST['submit'])) {

    $patientID = mysqli_real_escape_string($conn, $_GET['ID']);
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $middleName = mysqli_real_escape_string($conn, $_POST['middleName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $dateOfBirth = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['sex']);
    $maritalStatus = mysqli_real_escape_string($conn, $_POST['maritalStatus']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contactNumber = mysqli_real_escape_string($conn, $_POST['cNum']);

    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $allergies = $_POST['allergies'];
    $operations = $_POST['operations'];
    $medications = $_POST['medications'];

    $sql = "UPDATE patientinformation SET firstName ='$firstName', middleName = '$middleName', lastName = '$lastName', dateOfBirth = '$dateOfBirth',
    gender = '$gender', maritalStatus = '$maritalStatus', p_address = '$address', contactNumber = '$contactNumber', height = '$height', weight = '$weight',
    allergies = '$allergies', operations = '$operations', medications = '$medications' WHERE patientID = '$patientID'";

    $conn->query($sql) or die($conn->error);
    echo header("Location: home.php");
}
