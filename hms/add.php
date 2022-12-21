<?php
include_once 'includes/dbs.inc.php';
$conn = connection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HMS</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/font.css">
</head>

<body>
   <div class="container bg-light shadow-lg p-5 mb-5 bg-body rounded mt-5">
      <form action="create.php" method="POST">
         <div class="mb-3 ">
            <div>
               <div>
                  <h1 class="fw-bold">Add Patient Information</h1>
                  <h4>General</h4>
               </div>
               <div class="row">
                  <div class="col-4"> <label for="firstName" class="form-label">First Name:</label>
                     <input type="text" class="form-control" id="firstName" name="firstName" required placeholder="Rafhael Lowix">
                  </div>
                  <div class="col-4">
                     <label for="middleName" class="form-label">Middle Name:</label>
                     <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Anob">
                  </div>
                  <div class="col-4">
                     <label for="lastName" class="form-label">Last Name:</label>
                     <input type="text" class="form-control" id="lastName" name="lastName" required placeholder="Homwad">
                  </div>
               </div>
               <div>
                  <label for="dob">Date of Birth:</label>
                  <input class="form-control" name="dob" id="dob" required type="date">
               </div>
               <div class="row">
                  <div class="col-4">
                     <label>Sex: &nbsp;</label><br>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" required value="Male" id="male">
                        <label class="form-check-label" for="male">
                           Male
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" required value="Female" id="female">
                        <label class="form-check-label" for="female">
                           Female
                        </label>
                     </div>
                  </div>
                  <div class="col-8">
                     <label>Marital Status: &nbsp;</label><br>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="maritalStatus" required value="Single" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                           Single
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="maritalStatus" required value="Taken" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                           Taken
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="maritalStatus" required value="Married" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                           Married
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="maritalStatus" required value="Divorced" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                           Divorced
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="maritalStatus" required value="Widowed" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                           Widowed
                        </label>
                     </div>
                  </div>
               </div>

               <div>
                  <label for="address" class="form-label">Address:</label>
                  <textarea class="form-control" required id="address" name="address"></textarea>
               </div>
               <div>
                  <label for="cNum" class="form-label">Contact Number:</label>
                  <input type="number" required maxlength="13" required class="form-control" id="cNum" name="cNum">
               </div>
               <br>
               <h4>Health</h4>
               <div class="row">
                  <div class="col-6"> <label for="height" class="form-label">Patient Height (cm's):</label>
                     <input type="number" class="form-control" id="height" name="height" required value="<?php  ?>">
                  </div>
                  <div class="col-6"> <label for="weight" class="form-label">Patient Weight (kg's)</label>
                     <input type="number" class="form-control" id="weight" name="weight" required value="<?php  ?>">
                  </div>
               </div>
               <div>
                  <label for="allergies" class="form-label"> Please list any drug allergies:</label>
                  <textarea class="form-control" required id="allergies" name="allergies" value="<?php  ?>" rows="2"><?php  ?></textarea>
               </div>

               <div>
                  <label for="operations" class="form-label"> Please list any Operations and Dates of Each:</label>
                  <textarea class="form-control" required id="operations" name="operations" value="<?php  ?>" rows="2"><?php  ?></textarea>
               </div>
               <div>
                  <label for="medications" class="form-label"> Please list your Current Medications:</label>
                  <textarea class="form-control" required id="medications" name="medications" value="<?php  ?>" rows="2"><?php  ?></textarea>
               </div>

            </div>
         </div>
         <div class="d-flex justify-content-end">
            <a href="home.php" type="button" name="close" class="btn btn-secondary">Cancel</a>
            &nbsp;
            <button type="submit" name="submit" class="btn btn-success">Save</button>
         </div>
   </div>
   </form>
   </div>


   <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>