<?php
    session_start();
    error_reporting(0);
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
    $ctitle=$_GET['title'];
    $_SESSION['course']=$ctitle;
    $course=$_SESSION['course'];
    $sub=$_SESSION['c_title'];
    
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
    <title>User Panel</title>
    <link rel = "icon" href = "images/logo3.png" type = "image/x-icon"> 
</head>
<style type="text/css">
    .side-menu a .active
    {
        background-color: white;
        color: #006e72;
    }
    table tr,td
    {
        border: none;
    }
    table tr:hover
    {
        background-color: #006e723d;
        border-color: #006e723d;
    }
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
    #inner_div1 a
    {
        padding: 10px;
    }
   .button_manage
    {
        margin-top: -20px;
        margin-left: 670px;
        color: #006e72;
    }
    .test_title
    {
        margin-top: -50px;
        margin-left: 150px;
        font-weight: bolder;
        color: #006e72;
        font-size: 22px;
    }
    .test_img img
    {
        height:15%;
        width:15%;
        border-radius: 5px;
    }
    .alltest
    {
        padding:50px;
        margin-left: 150px;
    }
    .inner_test
    {
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        width: 750px;
        height: 100px;
        border-radius: 5px;
        padding-top: 17px;
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
        <br>
       <ul style="margin-left: -10px;">
            <a href="index.php?status=Home"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Home') 
            {
                echo 'active';
            }
            
        ?>">

        <i class="uil uil-home">
            
        </i>&nbsp;&nbsp;&nbsp;

        <span>Home</span>
    </li></a>
        <button class="dropdown-btn"><i class="uil uil-book-open" style="margin-left:-6px"></i>&nbsp;&nbsp;&nbsp;My Courses &nbsp 
        <i class="uil uil-angle-down"></i>
        </button>
        <div class="dropdown-container" style="padding:10px">
            <div id="inner_div1">
            <a href="active_courses.php" style="padding:15px;"><i class="uil uil-forward"></i>&nbsp; Active Courses</a><br><br></div>
            <div id="inner_div2">
            <a href="complete_courses.php" style="padding:15px;"><i class="uil uil-check-circle"></i>&nbsp; Complete Courses</a><br></div>
        </div>

        <a href="assignment.php?status=My Assignments">
                <li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='My Assignments') 
            {
                echo 'active';
            }
        ?>"><i class="uil uil-book"></i>&nbsp;&nbsp;&nbsp;<span>My Assignments</span></li></a>

        <a href="payment_history.php?status=Payment History">
                <li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Payment History') 
            {
                echo 'active';
            }
        ?>"><i class="uil uil-rupee-sign"></i>&nbsp;&nbsp;&nbsp;<span>Payment History</span></li></a>

        <a href="test.php?status=Test">
                <li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Test') 
            {
                echo 'active';
            }
            elseif ($_GET['status']=='') {
                echo 'active';
            }
        ?>"><i class="uil uil-file-edit-alt"></i>&nbsp;&nbsp;&nbsp;<span>Test</span></li></a>

        <a href="feedback.php?status=Feedback"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Feedback') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-feedback"></i>&nbsp;&nbsp;&nbsp;<span>Feedback</span></li></a>
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
                    <div class="img-case" style="margin-right:30px">
                       <?php
                            include('user_profile_img.php'); 
                       ?>
                        <div class="profile-dropdown">
                            <div>
                                <a href="user_profile.php"style="color: #006e72;"><ion-icon name="person-circle-outline"></ion-icon>&nbsp Profile</a><br>
                            </div>
                            <div>
                                <a href="changepass.php"style="color: #006e72;"><ion-icon name="lock-closed-outline"></ion-icon>&nbsp Change Password</a><br>
                            </div>
                            <div>
                                <a href="#"style="color: #006e72;"><ion-icon name="log-out-outline"></ion-icon>&nbsp Logout</a><br>
                            </div>
                        </div>
                    </div>
                    <h3 style="position: fixed;float: right;margin-left: 270px;width: 0px;background: none;">User</h3>
                </div>
            </div>
        </div>
         <div class="content">
            <br><br>
            <div class="content-2" style="margin-bottom: -200px;">
                <div class="recent-payments">
                    <div class="title">
                        <h1 style="color:#006e72;margin: auto;"><i class="uil uil-file-edit-alt"></i> All Tests</h1>
                    </div>
                    <div class="alltest">
                    <?php
                     $sql="SELECT DISTINCT(t_title) FROM `tbl_test` WHERE `c_title`='$ctitle' ORDER BY t_title;";
                            $qry=mysqli_query($con,$sql)or die('query error');
                            ;
                            while($row=mysqli_fetch_assoc($qry))
                            {
                                $sql2="SELECT * FROM `tbl_course` WHERE c_title='$ctitle';";
                                $qry2=mysqli_query($con,$sql2);
                                $row2=mysqli_fetch_assoc($qry2);
                                echo '
                                    <div class="inner_test">
                                        <div class="test_img">
                                            <img src="../../admin/'.$row2['c_thumbnail'].'">
                                        </div>
                                        <div class="test_title">
                                            '.$row['t_title'].':
                                        </div>
                                        <div class="button_manage">
                                            <a href="quiz.php?t_title='.$row['t_title'].'" class="btn">Start</a>
                                            <!-- <a href="edit_test.php" class="btn">Edit</a>
                                            <a href="view_user.php" class="btn">Delete</a> -->
                                        </div>
                                    </div><br>';
                            }
                    ?>
                        <!-- <div class="inner_test">
                            <div class="test_img">
                                <img src="images/cpp_thumb.jpg">
                            </div>
                            <div class="test_title">
                                Test-2:
                            </div>
                            <div class="button_manage">
                                <a href="quiz.php" class="btn">Start</a>
                                 <a href="edit_test.php" class="btn">Edit</a>
                                <a href="view_user.php" class="btn">Delete</a> 
                            </div>
                        </div><br>

                        <div class="inner_test">
                            <div class="test_img">
                                <img src="images/cpp_thumb.jpg">
                            </div>
                            <div class="test_title">
                                Test-3:
                            </div>
                            <div class="button_manage">
                                <a href="quiz.php" class="btn">Start</a>
                                 <a href="edit_test.php" class="btn">Edit</a>
                                <a href="view_user.php" class="btn">Delete</a> 
                            </div>
                        </div><br> -->
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