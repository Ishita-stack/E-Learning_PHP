<?php
    // error_reporting(0);
    session_start();
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
    $name=$_SESSION['name'];
    $sql2="SELECT * FROM `tbl_payment_info` WHERE s_name='$name';";
    $qry2=mysqli_query($con,$sql2);
    // $total_course=mysqli_fetch_num_rows($qry2);

    $sql2="SELECT * FROM `tbl_assignment`;";
    $qry2=mysqli_query($con,$sql2);
    // $total_assign=mysqli_fetch_num_rows($qry2);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>User Panel</title>
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
  margin-left: -60px;
  width: 200px;
  height: auto;
  margin-top: 48px;
  box-shadow: 0 4px 8px 0 #006e7236, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  padding: 15px;
  border-radius: 5px;
}
.profile-dropdown div a
{
    line-height: 1.9;
}

.parent_div div:hover
{
    background: lightgray;
    color: black;
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
     #inner_div1 a
    {
        padding: 10px;
    }
    .card_div
    {
      width: 241px;
      margin-left: 30px;
       padding-left: 35px;
       padding-right: 30px;
       padding-top: 30px;
       position: relative;
    }
    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 20%;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    .description
    {
        padding: 15px;
        height: 154px;
        background-color: #006e723d;
        border-bottom-right-radius: 10px;
          border-bottom-left-radius: 10px;
          margin-top: -4px;
          color: #006e72;
          margin-bottom: 0px;
    }
    .box-progress {
      display: block;
      height: 4px;
      border-radius: 6px;
    }
    .box-progress-wrapper {
      order: 3;
      flex: 1;
    }
    .box-progress-header {
    font-size: 12px;
    }

    .box-progress-percentage {
    font-size: 10px;
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
        <?php
            include('menu.php');
        ?>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button  type="submit"><i class="uil uil-search" style="font-size:25px"></i></button>
                </div>
                <div class="user">
                                        
                    <div class="img-case" style="margin-left:150px">
                       <button   class="dropdown-btn"  id="noti">
                            <img src="images/notifications.png" style="">
                        </button>

                        <div class="profile-dropdown" class="parent_div" style="width: 380px;font-size: 20px;padding: 2px;margin-left: -200px;scroll-behavior: auto;">
                            <div style="border: 2px solid lightgray;width: 100%;height: 70px;padding:10px;" class="child_div">
                                <a href="#"style="color: #006e72;"><ion-icon name="person-circle-outline" style="margin-bottom: -5px;"></ion-icon>&nbsp; Feedback</a><br>
                            </div>
                            <div style="border: 2px solid lightgray;border-top: 0px; width: 100%;height: 70px;padding:10px;" class="child_div"><a href="#"style="color: #006e72;"><ion-icon name="person-circle-outline" style="margin-bottom: -5px;"></ion-icon>&nbsp; Feedback</a><br>
                            </div>
                            <div style="border: 2px solid lightgray;border-top: 0px; width: 100%;height: 70px;padding:10px;" class="child_div">
                                <a href="#"style="color: #006e72;"><ion-icon name="person-circle-outline" style="margin-bottom: -5px;"></ion-icon>&nbsp; Feedback</a><br>
                            </div>
                            <div style="border: 2px solid lightgray;border-top: 0px; width: 100%;height: 70px;padding:10px;" class="child_div">
                                <a href="#"style="color: #006e72;"><ion-icon name="person-circle-outline" style="margin-bottom: -5px;"></ion-icon>&nbsp; Feedback</a><br>
                            </div>
                            <div style="border: 2px solid lightgray;border-top: 0px; width: 100%;height: 70px;padding:10px;" class="child_div">
                                <a href="#"style="color: #006e72;"><ion-icon name="person-circle-outline" style="margin-bottom: -5px;"></ion-icon>&nbsp; Feedback</a><br>
                            </div>
                        </div>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="img-case" style="margin-right: 30px;">
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
                                <a href="logout.php"style="color: #006e72;"><ion-icon name="log-out-outline"></ion-icon>&nbsp Logout</a><br>
                            </div>
                        </div>
                    </div>
                    <h3 style="position: fixed;float: right;margin-left: 295px;width: 0px;background: none;">User</h3>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card" style="border-radius: 10px;">
                    <div class="box">
                        <h1>5</h1>
                        <h3>My Courses</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/online-learning.png" alt="">
                    </div>
                </div>
                <div class="card"style="border-radius: 10px;">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Assignments</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/assign.png" alt="" height="70px">
                    </div>
                </div>
                <div class="card"style="border-radius: 10px;">
                    <div class="box" style="margin-left:-30px">
                        <h1>5</h1>
                        <h3>Test</h3>
                    </div>
                    <div class="icon-case" style="margin-right:-100px">
                        <img src="images/test.png" alt="" height="50%"width="50%">
                    </div>
                </div>
                <div class="card"style="border-radius: 10px;">
                    <div class="box"style="margin-left:20px">
                        <h1>8</h1>
                        <h3>Certificates</h3>
                    </div>
                    <div class="icon-case"style="margin-right:-10px">&nbsp;&nbsp;
                        <img src="images/certificate.png"height="60%"width="60%">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2 style="color: #006e72;margin-left: -45px;">Enrolled Courses</h2>
                        <a href="active_courses.php" class="btn"style="margin-left: 250px;">View All</a>
                    </div>
                    <div style="display: flex;position: relative;right: 45px;padding-bottom: 29px;">
                <?php
                     $sqlnew="SELECT * FROM `tbl_payment_info` WHERE s_name='Hetal Parmar' ORDER BY p_id DESC LIMIT 3;";
                    $qrynew=mysqli_query($con,$sqlnew);
                    while($row=mysqli_fetch_assoc($qrynew))
                     {
                        $sub=$row['s_sub'];
                        $sql1="SELECT * FROM `tbl_course` WHERE c_title='$sub';";
                        $qry1=mysqli_query($con,$sql1);
                        $row1=mysqli_fetch_assoc($qry1);
                        echo'<a href="add_quiz.php">
                         <div class="card_div">
                            <div class="card" style="position:relative;margin-top: 0px;margin-right: 320px;width: 230px;">
                                <img src="../../admin/'.$row1['c_thumbnail'].'" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
              border-top-left-radius: 10px;">
                                <div class="description">
                                    <h3 style="color:#006e72"><b>'.$row['s_sub'].'</b></h3><p style="float:right;margin-top: -17px;font-size: 15px;">₹'.$row1['c_price'].'</p> <br>
                                    <p style="font-size: 15px;">'.$row1['c_des'].'</p> 
                                    <div class="box-progress-wrapper" style="margin-top:10px">
          
          <div >
            
          </div>
          
        </div>
                                </div>
                            </div>
                            </div></a> ';
                        }
            ?>




                  <!--   <a href="add_quiz.php">
                         <div class="card_div">
                            <div class="card" style="position:relative;margin-top: 0px;margin-right: 320px;width: 230px;">
                                <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
              border-top-left-radius: 10px;">
                                <div class="description">
                                    <h3 style="color:#006e72"><b>Javascript</b></h3><p style="float:right;margin-top: -17px;font-size: 15px;">$120</p> <br>
                                    <p style="font-size: 15px;">The Complete Java Course for beginners: From Zero to Expert!</p> 
                                    <div class="box-progress-wrapper" style="margin-top:10px">
          
          <div >
            
          </div>
          
        </div>
                                </div>
                            </div>
                            </div></a> 

                                                <a href="add_quiz.php">
                         <div class="card_div">
                            <div class="card" style="position:relative;margin-top: 0px;margin-right: 320px;width: 230px;">
                                <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
              border-top-left-radius: 10px;">
                                <div class="description">
                                    <h3 style="color:#006e72"><b>Javascript</b></h3><p style="float:right;margin-top: -17px;font-size: 15px;">$120</p> <br>
                                    <p style="font-size: 15px;">The Complete Java Course for beginners: From Zero to Expert!</p> 
                                    <div class="box-progress-wrapper" style="margin-top:10px">
          
          <div >
            
          </div>
          
        </div>
                                </div>
                            </div>
                            </div></a>  -->
                            
                           <!--  <a href="add_quiz.php">
                         <div class="card_div">
                            <div class="card" style="position:relative;margin-top: -301px;float:right;margin-right: 268px;width: 230px;">
                                <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
              border-top-left-radius: 10px;">
                                <div class="description">
                                    <h3 style="color:#006e72"><b>Javascript</b></h3><p style="float:right;margin-top: -17px;font-size: 15px;">$120</p> <br>
                                    <p style="font-size: 15px;">The Complete Java Course for beginners: From Zero to Expert!</p>
                                    <div class="box-progress-wrapper">
          <p class="box-progress-header"><b>Progress:</b></p><p class="box-progress-percentage" style="float:right;margin-top: -11px;margin-right: 115px;">80%</p> 
          <div >
             <span class="box-progress" style="width: 80%; background-color: #006e72"></span> 
          </div>
          
        </div>  --><!-- 
                                </div>
                            </div>
                            </div></a>

                             <a href="add_quiz.php">
                         <div class="card_div">
                            <div class="card" style="position:relative;margin-top: -320px;float:right;margin-right: 0px;width: 230px;">
                                <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
              border-top-left-radius: 10px;">
                                <div class="description">
                                    <h3 style="color:#006e72"><b>Javascript</b></h3><p style="float:right;margin-top: -17px;font-size: 15px;">$120</p> <br>
                                    <p style="font-size: 15px;">The Complete Java Course for beginners: From Zero to Expert!</p>
                                <div class="box-progress-wrapper" style="margin-top:10px"> -->
                                  <!-- <p class="box-progress-header"><b>Progress:</b></p><p class="box-progress-percentage" style="float:right;margin-top: -11px;margin-right: 115px;">100%</p> -->
                                 <!--  <div >
                                     <span class="box-progress" style="width: 100%; background-color: #006e72"></span> 
                                  </div>
                                  
                                </div> 
                                </div>
                            </div>
                            </div></a> -->
                    </div>
                </div>
                <div class="new-students"style="height: 400px;">
                    <div class="title">
                        <h2 style="color: #006e72;">My Payments</h2>
                        <a href="payment_history.php" class="btn">View All</a>
                    </div>
                    <table style="text-align: center;margin-left: 10px;">
                    <?php
                    $sql4="SELECT * FROM `tbl_payment_info` WHERE s_name='$name';";
                    $qry4=mysqli_query($con,$sql4);

                        echo '<tr>
                            <th>Amount</th>
                            <th>Course</th>
                            <th>Option</th>
                        </tr>';
                        while($row4=mysqli_fetch_assoc($qry4))
                        {
                            echo '<tr>
                            <td>₹'.$row4['c_price'].'</td>
                            <td>'.$row4['s_sub'].'</td>
                            <td><a href="vaoucher/receipt.php" class="btn">View</a></td>
                        </tr>';
                        }
                        
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
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