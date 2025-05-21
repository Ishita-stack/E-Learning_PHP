<?php
   session_start();
   if (isset($_SESSION['role'])) 
   {
       if ($_SESSION['role']=='admin') 
       {
         header('location:../admin/index.php');
       }

       elseif ($_SESSION['role']=='user') 
       {
         header('location:../user/dashboard/index.php');
       }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/newstyle.css">
    <style type="text/css">
        .close-button
        {
            visibility: hidden;
            margin-bottom: 450px;
            margin-right: 20px;
        }
        #icon
        {
            visibility: visible;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }
    </style>  
    <title>Login</title>
    <link rel = "icon" href = "logo3.png" type = "image/x-icon">
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="code.php" method="post">
                    <div class="input-field">
                        <input type="text" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="pass" maxlength="15" minlength="8" class="password" placeholder="Enter your password" id="ps" required>
                        <i class="uil uil-lock icon"></i>
                        <!-- <i class="uil uil-eye"></i> -->
                        <i class="uil uil-eye-slash showHidePw" id="show" onclick="show();"></i>
                        <!-- <i class="uil uil-eye"></i> -->
                    </div>
                    <script type="text/javascript">
                        var a=document.getElementById("show");
                       function show(){
                             var ps=document.getElementById("ps");
                             if (ps.type=="password") {
                                ps.type="text";
                                a.classList.add("uil-eye");
                                a.classList.remove("uil-eye-slash");

                            }
                            else
                            {
                                ps.type="password";
                                a.classList.add("uil-eye-slash");
                                a.classList.remove("uil-eye");

                            }

                       
                        }
                       

                    </script>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="forgot.php" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login" name="login">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="form/index.php" class="text signup-link">Register Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script> 
</body>
</html>