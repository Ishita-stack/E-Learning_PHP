<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <ul style="margin-left: -10px;">
            <a href="index.php?status=Home"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Home') 
            {
                echo 'active';
            }
            elseif ($_GET['status']=='') {
                echo 'active';
            }
        ?>">

        <i class="uil uil-home">
            
        </i>&nbsp;&nbsp;&nbsp;

        <span>Home</span>
    </li></a>
        <button class="dropdown-btn"><i class="uil uil-book-open" style="margin-left:-6px"></i>&nbsp;&nbsp;&nbsp;My Courses &nbsp 
        <i class="uil uil-angle-down"></i>
        </button>
        <div class="dropdown-container" style="padding:10px">
            <div id="inner_div1">
            <a href="active_courses.php" style="padding:15px;"><i class="uil uil-forward"></i>&nbsp; Active Courses</a><br><br></div>
            <div id="inner_div2">
            <a href="complete_courses.php" style="padding:15px;"><i class="uil uil-check-circle"></i>&nbsp; Complete Courses</a><br></div>
        </div>

        <a href="manage_assignment.php?status=My Assignments">
                <li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='My Assignments') 
            {
                echo 'active';
            }
        ?>"><i class="uil uil-book"></i>&nbsp;&nbsp;&nbsp;<span>My Assignments</span></li></a>

        <a href="payment_history.php?status=Payment History">
                <li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Payment History') 
            {
                echo 'active';
            }
        ?>"><i class="uil uil-rupee-sign"></i>&nbsp;&nbsp;&nbsp;<span>Payment History</span></li></a>

        <a href="test.php?status=Test">
                <li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Test') 
            {
                echo 'active';
            }
        ?>"><i class="uil uil-file-edit-alt"></i>&nbsp;&nbsp;&nbsp;<span>Test</span></li></a>

        <a href="feedback.php?status=Feedback"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Feedback') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-feedback"></i>&nbsp;&nbsp;&nbsp;<span>Feedback</span></li></a>
        </ul>
</body>
</html>