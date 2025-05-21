<?php
	session_start();
	$con=mysqli_connect("localhost","root","","login")or die('connetion error');
	$otp=$_SESSION['otp'];
	if (isset($_POST['verify'])) 
	{
		$code=$_POST['code'];
		$sql="select * from login_tbl where code='$code';";
		$qry=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($qry);
		if ($code==$otp) 
		{
			if ($row>0) 
			{
				$_SESSION['cid']=$row['id'];
				$_SESSION['code']=$code;
				header('location:resetpassword.php');
			}
		}
		else
		{
			echo "<script>alert('Invalid OTP!');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Code Verification</title>
  <link rel = "icon" href = "logo3.png" type = "image/x-icon">
	<link rel="stylesheet" href="css/forgot.css">
	<style type="text/css">
		.msg
		{
			border: 2px solid palevioletred;
			padding: 3px;
			border-radius: 5px;
			//background: #9699a0ad;
			color: palevioletred;
		}
	</style>
</head>
<body>
	
	<div class="wrapper">
    <h1 align="center">Code Verification</h1>
    <form action="" method="post">
    <div class="msg">
        <p align="center">We've sent a password OTP to you email-<?php echo $_SESSION['receiver']; ?></p>
    </div>
      <div class="input-box">
        <input type="text" name='code' placeholder="Enter verification code" required>
      </div>
      <div class="input-box button">
        <input type="submit" name="verify" value="Submit">
      </div>
</body>
</html>