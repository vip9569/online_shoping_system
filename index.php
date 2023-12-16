<?php
include("connect.php");
$query="select * from tbl_category";
$res=mysqli_query($con, $query);

	#for notification
	$query3="select notice from tbl_notice ORDER BY notice_id desc limit 1";
	$notice=mysqli_query($con, $query3);
	$notification=mysqli_fetch_array($notice);
		
	

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

<body class="px-0">
    <div class="container-fluid">
        </div>
		<!--SECOND MENU START -->
		<div class="row">
			<div class="col-sm-12 px-0">
			<?php 
			include("menu.php");
			?>
			</div>
		</div>
		<!--SECOND MENU END-->
		
		
		<!--Notification-->
		<div class="row">
				<div class="col-sm-12">
					<marquee behavior="alternate" class="text-danger h2"><?php echo $notification['notice'] ;?>!!!!</marquee>
				</div>
			</div>
		
		<!--Notification-->
        <!-- ----Slider Start--- -->
        <div class="row">
            <div class="col-sm-12 px-0">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner px-0">
                        <div class="carousel-item active" data-bs-interval="10000">

                            <img src="assets/images/banners/1.png" class="d-block w-100 image" alt="vinegar">

                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">

                            <img src="assets/images/banners/2.png" class="d-block w-100 image" alt="...">

                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <img src="assets/images/banners/3.png" class="d-block w-100 image" alt="...">

                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <img src="assets/images/banners/4.png" class="d-block w-100 image" alt="...">

                            <div class="carousel-caption d-none d-md-block">
                                <h5>Fourth slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        </div>
        <!-- ----Slider End ---- -->
		
		

        <!-- icon start -->
        <div class="row bg-danger bg-gradient bg-opacity-10 text-center">
            <div class="col-sm-12 mt-2"><h1 class="fontdynapuff"><!--LIVE WITH NATURAL HEALTHNESS --><span class="auto-type"> </span></h1></div>
			
			
			
			<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	
			<script>
            var typed = new Typed(".auto-type", {
                strings:["LIVE WITH NATURE", "LIVE WITH NATURE", "TAKE NATURAL PRODUCTS", "KEEP HEALTHY"],
                typeSpeed:150,
                backSpeed:150,
                loop:true
            })
            </script> 
			
			
            <div class="row pt-3">
                <div class="col-sm-3 fs-4"><img src="assets/images/nature1.png" style="height:100px; width:100px;"
                        alt="nature"></div>
                <div class="col-sm-3 fs-4"><img src="assets/images/cow2.png" style="height:120px; width:120px;" alt="cow">
                </div>
                <div class="col-sm-3 fs-4"><img src="assets/images/bee.png" style="height:100px; width:100px;" alt="bee"></div>
                <div class="col-sm-3 fs-4"><img src="assets/images/sugarcane-3.png" style="height:100px; width:100px;"
                        alt="sugercane"></div>
            </div>
        </div>
        <!-- icon end -->

        <!-- FIRST ROW CARD START -->
		
		<?php
		while($row=mysqli_fetch_array($res)){
			?>
		
        <div class="row">
            <!--<div class="col-sm-6 border border-5 border-warning px-0 border-opacity-50"><img src="assets/images/pickle.jpg"
                    style="width:100%;" alt="mango_pickle"></div>-->
            <div class="col-sm-12 text-center border border-5 bg- border-warning border-opacity-50">
                <h1 class="personal"><?php echo $row['name']; ?></h1>
            </div>
        </div>
		
		
			
        <div class="row">
            <div class="col-sm-12">
                
				<div class="card-group">
				<?php
					$cat_id=$row['cat_id'];
					$query2="select * from tbl_product where cat_id='$cat_id'";
					$res2=mysqli_query($con, $query2);
				while($row2=mysqli_fetch_array($res2)){
					?>
				<div class="col-sm-3">
				
                    <div class="card text-center bg-warning bg-opacity-10 border-0 shadow my-2 mx-1">
                        <span><img src="admin/upload/<?php echo $row2['filename']; ?>" class="card-img-top h-w-c" alt="..."></span>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row2['pro_name']; ?></h5>
                            <p class="card-text">Price :- <?php echo $row2['s_price']; ?> Rs.</p>
                            <p class="card-text"><small class="text-muted">Last updated :- <?php echo $row2['date']; ?></small></p>
							<p class="card-text"><small class="text-muted">Description :- <?php echo $row2['description']; ?></small></p>
							<a href="usercart.php?id=<?php echo $row2['pro_id'];?>" role="button" class="btn btn-info bg-opacity-25 shadow btn-lg float-start bi bi-cart4">ADD CART</a>
							<a href="single.php?id=<?php echo $row2['pro_id'];?>" role="button" class="btn btn-warning bg-opacity-25 shadow btn-lg float-end"><i class="bi bi-bag float-start"></i><span class="float-end">BUY NOW</span></a>
                        </div>
                    </div>
					</div>
					
					<?php
						}
					?>
					</div>
					                
            </div>
        </div>
		<?php 
		}
		?>

        <!-- FIRST ROW CARD END -->

        <!-- SECOND HEADING START -->
        <div class="row">
            <div class="col-sm-6 border border-5 border-danger text-center border-opacity-50">
                <h1 class="fontdynapuff">NATURAL AND 100% ORGINAL JAGGERY</h1>
            </div>
            <div class="col-sm-6 border border-5 border-danger px-0 border-opacity-50">
                <img src="assets/images/banners/banner.jpg" style="height:100%;width:100%" alt="">
            </div>
        </div>
        <!-- SECOND HEADING END -->

        <!-- SECOND CARD START -->
        <div class="row  my-2">
            <div class="col-sm-12">
                
            </div>

        </div> 
		
		
		
		
		
		
	
