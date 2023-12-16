<?php
include("connect.php");
$query="select * from tbl_product";
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
	
	<div class="row px-0"> 
		<div class="col-sm-12 px-0">
				<?php
				include("menu.php");
				?>
		</div>
	</div>
	
	

        <div class="row bg-danger bg-opacity-10">

              

       
        
        
                
				<?php
		while($row=mysqli_fetch_array($res)){
			?>
			<div class="col-sm-3">
				<div class="card-group">
                    <div class="card text-center py-3 bg-warning bg-opacity-10 border-0 shadow my-2 mx-1">
                        <span><img src="admin/upload/<?php echo $row['filename'];?>" class="card-img-top rounded-circle h-w-c" alt="..."></span>
                        <div class="card-body">
                            <h5 class="card-title"><b><?php echo $row['pro_name'];?></b></h5>
                            <p class="card-text">Price :- <?php echo $row['s_price'];?>Rs.</p>
							<p>Description :- <?php echo $row['description'];?></p>
                            <p class="card-text"><small class="text-muted">Last updated date :-  <?php echo $row['date'];?></small></p>
							<a href="usercart.php" role="button" class="btn btn-info bg-opacity-25 shadow btn-lg float-start">ADD CART</a>
							<a href="single.php" role="button" class="btn btn-warning bg-opacity-25 shadow btn-lg float-end">BUY NOW</a>
                        </div>
                    </div>
					</div>
				</div>
					<?php
						}
					?>

                
            
		

        <!-- FIRST ROW CARD END -->
        <!-- FIRST ROW CARD END -->

        <!-- SECOND HEADING START -->
        <div class="row">
			<div class="col-sm-12">
				
				
				
			</div>        
		</div>
        <!-- SECOND HEADING END -->

        <!-- SECOND CARD START -->
		<div class="row">
			<div class="col-sm-12">
			

			
			</div>        
		</div>
        

<?php
include("footer.php");
?>






    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>