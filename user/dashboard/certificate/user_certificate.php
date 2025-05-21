<?php
  session_start();
  $con=mysqli_connect("localhost","root","","online_education")or die('connection error');
  $id=$_GET['id'];
  $name=$_SESSION['name'];
  
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Certificate</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="certificate.css">
</head>
<body>
<!-- partial:index.partial.html -->
<body>
  &nbsp;<a href="certificate/user_certificate.php" onclick="Download();">Download</a>
  <div class="container pm-certificate-container" style="margin-top: 40px;">

    <div class="outer-border"></div>
    <div class="inner-border"></div>
    <div class="pm-certificate-border col-xs-12">
    <?php
      $sql="SELECT * FROM `tbl_payment_info` WHERE p_id='$id';";
      $qry=mysqli_query($con,$sql);
      while ($row=mysqli_fetch_assoc($qry)) {
      
      echo '<div class="row pm-certificate-header">
        <div class="pm-certificate-title cursive col-xs-12 text-center">
          <img src="1.png" height="50px" width="50px" style="margin-top:-20px;"><h3 style="
font-weight: bolder;font-family:sans-serif;
margin-top: 0px;color: #006e72;font-size: 30px;">Study Squad</h3>
          <h1 style="font-family: Gabriola; font-weight:bolder; font-size:50px;margin-top: 35px;color: #6d4949;">'.$row['s_sub'].' Course Certificate of Completion</h1>
        </div>
      </div>

      <div class="row pm-certificate-body">
        
        <div class="pm-certificate-block">
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>

                <div class="pm-certificate-name underline margin-0 col-xs-8 text-center" style="margin-top:-35px;border: none;">
                  <span class="pm-credits-text block bold sans" style="margin-top:-5px;font-size: 18px;color: gray;font-family: Bell MT;">This Certificate Proudly Presented to</span><br>
                  <span class="pm-name-text bold">'.$row['s_name'].'</span>
                </div>
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
              </div>
            </div>          

            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                <div class="pm-earned col-xs-8 text-center">
                  <span class="pm-credits-text block bold sans" style="margin-top:-5px;font-size: 18px;color: gray;font-family: Bell MT;">For Successfully Completed The '.$row['s_sub'].' Course</span>
                  <!-- <div style="border-bottom: 2px solid black;margin-top: 40px;"></div> -->
                  <br><br>
                  <span class="pm-credits-text block bold sans"><img src="rank.png" height="80px" width="80px"></span>
                </div>
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                <div class="col-xs-12"></div>
              </div>
            </div>';
          }
          ?>
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                <div class="pm-course-title col-xs-8 text-center">

                <span class="pm-earned-text block cursive"></span>
                </div>
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                <!-- <div class="pm-course-title underline col-xs-8 text-center">
                  <span class="pm-credits-text block bold sans"></span>
                </div> -->
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
              </div>
            </div>
        </div>       
        
        <div class="col-xs-12">
          <div class="row">
            <!-- <div class="pm-certificate-footer">
                <div class="col-xs-4 pm-certified col-xs-4 text-center">
                  <span class="pm-credits-text block sans">Buffalo City School District</span>
                  <span class="pm-empty-space block underline"></span>
                  <span class="bold block">Crystal Benton Instructional Specialist II, Staff Development</span>
                </div>
                <div class="col-xs-4">
                   LEAVE EMPTY 
                </div>
                <div class="col-xs-4 pm-certified col-xs-4 text-center">
                  <span class="pm-credits-text block sans">Date Completed</span>
                  <span class="pm-empty-space block underline"></span>
                  <span class="bold block">DOB: </span>
                  <span class="bold block">Social Security # (last 4 digits)</span>
                </div>
            </div> -->
          </div>
        </div>

      </div>

    </div>
  </div>
</body>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>
</html>
<script type="text/javascript">
  function Download()
  {
    window.print();
  }
</script>