<!-- TESTIMONIAL AND NOTICE ROW START -->
		<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center">Testimonials!</h1>
				</div>
		
		
		</div>

<!-- TESTIMONIAL AND NOTICE ROW END -->

<!--<div class="row">
	<div class="col-sm-12">
		<div class=".div"><img src="assets/images/car1.png" alt="" style="height:50px; width:100px;"></div>
	</div>
</div>-->

		

<!--FOOTER START-->
  <div class="row mt-2 bg-dark text-light px-0">
            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-4">
                        <h4>Help</h4>
                        <ul>
                            <li>track Your Order</li>
                            <li>Return</li>
                            <li>Cancelation</li>
                            <li>Payments</li>
                            <li>Customer care</li>
                    </div>
                    <div class="col-sm-4">
                        <h4>Information</h4>
                        <ul>
                            <li>Privacy Policy</li>
                            <li>Refund Policy</li>
                            <li>Terms & Services</li>
                            <li><a href="contact.php" style="text-decoration: none; color:white">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 text-center">

                        <!--<img src="Assets/images/1.png" height="50%" width="100%" alt="">-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mx-3">
                        <h2>
                            <span><i>Follow Us</i></span>
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-whatsapp"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-youtube"></i>
                        </h2>

                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="row">

                    <div class="col-sm-5">
                        <h4><i class="bi bi-geo-alt-fill"></i>Address</h4>
                        <p>Gavai Swad Agro Products (P) Limited
                            accusantium
                            sequi
                            velit esse quasi consequuntur qui nesciunt praesentium porro voluptate incidunt numquam.</p>
                    </div>
                    <div class="col-sm-7 mx-0">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.3586983511736!2d80.96201571436606!3d26.923840766094024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd7e0637bf21%3A0x730fe46201abc68a!2sSoftpro%20Learning%20Center!5e0!3m2!1sen!2sin!4v1661754039361!5m2!1sen!2sin" width="100%" height="250" style="border:0; margin-top:15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 

                    </div>
                </div>
            </div>
			<p class="">&copy;2022 developed and designed by vikas yadav under SOFT PRO INDIA Pvt. Ltd.</p>
        </div>
        <!-- footer end-->

<!--FOOTER END-->



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>