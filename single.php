<?php
session_start();
if($_SESSION['user']==""){
	header("Location:userlogin.php");
}
else{
	$pro_id=$_REQUEST['id'];
	include("connect.php");
	$query="select * from tbl_product where pro_id='$pro_id'";
	$res=mysqli_query($con, $query);
	$row=mysqli_fetch_array($res);
	
	
	$email=$_SESSION['user'];
	$query2="select * from tbl_user where email='$email'";
	$res2=mysqli_query($con, $query2);
	$row2=mysqli_fetch_array($res2);
}
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
    <title>Single.php page </title>
</head>

<body>
    <div class="container-fluid">
	<div class="container">
				<div class="row">
				<div class="col-sm-12">
				
				<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-3">
      <img src="admin/upload/<?php echo $row['filename'];?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['pro_name'];?></h5>
        <p class="card-text">Price :- RS.<?php echo $row['s_price'];?>/-</p>
        <p class="card-text">Latest Updated :- <small class="text-muted"><?php echo $row['date'];?></small></p>
		<p class="card-text">Description :- <small class="text-muted"><?php echo $row['description'];?></small></p>
		<p class="card-text">Shoping Address :- <small class="text-muted"><?php echo $row2['address'];?></small></p>
		<p class="card-text">City :- <small class="text-muted"><?php echo $row2['city'];?></small></p>
		<form action="single_code.php" method="post">
		
		<input type="hidden" class="form-controls" name="user" value="<?php echo $row2['user_id'];?>">
		<input type="hidden" class="form-controls" name="pro" value="<?php echo $row['pro_id']; ?>">
		<input type="hidden" class="form-controls" name="cat" value="<?php echo $row['cat_id']; ?>">
		<input type="hidden" class="form-controls" name="unit" value="1">
		<input type="hidden" class="form-controls" name="amount" value="<?php echo $row['s_price']; ?>">
		
		<button type="submit" class="btn btn-primary shadow float-end">order now </button>
		</form>
		
      </div>
    </div>
  </div>
</div>
				
		</div>
		</div>
			<!--<div class="row">
				<div class="col-sm-12">
				
				
				
				
				</div>
				</div>
				-->
				
				
			
		</div>
	</div>
       

             
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>