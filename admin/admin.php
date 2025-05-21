<?php
	session_start();
    if (isset($_SESSION['role']))
    {
    	if ($_SESSION['role']=='user') 
    	{
    		header('location:../user/user.php');
    	}
    }
    else
    {
    	header('location:../login.php');
    }
    echo "<h1 align='center'>Welcom ".$_SESSION['name']."</h1>";
    echo "<br><h4 align='center'><a href='logout.php'>Logout</a></h4>";
?>