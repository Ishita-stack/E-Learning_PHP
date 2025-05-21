<?php
	$con=mysqli_connect("localhost","root","","online_education")or die("connection error");
	$id=$_GET['id'];
	$sql="DELETE FROM tbl_feedback WHERE `tbl_feedback`.`id` = $id;";
	$qry=mysqli_query($con,$sql);
	if ($qry) 
	{
		echo "<script>alert('Data deleted successfully...');</script>";	
		header("location:feedback.php");
	}
	else
	{
		echo "<script>alert('Data not deleted...');</script>";	
		header("location:feedback.php");
	}
?>