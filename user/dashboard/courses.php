<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Admin Panel</title>
    <link rel = "icon" href = "images/logo3.png" type = "image/x-icon"> 
</head>
<style type="text/css">
    .side-menu a .active
    {
        background-color: white;
        color: #006e72;
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
        <ul>
        <!-- <a href="index.php?status=Home"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Home') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-home"></i>&nbsp;&nbsp;&nbsp;<span>Home</span></li></a> -->

            <a href="index.php?status=Home"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Home') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-home"></i>&nbsp;&nbsp;&nbsp;<span>Home</span></li></a>
            <a href="index.php?status=Registerd user"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Registerd user') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-user-check"></i>&nbsp;&nbsp;&nbsp;<span>Registerd user</span></li></a>
            <a href="index.php?status=Courses"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Courses') 
            {
                echo 'active';
            }
            elseif ($_GET['status']=='') {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-book-open"></i>&nbsp;&nbsp;&nbsp;<span>Courses</span></li></a>
            <a href="index.php?status=Assignments"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Assignments') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-book"></i>&nbsp;&nbsp;&nbsp;<span>Assignments</span></li></a>
            <!-- <a href="index.php?status=Library"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Library') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-books"></i>&nbsp;&nbsp;&nbsp;<span>Library</span></li></a> -->
            <a href="index.php?status=QA"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='QA') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-question-circle"></i>&nbsp;&nbsp;&nbsp;<span>Q & A</span></li></a>
            <a href="index.php?status=Offers"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Offers') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-usd-circle"></i>&nbsp;&nbsp;&nbsp;<span>Offers</span></li></a>
            <a href="index.php?status=Test"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Test') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-notes"></i>&nbsp;&nbsp;&nbsp;<span>Test</span></li></a>
            <a href="index.php?status=Feedback"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Feedback') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-feedback"></i>&nbsp;&nbsp;&nbsp;<span>Feedback</span></li></a>
            <a href="logout.php"><li>&nbsp;<i class="uil uil-signout"></i>&nbsp;&nbsp;&nbsp;<span>Logout</span></li></a>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="images/search.png" alt=""></button>
                </div>
                <div class="user">
                    <!-- <a href="changepass.php" class="btn" style="font-family: 'Poppins', sans-serif;padding:10px;">Change Password</a> -->
                    <div style="margin-left:130px"></div>
                    <img src="images/notifications.png">
                    <div class="img-case">
                        <a href="try.php"><img src="images/user.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Students</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/student.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Assignments</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/assign.png" alt="" height="70px">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Courses</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/online-learning.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/incomes.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                        <a href="index.php?status=Registerd user" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Courses</th>
                            <th>Amount</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>C++</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Java</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>C-language</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Asp.net</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>ORACLE</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>RDBMS</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Students</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>