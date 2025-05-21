<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>About Us</title>
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
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="user/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <style>
      .carousel-inner {
      position: relative;
      width: 100%;
      z-index: -1;
      overflow: hidden;
    }

    </style>
  </head>

  <body>
    <!-- Navbar Start -->
    <?php
      include('navbar.php');
    ?>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid page-header">
      <div class="container">
        <div
          class="d-flex flex-column justify-content-center"
          style="min-height: 300px"
        >
          <h3 class="display-4 text-white text-uppercase">About</h3>
          <div class="d-inline-flex text-white">
            <p class="m-0 text-uppercase">
              <a class="text-white" href="index.php">Home</a>
            </p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">About</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5" style="background-color:white;">
      <?php 
      
        if ($_SESSION['role']=='user') 
        {
          echo '
           <div class="action" style="position: absolute;">
                  <div class="profile" onclick="menuToggle();" style="position: relative;bottom: 18px;">
                      <img src="img/user.png" alt="">
                  </div>

                  <div class="menu" style="margin-top:-30px;">
                      <h3>
                          User Account
                          <div>
                              Ishita Sharma
                          </div>
                      </h3>
                      <ul>
                          <li>
                              <i class="uil uil-user"></i>
                              <a href="#">My Profile</a>
                          </li>
                          <li>
                              <i class="uil uil-create-dashboard"></i>
                              <a href="dashboard/index.php">My Dashboard</a>
                          </li>
                          <li>
                              <i class="uil uil-signout"></i>
                              <a href="../login/logout.php">Logout</a>
                          </li>
                      </ul>
                  </div>
              </div>';
        }
      ?>
   
