 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
 </head>
 <body>
        <ul>
            <a href="index.php?status=Home"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Home') 
            {
                echo 'active';
            }
            elseif ($_GET['status']=='') {
                echo 'active';
            }
        ?>">&nbsp;

        <i class="uil uil-home"></i>&nbsp;&nbsp;&nbsp;

        <span>Home</span>
    </li></a>
            <a href="request_user.php?status=User Requests">
                <li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='User Requests') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-user-circle"></i>&nbsp;&nbsp;&nbsp;<span>User Requests</span></li></a>

            <a href="reg_user.php?status=Registerd user">
                <li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Registerd user') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-user-check"></i>&nbsp;&nbsp;&nbsp;<span>Registerd user</span></li></a>
        <button class="dropdown-btn"><i class="uil uil-book-open"></i>&nbsp;&nbsp;&nbsp;Courses &nbsp 
        <i class="uil uil-angle-down"></i>
        </button>
        <div class="dropdown-container" style="padding:10px">
            <div id="inner_div1">
            <a href="add_courses.php" style="padding:15px;"><i class="uil uil-plus-circle"></i>&nbsp Add Courses</a><br><br></div>
            <div id="inner_div2">
            <a href="manage_courses.php" style="padding:15px;"><i class="uil uil-cog"></i>&nbsp Manage Courses</a><br></div>
        </div>

        <button class="dropdown-btn"><i class="uil uil-play-circle"></i>&nbsp;&nbsp;&nbsp;Videos &nbsp 
        <i class="uil uil-angle-down"></i>
        </button>
        <div class="dropdown-container" style="padding:10px">
            <div id="inner_div1">
            <a href="add_video.php" style="padding:15px;"><i class="uil uil-plus-circle"></i>&nbsp; Add Videos</a><br><br></div>
            <div id="inner_div2">
            <a href="video_course.php" style="padding:15px;"><i class="uil uil-cog"></i>&nbsp; Manage Videos</a><br></div>
        </div>

        <button class="dropdown-btn"><i class="uil uil-book"></i>&nbsp;&nbsp;&nbsp;Assignments &nbsp 
        <i class="uil uil-angle-down"></i>
        </button>
        <div class="dropdown-container" style="padding:10px">
            <div id="inner_div1">
            <a href="add_assignment.php" style="padding:15px;"><i class="uil uil-plus-circle"></i>&nbsp; Add Assign</a><br><br></div>
            <div id="inner_div2">
            <a href="manage_assign.php" style="padding:15px;"><i class="uil uil-cog"></i>&nbsp; Manage Assign</a><br></div>
        </div>

            <!-- <a href="index.php?status=Assignments"><li class="<?php 
            /*error_reporting(0);
            if ($_GET['status']=='Assignments') 
            {
                echo 'active';
            }*/
        ?>">&nbsp;<i class="uil uil-book"></i>&nbsp;&nbsp;&nbsp;<span>Assignments</span></li></a> -->
            <a href="payment.php?status=payments"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='payments') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-rupee-sign"></i>&nbsp;&nbsp;&nbsp;<span>Payments</span></li></a>
            
        <button class="dropdown-btn"><i class="uil uil-file-edit-alt"></i>&nbsp;&nbsp;&nbsp;Test &nbsp 
        <i class="uil uil-angle-down"></i>
        </button>
        <div class="dropdown-container" style="padding:10px">
            <div id="inner_div1">
            <a href="option_test.php" style="padding:15px;"><i class="uil uil-plus-circle"></i>&nbsp; Add Test</a><br><br></div>
            <div id="inner_div2">
            <a href="manage_test.php" style="padding:15px;"><i class="uil uil-cog"></i>&nbsp; Manage Test</a><br></div>
        </div>
            <a href="feedback.php?status=Feedback"><li class="<?php 
            error_reporting(0);
            if ($_GET['status']=='Feedback') 
            {
                echo 'active';
            }
        ?>">&nbsp;<i class="uil uil-comment-alt-message"></i>&nbsp;&nbsp;&nbsp;<span>Feedback</span></li></a>
        </ul>
    </div>
 </body>
 </html>