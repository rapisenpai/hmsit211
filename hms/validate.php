<?php
include_once 'includes/dbs.inc.php';
$conn = connection();
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM `users` WHERE userName = '$username' and password = '$password'");
$fetch = mysqli_fetch_array($sql);
$row = mysqli_num_rows($sql);

$userID = $_SESSION['userID'] = $fetch['userID'];

if ($sql->num_rows > 0) {
    Header('Location: home.php?ID=' . $userID);
} else {
    Header('Location: index.php?invalid');
}
$conn->close();
