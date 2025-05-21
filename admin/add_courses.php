<?php
    // error_reporting(0);
   $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
   if (isset($_POST['submit'])) 
   {
      $c_title=$_POST['course_title'];
      $c_price=$_POST['course_price'];
      $file=$_FILES['file1']['name'];
      $file_size=$_FILES['file1']['size'];
      $file_type=$_FILES['file1']['type'];
      $c_desc=$_POST['cdesc'];
      $path="upload/".$file;
      $tmp_name=$_FILES['file1']['tmp_name'];
      $file_upload=true;
      // echo $c_title."<br>";
      // echo $c_price."<br>";
      // echo $file."<br>";
      // echo $file_type."<br>";
      // echo $file_size."<br>";
      // echo $c_desc."<br>";
      // echo $path."<br>";
      // echo $tmp_name."<br>";
      $msg="";
      if(($file_type=='image/png' or $file_type=='image/jpg')) {
          $msg=$msg.'File type is not valid';
          $file_upload=false;
      }
      if($file_upload==true) 
      {
            if (move_uploaded_file($tmp_name, $path)) 
            {
                $sql="INSERT INTO `tbl_course` (`c_title`, `c_price`, `c_des`, `c_thumbnail`) VALUES ('$c_title', '$c_price', '$c_desc ', '$path');";
                $qry=mysqli_query($con,$sql);
                if ($qry) 
                {
                    echo "<script>alert('data inserted successfully....');</script>";
                }
                else
                {
                    echo "<script>alert('data not inserted');</script>";
                } 
            }   
      }
      else
      {
        echo $msg;
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
    .side-menu a .active
    {
        background-color: white;
        color: #006e72;
    }
    #div1
    {
        padding: 30px;
        margin-left: 20px;
    }
    #div2
    {
        padding: 30px;
       /* width: 520px;
        height: 300px;*/
        float: right;
        position: relative;
        margin-left: 600px;
        margin-top: -240px;
        margin-bottom: 70px;
    }
    .inputfields
    {
        height: 40px;width:400px;padding: 15px;border: 2px solid #006e72;outline: none;border-radius: 3px;
        color: gray;
    }
    #div1,#div2 label
    {
        font-size: 20px;
        color: #006e72;
    }
    .submit_btn
    {
        margin-left:500px;
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
            <br><br>
            <div class="content-2" style="margin-bottom: -200px;">
                <div class="recent-payments">
                    <div class="title">
                        <h1 style="color:#006e72;margin: auto;"><i class="uil uil-book-open"></i> Add Courses</h1>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div style="padding-top: 50px;padding-left: 50px;">
                        
                        <div style="margin-left: 130px;">
                            <div>
                                <input type="text" name="course_title" placeholder="Course title"class="inputfields">
                            </div><br>
                            <div>
                                <input type="text" name="course_price" placeholder="Course Price"class="inputfields">
                            </div>
                        </div>
                        <div style="float: right;margin-top: -100px;margin-right: 200px;">
                            <label for="input-file" style="cursor: pointer;">
                            <div style="border: 2px dashed #006e72;width: 350px;height: 100px;text-align: center;padding: 20px;padding-top: 15px;position: relative;">
                                      <i class="uil uil-file-upload" style="font-size:40px;color: #006e72;"></i>
                                      <p  id='txt' style="color: #006e72;">Click here to Upload file </p>
                                  </div>
                                </label><br>
                                <input type="file" accept="image/jpg,image/png" name="file1" id="input-file" style="display:none;" onchange="abc();">
                        </div><br>
                        <script type="text/javascript">
                            
                            function abc(){
                                var d=document.querySelector("#input-file");
                                 var txt=document.querySelector("#txt");
                                 txt.innerHTML=d.value; 
                            }
                        </script>
                        <div style="padding-right: 30px;">
                            <textarea rows="4" cols="20" name="cdesc" placeholder="Add Course Description" style="margin-left:132px;border: 2px solid #006e72;border-radius: 3px;width: 800px;outline: none;padding: 20px;"></textarea>
                        </div>
                    <div>
                        <input type="submit" name="submit" class="submit_btn">
                    </div>
                    </div>
                    </form>
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