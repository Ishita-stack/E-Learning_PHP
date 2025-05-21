<?php
	session_start();
	$con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
	$id=$_SESSION['id'];
	$sql="UPDATE `tbl_reg` SET `status` = '0' WHERE `tbl_reg`.`s_id` = '$id';";
	$qry=mysqli_query($con,$sql);
	session_destroy();
	session_unset();
	header('location:../login.php');
?>