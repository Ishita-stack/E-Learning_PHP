<?php
    // $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://rawgit.com/romulomachado/simpletabs/master/dist/simpletabs.css'><link rel="stylesheet" href="tab_menu/style.css">
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
       padding-top: 40px;
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
        height: 60px;
        background-color: #006e723d;
        border-bottom-right-radius: 10px;
          border-bottom-left-radius: 10px;
          margin-top: -4px;
          color: #006e72;
          padding-top: 20px;
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
.container .content {
    position: relative;
    margin-top: 10vh;
    min-height: 50vh;
    background: #f1f1f1;
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
                    <input type="text" placeholder="Search.." style="border-top-right-radius: 0px;border-bottom-right-radius: 0px;outline: none;">
                    <button  type="submit" style="margin-top:4px;height:38px"><i class="uil uil-search" style="font-size:25px;"></i></button>
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
                       <button class="dropdown-btn" id="abc1">
                            <img src="images/user.png">
                        </button>
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
                        <h1 style="color:#006e72;margin: auto;"><i class="uil uil-book"></i>Assignments</h1>
                    </div>
                    <br>
                    <div class="ccm-page">
<nav class="specimen" >
  <ul>
    <li class="is-active">
      <a class="tab__link" data-tab="colors" href="#colors">C++</a>
    </li>
    <li class="">
      <a class="tab__link" data-tab="type" href="#type">Javascript</a>
    </li>
    <li>
      <a class="tab__link" data-tab="grids" href="#grids">Java</a>
    </li>
    <li>
      <a class="tab__link" data-tab="forms" href="#forms">Asp.net</a>
    </li>
    <li>
      <a class="tab__link" data-tab="tables" href="#tables">CSS</a>
    </li>
    <li>
      <a class="tab__link" data-tab="menus" href="#menus">HTML</a>
    </li>
  </ul>
</nav>
<section class="content"><!-- tab-1 -->
    <div class="content__item is-active" data-content="colors"><h2 class="specimen">C++ Assignment</h2>
        <div class="grid">
            <div class="col1-2-sml">
                
                <a href="add_quiz.php">
                    <div class="card_div">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-1</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -207px;margin-left: 25px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-2</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -206px;margin-right: -507px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-3</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -206px;margin-right: -750px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-4</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

            </div>
        </div>
    </div>
    <div class="content__item" data-content="type"><!-- tab-1 -->
        <h2 class="specimen">Javascript Assignment</h2>
        <div class="grid">
            <div class="col1-2-sml">
                
                <a href="add_quiz.php">
                    <div class="card_div">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-1</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -207px;margin-left: 25px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-2</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -206px;margin-right: -507px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-3</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -206px;margin-right: -750px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-4</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

            </div>
        </div>
    </div><!-- Typography -->
    <!-- Grids -->

    <div class="content__item" data-content="grids">
        <h2 class="specimen">Java Assignment</h2>
        <div class="grid">
            <div class="col1-2-sml">

                <a href="add_quiz.php">
                    <div class="card_div">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-1</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -207px;margin-left: 25px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-2</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -206px;margin-right: -507px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-3</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -206px;margin-right: -750px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-4</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

            </div>
        </div>
    </div><!-- Grids -->
    <!-- forms and btn -->
    <div class="content__item" data-content="forms">
        <h2 class="specimen">Asp.net Assignment</h2>
        <div class="grid">
            <div class="col1-2-sml">

                <a href="add_quiz.php">
                    <div class="card_div">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-1</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -207px;margin-left: 25px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-2</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -206px;margin-right: -507px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-3</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -206px;margin-right: -750px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-4</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

            </div>
        </div>
    </div>
    <!-- tables -->
    <div class="content__item" data-content="tables">
        <h2 class="specimen">CSS Assignment</h2>
        <div class="grid">
            <div class="col1-2-sml">
                
                <a href="add_quiz.php">
                    <div class="card_div">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-1</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -207px;margin-left: 25px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-2</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -206px;margin-right: -507px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-3</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -206px;margin-right: -750px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-4</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

            </div>
        </div>
    </div><!-- Tables -->

    <div class="content__item" data-content="menus">
        <h2 class="specimen">HTML Assignment</h2>
        <div class="grid">
            <div class="col1-2-sml">

                <a href="add_quiz.php">
                    <div class="card_div">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-1</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -207px;margin-left: 25px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-2</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -206px;margin-right: -507px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-3</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

                <a href="add_quiz.php">
                    <div class="card_div" style="float:right;margin-top: -206px;margin-right: -750px;">
                        <div class="card" style="width: 200px;">
                            <img src="images/cpp_thumb.jpg" alt="Avatar" style="width:100%;margin-left: 0px;border-top-right-radius: 10px;
          border-top-left-radius: 10px;">
                            <div class="description">
                                <h3 style="color:#006e72"><b>Assignment-4</b></h3><p style="float:right;margin-top: -28px;font-size: 30px;margin-left: 25px;"><i class="uil uil-file-download"></i></p> <br>
                            </div>
                        </div> 
                    </div>
                </a>

            </div>
        </div>
    </div>
<!-- Menus -->
</section>  
<p>&nbsp;</p>
<hr>

    

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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://rawgit.com/romulomachado/simpletabs/master/dist/simpletabs.js'></script><script  src="tab_menu/script.js"></script>
</body>

</html>