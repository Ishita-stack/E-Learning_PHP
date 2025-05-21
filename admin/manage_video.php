<?php
    session_start();
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
    $id=$_GET['id'];
    $sqlnew="SELECT * FROM `tbl_course` WHERE c_id='$id';";
    $qrynew=mysqli_query($con,$sqlnew);
    $row=mysqli_fetch_assoc($qrynew);
    $sub=$row['c_title'];
    $results_per_page = 4;  
    $query = "SELECT * FROM `tbl_video` WHERE c_title='$sub';";  
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
    $query = "SELECT * FROM `tbl_video` WHERE c_title='$sub' LIMIT " . $page_first_result . ',' . $results_per_page;  
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
    /*table tr:hover
    {
        background-color: #006e723d;

    }*/
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
      body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
    
    .swal-modal {
  font-family: sans-serif;
}

.swal-text {
  text-align: center;
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
                        <h1 style="color:#006e72;margin: auto;"><i class="uil uil-book-open"></i> Manage Video</h1>
                        <!-- <a href="index.php?status=Registerd user" class="btn">View All</a> -->
                    </div>
                    <?php
                        
                        echo '<table style="margin-left: 90px;">
                                    <tr>
                                        <th style="text-align:center;">Video&nbsp;Thumbnails</th>
                                        <th style="padding-left: 240px;">Video Title</th>
                                        <th>Course</th>
                                        <th style="padding-left: 150px;">Options</th>
                                    </tr>';
                        
                        while($row1=mysqli_fetch_assoc($run))
                        {
                            $id=$row1['v_id'];
                            $uurl1='del_video.php?id='.$id; 
                            $uurl2='edit_video.php?id='.$id; 
                            echo "<tr>";
                            echo "<td class='img-td'>
                                    <video height='100%' width='100%'>
                                     <source src='".$row1['v_file']."'>
                                    </video>
                                   </td>&nbsp;";
                            echo "<td style='padding-left: 250px;'>".$row1['v_title']."</td>";
                            echo "<td>".$row1['c_title']."</td>";
                            echo "<td style='padding-left: 100px;'><a href='view_video.php?id=".$row1['v_id']."' class='btn'>View</a>&nbsp
                            <a onclick='edit_rec(".'"'.$uurl2.'"'.")' class='btn' style='cursor:pointer;'>Edit</a>&nbsp
                            <a onclick='delete_rec(".'"'.$uurl1.'"'.")' class='btn' style='cursor:pointer;'>Delete</a></td>";
                            echo "</tr>";
                        }
                        echo '<table>';
                    ?>
                </div>
            </div>
            <section class="pagination" style="margin-left: 400px;">
              <!-- <button id="pg-button-prev" type="button" class="pagination__button">
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
              </button> -->
              <?php 

                if ($_GET['page']>1) {
                    // code...
                $less=$_GET['page']-1;
                            echo ' <a href="manage_video.php?page='.$less.'"><button id="pg-button-prev" type="button" class="pagination__button">
                <i class="fa fa-chevron-left"></i>
              </button></a>';


                }
                 echo '<ul class="pagination__list">';   
                for($page = 1; $page<= $number_of_page; $page++) 
                {  

                        echo '

<a href="manage_video.php?page='.$page.'"> 
<li class="pagination__item pagination__item--4">
                 <button id="pg-button-4" type="button">'.$page.'</button>
                </li></a>
                ';
                } 
                echo '</ul>';

                if ($_GET['page']<$number_of_page) 
                {
                    
                    $less=$_GET['page']+1;

                        echo '<a href="manage_video.php?page='.$less.'"><button id="pg-button-next" type="button" class="pagination__button">
                <i class="fa fa-chevron-right"></i></a>';
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
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
<script>
    
function delete_rec(url){


    Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: "Deleted!",
      text: "Your file has been deleted.",
      icon: "success"
    });
    //alert below set url using java script and stoped alert
    //alert("oky");
    window.location.href=url;

  }
});

}

function edit_rec(url){


    Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, Update it!"
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: "Updated!",
      text: "Your file has been updated.",
      icon: "success"
    });
    //alert below set url using java script and stoped alert
    //alert("oky");
    window.location.href=url;

  }
});

}
  </script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js'></script>
<?php   



if ($_SESSION['alert']==1) {
    // code...

    echo '

  <script >
    
    swal({
  title: "'.$_SESSION['alert_title'].'",
  text:
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua",
  icon: "success",
  buttons: {

    confirm: "Okay"
  },
  closeOnClickOutside: false
});
  </script>


    ';
    $_SESSION['alert']=0;
}
?>
