<?php
include_once 'includes/dbs.inc.php';
$conn = connection();
$patientID =  mysqli_real_escape_string($conn, $_GET['ID']);

$sql = "SELECT * FROM patientinformation WHERE patientID = '$patientID'";
$patientInformation = $conn->query($sql) or die($conn->error);
$row = $patientInformation->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

    <div class="container bg-light shadow-lg p-5 mb-5 bg-body rounded mt-5">

        <h1 class="fw-bold">Patient Information</h1>
        <div class="row">
            <div class="col-6">
                <p><b>Name: </b><?php echo $row['firstName'] . " " . $row['middleName'] . " " . $row['lastName'] ?></p>
                <p><b>Date of Birth:</b> <?php echo $row['dateOfBirth'] ?></p>
                <p><b>Gender:</b> <?php echo $row['gender'] ?></p>
                <p><b>Marital Status:</b> <?php echo $row['maritalStatus'] ?></p>
                <p><b>Address:</b> <?php echo $row['p_address'] ?></p>
                <p><b>Contact Number:</b> <?php echo $row['contactNumber'] ?></p>
            </div>
            <div class="col-6">
                <p><b>Height: </b><?php echo $row['height'] ?></p>
                <p><b>Weight:</b> <?php echo $row['weight'] ?></p>
                <p><b>List of Drug allergies:</b> <?php echo $row['allergies'] ?></p>
                <p><b>List of Operations:</b> <?php echo $row['operations'] ?></p>
                <p><b>List of Current Medications:</b> <?php echo $row['medications'] ?></p>
            </div>
        </div>



        <a href="home.php" type="button" name="close" class="btn btn-primary">Back</a>
        <a href="edit.php?ID=<?php echo $row['patientID'] ?>" type="button" class="btn btn-success">Edit</a>
        <a href="delete.php?ID=<?php echo $row['patientID'] ?>" type="button" class="btn btn-danger">Delete</a>

    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>