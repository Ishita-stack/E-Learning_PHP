<?php
	session_start();
	$con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
	$t_title=$_GET['t_title'];
    $c_title=$_SESSION['c_title'];

    $sql="DELETE FROM tbl_test WHERE `c_title` = '$c_title' AND `t_title` = '$t_title';";
    $qry=mysqli_query($con,$sql);

	if ($qry) {
		echo '<script>alert(Data is deleted....);</script>';
		
		header("location:all_test.php");
	}
	else
	{
		echo '<script>alert(Data is not deleted....);</script>';
		
		header("location:all_test.php");
	}
	
?>