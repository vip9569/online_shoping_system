<?php
session_start();
$email=$_POST['email'];
$pwd=$_POST['pwd'];
include("connect.php");
$query="select * from tbl_user where email='$email' and password='$pwd'";
$result=mysqli_query($con, $query);
if($row=mysqli_fetch_array($result)){
		$_SESSION['user']=$email;
		header("Location:userprofile.php");
	}
	else{
		header("Location:userlogin.php");
	
	}

?>