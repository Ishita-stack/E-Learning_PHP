<?php
	$con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
	$id=$_GET['id'];
	$sql="DELETE FROM tbl_course WHERE `tbl_course`.`c_id` = $id;";
	$qry=mysqli_query($con,$sql);
	if ($qry) 
	{
		$_SESSION['alert']=1;
	    $_SESSION['alert_title']="DELETE";
		// echo "<script>alert('Data Deleted successfully');</script>";
		echo "<script>window.location.href = 'manage_courses.php';</script>";
	}
?>