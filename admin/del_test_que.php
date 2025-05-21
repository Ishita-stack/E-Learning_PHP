<?php
	$con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
	$id=$_GET['id'];
	$sql="DELETE FROM tbl_test WHERE `tbl_test`.`id` = $id;";
	$qry=mysqli_query($con,$sql);
	if ($qry) {
		echo '<script>alert(Data is deleted....);</script>';
		header("location:edit_test_new.php");
	}
	else
	{
		echo '<script>alert(Data is not deleted....);</script>';
		header("location:edit_test_new.php");
	}
	
?>