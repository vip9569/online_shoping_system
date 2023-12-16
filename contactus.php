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

                    <div class="col-sm-12">
                        <form action="contactuscode.php" method="post" >
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label"> Name :- </label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Enter Name">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Email :- </label>
                                <input type="email" class="form-control" name="email" placehpolder="Enter Email">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Mobile :- </label>
                                <input type="tel" class="form-control" name="mobile" placehpolder="Enter MObile No">
                                    
                            </div>
                            
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Description :- </label>
                                <textarea class="form-control" name="desc"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="form-control bg-primary"
                                    value="SEND">
                            </div>
                        </form>
                    </div>
                </div>
	

<!--FOOTER START-->



<!--FOOTER END-->



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>