<?php
session_start();
$id=$_SESSION['id'];
$con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
$sql="UPDATE `tbl_reg` SET `status` = '0' WHERE `tbl_reg`.`s_id` = $id;";
$qry=mysqli_query($con,$sql);
session_unset();
session_destroy();
header('location: ../user/index.php');
?>