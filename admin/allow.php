<?php 
	$con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
	$id=$_GET['id'];
	$sql="UPDATE `tbl_reg` SET `status` = '1' WHERE `tbl_reg`.`s_id` = $id;";
	$qry=mysqli_query($con,$sql);
	if ($qry) 
	{
		//echo "<script>alert('query run seccessfull...');</script>";
		echo "<script>window.location.href = 'request_user.php';</script>";
	}
	else
	{
		echo "not successfull.....";
	}
?>