<?php
    session_start();
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
   
    $title=$_GET['t_title'];
    $course = $_SESSION['c_title'];
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
       padding: 20px;
       padding-top: 20px;
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
        height: 120px;
        background-color: #006e723d;
        border-bottom-right-radius: 10px;
          border-bottom-left-radius: 10px;
          margin-top: -4px;
          color: #006e72;
    }
    .inputfields
    {
        margin-left:150px;
        border: 2px solid #006e72;
        width:650px;
        outline: none;
        height: 20px;
        border-radius: 3px;
        margin-top: 10px;
        padding: 20px;
    }
    #display_quiz
    {
        margin-left: 200px;
        width: 800;
        padding: 50px;
        margin-bottom: 40px;
/*        border: 2px solid #006e72;*/
    }
    .que
    {
        margin-right: 30px;
    }
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
     
    th,
    td {
        padding: 20px;
    }
     
    th {
        text-align: left;
    }
    .test_title
    {
        margin-top: 0px;
        margin-left: 20px;
        font-weight: bolder;
        color: gray;
        font-size: 17px;
/*        border: 2px solid black;*/
        width: 710px;
        height: auto;
        text-align: justify;
    }
    .answer
    {
        margin-top: 17px;
        margin-left: 20px;
        color: #006e72;
        font-weight: bolder;
    }
    .test_img img
    {
        height:15%;
        width:15%;
        border-radius: 5px;
    }
    .alltest
    {
        margin-top: -60px;
        padding:50px;
        margin-left: 180px;
    }
    .inner_test
    {
        box-shadow: 0px 5px 16px 0px rgba(0,0,0,0.2);
        width: 750px;
        height: 125px;
        border-radius: 5px;
        padding-top: 17px;
    }
    .button_manage
    {
        margin-left: 610px;
        margin-top: -20px;
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
        <?php include('menu.php'); ?>
    </div><br>
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
                                <a href="#"style="color: #006e72;"><ion-icon name="log-out-outline"></ion-icon>&nbsp Logout</a><br>
                            </div>
                        </div>
                    </div>
                    <h3 style="position: fixed;float: right;margin-left: 270px;width: 0px;background: none;">Admin</h3>
                </div>
            </div>
        </div>
        <div class="content">
            <br>
            <div class="content-2" style="margin-bottom: -200px;">
                <div class="recent-payments">
                    <div class="title">
                        <h1 style="color:#006e72;margin: auto;"><i class="uil uil-file-edit-alt"></i> Edit Test</h1>
                    </div><br><br>
                    <div class="alltest">

                    <?php
                        $sql="SELECT * FROM `tbl_test` WHERE c_title='$course' AND t_title='$title';";
                        $qry=mysqli_query($con,$sql);
                        $i=0;
                        while($row=mysqli_fetch_assoc($qry))
                        {   $i++;
                            echo '<div class="inner_test">';
                            echo '<div class="test_title">
                                   <p>'.$i.'. '.$row['t_que'].'</p>
                                </div><br><br>
                                <div class="answer">
                                    Answer: '.$row['t_ans'].'
                                </div>
                                <div class="button_manage">
                                    <a href="edit_test.php?id='.$row['id'].'" class="btn">Edit</a>
                                    <a href="del_test_que.php?id='.$row['id'].'" class="btn">Delete</a>
                                </div>';
                            echo '</div><br>';
                        }    
                    ?>    
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