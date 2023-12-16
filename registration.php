<?php
include("connect.php");
$query="select * from tbl_category";
$res=mysqli_query($con, $query);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home of Final Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff&display=swap" rel="stylesheet">
	

</head>

<body>
    <div class="container-fluid">
<!--SECOND MENU START -->
		<div class="row">
			<div class="col-sm-12 px-0">
			<?php 
			include("menu.php");
			?>
			</div>
		</div>
		<!--SECOND MENU END-->
		
		<div class="row">
			<div class="col-sm-12 text-center">
			<h1>USER REGISTRATION</h1>
			</div>
		</div>

       <form class="row g-3" action="registrationcode.php" method="post">
	   
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">User Name<sup class="text-danger">*</sup> :- </label>
    <input type="text" class="form-control border border-bottom border-warning" name="uname" id="inputEmail4" placeholder="Enter User Name">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Mobile<sup class="text-danger">*</sup> :- </label>
    <input type="tel" class="form-control border border-bottom border-warning" name="mobile" id="inputPassword4" placeholder="Enter Mobile No.">
  </div>
	   
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email<sup class="text-danger">*</sup> :- </label>
    <input type="email" class="form-control border border-bottom border-warning" name="email" id="inputEmail4" placeholder="Enter Email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password<sup class="text-danger">*</sup> :- </label>
    <input type="password" class="form-control border border-bottom border-warning" name="pwd" id="inputPassword4" placeholder="Enter Password">
  </div>
  <div class="col-8">
    <label for="inputAddress" class="form-label">Address<sup class="text-danger">*</sup> :- </label>
    <input type="text" class="form-control border border-bottom border-warning" name="address" id="inputAddress" placeholder="Enter Address">
  </div>
  
  <div class="col-md-4">
    <label for="inputCity" class="form-label">City<sup class="text-danger">*</sup> :- </label>
    <input type="text" class="form-control border border-bottom border-warning" name="city" id="inputCity" placeholder="Enter City">
  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-sm-12">
    <input type="submit" class="btn btn-primary form-control" value="Register">
  </div>
</form>
Do you have already registered ? <a href="userlogin.php">Login Here</a>

	

<!--FOOTER START-->



<!--FOOTER END-->



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>