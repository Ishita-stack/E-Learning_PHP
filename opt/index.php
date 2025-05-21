<?php
  // session_start();
  // $con=mysqli_connect("localhost","root","","login")or die('connetion error');
  // $otp=$_SESSION['otp'];
  // if (isset($_POST['submit'])) 
  // {
  //   $n1=$_POST['n1'];
  //   $n2=$_POST['n2'];
  //   $n3=$_POST['n3'];
  //   $n4=$_POST['n4'];
  //   $code=$n1.$n2.$n3.$n4;
  //   // echo $code;
  //   $sql="select * from login_tbl where code='$code';";
  //   $qry=mysqli_query($con,$sql);
  //   $row=mysqli_fetch_array($qry);
  //   if ($code==$otp) 
  //   {
  //     if ($row>0) 
  //     {
  //       $_SESSION['cid']=$row[0];
  //       $_SESSION['code']=$code;
  //       header('location:../resetpassword.php');
  //     }
  //   }
  //   else
  //   {
  //     echo "<script>alert('Invalid OTP!');</script>";
  //   }
  // }
?>
<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en">
  
<!-- Mirrored from www.codingnepalweb.com/demos/otp-verification-form-html-css-javascript/ by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 09 Jul 2023 03:18:01 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="description" content=" In this blog you will learn to How to create OTP Verification Form in HTML CSS & JavaScript. You will learn how to structure the form and input fields using HTML, how to style the form and input fields using CSS, and how to handle the form submission and verify the OTP using JavaScript." />
    <meta
      name="keywords"
      content=" 
Form Design,HTML and CSS,HTML CSS JavaScript,JavaScript Project,one time password form,otp input verification form,otp verification form,"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OTP Verification Form JavaScript | CodingNepal</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Boxicons CSS -->
    <link href="../../../unpkg.com/boxicons%402.1.4/css/boxicons.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../custom-styles.css" />
    <script src="../custom-scripts.js" defer></script>
    <style> 
      body{
        background-color: #006e72;
      }
      .download-btn-cn a {
        background: none;
        color: #fff;
        border: 2px solid #fff;
      }
      .download-btn-cn a:hover {
        color: #4070f4;
        background: #fff;
      }
    </style>
  </head>
  <body>
    

    <div class="container">
      <header>
        <i class="bx bxs-check-shield"></i>
      </header>
      <h4>Enter OTP Code</h4>
      <form action="#" method="post">
        <div class="input-field">
          <input type="number" name="n1" />
          <input type="number" name="n2" disabled />
          <input type="number" name="n3" disabled />
          <input type="number" name="n4" disabled />
        </div>

        <button type="submit" name="submit">Verify OTP</button>
      </form>
    </div>
 <?php
// session_start();
// if (isset($_POST['submit'])) {
//   // code...
//   $old_opt=$_SESSION['otp'];
//   $n1=$_POST['n1'];
//     $n2=$_POST['n2'];
//       $n3=$_POST['n3'];
//         $n4=$_POST['n4'];
//         $opt=$n1.$n2;
//         if($n1.$n2.$n3.$n4 == $old_opt)
//         {
// echo "ready";
// header("location:../resetpassword.php");

//         }
//  // echo "<script>alert('$otp');</script>";
// }

?> 
    <script src="script.js"></script>
  </body>

<!-- Mirrored from www.codingnepalweb.com/demos/otp-verification-form-html-css-javascript/ by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 09 Jul 2023 03:18:06 GMT -->
</html>