<!-- over user -->
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
    <div class="container-fluid py-5" >
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-4 mb-lg-0"
              src="img/about_us.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-7" style="text-align: justify;">
            <div class="text-left mb-4">
              <h5
                class=""
                style="letter-spacing: 3px; color: black;"
              >
                Study Squad
              </h5>
              <h1>Welcome to Study Squad!</h1>
            </div>
            <p>
              Study Squad is a Professional Educational Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of Educational , with a focus on dependability and <a href="#" style="font-weight: bolder;">www.studysquad.com</a> We're working to turn our passion for Educational into a booming online website. We hope you enjoy our Educational as much as we enjoy offering them to you.
              At Study Squad, we are passionate about creating a supportive and empowering learning community for students of college and backgrounds. Our mission is to equip learners with the tools and resources they need to excel in their academic pursuits and reach their full potential.
            </p>
            <!-- <a
              href=""
              class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"
              >Learn More</a
            > -->
            <!-- <a
              href=""
              class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2" style="margin-left: -25px;"
              ><span id="about">Learn More</span></a
            > -->
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->
    <div class="" style="margin-top: -70px;margin-left: 200px;margin-right: 200px;text-align: justify;">
      
    <h5>Who We Are:</h5>
    <p style="margin-bottom:10px;">Study Squad was founded by a group of educators and enthusiasts who firmly believe that education should be accessible, engaging, and enjoyable for everyone. With a combined experience in teaching, curriculum development, and technology, our team is committed to revolutionizing the way students approach learning.</p>


    <h5>What We Do:</h5>
    <p style="margin-bottom:3px;">At Study Squad, we provide a wide range of educational services designed to cater to individual learning styles and preferences. Our platform offers:</p>
    <ol>
      <li>Interactive Learning Resources: We curate a diverse collection of interactive study materials, including video lessons, quizzes, and interactive exercises. Whether you're studying for a crucial exam or just eager to expand your knowledge, our resources will keep you engaged and motivated.</li><br>
      <li>Personalized Study Plans: We understand that every student is unique, which is why we offer personalized study plans tailored to your specific learning goals. Our adaptive learning algorithms analyze your performance and provide you with targeted recommendations to enhance your learning experience.</li><br>
      <li>Expert Tutors and Mentors: Our team of experienced tutors and mentors are here to support you every step of the way. They are ready to answer your questions, clarify doubts, and provide valuable insights to ensure you grasp the subject matter comprehensively.</li><br>
      <li>Collaborative Study Groups: Learning is more enjoyable when done together! Join our collaborative study groups to connect with like-minded individuals, share knowledge, and foster a sense of community that encourages growth and learning.</li><br>
      <li>Skill Development Courses: In addition to academic subjects, we offer skill development courses to help you gain valuable practical skills that go beyond the classroom. These courses cover a wide array of topics, from communication and critical thinking to time management and problem-solving.</li><br>
    </ol>
    <h5>Why Choose Study Squad?</h5>
    <ul>
      <li><span style="color:black; font-weight: bolder;">Comprehensive Learning:</span> Our platform offers a comprehensive approach to learning, addressing various subjects and skills to ensure holistic development.</li>
      <li><span style="color:black; font-weight: bolder;">Flexibility and Convenience:</span> Study at your own pace, on your schedule. Access our resources anytime, anywhere, from any device.</li>
      <li><span style="color:black; font-weight: bolder;">Engaging and Interactive:</span> Say goodbye to boring lectures. Our interactive content keeps you actively involved in the learning process.</li>
      <li><span style="color:black; font-weight: bolder;">Supportive Community:</span> Join a supportive community of learners, tutors, and mentors who are dedicated to your success.</li>
    </ul>
    <h5>How to Register?</h5>
    <ul>
      <li>You can register by filling the information in registration form, Click on steps or 'Prev' and 'Next' buttons to fillup next information.</li>
      <li>You must have to pay for particular course before registration.After that you will receive the successfull payment mail at your registerd e-mail address.</li>
    </ul>
   
    <h5>How to Login?</h5>
    <ul>
      <li>You can only login after confirmation from admin</li>
      <li>You can only login with your e-mail address and password</li>
    </ul>

    <h5>Our Subjects:</h5>
    <ol style="color:black;">
      <li><span style="color:black; font-weight: bolder;">C++:</span> Since C++ courses can be pursued as certifications, these courses help the students to enhance their employability. It is always considered a plus point for a student to have a bachelor’s degree in computer science or masters in computer science.Basic knowledge of computers, Bachelor or Master degree or diploma in the relevant field of C++ or any other computer course or a plus.</li><br>
      <li><span style="color:black; font-weight: bolder;">Java:</span> One can do the certificate course in Java. The students must have some basic knowledge of computers, computer science, and C and C++ languages.Java courses equip the students with the skills required to be software engineers. Javascript courses train you for a career as a javascript developer.</li><br>
      <li><span style="color:black; font-weight: bolder;">C-language:</span> Candidates who love to create their own application or software by coding can learn this course easily and it is very simple to learn and understand. The basic knowledge of programming can be gained only from a C Programming Language. So, students get C language course certification from the popular institute and lead a programmer life in top MNCs, or International companies. Also, there are huge career opportunities for the C certified holder.</li><br>
      <li><span style="color:black; font-weight: bolder;">Asp.net:</span> ASP.NET is an open-source web framework, created by Microsoft, for building modern web apps and services with .NET.
Learn the basics of the ASP.NET User-Interface framework. You'll learn how to build a simple user interface with a layout, components, data access, form fields with validation, and more.</li>
    </ol>

    <p>Join Study Squad today and embark on an exciting journey of knowledge, growth, and achievement. Together, let's unlock your true learning potential!</p>

    </div> 
    <!-- Registration End -->











































    

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
    
    </div> 
    <!-- Testimonial End -->

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
            <div class="col-md-6 mb-5" style="position: relative;">
              <h5
                class="text-primary text-uppercase mb-4"
                style="letter-spacing: 5px;font-size: 25px;color: white;font-weight: bolder;"
              >
                <span style="color: white;">Our courses</span>
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
  </div>

    <div  class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
      style="border-color: rgba(256, 256, 256, 0.1) !important;height: 70px;background-color: #44425a;"
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
    <!-- <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script> -->

    <!-- Template Javascript -->
    <!-- <script src="js/main.js"></script>

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main_new.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7edc906078c07937","version":"2023.7.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script> -->
  </body>
</html>
