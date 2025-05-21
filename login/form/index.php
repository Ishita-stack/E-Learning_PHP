<?php
	$con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
	if (isset($_POST['submit'])) 
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$uname=$fname." ".$lname;
		$gen=$_POST['gen'];
		$num=$_POST['num'];
		$add=$_POST['add'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$profession=$_POST['profession'];
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];
		$name=$_FILES['photo']['name'];
		$file_type=$_FILES['photo']['type'];
		$file_size=$_FILES['photo']['size'];
		$path="upload/".$name;
		$temp_name=$_FILES['photo']['tmp_name'];
		$file_upload=true;
		$msg="";
		echo "<script>alert('Registerd successfully');</script>";
		echo "<script>window.location.href = '../login.php';</script>";	

		if(!($file_type=='image/jpeg' or $file_type=='image/jpg' or $file_type=='image/png')) {
			$msg=$msg."file_type must be jpg or png";
			$file_upload=false;
		}
		if ($file_upload==true) 
		{
			if (move_uploaded_file($temp_name,$path)) 
			{
				$sql1="INSERT INTO `tbl_reg` (`s_id`, `s_name`, `s_gender`, `s_phone`, `s_dob`, `s_add`, `s_profession`, `s_email`, `s_photo`, `password`, `role`, `status`, `code`) VALUES (NULL, 'Kriti Gupta', 'Female', '8907876590', '2023-09-03', 'Jamnagar', 'Software Engineer', 'kriti@gmail.com', 'upload', 'kriti@123', 'user', '0', '0');";
				$qry1=mysqli_query($con,$sql1);
				if ($qry1) 
				{
					echo "<script>alert('Registerd successfully');</script>";
					echo "<script>window.location.href = '../payment.php';
					</script>";	
				}
				else
				{
					echo "Registration Failed please try again";
				}
			}	
		}
		else
		{
			echo $msg;
		}
	}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Form Wizard with Validation</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
  <style type="text/css">
 		
  </style>

</head>
<body>
<!-- partial:index.partial.html -->
<section class="wizard-section">
		<div class="row no-gutters">
			<div class="col-lg-6 col-md-6">
				<div class="wizard-content-left d-flex justify-content-center align-items-center">
					<h1>Register Your Account</h1>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="form-wizard">
					<form action="" method="post" role="form" enctype="multipart/form-data">
						<div class="form-wizard-header">
							<p>Fill all form field to go next step</p>
							<ul class="list-unstyled form-wizard-steps clearfix" style="margine-right:-150px;">
								<li class="active"><span>1</span></li>
								<li><span>2</span></li>
								<!-- <li><span>3</span></li>
								<li><span>4</span></li> -->
							</ul>
						</div>
						<fieldset class="wizard-fieldset show">
							<h5>User Information</h5>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="fname" name="fname">
								<label for="fname" class="wizard-form-text-label">First Name*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="lname" name="lname">
								<label for="lname" class="wizard-form-text-label">Last Name*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group">
								Gender
								<div class="wizard-form-radio">
									<input type="radio" name="gen" id="radio1"  value="male">
									<label for="radio1">Male</label>
								</div>
								<div class="wizard-form-radio">
									<input type="radio" name="gen" id="radio2"  value="female">
									<label for="radio2">Female</label>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="zcode" name="num" maxlength="10" required>
								<label for="zcode" class="wizard-form-text-label">Phone No*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group">
								<input type="date" class="form-control wizard-required" id="zcode" name="dob">
								<label for="zcode" class="wizard-form-text-label" style="color: transparent;">DOB*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="zcode" name="add">
								<label for="zcode" class="wizard-form-text-label">Address*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
						</fieldset>	
						<fieldset class="wizard-fieldset">
							<h5>User Information</h5>
							<div class="form-group">
								<input type="email" class="form-control wizard-required" id="email" name="email">
								<label for="email" class="wizard-form-text-label">Email*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group" style="margin-top:0px">
								<input type="text" class="form-control wizard-required" id="username" name="profession">
								<label for="username" class="wizard-form-text-label">Proffesion*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group">
							
							<div class="form-group" style="margin-top:20px;">
								<input type="file" class="form-control wizard-required" id="username" name="photo">
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group">
								<input type="password" class="form-control wizard-required" id="pwd" name="pass">
								<label for="pwd" class="wizard-form-text-label">Password*</label>
								<div class="wizard-form-error"></div>
								<span class="wizard-password-eye"><i class="far fa-eye"></i></span>
							</div>
							<div class="form-group">
								<input type="password" class="form-control wizard-required" id="cpwd" name="cpass">
								<label for="cpwd" class="wizard-form-text-label">Confirm Password*</label>
								<div class="wizard-form-error"></div>
							</div>
							<!-- <div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div> -->
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<input type="submit" name="submit" class="form-wizard-submit float-right">
								<!-- <a href="javascript:;" class="form-wizard-submit float-right">Submit</a> -->
							</div>
						</fieldset>	
					</form>
				</div>
			</div>
		</div>
	</section>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
