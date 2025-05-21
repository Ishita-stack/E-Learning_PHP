<?php
    session_start();
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
    $id=$_GET['id'];
    $sql_new="select * from tbl_reg where s_id='$id';";
    $qry_new=mysqli_query($con,$sql_new);
    $row=mysqli_fetch_assoc($qry_new);
    $old_path=$row['s_photo'];
    if (isset($_POST['update']))
    {
        $file=$_FILES['file1']['name'];
        $file_type=$_FILES['file1']['type'];
        $name=$_POST['name'];
        $Email=$_POST['Email'];
        $phone=$_POST['phone'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $add=$_POST['Address'];
        $pass=$_POST['pass'];
        $profession=$_POST['profession'];
        $msg="";
        $file_upload=true;
        if (!($file_type=='image/jpg' or $file_type=='image/png'))
        {
            $msg="File type must be jpg or png";
            $file_upload=false;   
        }
        $path="upload/".$file;
        if ($file_upload==true) 
        {
            
            if (move_uploaded_file($_FILES['file1']['tmp_name'],$path)) 
            {
                $sql1="UPDATE `tbl_reg` SET `s_name` = '$name', `s_gender` = '$gender', `s_phone` = '$phone', `s_dob` = '$dob', `s_add` = '$add', `s_profession` = '$profession', `s_email` = '$Email', `s_photo` = '$path', `password` = '$pass' WHERE `tbl_reg`.`s_id` = $id;";
                $qry1=mysqli_query($con,$sql1);
                if ($qry1) 
                {
                    $_SESSION['alert']=1;
                    $_SESSION['alert_title']="UPDATE";
                    echo "<script>window.location.href = 'reg_user.php';</script>";
                }
                else
                {
                    echo "<script>alert('Data is not Updated successfully...');</script>";
                }
            }
        }
        else if ($file_upload==false)
        {
            if(!(move_uploaded_file($_FILES['file1']['tmp_name'],$path)))
            {
                $sql1="UPDATE `tbl_reg` SET `s_name` = '$name', `s_gender` = '$gender', `s_phone` = '$phone', `s_dob` = '$dob', `s_add` = '$add', `s_profession` = '$profession', `s_email` = '$Email',`password` = '$pass' WHERE `tbl_reg`.`s_id` = $id;";
                $qry1=mysqli_query($con,$sql1);
                if ($qry1) 
                {
                    $_SESSION['alert']=1;
                    $_SESSION['alert_title']="UPDATE";
                    echo "<script>window.location.href = 'reg_user.php';</script>";
                }
                else
                {
                    echo "<script>alert('Data is not Updated successfully...');</script>";
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css'>
    <link rel="stylesheet" href="pagination/style.css">
    <title>Admin Panel</title>
    <link rel = "icon" href = "images/logo3.png" type = "image/x-icon"> 
</head>
<style type="text/css">

        .dropdown-container {
  display: none;
  background-color: #006e72;
  padding-left: 8px;
  font-size: 20px;
  
}
.profile-dropdown {
  display: none;
  background-color: white;
  padding-left: 8px;
  font-size: 17px;
  margin-left: -90px;
  width: 200px;
  height: auto;
  margin-top: 50px;
  box-shadow: 0 4px 8px 0 #006e7236, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  padding: 15px;
  border-radius: 5px;
}
.profile-dropdown div a
{
    line-height: 1.9;
}
.dropdown-container a
{
    color: white;
    margin-left: 55px;
/*    border: 2px solid black;*/
    line-height: 10px;
}
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.dropdown-btn {
  padding: 6px 8px 10px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  font-size: 24px;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-left: 30px;
  font-family: "Poppins", sans-serif;
  margin-left: 0px;
  padding-left: 46px;
}
.dropdown-btn:hover
{
    background-color: white;
    color: #006e72;
    width: 100%;
}
    .side-menu a .active
    {
        background-color: white;
        color: #006e72;
    }
    #selectmenu li
    {
        font-size:20px; 
    }
    .dbtn {
      background-color: #006e72;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      font-family: "Poppins", sans-serif;
      font-size: 24px;
      margin-left: 30px;
      cursor: pointer;
    }

    .cn {
      position: relative;
      display: inline-block;
    }

    .drobtn-cn {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
/*      margin-left: 30px;*/
      width: 300px;
      cursor: pointer;
    }

    .drobtn-cn a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .drobtn-cn a:hover {background-color: #ddd;}

    .cn:hover .drobtn-cn {display: block;}

    .cn:hover .dbtn #{}
    #inner1 a
    {
        padding: 10px;
    }


    .img
    {
        opacity: 1;
      display: block;
      width: 100%;
      height: auto;
      transition: .5s ease;
      backface-visibility: hidden;
    }
    .middle {
      transition: .5s ease;
      opacity: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      cursor: pointer;
    }
    .text {
      background-color: #006e72;
      color: white;
      font-size: 35px;
      padding: 16px 16px 16px 16px;
      border-radius: 50px;
    }

    .input_field
    {
        border:none;border-bottom: 2px solid #006e72;outline: none;padding-left: 1px;
        color: gray;
    }
    .side-menu a .active
    {
        background-color: white;
        color: #006e72;
    }
    #div1
    {
        width:400px;height: 485px; border:2px solid white;margin-left: 20px;margin-top: 30px; box-shadow: 0 4px 8px 0 #006e7236, 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 15px;margin-bottom: 20px;
    }
    #inner_div1
    {
        width:150px;height:150px; margin: auto;margin-top: 28%; position: relative;
    }
    #inner_div1:hover .img {
      opacity: 0.3;
    }

    #inner_div1:hover .middle {
      opacity: 1;
    }
    #inner_div2
    {
        margin-top: 8px;text-align: center;padding: 10px;font-size: 30px;font-weight: bolder;color: #006e72;
    }
    #mail_btn
    {
        margin-top:30px;padding:10px;border-radius: 10px;background-color: #006e72;color: white;border-color: #006e72;border: none;padding-left: 20px;padding-right: 20px;cursor: pointer;
    }
    #social_links ul
    {
        margin-top: 30px;
        align-items: center;
        margin-left: 60px;
    }
    #social_links ul li
    {
        display: inline-block;
/*        border: 2px solid black;*/
        align-items: center;
        margin-left: -25px;
    }
    .container1{
    float: left;
    margin: 10px;
    margin-left: 0px;
}
.right{
    float: left;
    margin: 10px;
    color: #006e72;
    font-size: 23px;
/*    font-weight:bold;*/

}
.radio {
    width: 20px;
    position: relative;
}
.radio label {
    width: 20px;
    height: 20px;
    cursor: pointer;
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    border-radius: 50px;
    box-shadow: inset 0px 1px 1px white, 3px 3px 9px rgba(0,0,0,0.5);
    border: 1px solid black;
}
.radio label:after {
    content: '';
    position: absolute;
    top: 4px;
    left: 4px;
    border: 6px solid #006e72;
    border-radius: 50px;
    opacity: 0;
    }
.radio label:hover::after {
    opacity: 0.3;
    }
.radio input[type=radio] {
    visibility: hidden;
}
.radio input[type=radio]:checked + label:after {
     opacity: 1;
    }  
   
</style>
<body>
    <div class="side-menu">
        <a href="index.php">
        <div class="brand-name">
        <img src="images/logo3.png" height="75%" width="20%" style="margin-left:-5px">
        &nbsp;<p style="font-size: 30px;">Study Squad</p>
        </div>
        </a>
        <br/>
        <ul>
            <a href="index.php?status=Home"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Home') 
            {
                echo 'active';
            }
            
        ?>">&nbsp;

        <i class="uil uil-home"></i>&nbsp;&nbsp;&nbsp;

        <span>Home</span>
    </li></a>
            <a href="request_user.php?status=User Requests">
                <li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='User Requests') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-user-circle"></i>&nbsp;&nbsp;&nbsp;<span>User Requests</span></li></a>

            <a href="reg_user.php?status=Registerd user">
                <li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Registerd user') 
            {
                echo 'active';
            }
            elseif ($_GET['status']=='') {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-user-check"></i>&nbsp;&nbsp;&nbsp;<span>Registerd user</span></li></a>
        <button class="dropdown-btn"><i class="uil uil-book-open"></i>&nbsp;&nbsp;&nbsp;Courses &nbsp 
        <i class="uil uil-angle-down"></i>
        </button>
        <div class="dropdown-container" style="padding:10px">
            <div id="inner1">
            <a href="add_courses.php" style="padding:15px;"><i class="uil uil-plus-circle"></i>&nbsp Add Courses</a><br><br></div>
            <div id="inner2">
            <a href="manage_courses.php" style="padding:15px;"><i class="uil uil-cog"></i>&nbsp Manage Courses</a><br></div>
        </div>

        <button class="dropdown-btn"><i class="uil uil-play-circle"></i>&nbsp;&nbsp;&nbsp;Videos &nbsp 
        <i class="uil uil-angle-down"></i>
        </button>
        <div class="dropdown-container" style="padding:10px">
            <div id="inner1">
            <a href="add_video.php" style="padding:15px;"><i class="uil uil-plus-circle"></i>&nbsp; Add Videos</a><br><br></div>
            <div id="inner2">
            <a href="manage_video.php" style="padding:15px;"><i class="uil uil-cog"></i>&nbsp; Manage Videos</a><br></div>
        </div>

        <button class="dropdown-btn"><i class="uil uil-book"></i>&nbsp;&nbsp;&nbsp;Assignments &nbsp 
        <i class="uil uil-angle-down"></i>
        </button>
        <div class="dropdown-container" style="padding:10px">
            <div id="inner1">
            <a href="add_assignment.php" style="padding:15px;"><i class="uil uil-plus-circle"></i>&nbsp; Add Assign</a><br><br></div>
            <div id="inner2">
            <a href="manage_assign.php" style="padding:15px;"><i class="uil uil-cog"></i>&nbsp; Manage Assign</a><br></div>
        </div>
            <a href="payment.php?status=payments"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='payments') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-rupee-sign"></i>&nbsp;&nbsp;&nbsp;<span>Payments</span></li></a>
            
        <button class="dropdown-btn"><i class="uil uil-book"></i>&nbsp;&nbsp;&nbsp;Test &nbsp 
        <i class="uil uil-angle-down"></i>
        </button>
        <div class="dropdown-container" style="padding:10px">
            <div id="inner1">
            <a href="option_test.php" style="padding:15px;"><i class="uil uil-plus-circle"></i>&nbsp; Add Test</a><br><br></div>
            <div id="inner2">
            <a href="manage_test.php" style="padding:15px;"><i class="uil uil-cog"></i>&nbsp; Manage Test</a><br></div>
        </div>
            <a href="feedback.php?status=Feedback"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Feedback') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-comment-alt-message"></i>&nbsp;&nbsp;&nbsp;<span>Feedback</span></li></a>
        </ul>
    </div>
    <div class="container">
        <div class="header" style="width:1227px">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><i class="uil uil-search" style="font-size:25px"></i></button>
                </div>
                <div class="user">
                    <!-- <a href="changepass.php" class="btn" style="font-family: 'Poppins', sans-serif;padding:10px;">Change Password</a> -->
                    <div style="margin-left:130px"></div>
                    <img src="images/notifications.png">
                    <div class="img-case">
                       <?php
                            include('admin_profile1.php');
                       ?>
                        <div class="profile-dropdown">
                            <div>
                                <a href="profile_page.php"style="color: #006e72;"><ion-icon name="person-circle-outline"></ion-icon>&nbsp Profile</a><br>
                            </div>
                            <div>
                                <a href="changepass.php"style="color: #006e72;"><ion-icon name="lock-closed-outline"></ion-icon>&nbsp Change Password</a><br>
                            </div>
                            <div>
                                <a href="logout.php"style="color: #006e72;"><ion-icon name="log-out-outline"></ion-icon>&nbsp Logout</a><br>
                            </div>
                        </div>
                    </div>
                    <h3 style="position: fixed;float: right;margin-left: 270px;width: 0px;background: none;">Admin</h3>
                </div>
            </div>
        </div>
         <div class="content">
            <br><br>
            <div class="content-2">
                <div class="recent-payments" style="display:inline-block;">
                    <div class="title">
                        <h1 style="color:#006e72;margin: auto;"><i class="uil uil-user"></i>&nbsp User Profile</h1>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div id="div1">
                        <?php 
                            $sql="SELECT * FROM `tbl_reg` WHERE s_id=$id;";
                            $qry=mysqli_query($con,$sql);
                            $row=mysqli_fetch_assoc($qry);


                            
                        echo '<div id="inner_div1">
                            <img src="../login/form/'.$row['s_photo'].'"style="width: 100%;height: 100%;margin-left: 0px;"class="img" id="profile-pic">
                            <div class="middle">
                                <div class="text">
                                    <label for="input-file">
                                    <i class="uil uil-camera-plus"></i></label>
                                    <input type="file" accept="image/jpg,image/png" name="file1" id="input-file" style="display:none">
                                </div>
                          </div>
                        </div>';
                    ?>
                         <script>
                                    let profilepic = document.getElementById("profile-pic");
                                      let inputfile = document.getElementById("input-file");

                                      inputfile.onchange = function () {
                                        profilepic.src = URL.createObjectURL(inputfile.files[0]);
                                      };
                                </script>
                    <?php


                        echo '<div id="inner_div2">
                            <span>'.ucwords($row['s_name']).'</span>
                        </div>
                        <div style="text-align: center;color: gray;">
                            <span>'.ucwords($row['s_profession']).'</span><br>
                            <!-- <button type="submit" name="submit" value="mail" id="mail_btn">
                                Send Mail
                            </button> -->
                        </div>
                    </div>';
                    echo '<div style="border:2px solid white;float:right;width: 715px; height: 483px;position: relative;margin-top: -503px;margin-right: 20px;border-radius: 15px;box-shadow: 0 4px 8px 0 #006e7236, 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding: 20px;">
                        <div style="margin-top:-5px;margin-left: 300px;padding-bottom: 20px;">
                            <h2 style="color:#006e72">Details</h2>
                            <br>
                            <hr style="width: 712px;margin-left: -320px;">
                        </div><br>
                        <div style="margin-left:20px">
                            <div style="color: #006e72;font-size: 23px;">
                                Name:<br>
                                <span style="color:gray;font-size: 20px;"><input type="text" name="name"value="'.ucwords($row['s_name']).'" class="input_field"></span>
                            </div><br>
                            <div style="color: #006e72;font-size: 23px;">
                                Email:<br>
                                <span style="color:gray;font-size: 20px;"><input type="email" name="Email" value="'.$row['s_email'].'"class="input_field"></span>
                            </div><br>
                            
                            <div style="color: #006e72;font-size: 23px;">
                                Phone:<br>
                                <span style="color:gray;font-size: 20px;"><input type="text" name="phone" maxlength="10"class="input_field" value="'.$row['s_phone'].'"></span>
                            </div><br>
                            <div style="color: #006e72;font-size: 23px;">
                                DOB:<br>
                                <span style="color:gray;font-size: 20px;"><input type="date" name="dob" value="'.$row['s_dob'].'" placeholder="DD-MM-YYYY" class="input_field" style="padding-right: 85px;"></span>
                            </div><br>
                        </div>';
                        $gn=$row['s_gender'];
                        
                        echo '<div style="float:right;margin-top: -285px;margin-right: 20px;">

                            <div style="color: #006e72;font-size: 23px;">
                                <label>Gender:</label><br>';

                                if($gn=='male' or $gn=='Male')
                                {
                                    echo '<div class="container1">
                                            <div class="radio">
                                                <input type="radio" value="Male" name="gender" id="male"checked/>
                                                <label for="male"></label>
                                            </div>
                                          </div>
                                          <div class="right">Male</div>

                                          <div class="container1">
                                            <div class="radio">
                                                <input type="radio" value="Female" name="gender" id="female" />
                                                <label for="female"></label>
                                            </div>
                                        </div>
                                        <div class="right">Female</div>';
                                }
                                else if ($gn=='female' or $gn=='Female')
                                {
                                    echo '<div class="container1">
                                            <div class="radio">
                                                <input type="radio" value="Male" name="gender" id="male"/>
                                                <label for="male"></label>
                                            </div>
                                          </div>
                                          <div class="right">Male</div>

                                        <div class="container1">
                                            <div class="radio">
                                                <input type="radio" value="Female" name="gender" id="female" checked/>
                                                <label for="female"></label>
                                            </div>
                                        </div>
                                        <div class="right">Female</div>';
                                }  
                                else
                                {
                                     echo '<div class="container1">
                                            <div class="radio">
                                                <input type="radio" value="Male" name="gender" id="male"/>
                                                <label for="male"></label>
                                            </div>
                                          </div>
                                          <div class="right">Male</div>

                                        <div class="container1">
                                            <div class="radio">
                                                <input type="radio" value="Female" name="gender" id="female"/>
                                                <label for="female"></label>
                                            </div>
                                        </div>
                                        <div class="right">Female</div>';
                                }
                            echo '</div><br><br>
                            <div style="color: #006e72;font-size: 23px;">
                                Address:<br>
                                <span style="color:gray;font-size: 20px;"><input type="text" name="Address"class="input_field" value="'.ucwords($row['s_add']).'"></span>
                            </div><br>
                            <div style="color: #006e72;font-size: 23px;">
                                Password:<br>
                                <span style="color:gray;font-size: 20px;"><input type="text" name="pass"class="input_field" value="'.$row['password'].'"></span>
                            </div><br>
                            <div style="color: #006e72;font-size: 23px;">
                                Profession:<br>
                                <span style="color:gray;font-size: 20px;"><input type="text" name="profession"class="input_field"value="'.ucwords($row['s_profession']).'"></span>
                            </div><br><br>';
                    ?>
                    </div>
                        <div>
                            <button type="submit" name="update" value="mail" id="mail_btn" style="margin-left:290px">
                                Edit Profile
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script  src="pagination/script.js"></script>
    <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>