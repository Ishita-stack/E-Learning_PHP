<?php
  session_start();
  $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
  $t_title=$_SESSION['t_title'];
  $c_title=$_SESSION['c_title'];
  $name=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Reports</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"><link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<div id="editor"></div>
<br>
<div id='page'>
  <main>
    <!-- <div class='brand-logo'></div> -->
    <h1 class='page-title'><img src="./1.png" height="40px" width="40px" style="margin-bottom: -10px;">&nbsp;Study Squad</h1>
  </main>
  <section>
    <article class='text-body'>A test report summary contains all the details of the Course testing. It shows the progress and achivements of learners through the course</article>
  </section>
  <header class='summary'>
    <nav></nav>
    <div class='labels'>Student name</div>
    <div class='values'><?php echo $name; ?></div>
    <div class='labels'>Level</div>
    <div class='values'><?php echo $t_title; ?></div>
  </header>
  <header class='summary'>
    <nav>
      <div class='labels'>Generated on</div>
      <div class='values'><?php echo date('d/m/y'); ?></div>
      <div class='labels'>Course</div>
      <div class='values'><?php echo $c_title; ?></div>
    </nav>
  </header>
  <section>
    <h3 class='section-title'>Result By Category</h3>
    <!-- <article class='text-body'>Here is the snap shot of the issues by category</article> -->
    <section class='issue-view'>
      <!-- <article>
        <div class='new-issues'>0</div>
        <span>New Issues</span>
      </article> -->
      <article class='issue-categ'>
        <div class='issue-num'>15</div>
        <span class="title">Total Questions</span>
      </article>
      <article class='issue-categ'>
        <div class='issue-num'>10</div>
        <span class="title">Correct Ans</span>
      </article>
      <article class='issue-categ'>
        <div class='issue-num'>84%</div>
        <span class="title">Average</span>
      </article>
    </section>
    <br><br>
    <section class='issue-view'>
      <article class='total'>
      </article>
    </section>
  </section>
  <button id="cmd"><i class="uil uil-download-alt"></i>&nbsp;Download</button>
</div>

<br><br>
<!-- partial -->
  <script src='https://cdn.jsdelivr.net/jspdf/1.2.61/jspdf.min.js'></script>
<script src='https://code.jquery.com/jquery-3.0.0.min.js'></script><script  src="./script.js"></script>

</body>
</html>
