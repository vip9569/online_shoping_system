<?php
session_start();
$email=$_SESSION['user'];

/* include("connect.php"); */
$con=mysqli_connect("localhost", "root", "", "os");
$query="select * from tbl_user where email='$email'";
$result=mysqli_query($con, $query);
if($value=mysqli_fetch_array($result)){
	 $pp=$value['password'];
	 $oldpwd=$_POST['oldpwd'];
	 $newpwd=$_POST['newp'];
	 $cnp=$_POST['cnp'];
}
	 if($pp==$oldpwd){
		if($oldpwd==$newpwd){
			echo "Your Old password And New Password are Same";
		}
		elseif($newpwd==$cnp){
			$query2="update tbl_user set password='$newpwd' where email='$email'";
			mysqli_query($con, $query2);
			session_destroy();
			header("Location:userlogin.php");
		}
		else{
			header("Location:changeuserpwd.php");
		}
	}
	else{
		header("Loaction:changeuserpwd.php");
	} 

?>