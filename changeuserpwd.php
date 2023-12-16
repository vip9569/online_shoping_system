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
    <title>DashBoard page </title>
</head>

<body>
    <div class="container-fluid">

        <!-- Left Side Start -->
        <div class="row">
            
            <div class="col-sm-3 bg-success bg-opacity-10">
                <div class="row py-0">
                    <div class="col-sm-12 text-center bg-warning bg-opacity-25">
                        <span><img src="assets/images/vikasimage.jpg" class="rounded-circle m-4 border" style="height:150px; width:150px;" alt=""></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center fs-5 fontdynapuff"><b>USER CONTROLS</b></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">



                        <div class="list-group  fs-4">
                            <!-- <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a> -->
                          
                            <a href="userprofile.php" class="list-group-item list-group-item-action list-group-item-primary my-2 shadow"><i class="bi bi-cart4 text-start"></i><span class="float-end">MY PROFILE</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary my-2 shadow"><i class="bi bi-cart4 text-start"></i><span class="float-end">MY ORDER</span></a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-success my-2 shadow"><i class="bi bi-cart4 text-start"></i><span class="float-end">MY CART</span></a>
                            <!-- <a href="#" class="list-group-item list-group-item-action list-group-item-danger my-2 shadow">VIEW PRODUCT</a> -->
                            <a href="changeuserpwd.php" class="list-group-item list-group-item-action list-group-item-danger my-2 shadow"><i class="bi bi-cart4 text-start"></i><span class="float-end">CHANGE PASSWORD</span></a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-warning my-2 shadow"><i class="bi bi-cart4 text-start"></i><span class="float-end">LOGOUT</span></a>
                            <!-- <a href="#" class="list-group-item list-group-item-action list-group-item-info my-2 shadow"><i class="bi bi-cart4 text-start"></i><span class="float-end">ADD NOTIFICATION</span></a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-light my-2 shadow"> <i class="bi bi-cart4 text-start"></i><span class="float-end">VIEW CART</span></a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-dark my-2 shadow"><i class="bi bi-cart4 text-start"></i><span class="float-end">VIEW CONTACT US</span></a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-dark my-2 shadow"><i class="bi bi-cart4 text-start"></i><span class="float-end">VIW SOLD ITEMS</span></a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-dark my-2 shadow"><i class="bi bi-cart4 text-start"></i><span class="float-end">GENERATE REPORT</span></a> -->
                            <!-- <i class="bi bi-cart4"></i> -->
                        </div>
                    </div>
                </div>



            </div>

        <!-- LeftSide End -->
            <div class="col-sm-9 min-vh-100" id="content">

     <!--Header Start  -->

                <div class="row bg-danger">
                    <div class="col-sm-10 p-3">
                        <h1 class="float-start">User Profile</h1>
                    </div>
                    <div class="col-sm-2 p-3 h1">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle bi bi-person-circle fs-4 border text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Profile</a></li>
                              <li><a class="dropdown-item" href="#">Change Password</a></li>
                              <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
    <!-- Header End -->
	<div class="row">
	<div class="col-sm-12">
	<form action="changepwdcode.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Old Password</label>
    <input type="password" class="form-control" name="oldpwd" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">New Password</label>
    <input type="password" class="form-control" name="newp">
  </div>
  <div class="mb-3">
  <label class="form-check-label" for="exampleCheck1">Confirm New Password</label>
    <input type="password" class="form-control" name="cnp">
  </div>
  <button type="submit" class="btn btn-primary text-align-center">Submit</button>
</form>
		</div>
	</div>

    <!-- first row -->
                

        <!-- Third Row End -->

             </div>       <!--col-sm-9    -->





        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>