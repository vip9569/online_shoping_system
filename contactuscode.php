<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$desc=$_POST['desc'];
include("connect.php");
$query="insert into tbl_contact(name, email, mobile, message, date) values('$name', '$email', '$mobile', '$desc', curdate())";
mysqli_query($con, $query);
header("Location:contactus.php");
?>