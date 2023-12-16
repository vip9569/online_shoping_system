<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff&display=swap" rel="stylesheet">

    <title>Login Page</title>
</head>

<body>
    <div class="container-fluid bg-warning bg-opacity-25">
        <div class="row">
            <div class="col-sm-12 mt-2">
			<a class="btn btn-primary" href="index.php" role="button">Back to Home</a>
            </div>
        </div>
		<div class="row">
            <div class="col-sm-12 mt-0 text-center">
                <h1 class="login-h-s float-center">LOGIN FORM</h1>
            </div>
        </div>


        <div class="row mt-2">
            <div class="col-sm-2"></div>
            <div class="col-sm-4 mt-2 border bg-light shadow rounded-bottom"><img src="assets/images/login1.jpg" class="loginimg" style="height:100%;width:100%;" alt="Login Images"></div>
            <div class="col-sm-4 mt-2 border bg-light shadow rounded-bottom">

                    <div class="row mt-4">
                        <div class="col-sm-12 text-center fontdynapuff">Login User With Your Existing Account</div>
                    </div>

                <form action="userlogincode.php" method="post">
                    <div class="row mb-1 mt-4">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label mt-4">Email<sup
                                style="color:red;">*</sup></label>
                        <div class="col-sm-10">
                            <input type="email" name="email"
                                class="form-control mt-4 border-0 border-warning  border-bottom shadow-sm"
                                id="colFormLabelSm" placeholder="Enter Username/Email">
                            </div>
                            <!-- <hr class="mt-2"/> -->
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label mt-4">Password<sup
                                style="color:red;">*</sup></label>
                        <div class="col-sm-10">
                            <input type="password" name="pwd"
                                class="form-control mt-4 border-0 border-bottom border-warning shadow-sm"
                                id="colFormLabel" placeholder="Enter Password">
                        </div>
                        <!-- <hr class="mt-2"/> -->
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <input type="checkbox"name="checkbox" class="float-end mt-2 h-2 w-2">
                        </div>
                        <div class="col-sm-10"><p>I am not robot</p></div>
                    </div>

                    <!-- Forget Password Code -->

                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6">
                            <a href="userforgetpwd.php" class="anchor-style float-end">Forget password ?</a>
                        </div>
                    </div>

                    <div class="row mb-3 text-center mt-2">
                        <!-- <div class="col-sm-2"></div> -->
                        <div class="col-sm-12">
                            <input type="submit" class="form-control border-0 bg-warning bg-opacity-50 fs-4 submit-s"
                                value="Login" id="colFormLabel">
                        </div>
                    </div>
                </form>
				
				<a href="registration.php">Not Yet Registered</a>
            </div>
            <div class="row mt-5  bg-danger bg-opacity-25 mx-0 px-0">
                <div class="col-sm-12 mt-4 text-center">
                    <p>Designed and daveloped by Vikas Yadav</p>                
                </div>
            </div>




        </div>
        <div class="col-sm-2"></div>
    </div>












    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>


