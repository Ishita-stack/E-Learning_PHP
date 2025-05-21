<?php
  session_start();
  $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
  $id=$_SESSION['id'];
if(isset($_POST['change']))
{
  $sql="SELECT * FROM `tbl_reg` WHERE `s_id`='$id';";
  $qry=mysqli_query($con,$sql)or die("Query Error");
  $row=mysqli_fetch_assoc($qry);
  $npass=$_POST['npass'];
  $cpass=$_POST['cpass'];
    if($npass==$cpass)
    {
      $sql1="UPDATE `tbl_reg` SET `password` = '$npass' WHERE `tbl_reg`.`s_id` = $id;";
      $qry1=mysqli_query($con,$sql1);
      if ($qry1) 
      {
          echo "<script>alert('Password changed successfully');</script>";
          echo "<script>window.location='index.php';</script>";
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
	<link rel="stylesheet" href="css/password_style.css">
</head>
<body>
	<div class="wrapper">
    <h1 align="center">Change Password</h1>
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
    </form>
  </div>  
</body>
</html>