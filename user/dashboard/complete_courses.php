<?php
    session_start();
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
    $name=$_SESSION['name'];
    $results_per_page = 4;  
    $query = "SELECT * FROM `tbl_payment_info` WHERE s_name='$name';";  
    $result = mysqli_query($con, $query);  
    $number_of_result = mysqli_num_rows($result);  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } 
    else {  
        $page = $_GET['page'];  
    } 
    $page_first_result = ($page-1) * $results_per_page;
    $query = "SELECT * FROM `tbl_payment_info` WHERE s_name='$name' LIMIT " . $page_first_result . ',' . $results_per_page;  
    $run = mysqli_query($con, $query);
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
    .card_div
    {
       padding-top: 20px;
       padding-left: 20px;
       padding-right: 20px;
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
        height: 190px;
        background-color: #006e723d;
        border-bottom-right-radius: 10px;
          border-bottom-left-radius: 10px;
          margin-top: -4px;
          color: #006e72;
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
    .submit_btn
    {
        
        margin-top: 8px;
        margin-bottom: 30px;
/*        padding: 15px;*/
        border-radius: 5px;
        border: none;
        outline: none;
        background-color: #006e72;
        color: white;
        padding-top: 5px;
        padding-bottom:5px;
        padding-left: 15px;
        padding-right: 15px;
        width: 100%;
    }
    input[type=submit] {
      background-color: #006e72;
      color: #fff;
      cursor: pointer;
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
            <br><br>
            <div class="content-2" style="margin-bottom: -200px;">
                <div class="recent-payments">
                    <div class="title">
                        <h1 style="color:#006e72;margin: auto;"><i class="uil uil-check-circle"></i> Complete Courses</h1>
                    </div>
                    <div class="div1"style="margin-top: 20px;">
                       






                        <div class="card_div" style="display: flex;">





<?php
$sql="SELECT * FROM `tbl_payment_info` WHERE s_name='$name';";
$qry=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($run)) 
{
    $sub=$row['s_sub'];
    $sql2="SELECT * FROM `tbl_course` WHERE c_title='$sub';";
    $qry2=mysqli_query($con,$sql2);
    $row2=mysqli_fetch_assoc($qry2);

echo '
                        <div class="card" style="margin: 45px;">
                            <img src="../../admin/'.$row2['c_thumbnail'].'" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>'.$row['s_sub'].'</b></h3><p style="float:right;margin-top: -17px;font-size: 15px;">$120</p> <br>
                                <p style="font-size: 15px;">'.$row2['c_des'].'</p>
                                <div class="box-progress-wrapper" style="margin-top:10px">
          <!-- <p class="box-progress-header"><b>Progress:</b></p><p class="box-progress-percentage" style="float:right;margin-top: -11px;margin-right: 115px;">100%</p> -->
          <div>
            <!-- <span class="box-progress" style="width: 100%; background-color: #006e72"></span> -->
          </div>
          
        </div> 
        <br>
        <a href="certificate/user_certificate.php?id='.$row['p_id'].'" type="submit" name="Certificate"  style="text-align: center;" class="submit_btn">Certificate</a>
                            </div>
                        </div>';
    }
?>



<!-- one card  -->
                    <!--     <div class="card" style="margin: 45px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Javascript</b></h3><p style="float:right;margin-top: -17px;font-size: 15px;">$120</p> <br>
                                <p style="font-size: 15px;">The Complete Java Course for beginners: From Zero to Expert!</p>
                                <div class="box-progress-wrapper" style="margin-top:10px">
          <p class="box-progress-header"><b>Progress:</b></p><p class="box-progress-percentage" style="float:right;margin-top: -11px;margin-right: 115px;">100%</p>
          <div class="box-progress-bar" style="margin-top:5px;border: 2px solid #006e72;padding: 1px;border-radius: 5px;">
            <span class="box-progress" style="width: 100%; background-color: #006e72"></span>
          </div>
          
        </div> 
        <a href="images/cpp_thumb.jpg" type="submit" name="Certificate"  style="text-align: center;" class="submit_btn" download>Certificate</a>
                            </div>
                        </div> -->
<!-- card over -->




<!-- one card  -->
                       <!--  <div class="card" style="margin: 45px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Javascript</b></h3><p style="float:right;margin-top: -17px;font-size: 15px;">$120</p> <br>
                                <p style="font-size: 15px;">The Complete Java Course for beginners: From Zero to Expert!</p>
                                <div class="box-progress-wrapper" style="margin-top:10px">
          <p class="box-progress-header"><b>Progress:</b></p><p class="box-progress-percentage" style="float:right;margin-top: -11px;margin-right: 115px;">100%</p>
          <div class="box-progress-bar" style="margin-top:5px;border: 2px solid #006e72;padding: 1px;border-radius: 5px;">
            <span class="box-progress" style="width: 100%; background-color: #006e72"></span>
          </div>
          
        </div> 
        <a href="images/cpp_thumb.jpg" type="submit" name="Certificate"  style="text-align: center;" class="submit_btn" download>Certificate</a>
                            </div>
                        </div> -->
<!-- card over -->








                        </div>

       









                    </div>
                </div>
            </div>
            <section class="pagination" style="margin-top: 200px;margin-left: 400px;">
              <?php 

                if ($_GET['page']>1) {
                    // code...
                $less=$_GET['page']-1;

                            echo '<a href="active_courses.php?page='.$less.'"><button id="pg-button-prev" type="button" class="pagination__button">
                <i class="fa fa-chevron-left"></i>
                </button></a>&nbsp;';
                }
                 echo '<ul class="pagination__list">';   
                for($page = 1; $page<= $number_of_page; $page++) 
                {  

                    echo '&nbsp;<a href="active_courses.php?page='.$page.'"><li class="pagination_item pagination_item--5">       
                    <button id="pg-button-next" type="button" class="pagination__button" style="height:45px;width: 45px;">'.$page.'</button>
                </li></a>';
                } 
                echo '</ul>';
                if ($_GET['page']<$number_of_page) 
                {
                    
                    $less=$_GET['page']+1;

                        echo '&nbsp;<a href="active_courses.php?page='.$less.'"><button id="pg-button-next" type="button" class="pagination__button">
                <i class="fa fa-chevron-right"></i>
                </button></a>';
                }
            ?>
            </section>
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