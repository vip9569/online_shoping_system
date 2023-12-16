<?php
$name=$_POST['uname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$pwd=$_POST['pwd'];
$city=$_POST['city'];
$address=$_POST['address'];
$con=mysqli_connect("localhost", "root", "", "os");
$query="insert into tbl_user(name, email, mobile, password, city, address, dor) values('$name', '$email', '$mobile', '$pwd', '$city', '$address', curdate())";
mysqli_query($con, $query);
header("Location:userlogin.php");

?>