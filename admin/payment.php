<?php
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
    $results_per_page = 10;  
    $query = "SELECT * FROM `tbl_payment_info`;";  
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
    $query = "SELECT * FROM `tbl_payment_info` LIMIT " . $page_first_result . ',' . $results_per_page;  
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
            <div class="content-2" style="margin-bottom: -200px;">
                <div class="recent-payments">
                    <div class="title">
                        <h1 style="color:#006e72;margin: auto;">₹ Received Payments</h1>
                    </div>
                    <?php
                        $count=1;
                        $sql='select * from tbl_payment_info LIMIT 10;';
                        $qry=mysqli_query($con,$sql);
                        echo '<table style="margin-left:100px">';
                        echo '<tr>';
                        echo '<th>No.</th>';
                        echo '<th>Name</th>';
                        echo '<th>Courses</th>';
                        echo '<th>Amount</th>';
                        echo '<th>Options</th>';
                        echo '</tr>';

                        while($row=mysqli_fetch_assoc($run))
                        {
                            echo '<tr>';
                            echo '<td>'.$count.'</td>';
                            echo '<td>'.ucwords($row['s_name']).'</td>';
                            echo '<td>'.ucwords($row['s_sub']).'</td>';
                            echo '<td>₹'.$row['c_price'].'</td>';
                            echo '<td><a href="vaoucher/receipt.php?id='.$row['p_id'].'" target="blank" class="btn">View</a></td>';
                            echo '</tr>';
                            $count++;
                        }
                        echo '</table>';
                    ?>
                    
                        <!-- <tr>
                            <td><img src="images/user.png" height="45px"width="45px"style="margin-left:0px"></td>
                            <td>John Doe</td>
                            <td>C-language</td>
                            <td>₹120</td>
                            <td><a href="view_user.php" class="btn">View</a>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" height="45px"width="45px"style="margin-left:0px"></td>
                            <td>John Doe</td>
                            <td>C++</td>
                            <td>₹120</td>
                            <td><a href="view_user.php" class="btn">View</a>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" height="45px"width="45px"style="margin-left:0px"></td>
                            <td>John Doe</td>
                            <td>ASP.NET</td>
                            <td>₹120</td>
                            <td><a href="view_user.php" class="btn">View</a>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" height="45px"width="45px"style="margin-left:0px"></td>
                            <td>John Doe</td>
                            <td>ORACLE</td>
                            <td>₹120</td>
                            <td><a href="view_user.php" class="btn">View</a>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" height="45px"width="45px"style="margin-left:0px"></td>
                            <td>John Doe</td>
                            <td>Javascript</td>
                            <td>₹120</td>
                            <td><a href="view_user.php" class="btn">View</a>
                        </tr>
                    </table> -->
                </div>
            </div>
            <section class="pagination" style="margin-top: 200px;margin-left: 400px;">
              <?php 

                if ($_GET['page']>1) {
                    // code...
                $less=$_GET['page']-1;
                            echo ' <a href="manage_courses.php?page='.$less.'"><button id="pg-button-prev" type="button" class="pagination__button">
                <i class="fa fa-chevron-left"></i>
              </button></a>';


                }
                 echo '<ul class="pagination__list">';   
                for($page = 1; $page<= $number_of_page; $page++) 
                {  

                        echo '

<a href="manage_courses.php?page='.$page.'"> 
<li class="pagination__item pagination__item--4">
                 <button id="pg-button-4" type="button">'.$page.'</button>
                </li></a>
                ';
                } 
                echo '</ul>';

                if ($_GET['page']<$number_of_page) 
                {
                    
                    $less=$_GET['page']+1;

                        echo '<a href="manage_courses.php?page='.$less.'"><button id="pg-button-next" type="button" class="pagination__button">
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