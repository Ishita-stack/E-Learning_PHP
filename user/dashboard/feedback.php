<?php
    session_start();
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
    $id=$_SESSION['id'];
    $sqlnew="SELECT * FROM `tbl_reg` WHERE s_id=$id";
    $qrynew=mysqli_query($con,$sqlnew);
    $rows=mysqli_fetch_assoc($qrynew);
    $prof=$rows['s_profession'];
    $name=$rows['s_name'];
    $pic=$rows['s_photo'];
    if (isset($_POST['submit'])) 
    {
        $name=$_POST['name'];
        $prof=$_POST['prof'];
        $fdk=$_POST['fdk'];
        $date=date('m/d/y');
        $sql1="INSERT INTO `tbl_feedback` (`name`, `s_profession`, `feedback`, `fd_status`, `date`, `photo`) VALUES ('$name', '$prof', '$fdk', '0', '$date', '$pic');";
        $qry1=mysqli_query($con,$sql1);
        if ($qry1) 
        {
            echo "<script>alert('Feedback send successfully....');</script>";
        }
        else
        {
            echo "<script>alert('Feedback not send successfully....');</script>";
        }
    }
    // $sql="SELECT * FROM `tbl_reg`;";
    // $qry=mysqli_query($con,$sql)or die('query error');
    // $row=mysqli_fetch_assoc($qry);
    // $num=mysqli_num_rows($qry);
    // echo $row['id'];
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
   
     .inputfields
    {
        height: 40px;width:650px;padding: 15px;border: 2px solid #006e72;outline: none;border-radius: 3px;
        color: gray;
    }
    #div1,#div2 label
    {
        font-size: 20px;
        color: #006e72;
    }
    .submit_btn
    {
        margin-left:380px;
        margin-top: 30px;
        margin-bottom: 30px;
/*        padding: 15px;*/
        border-radius: 5px;
        border: none;
        outline: none;
        background-color: #006e72;
        color: white;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 20px;
        padding-right: 20px;
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
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="img-case" style="margin-right: 20px;">
                       <?php
                            include('user_profile1.php'); 
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
                    <h3 style="position: fixed;float: right;margin-left: 280px;width: 0px;background: none;">User</h3>
                </div>
            </div>
        </div>
         <div class="content">
            <br><br>
            <div class="content-2" style="margin-bottom: -200px;">
                <div class="recent-payments">
                    <div class="title">
                    <form action="" method="post">
                        <h1 style="color:#006e72;margin: auto;"><i class="uil uil-feedback"></i> Feedback</h1>
                    </div>
                    <div style="padding-top: 50px;padding-left: 50px;margin-left: 150px;">
                        
                        <div style="margin-left: 90px;">
                            <div>
                                <input type="text" name="name"  value="<?php echo $name; ?>" readonly class="inputfields">
                            </div><br>
                            <div>
                                <input type="text" name="prof" value="<?php echo $prof; ?>" readonly class="inputfields">
                            </div>
                        </div>
                        
                        <div style="padding-right: 30px;">
                            <textarea rows="10" cols="50" class="inputfields" name="fdk" placeholder="Give your Feedback" style=" margin-left:90px;
        border: 2px solid #006e72;
        width:650px;
        outline: none;
        border-radius: 3px;
        margin-top: 18px;height: 100px;"></textarea>
                        </div>
                    <div>
                        <input type="submit" name="submit" class="submit_btn">
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