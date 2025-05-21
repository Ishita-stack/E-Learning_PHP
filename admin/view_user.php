<?php
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
    $id=$_GET['id'];
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
#inner1 a
    {
        padding: 10px;
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
        width:150px;height:150px; margin: auto;margin-top: 10%;
    }
    #inner_div2
    {
        margin-top: 8px;text-align: center;padding: 10px;font-size: 30px;font-weight: bolder;color: #006e72;
    }
    #mail_btn
    {
        margin-top:30px;padding:10px;border-radius: 10px;background-color: #006e72;color: white;border-color: #006e72;border: none;padding-left: 20px;padding-right: 20px;cursor: pointer;
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
                    <div style="margin-left:130px"></div>
                    <img src="images/notifications.png">
                    <div class="img-case">
                       <?php
                            include('admin_profile1.php');
                       ?>
                        <div class="profile-dropdown">
                            <div>
                                <a href="#"style="color: #006e72;"><ion-icon name="person-circle-outline"></ion-icon>&nbsp Profile</a><br>
                            </div>
                            <div>
                                <a href="#"style="color: #006e72;"><ion-icon name="lock-closed-outline"></ion-icon>&nbsp Change Password</a><br>
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
                <?php
                        $sql="SELECT * FROM `tbl_reg` WHERE s_id=$id;";
                        $qry=mysqli_query($con,$sql)or die('query error');
                        $row=mysqli_fetch_assoc($qry);
                   
                        echo '<div id="div1">
                                <div id="inner_div1">
                                    <img src="'.$row['s_photo'].'"style="width: 100%;height: 100%;margin-left: 0px;">
                                </div>
                                <div id="inner_div2">
                                    <span>'.ucwords($row['s_name']).'</span>
                                </div>
                                <div style="text-align: center;color: gray;">
                                    <span>'.ucwords($row['s_profession']).'</span><br>
                                    <a href="send_mail.php?id='.$row['s_id'].'">
                                    <button type="submit" name="submit" value="mail" id="mail_btn">
                                        Send Mail
                                    </button></a>
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
                                    <span style="color:gray;font-size: 20px;">'.ucwords($row['s_name']).'</span>
                                </div><br>
                                <div style="color: #006e72;font-size: 23px;">
                                    Email:<br>
                                    <span style="color:gray;font-size: 20px;">'.$row['s_email'].'</span>
                                </div><br>
                                <div style="color: #006e72;font-size: 23px;">
                                    Phone:<br>
                                    <span style="color:gray;font-size: 20px;">+91 '.ucwords($row['s_phone']).'</span>
                                </div><br>
                                <div style="color: #006e72;font-size: 23px;">
                                    DOB:<br>
                                    <span style="color:gray;font-size: 20px;">'.ucwords($row['s_dob']).'</span>
                                </div><br>
                            </div>
                            <div style="float:right;margin-top: -290px;margin-right: 20px;">
                                <div style="color: #006e72;font-size: 23px;">
                                    Gender:<br>
                                    <span style="color:gray;font-size: 20px;">'.ucwords($row['s_gender']).'</span>
                                </div><br>
                                <div style="color: #006e72;font-size: 23px;">
                                    Address:<br>
                                    <span style="color:gray;font-size: 20px;">'.ucwords($row['s_add']).'</span>
                                </div><br>
                                <div style="color: #006e72;font-size: 23px;">
                                    Password:<br>
                                    <span style="color:gray;font-size: 20px;">'.$row['password'].'</span>
                                </div><BR>
                                <div style="color: #006e72;font-size: 23px;">
                                    Profession:<br>
                                    <span style="color:gray;font-size: 20px;">'.ucwords($row['s_profession']).'</span>
                                </div>
                            </div>
                        </div>';
                    
                ?>
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