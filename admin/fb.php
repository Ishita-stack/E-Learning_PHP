<?php
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
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
    table
    {
        border-collapse: collapse;
        margin-bottom: 20px;
        margin-right: 30px;
        margin-left: 30px;
    }
    table tr:hover
    {
        background-color: #006e723d;

    }
    .assign-title
    {
        width: 200px;
    }
    .img-td
    {
        width: 150px;
        height: auto;

    }
    .img-td img
    {
        height: 100%;
        width: 100%;
        margin-left: 0px;
    }
   .switch {
  position: relative;
  display: inline-block;
  width: 45px;
  height: 25px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}
.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: -4px;
  bottom: 3px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #006e72;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(16px);
  -ms-transform: translateX(16px);
  transform: translateX(16px);
}
    /* Rounded sliders */
.slider.round {
  border-radius: 30px;
}

.slider.round:before {
  border-radius: 50%;
  left: 5px;
}
/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
/*  padding-right: 100px;*/
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column  {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column  {
    width: 100%;
  }
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
                    <!-- <a href="changepass.php" class="btn" style="font-family: 'Poppins', sans-serif;padding:10px;">Change Password</a> -->
                    <div style="margin-left:130px"></div>
                    <img src="images/notifications.png">
                    <div class="img-case">
                       <button class="dropdown-btn">
                            <img src="images/user.png"style="margin-left:-10px">
                        </button>
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
         <div class="content" style="width: 100%;">
            <br><br>
            <div class="content-2" style="margin-bottom: -200px;">
                <div class="recent-payments" >
                    <div class="title" >
                        <h1 style="color:#006e72;margin: auto;"><i class="uil uil-comment-alt-message"></i> User Feedback</h1>
                    </div>
                    <div>
                <?php
                    $sql="SELECT * FROM `tbl_feedback`;";
                    $qry=mysqli_query($con,$sql)or die('query error');
                    while($row=mysqli_fetch_assoc($qry))
                    {
                        
                        $sql2="SELECT * FROM `tbl_reg` WHERE s_name='$name';";
                        $qry2=mysqli_query($con,$sql2)or die('query error');
                        $row2=mysqli_fetch_assoc($qry2);
                        $photo=$row2['s_photo'];
                        
                        
                        echo '
                        <div class="row" style="margin-right: 50px;">

                          <div class="column" style="width: 33%;">
  


                        <div style="width: 350px; height:250px;margin-left:30px;margin-top:20px;padding:15px;border-radius:5px;box-shadow: 0 4px 8px 0 #006e7236, 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div>
                                <div style="border-radius: 50%;width: 60px;height: 60px;border: none;align-items: center;font-size:40px;margin-left:10px">
                                    <img src="'.$row2['s_photo'].'"height="100%"width="100%"style="margin-left: 0px;margin-top: 0px;">
                                </div>
                                <div style="width: 80px;height: 30px;float: right;margin-top: -45px;margin-right: 0px;">
                                    <label class="switch">
                                      <input type="checkbox">
                                      <span class="slider round"></span>
                                    </label>
                                    <i class="uil uil-trash-alt" style="float:right;font-size: 30px;color: #006e72;margin-right: -5px;margin-top: -6px;"></i>   
                                </div>
                                <h3 style="float:right;margin-right: 115px;margin-top: -50px;color: #006e72;">'.$row['name'].'</h3>
                                <h5 style="float:right;margin-right: 120px;margin-top: -25px;color: gray;text-align:center">'.$row['s_profession'].'</h5>
                                <div style="height: 140px;padding: 10px;scroll-behavior: auto;text-align: justify;overflow-x: hidden;
                overflow-y: auto;">
                                    '.$row['feedback'].'
                                </div>
                                <p style="font-size: 15px;color: gray;margin-left: 223px;margin-top: 5px;font-weight: bolder;">
                                    '.$row['date'].'
                                </p>
                            </div>
                        </div>
                    </div>';
                }
                ?>
                    </div>
                </div>
            </div>

           <!--  <section class="pagination" style="margin-top: 20px;margin-left: 50%;">
              <button id="pg-button-prev" type="button" class="pagination__button">
                <i class="fa fa-chevron-left"></i>
              </button>

              <ul class="pagination__list">
                <li class="pagination__item pagination__item--1">
                  <button id="pg-button-1" type="button">1</button>
                </li>
                <li class="pagination__item pagination__item--2">
                  <button id="pg-button-2" type="button">2</button>
                </li>
                <li class="pagination__item pagination__item--3">
                  <button id="pg-button-3" type="button">3</button>
                </li>
                <li class="pagination__item pagination__item--4">
                  <button id="pg-button-4" type="button">4</button>
                </li>
                <li class="pagination__item pagination__item--5">
                  <button id="pg-button-5" type="button">5</button>
                </li>
              </ul>

              <button id="pg-button-next" type="button" class="pagination__button">
                <i class="fa fa-chevron-right"></i>
              </button>
            </section> -->
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