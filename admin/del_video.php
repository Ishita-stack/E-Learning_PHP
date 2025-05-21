<?php 
	$con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
	$id=$_GET['id'];
	$sql="DELETE FROM tbl_video WHERE `tbl_video`.`v_id` = $id;";
	$qry=mysqli_query($con,$sql);
	if ($qry) {
		$_SESSION['alert']=1;
	    $_SESSION['alert_title']="DELETE";
		// echo "<script>alert('Data Deleted successfully');</script>";
		echo "<script>window.location.href = 'manage_video.php';</script>";
	}
	else
	{
		echo "<script>alert('Video is Not Deleted successfully...');</script>";
	}
	header("location:manage_video.php");
?>