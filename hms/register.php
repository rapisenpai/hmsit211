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
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <section class="vh-100" style="background-color: #F0F0F0;">
        <div class="container py-5 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card shadow-lg" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="./img/clay-banks-cEzMOp5FtV4-unsplash.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="create.php" method="POST">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0">Create an account
                                            </span>
                                        </div>
                                        <div class="row">
                                            <label class="form-label">Name</label>
                                            <div class="form-outline mb-4 col-4">
                                                <input type="text" name="firstName" placeholder="Rafhael" required class="form-control form-control-md" />
                                            </div>
                                            <div class="form-outline mb-4 col-4">
                                                <input type="text" name="middleName" placeholder="A. " required class="form-control form-control-md" />
                                            </div>
                                            <div class="form-outline mb-4 col-4">
                                                <input type="text" name="lastName" placeholder="Homwad" required class="form-control form-control-md" />
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">Email address</label>
                                            <input type="email" id="form2Example17" name="username" placeholder="Enter an email address" required class="form-control form-control-md" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Create password</label>
                                            <input type="password" name="password" id="form2Example27" placeholder="Create password" required class="form-control form-control-md" />

                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" name="signup" type="submit">Signup</button>
                                        </div>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="index.php">Login</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>