<?php
  session_start();
  $con=mysqli_connect("localhost","root","","login")or die('connetion error');
  $id=$_SESSION['cid'];
  $cd=$_SESSION['code'];
  if (isset($_POST['change'])) 
  {
    $npass=$_POST['npass'];
    $cpass=$_POST['cpass'];
    if ($npass==$cpass) 
    {
      $sql="UPDATE `login_tbl` SET `password` = '$npass' WHERE `login_tbl`.`id` = $id;";
      $qry=mysqli_query($con,$sql);
      if ($qry) 
      {
        echo "<script>alert('Password changed successfully');</script>";
        $sql2="UPDATE `login_tbl` SET `code` = '0' WHERE `login_tbl`.`id` = $id;";
        $qry2=mysqli_query($con,$sql2);
        echo "<script>window.location='login.php';</script>";
      }
      else
      {
        echo "password doesn't changed";
      }
    }
    else
    {
       echo "<script>alert('Password and confirm password doesn't matched!);</script>";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reset Password</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
	<div class="wrapper">
    <h1 align="center">Reset Password</h1>
    <form action="" method="post">
      <div class="input-box">
        <input type="Password" name='npass' placeholder="Enter New Password" required>
      </div>
      <div class="input-box">
        <input type="Password" name='cpass' placeholder="Enter Confirm Password" required>
      </div>
      <div class="input-box button">
        <input type="submit" name="change" value="Change">
      </div>
</body>
</html>