<?php 
	$con=mysqli_connect("localhost","root","","online_education")or die("connection error");
	$id=$_GET['id'];
	$sql="DELETE FROM tbl_assignment WHERE `tbl_assignment`.`a_id` = $id;";
	$qry=mysqli_query($con,$sql);
	if ($qry) {

		echo "Data deleted successfully";
		header('location:manage_assign.php');
	}
	else
	{
		echo "Data is not deleted";
		header('location:manage_assign.php');
	}


?>