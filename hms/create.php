 <?php
   include_once 'includes/dbs.inc.php';
   $conn = connection();

   if (isset($_POST['submit'])) {

      $firstName = $_POST['firstName'];
      $middleName = $_POST['middleName'];
      $lastName = $_POST['lastName'];
      $dateOfBirth = $_POST['dob'];
      $gender = $_POST['sex'];
      $maritalStatus = $_POST['maritalStatus'];
      $address = $_POST['address'];
      $contactNumber = $_POST['cNum'];


      $height = $_POST['height'];
      $weight = $_POST['weight'];
      $allergies = $_POST['allergies'];
      $operations = $_POST['operations'];
      $medications = $_POST['medications'];


      $sql = "INSERT INTO `patientinformation`(`firstName`, `middleName`, `lastName`, `dateOfBirth`, `gender`, `maritalStatus`,
       `p_address`, `contactNumber`, `height`, `weight`, `allergies`, `operations`, `medications` ) 
      VALUES ('$firstName',' $middleName',' $lastName',' $dateOfBirth', '$gender', '$maritalStatus', '$address', '$contactNumber', '$height', 
      '$weight', '$allergies', '$operations', '$medications')";

      $conn->query($sql) or die($conn->error);

      echo header("Location: home.php");
   }


   if (isset($_POST['signup'])) {
      $firstName = $_POST['firstName'];
      $middleName = $_POST['middleName'];
      $lastName = $_POST['lastName'];
      $username = $_POST['username'];
      $password = $_POST['password'];

      $sql = "INSERT INTO `users`(`userName`, `password`, `firstName`, `lastName`, `middleName`) VALUES ('$username','$password ',' $firstName','$middleName','$lastName')";
      $conn->query($sql) or die($conn->error);


      echo header("Location: index.php?success");
   }


   ?>