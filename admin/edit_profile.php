<?php
    session_start();
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
    if (isset($_POST['submit'])) 
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $add=$_POST['add'];
        $gen=$_POST['gen'];
        $dob=$_POST['dob'];
        
        $sql="UPDATE `tbl_reg` SET `s_name` = '$name', `s_gender` = '$gen', `s_phone` = '$phone', `s_dob` = '$dob', `s_add` = '$add', `s_email` = '$email' WHERE `tbl_reg`.`role` = 'admin';";
        $qry=mysqli_query($con,$sql);
        if ($qry) 
        {
            echo "<script>alert('Data updated successfully....');</script>";
        }
        else
        {
            echo "<script>alert('Data not updated successfully....');</script>";   
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
        width:400px;height: 480px; border:2px solid white;margin-left: 390px;margin-top: 30px; box-shadow: 0 4px 8px 0 #006e7236, 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 15px;margin-bottom: 20px;
    }
    #inner_div1
    {
        width:110px;height:110px; margin: auto;margin-top: 10%;
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
        <?php 
            include('menu.php');
        ?>
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
                        <h1 style="color:#006e72;margin: auto;"><i class="uil uil-user"></i>&nbsp Admin Profile</h1>
                    </div>
                    <div id="div1">
                        <?php
                            $sql="SELECT * FROM `tbl_reg` WHERE role='admin';";
                            $qry=mysqli_query($con,$sql);
                            $row=mysqli_fetch_assoc($qry);
                            echo '<div id="inner_div1">
                                <img src="'.$row['s_photo'].'"style="width: 100%;height: 100%;margin-left: 0px;">
                            </div><br>
                        
                        <!-- <div style="float: right;width: 40px;height: 40px;margin-top: -160px;margin-right: 10px;border-radius: 50%;text-align: center;padding-top: 7px;font-size: 20px;background-color: #006e72;color: white;box-shadow:0px 0px 7px 2px #888888;">
                            <i class="uil uil-pen"></i>
                        </div> -->
                    <form action="" method="post">
                        <div style="color: #006e72;font-size: 20px;font-weight: bolder;padding-left: 25px;padding:10px">
                                <i class="uil uil-user"style="font-size: 36;margin-left: 30px;"></i> Name:
                                <div style="color: gray;font-weight: normal;font-size: 15px;float: right;margin-right: 20px;">
                                    <input type="text" name="name" style="outline:none;border: none;border-bottom: 2px solid #006e72;" value="'.$row['s_name'].'">
                                </div>
                        </div>

                        <div style="color: #006e72;font-size: 20px;font-weight: bolder;padding-left: 25px;padding:10px;">
                                <i class="uil uil-envelope"style="font-size: 36;margin-left: 30px;"></i> Email:
                                <div style="color: gray;font-weight: normal;font-size: 15px;margin-top: 5px;float: right;margin-right: 20px;">
                                    <input type="text" name="email" style="outline:none;border: none;border-bottom: 2px solid #006e72;"value="'.$row['s_email'].'">
                                </div>
                        </div>

                        <div style="color: #006e72;font-size: 20px;font-weight: bolder;padding-left: 25px;padding:10px;">
                                <i class="uil uil-map-marker"style="font-size: 36;margin-left: 30px;"></i> Address:
                                <div style="color: gray;font-weight: normal;font-size: 15px;margin-top: 5px;float: right;margin-right: 20px;">
                                    <input type="text" name="add" style="outline:none;border: none;border-bottom: 2px solid #006e72;"value="'.$row['s_add'].'">
                                </div>
                        </div>

                        <div style="color: #006e72;font-size: 20px;font-weight: bolder;padding-left: 25px;padding:10px;">
                                <i class="uil uil-calendar-alt"style="font-size: 36;margin-left: 30px;"></i> DOB:
                                <div style="color: gray;font-weight: normal;font-size: 15px;margin-top: 5px;float: right;margin-right: 20px;">
                                    <input type="text" name="dob" style="outline:none;border: none;border-bottom: 2px solid #006e72;" value="'.$row['s_dob'].'">
                                </div>
                        </div>

                        <div style="color: #006e72;font-size: 20px;font-weight: bolder;padding-left: 25px;padding:10px;">
                                <i class="uil uil-user"style="font-size: 36;margin-left: 30px;"></i> Gender:
                                <div style="color: gray;font-weight: normal;font-size: 15px;margin-top: 5px;float: right;margin-right: 20px;">
                                    <input type="text" name="gen" style="outline:none;border: none;border-bottom: 2px solid #006e72;" value="'.$row['s_gender'].'">
                                </div>
                        </div>

                        <div style="color: #006e72;font-size: 20px;font-weight: bolder;padding-left: 25px;padding:10px;">
                                <i class="uil uil-phone"style="font-size: 36;margin-left: 30px;"></i> Phone:
                                <div style="color: gray;font-weight: normal;font-size: 15px;margin-top: 5px;float: right;margin-right: 20px;">
                                    <input type="text" name="phone" style="outline:none;border: none;border-bottom: 2px solid #006e72;" value="'.$row['s_phone'].'">
                                </div>
                        </div>
                        <div style="margin-top: 10px;margin-left:180px">
                            <input type="submit" name="submit" class="btn"style="border: none;outline: none;">    
                        </div>
                    </form>
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