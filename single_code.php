<?php
$user_id=$_POST['user'];
$pro_id=$_POST['pro'];
$cat_id=$_POST['cat'];
$units_id=$_POST['unit'];
$amount_id=$_POST['amount'];

include("connect.php");
$query="insert into tbl_order(user_id, cate_id, pro_id, quantity, amount, order_date) values('$user_id', '$cat_id', '$pro_id', '$units', '$amount', curdate())";
if(mysqli_query($con, $query)){
	$query2="update tbl_product set units=unit-$units where pro_id='$pro_id'";
	mysqli_query($con, $query2);
	header("Location:index.php");
}

?>