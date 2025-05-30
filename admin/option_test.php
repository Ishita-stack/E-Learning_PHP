<?php
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
    if (isset($_POST['submit'])) {
       
        $course=$_POST['course'];
        $Test_Title=$_POST['Test_Title'];
        $que=$_POST['que'];
        $a=$_POST['opt1'];
        $b=$_POST['opt2'];
        $c=$_POST['opt3'];
        $d=$_POST['opt4'];

        $sql="INSERT INTO `tbl_test` (`t_title`, `t_que`, `t_ans`, `t_a`, `t_b`, `t_c`, `t_d`, `t_course`, `t_id`) VALUES ('$Test_Title','$que','Correct ans', '$a', '$b', '$c', '$d','$course', '102');";
        $qry=mysqli_query($con,$sql);
        if ($qry) 
        {
            echo "Data inserted successfully";
        }
        else
        {
            echo "Data is not inserted";
        }
    }
    $sql="SELECT * FROM `tbl_reg`;";
    $qry=mysqli_query($con,$sql)or die('query error');
    $row=mysqli_fetch_assoc($qry);
    $num=mysqli_num_rows($qry);
    
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
    .container1 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: #006e72;;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container1 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container1 .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
}
#option_id
{
    outline: none;
    border: 2px solid #006e72;
    width: 650px;
    height: 40px;
    color: gray;
    padding: 5px;
    border-radius: 3px;
    margin-left: 150px;
}
.maindiv
{
    border: 2px solid #006e72;
    width: 500px;
    height: 130px;
    margin: auto;
    margin-top: 100px;
    margin-bottom: 90px;
    border-radius: 20px;
    padding: 20px;
    text-align: center;
}
.innerdiv
{
    font-size: 20px;
    color: #006e72;
    font-weight: bolder;
}
.innerdiv2 input
{
    margin-top: 30px;
    background-color: #006e72;
    color: white;
    outline: none; 
    padding: 5px;
    border-radius: 5px;
}
.innerdiv2 #input1,#input2
{
    width: 120px;
    outline: none;
    border: none;
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
        <?php include('menu.php'); ?>
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
            <div class="content-2" style="margin-bottom: -200px;">
                <div class="recent-payments">
                    <div class="title">
                        <h1 style="color:#006e72;margin: auto;"><i class="uil uil-file-edit-alt"></i> Add</h1>
                    </div>
                    <div class="maindiv">
                        <div class="innerdiv">
                            What you want to do?    
                        </div>
                        <div class="innerdiv2">
                            <a href="course_list.php">
                            <input type="submit" name="add_que" value="Add Question" id="input1"></a>&nbsp;&nbsp;
                            <a href="add_test.php">
                            <input type="submit" name="add_test"value="Add Test"id="input1"></a>
                        </div>
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