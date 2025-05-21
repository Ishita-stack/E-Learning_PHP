<?php
	session_start();
    if (isset($_SESSION['role']))
    {
    	if ($_SESSION['role']=='admin') 
    	{
    		header('location:../admin/admin.php');
    	}
    }
    else
    {
    	header('location:../login.php');
    }
    echo "<h1 align='center'>Welcome ".$_SESSION['name']."</h1>";
    echo "<br><h4 align='center'><a href='logout.php'>Logout</a></h4>";
?>