<?php
  $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
  if (isset($_POST['submit'])) 
  {
    $name=$_POST['name'];
    $msg=$_POST['message'];
    $email=$_POST['email'];
    $sub=$_POST['subject'];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Contact</title>

  <style type="text/css">
    .navbar-nav a.active,
    .navbar-nav a:hover
    {
      background-color: #f5f5f536;
      color: #006e72;
      height: 69px;
      padding-left: 50px;
    }  
  </style>
    <link rel = "icon" href = "img/logo3.png" type = "image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/style_new.css">

    <script nonce="b65d6afd-beaf-4a2b-8d9f-941c980c8df7">(function(w,d){!function(bt,bu,bv,bw){bt[bv]=bt[bv]||{};bt[bv].executed=[];bt.zaraz={deferred:[],listeners:[]};bt.zaraz.q=[];bt.zaraz._f=function(bx){return function(){var by=Array.prototype.slice.call(arguments);bt.zaraz.q.push({m:bx,a:by})}};for(const bz of["track","set","debug"])bt.zaraz[bz]=bt.zaraz._f(bz);bt.zaraz.init=()=>{var bA=bu.getElementsByTagName(bw)[0],bB=bu.createElement(bw),bC=bu.getElementsByTagName("title")[0];bC&&(bt[bv].t=bu.getElementsByTagName("title")[0].text);bt[bv].x=Math.random();bt[bv].w=bt.screen.width;bt[bv].h=bt.screen.height;bt[bv].j=bt.innerHeight;bt[bv].e=bt.innerWidth;bt[bv].l=bt.location.href;bt[bv].r=bu.referrer;bt[bv].k=bt.screen.colorDepth;bt[bv].n=bu.characterSet;bt[bv].o=(new Date).getTimezoneOffset();if(bt.dataLayer)for(const bG of Object.entries(Object.entries(dataLayer).reduce(((bH,bI)=>({...bH[1],...bI[1]})),{})))zaraz.set(bG[0],bG[1],{scope:"page"});bt[bv].q=[];for(;bt.zaraz.q.length;){const bJ=bt.zaraz.q.shift();bt[bv].q.push(bJ)}bB.defer=!0;for(const bK of[localStorage,sessionStorage])Object.keys(bK||{}).filter((bM=>bM.startsWith("_zaraz_"))).forEach((bL=>{try{bt[bv]["z_"+bL.slice(7)]=JSON.parse(bK.getItem(bL))}catch{bt[bv]["z_"+bL.slice(7)]=bK.getItem(bL)}}));bB.referrerPolicy="origin";bB.src="../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(bt[bv])));bA.parentNode.insertBefore(bB,bA)};["complete","interactive"].includes(bu.readyState)?zaraz.init():bt.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>

  </head>

  <body>
    <!-- Navbar Start -->
    <div class="stick_nav">
   <div class="container-fluid" style="margin-top: 0px;">
      <div class="row border-top px-xl-5" style="background-color: #006e72;margin-top:-2px;position: sticky;top: 0;">
        <div
          class="col-lg-3 d-none d-lg-block"
          style="background-color: #006e72;margin-top: -2px;"
        >
          <!-- <a
            class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none"
            data-toggle="collapse"
            href="#navbar-vertical"
            style="height: 67px; padding: 0 30px; background: #006e72"
          > -->
            <h5 class="text-primary m-0">
                <!-- <i style="color:#006e72 !important;" class="fa fa-book-open mr-2"></i> -->

              <!-- <span style="color:#006e72 !important;">Subjects</span>  -->
            </h5><!-- 
            <i style="color:#006e72 !important;" class="fa fa-angle-down text-primary"></i> -->
          </a>
          <!-- <nav
            class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
            id="navbar-vertical"
            style="width: calc(100% - 30px); z-index: 9"
          > -->
            <div class="navbar-nav w-100" style="height:60px;position: relative;">
            <span>
            <a href="index.php">
              <img src="img/logo3.png" height="90%" width="20%" style="margin-left: -30px; color: white; margin-top: 5px;">&nbsp;<span style=" color: white;padding-top: 10px;font-size: 30px;position: absolute;"><b>Study Squad</b></span>
            </a>
            </span>
              <!-- <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link"
                  class="itemlist"
                  style="color:#006e72 !important;"
                  data-toggle="dropdown"
                  >Web Design <i class="fa fa-angle-down float-right mt-1"></i
                ></a>
                <div
                  class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0"
                >
                  <a href="" class="dropdown-item" class="itemlist">HTML</a>
                  <a href="" class="dropdown-item" class="itemlist">CSS</a>
                  <a href="" class="dropdown-item" class="itemlist">jQuery</a>
                </div>
              </div> -->
              <!-- <a href="" class="nav-item nav-link" class="itemlist" style="color:#006e72 !important;"
                >C Language</a
              >
              <a href="" class="nav-item nav-link" class="itemlist" style="color:#006e72 !important;">C++</a>
              <a href="" class="nav-item nav-link" class="itemlist" style="color:#006e72 !important;">Java</a>
              <a href="" class="nav-item nav-link" class="itemlist" style="color:#006e72 !important;">Oracle</a> -->
            </div>
          </nav>
        </div>
        <div class="col-lg-9" style="background-color: #006e72;margin-top: -2px;">
          <nav
            class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0"
          >
            <a href="" class="text-decoration-none d-block d-lg-none">
              <!-- <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1> -->

            </a>
            <button
              type="button"
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbarCollapse"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-between"
              id="navbarCollapse"
              style="background-color: #006e72; height: 67px;"
            >

              <div class="navbar-nav py-0" style="margin-left:520px;">
                <a href="index.php?status=Home" class="nav-item nav-link <?php error_reporting(0);
          if ($_GET['status']=='Home') 
          {
            echo 'active';
          }
          elseif ($_GET['status']=='')
          {
            echo 'active';
          }
                 ?>" style="float:left;color: white;padding-left: 15px;padding-right: 15px;">Home</a>
                <a href="course.php?status=Courses" class="nav-item nav-link <?php error_reporting(0);
          if ($_GET['status']=='Courses') 
          {
            echo 'active';
          }
                 ?>" style="float:left; color: white;padding-left: 15px;padding-right: 15px;">Courses</a>
                <a href="about.php?status=About" class="nav-item nav-link <?php 
                  error_reporting(0);
          if ($_GET['status']=='About') 
          {
            echo 'active';
          }
                 ?>" style="float:left;color: white;padding-left: 15px;padding-right: 15px;">About</a>
                <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="blog.php" class="dropdown-item">Blog List</a>
                                    <a href="single.php" class="dropdown-item">Blog Detail</a>
                                </div>
                            </div> -->
                <a href="contact.php?status=Contact" class="nav-item nav-link <?php 
                  error_reporting(0);
          if ($_GET['status']=='Contact') 
          {
            echo 'active';
          }
                 ?>" style="float:left;color: white;padding-left: 15px;padding-right: 15px;">Contact</a>
              </div>
              <!-- <a
                class=""
                style="background-color: white;"
                href="../login/login.php"
                >Login Now</a
              > -->
              <a
                class=""
                href="../login/login.php" style="margin-right: 0px;margin-top: 10px;font-size: 16px;font-weight: normal;margin-bottom: 10px;"
                ><span style="background-color: white;padding: 10px;color: #006e72;border-radius: 7px; padding-left: 24px;padding-right: 24px;">Login Now</span></a
              >
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px">
      <div class="container">
        <div
          class="d-flex flex-column justify-content-center"
          style="min-height: 300px"
        >
          <h3 class="display-4 text-white text-uppercase">Contact</h3>
          <div class="d-inline-flex text-white">
            <p class="m-0 text-uppercase">
              <a class="text-white" href="">Home</a>
            </p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">Contact</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
        <section class="ftco-section">
    <div class="container">
    <div class="row justify-content-center">
    <!-- <div class="col-md-6 text-center mb-5">
    <h2 class="heading-section">Contact Form #01</h2>
    </div> -->
    </div>
    <div class="row justify-content-center">
    <div class="col-lg-10 col-md-12">
    <div class="wrapper">
    <div class="row no-gutters">
    <div class="col-md-7 d-flex align-items-stretch">
    <div class="contact-wrap w-100 p-md-5 p-4">
    <h3 class="mb-4" style="color:#006e72">Get in touch</h3>
    <div id="form-message-warning" class="mb-4"></div>
    <div id="form-message-success" class="mb-4">
    Your message was sent, thank you!
    </div>
    <form method="POST" id="contactForm" name="contactForm">
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <input type="submit" name="submit" value="Send Message" class="btn btn-primary">
    <div class="submitting"></div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    <div class="col-md-5 d-flex align-items-stretch">
    <div class="info-wrap bg-primary w-100 p-lg-5 p-4">
    <h3 class="mb-4 mt-md-4">Contact us</h3>
    <div class="dbox w-100 d-flex align-items-start">
    <div class="icon d-flex align-items-center justify-content-center">
    <span class=""><i class="uil uil-map-marker"></i></span>
    </div>
    <div class="text pl-3">
    <p><span>Address:</span><p style="color:white;"> 123 Street, Gujarat, India</p></p>
    </div>
    </div>
    <div class="dbox w-100 d-flex align-items-center">
    <div class="icon d-flex align-items-center justify-content-center">
    <span class=""><i class="uil uil-phone"></i></span>
    </div>
    <div class="text pl-3">
    <p><span>Phone:</span> <a href="tel://1234567920">+91 8141633872</a></p>
    </div>
    </div>
    <div class="dbox w-100 d-flex align-items-center">
    <div class="icon d-flex align-items-center justify-content-center">
    <span class=""><i class="uil uil-telegram-alt"></i></span>
    </div>
    <div class="text pl-3">
    <p><span>Email:</span> <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection#046d6a626b447d6b7176776d70612a676b69"><span class="__cf_email__" data-cfemail="61080f070e21180e1413120815044f020e0c">issharma479@gmail.com</span></a></p>
    </div>
    </div>
    <div class="dbox w-100 d-flex align-items-center">
    <div class="icon d-flex align-items-center justify-content-center">
    <span class=""><i class="uil uil-globe"></i></span>
    </div>
    <div class="text pl-3">
    <p><span>Website:</span> <a href="#">www.studysquad.com</a></p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5"
      style="height: 395px;background-color:#44425a;"
    >
      <div class="row pt-5" style="background-color:#44425a;">
        <div class="col-lg-7 col-md-12">
          <div class="row">
            <div class="col-md-6 mb-5">
              <h5
                class="text-primary text-uppercase mb-4"
                style="letter-spacing: 5px;font-size: 25px;color: white;font-weight: bolder;"
              >
                <span style="color: white;">Get In Touch</span>
              </h5>
              <p>
                <i class="fa fa-map-marker-alt mr-2"></i>123 Street, Gujarat,
                India
              </p>
              <p><i class="fa fa-phone-alt mr-2"></i>+91 8141633872</p>
              <p><i class="fa fa-envelope mr-2"></i>studysquad@example.com</p>
              <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light btn-square mr-2" href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-square mr-2" href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-square mr-2" href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a class="btn btn-outline-light btn-square" href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
            <div class="col-md-6 mb-5">
              <h5
                class="text-primary text-uppercase mb-4"
                style="letter-spacing: 5px;font-size: 25px;color: white;font-weight: bolder;"
              >
                <span style="color: white;">Get In Touch</span>
              </h5>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Web Design</a
                >
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Apps Design</a
                >
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Marketing</a
                >
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Research</a
                >
                <a class="text-white" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>SEO</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 mb-5" style="margin-top:-75px">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.0220970500886!2d71.82448907501333!3d21.545991269813342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be2069705cba9ad%3A0xa5dfdcac2147066c!2sSmt.%20Kamlaben%20Shantilal%20Kapashi%20B.C.A.%20College!5e0!3m2!1sen!2sin!4v1690658411732!5m2!1sen!2sin" width="600" height="450" style="border:0;height: 350px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    <div
      class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
      style="border-color: rgba(256, 256, 256, 0.1) !important;height: 70px;"
    >
      <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
          <!-- <p class="m-0 text-white">
            &copy; <a href="#">Domain Name</a>. All Rights Reserved. --> Designed by
            <a href="#" style="color:white;">Ishita Sharma</a>
          </p>
        </div>
        <!-- <div class="col-lg-6 text-center text-md-right">
          <ul class="nav d-inline-flex">
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Privacy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="terms_conditions.php">Terms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Help</a>
            </li>
          </ul>
        </div> -->
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a> -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main_new.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7edc906078c07937","version":"2023.7.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
  </body>
</html>
