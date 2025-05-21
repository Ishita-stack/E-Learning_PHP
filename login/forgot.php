<?php
		session_start();
	  $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
	  if (isset($_POST['verify'])) 
	  {
	    $email=$_POST['email'];
	    $sql="SELECT * FROM `tbl_reg` WHERE s_email='$email';";
	    $qry=mysqli_query($con,$sql)or die('query error');
	    $row=mysqli_fetch_assoc($qry);
	    if ($row>0) 
	    {
	    	$id=$row['s_id'];
	    	$otp=rand(1000,9999);
	    	$receiver = "issharma479@gmail.com";
				$subject = "Code verification";
				$body = "Your email verification code is ".$otp;
				$sender =$email;
				if(mail($receiver, $subject, $body, $sender))
				{	
	    		$sql2="UPDATE `tbl_reg` SET `code` = '$otp' WHERE `tbl_reg`.`s_id` = '$id';";
					$qry2=mysqli_query($con,$sql2)or die('query error');
					$_SESSION['receiver']=$receiver2;
					$_SESSION['otp']=$otp;
					header('location:opt/index.php');
				}
	    }
	    else
	    {
	    	echo "<script>alert('Email is does not exist');</script>";
	    }
	  }
	  else
	  {
	  	echo "<script>alert('Please enter Email...');</script>";
	  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot Password</title>
  <link rel = "icon" href = "logo3.png" type = "image/x-icon">
	<link rel="stylesheet" href="css/forgot.css">
</head>
<body>
	<div class="wrapper">
    <h1 align="center">Forgot Password</h1>
    <form action="" method="post">
      <div class="input-box">
        <input type="text" name='email' placeholder="Enter your email" required>
      </div>
      <div class="input-box button">
        <input type="submit" name="verify" value="verify">
      </div>
</body>
</html>