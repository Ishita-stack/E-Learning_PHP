<?php 
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
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
  margin-left: -60px;
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
        <?php 
            include('menu.php');
        ?>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><i class="uil uil-search" style="font-size:25px"></i></button>
                </div>
                <div class="user">
                                        
                    <div class="img-case" style="margin-left:150px">
                       <button class="dropdown-btn">
                            <img src="images/notifications.png" style="">
                        </button>
                        <div class="profile-dropdown" class="parent_div" style="width: 380px;font-size: 20px;padding: 2px;margin-left: -200px;scroll-behavior: auto;">
                            <div style="border: 2px solid lightgray;width: 100%;height: 70px;padding:10px;" class="child_div">
                                <a href="#"style="color: #006e72;"><img src="images/user2.png" height="17%"width="17%"style="margin-top: 78px;margin-left: -185px"><p style="margin-top:5px;margin-left: 60px;">Ishita Sharma</p> </a><br>
                            </div>
                            <div style="border: 2px solid lightgray;border-top: 0px; width: 100%;height: 70px;padding:10px;" class="child_div"><a href="#"style="color: #006e72;"><img src="images/user2.png" height="17%"width="17%"style="margin-top: 145px;margin-left: -185px"><p style="margin-top:5px;margin-left: 60px;">Ishita Sharma</p> </a><br>
                            </div>
                            <div style="border: 2px solid lightgray;border-top: 0px; width: 100%;height: 70px;padding:10px;" class="child_div">
                                <a href="#"style="color: #006e72;"><img src="images/user2.png" height="17%"width="17%"style="margin-top: 215px;margin-left: -185px"><p style="margin-top:5px;margin-left: 60px;">Ishita Sharma</p> </a><br>
                            </div>
                            <div style="border: 2px solid lightgray;border-top: 0px; width: 100%;height: 70px;padding:10px;" class="child_div">
                                <a href="#"style="color: #006e72;"><img src="images/user2.png" height="17%"width="17%"style="margin-top: 287px;margin-left: -185px"><p style="margin-top:5px;margin-left: 60px;">Ishita Sharma</p> </a><br>
                            </div>
                            <div style="border: 2px solid lightgray;border-top: 0px; width: 100%;height: 70px;padding:10px;" class="child_div">
                                <a href="#"style="color: #006e72;"><img src="images/user2.png" height="17%"width="17%"style="margin-top: 358px;margin-left: -185px"><p style="margin-top:5px;margin-left: 60px;">Ishita Sharma</p> </a><br>
                            </div>
                        </div>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="img-case" style="margin-right: 30px;">
                    <?php
                        
                        include('admin_profile.php');
                    ?>
                       
                        <!-- <h4 style="float: right;">Admin:Ishita Sharma</h4> -->
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
                    <h3 style="position: fixed;float: right;margin-left: 290px;width: 0px;background: none;">Admin</h3>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards" style="border-radius:10px">
                <?php
                    $sql="SELECT * FROM `tbl_reg` WHERE s_id>1;";
                    $qry=mysqli_query($con,$sql);
                    $rows=mysqli_num_rows($qry);

                    echo '<div class="card">
                    <div class="box">
                        <h1>'.$rows.'</h1>
                        <h3>Students</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/student.png" alt="">
                    </div>
                </div>';
                ?>
                
                <?php
                    $sql="SELECT * FROM `tbl_assignment`;";
                    $qry=mysqli_query($con,$sql);
                    $rows=mysqli_num_rows($qry);
                    echo '<div class="card">
                        <div class="box">
                            <h1>'.$rows.'</h1>
                            <h3>Assignments</h3>
                        </div>
                        <div class="icon-case">
                            <img src="images/assign.png" alt="" height="70px">
                        </div>
                    </div>';
                ?>
                <?php
                    $sql="SELECT * FROM `tbl_course`;";
                    $qry=mysqli_query($con,$sql);
                    $rows=mysqli_num_rows($qry);
                    echo '<div class="card">
                    <div class="box">
                        <h1>'.$rows.'</h1>
                        <h3>Courses</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/online-learning.png" alt="">
                    </div>
                    </div>';
                ?>

                <?php
                    // $sql="SELECT SUM(c_price) FROM `tbl_course`;";
                    // $qry=mysqli_query($con,$sql);
                    $result = mysqli_query($con, 'SELECT SUM(c_price) AS value_sum FROM `tbl_payment_info`'); 
                    $row = mysqli_fetch_assoc($result); 
                    $sum = $row['value_sum'];
                    
                
                    echo '<div class="card">
                    <div class="box">
                        <h1>'.$sum.'</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/incomes.png" alt="">
                    </div>
                    </div>';
                ?>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2 style="color: #006e72;margin-left: -160px;">Recent Payments</h2>
                        <a href="payment.php" class="btn" style="margin-right: -120px">View All</a>
                    </div>
                <?php 
                    $sql1="SELECT * FROM `tbl_payment_info` ORDER BY p_id DESC LIMIT 6;";
                    $qry1=mysqli_query($con,$sql1);
                    $i=0;
                    echo '<table style="margin-left: 30px;">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Courses</th>
                            <th>Amount</th>
                            <th>Option</th>
                        </tr>';
                    while($rows1=mysqli_fetch_array($qry1))
                    {
                        $i++;
                        echo '<tr>
                            <td>'.$i.'</td>
                            <td>'.$rows1['s_name'].'</td>
                            <td>'.$rows1['s_sub'].'</td>
                            <td>₹'.$rows1['c_price'].'</td>
                            <td><a href="payment.php" class="btn">View</a></td>
                        </tr>';
                    }
                    echo '</table>';
                ?>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Students</h2>
                        <a href="reg_user.php" class="btn">View All</a>
                    </div>
                    <?php 
                        $sql_new="SELECT * FROM `tbl_reg` WHERE role='user' ORDER BY s_id DESC LIMIT 4;";
                        $qry_new=mysqli_query($con,$sql_new);
                        // $num=mysqli_num_rows($qry);
                        // $rows_new=mysqli_fetch_array($qry_new);

                        echo '<table>';
                        echo '<tr>';
                        echo '<th>Profile</th>';
                        echo '<th>Name</th>';
                        echo '<th>option</th>';
                        echo '</tr>';
                        while ($row_new=mysqli_fetch_assoc($qry_new)) 
                        {
                            echo "<tr>";
                            echo "<td><img src='../login/form/".$row_new['s_photo']."'height='45px'width='45px'></td>";
                            echo "<td>".$row_new['s_name']."</td>";
                            echo '<td><img src="images/info.png" alt=""></td>';
                            echo '</tr>';
                        }
                        echo '</table>';

                    ?>
                    
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