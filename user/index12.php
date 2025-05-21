<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Study Squad</title>
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
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <style type="text/css">
      
      
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

    <!-- Carousel Start -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Dropdown Menu Using Html CSS & Vanilla Javascript</title>
    <link rel="stylesheet" href="user/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
</head> 

    <div class="action" style="position: absolute;">
        <div class="profile" onclick="menuToggle();">
            <img src="user/user.png" alt="">
        </div>

        <div class="menu">
            <h3>
                User Account
                <div>
                    Operational Team
                </div>
            </h3>
            <ul>
                <li>
                    <span class="material-icons icons-size">person</span>
                    <a href="#">My Profile</a>
                </li>
                <li>
                    <span class="material-icons icons-size">mode</span>
                    <a href="#">Edit Account</a>
                </li>
                <li>
                    <span class="material-icons icons-size">insert_comment</span>
                    <a href="#">Comments</a>
                </li>
                <li>
                    <span class="material-icons icons-size">monetization_on</span>
                    <a href="#">Budget</a>
                </li>
                <li>
                    <span class="material-icons icons-size">account_balance</span>
                    <a href="#">Finance</a>
                </li>
                <li>
                    <span class="material-icons icons-size">account_balance_wallet</span>
                    <a href="#">Wallet</a>
                </li>
            </ul>
        </div>
    </div>
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>

    <div class="container-fluid p-0 pb-5 mb-5">
      <div
        id="header-carousel"
        class="carousel slide carousel-fade"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#header-carousel"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#header-carousel" data-slide-to="1"></li>
          <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="min-height: 300px">
            <img
              class="position-relative w-100"
              src="img/carousel-1.jpg"
              style="min-height: 300px; object-fit: cover"
            />
            <div
              class="carousel-caption d-flex align-items-center justify-content-center"
            >
              <div class="p-5" style="width: 100%; max-width: 900px">
                <h5 class="text-white text-uppercase mb-md-3">
                  Best Online Courses
                </h5>
                <h1 class="display-3 text-white mb-md-4">
                  The Future Begins Here!
                </h1>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="min-height: 300px">
            <img
              class="position-relative w-100"
              src="img/carousel-2.jpg"
              style="min-height: 300px; object-fit: cover"
            />
            <div
              class="carousel-caption d-flex align-items-center justify-content-center"
            >
              <div class="p-5" style="width: 100%; max-width: 900px">
                <h5 class="text-white text-uppercase mb-md-3">
                  Best Online Courses
                </h5>
                <h1 class="display-3 text-white mb-md-4">
                  Best Online Learning Platform
                </h1>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="min-height: 300px">
            <img
              class="position-relative w-100"
              src="img/carousel-3.jpg"
              style="min-height: 300px; object-fit: cover"
            />
            <div
              class="carousel-caption d-flex align-items-center justify-content-center"
            >
              <div class="p-5" style="width: 100%; max-width: 900px">
                <h5 class="text-white text-uppercase mb-md-3">
                  Best Online Courses
                </h5>
                <h1 class="display-3 text-white mb-md-4">
                  New Way To Learn From Home
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-4 mb-lg-0"
              src="img/about_us.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <div class="text-left mb-4">
              <h5
                class=""
                style="letter-spacing: 3px"
              >
                <text id="new_text">Study Squad</text>
              </h5>
              <h1>The Future Begins Here!</h1>
            </div>
            <p>
              Study Squad is a Professional Educational Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of Educational , with a focus on dependability and <a href="#" style="font-weight: bolder;">www.studysquad.com</a> We're working to turn our passion for Educational into a booming online website. We hope you enjoy our Educational as much as we enjoy offering them to you.
            </p><br>
            <!-- <a
              href=""
              class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"
              >Learn More</a
            > -->
            <!-- <a
              href="about.php" style="margin-bottom: 10px;"
              ><span id="about">Learn More</span></a
            > -->
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Category Start -->
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
          <h5
            class="text-primary text-uppercase mb-3"
            style="letter-spacing: 5px"
          >
            <text id="new_text">Subjects</text>
          </h5>
          <h1>Our Top Subjects</h1>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/phplogo3.png" height="50%" width="65%"
              style="margin-left: 50px;padding: 30px;" />
              <a class="cat-overlay text-white text-decoration-none" style="background: #006e723d;" href="">
                <h4 class="text-white font-weight-medium"></h4>
                <span></span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/cpplogo.png" height="50%" width="65%"
              style="margin-left: 50px;padding: 30px;" />
              <a class="cat-overlay text-white text-decoration-none" style="background: #006e723d;" href="">
                <h4 class="text-white font-weight-medium"></h4>
                <span></span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/htmllogo.png" height="50%" width="65%"
              style="margin-left: 50px;padding: 30px;"/>
              <a class="cat-overlay text-white text-decoration-none" style="background: #006e723d;" href="">
                <h4 class="text-white font-weight-medium"></h4>
                <span></span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/jslogo.png" height="50%" width="65%"
              style="margin-left: 50px;padding: 30px;"/>
              <a class="cat-overlay text-white text-decoration-none" style="background: #006e723d;" href="">
                <h4 class="text-white font-weight-medium"></h4>
                <span></span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/cpplogo2.png" height="50%" width="65%"
              style="margin-left: 50px;padding: 30px;"/>
              <a class="cat-overlay text-white text-decoration-none" style="background: #006e723d;" href="">
                <h4 class="text-white font-weight-medium"></h4>
                <span></span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/javalogo.png" height="50%" width="65%"
              style="margin-left: 50px;padding: 5px;"/>
              <a class="cat-overlay text-white text-decoration-none" style="background: #006e723d;" href="">
                <h4 class="text-white font-weight-medium"></h4>
                <span></span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/pylogo.png" height="50%" width="65%"
              style="margin-left: 50px;padding: 35px;"/>
              <a class="cat-overlay text-white text-decoration-none" style="background: #006e723d;" href="">
                <h4 class="text-white font-weight-medium"></h4>
                <span></span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/reactlogo.png" height="50%" width="65%"
              style="margin-left: 50px;padding: 35px;"/>
              <a class="cat-overlay text-white text-decoration-none" style="background: #006e723d;" href="">
                <h4 class="text-white font-weight-medium"></h4>
                <span></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Category Start -->

    <!-- Courses Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="text-center mb-5">
          <h5
            class="text-primary text-uppercase mb-3"
            style="letter-spacing: 5px"
          >
            <text id="new_text">Courses</text>
          </h5>
          <h1>Our Popular Courses</h1>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
               <img class="img-fluid" src="img/java_thumb.jpg" height="100px" />
              <div class="bg-secondary p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href="../login/login.php"
                  >The Complete Java Course for beginners: From Zero to Expert!<br></a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$99</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
              <img class="img-fluid" src="img/css_thumb.jpg" alt="" />
              <div class="bg-secondary p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href="../login/login.php"
                  >The complete CSS course for beginners: From Zero to Expert!</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$99</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
              <img class="img-fluid" src="img/js_thumb.jpg"/>
              <div class="bg-secondary p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href="../login/login.php"
                  >The complete Javascript course for beginners: From Zero to Expert!</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$99</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
              <img class="img-fluid" src="img/cpp_thumb.jpg" alt="" />
              <div class="bg-secondary p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href="../login/login.php"
                  >Web design & development courses for beginner</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$99</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
              <img class="img-fluid" src="img/android_thumb.jpg" alt="" />
              <div class="bg-secondary p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href="../login/login.php"
                  >Web design & development courses for beginner</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$99</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
              <img class="img-fluid" src="img/react_thumb.jpg" alt="" />
              <div class="bg-secondary p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href="../login/login.php"
                  >Web design & development courses for beginner</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$99</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Courses End -->

    <!-- Registration Start -->
    <!-- <div class="container-fluid bg-registration py-5" style="margin: 90px 0">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="mb-4">
              <h5
                class="text-primary text-uppercase mb-3"
                style="letter-spacing: 5px"
              >
                Need Any Courses
              </h5>
              <h1 class="text-white">30% Off For New Students</h1>
            </div>
            <p class="text-white">
              Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
              dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
              Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
              dolor
            </p>
            <ul class="list-inline text-white m-0">
              <li class="py-2">
                <i class="fa fa-check text-primary mr-3"></i>Labore eos amet
                dolor amet diam
              </li>
              <li class="py-2">
                <i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor
                amet ipsum
              </li>
              <li class="py-2">
                <i class="fa fa-check text-primary mr-3"></i>Diam dolor diam
                elitripsum vero.
              </li>
            </ul>
          </div>
          <div class="col-lg-5">
            <div class="card border-0">
              <div class="card-header bg-light text-center p-4">
                <h1 class="m-0">Sign Up Now</h1>
              </div>
              <div class="card-body rounded-bottom bg-primary p-5">
                <form>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control border-0 p-4"
                      placeholder="Your name"
                      required="required"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      class="form-control border-0 p-4"
                      placeholder="Your email"
                      required="required"
                    />
                  </div>
                  <div class="form-group">
                    <select
                      class="custom-select border-0 px-4"
                      style="height: 47px"
                    >
                      <option selected>Select a course</option>
                      <option value="1">Course 1</option>
                      <option value="2">Course 1</option>
                      <option value="3">Course 1</option>
                    </select>
                  </div>
                  <div>
                    <button
                      class="btn btn-dark btn-block border-0 py-3"
                      type="submit"
                    >
                      Sign Up Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Registration End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
          <h5
            class="text-primary text-uppercase mb-3"
            style="letter-spacing: 5px"
          >
            <text id="new_text"> Teachers</text>
          </h5>
          <h1>Meet Our Teachers</h1>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 text-center team mb-4">
            <div class="team-item rounded overflow-hidden mb-2">
              <div class="team-img position-relative">
                <img class="img-fluid" src="img/team-1.jpg" alt="" />
                <div class="team-social">
                  <a class="btn btn-outline-light btn-square mx-1" href="https://www.twitter.com"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="https://www.facebook.com"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="https://www.linkedin.com"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <div class="bg-secondary p-4">
                <h5>Jhon Doe</h5>
                <p class="m-0">Web Designer</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-4">
            <div class="team-item rounded overflow-hidden mb-2">
              <div class="team-img position-relative">
                <img class="img-fluid" src="img/team-2.jpg" alt="" />
                <div class="team-social">
                  <a class="btn btn-outline-light btn-square mx-1" href="https://www.twitter.com"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="https://www.facebook.com"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="https://www.linkedin.com"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <div class="bg-secondary p-4">
                <h5>Jhon Doe</h5>
                <p class="m-0">Web Designer</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-4">
            <div class="team-item rounded overflow-hidden mb-2">
              <div class="team-img position-relative">
                <img class="img-fluid" src="img/team-3.jpg" alt="" />
                <div class="team-social">
                  <a class="btn btn-outline-light btn-square mx-1" href="https://www.twitter.com"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="https://www.facebook.com"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="https://www.linkedin.com"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <div class="bg-secondary p-4">
                <h5>Jhon Doe</h5>
                <p class="m-0">Web Designer</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-4">
            <div class="team-item rounded overflow-hidden mb-2">
              <div class="team-img position-relative">
                <img class="img-fluid" src="img/team-4.jpg" alt="" />
                <div class="team-social">
                  <a class="btn btn-outline-light btn-square mx-1" href="https://www.twitter.com"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="https://www.facebook.com"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="https://www.linkedin.com"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <div class="bg-secondary p-4">
                <h5>Jhon Doe</h5>
                <p class="m-0">Web Designer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="text-center mb-5">
          <h5
            class="text-primary text-uppercase mb-3"
            style="letter-spacing: 5px"
          >
            <text id="new_text">Feedback</text>
          </h5>
          <h1>What Say Our Students</h1>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="owl-carousel testimonial-carousel">
              <div class="text-center">
                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                <h4 class="font-weight-normal mb-4">
                  Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum
                  elitr dolore et eos labore, stet justo sed est sed. Diam sed
                  sed dolor stet amet eirmod eos labore diam
                </h4>
                <img
                  class="img-fluid mx-auto mb-3"
                  src="img/testimonial-1.jpg"
                  alt=""
                />
                <h5 class="m-0">Client Name</h5>
                <span>Profession</span>
              </div>
              <div class="text-center">
                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                <h4 class="font-weight-normal mb-4">
                  Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum
                  elitr dolore et eos labore, stet justo sed est sed. Diam sed
                  sed dolor stet amet eirmod eos labore diam
                </h4>
                <img
                  class="img-fluid mx-auto mb-3"
                  src="img/testimonial-2.jpg"
                  alt=""
                />
                <h5 class="m-0">Client Name</h5>
                <span>Profession</span>
              </div>
              <div class="text-center">
                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                <h4 class="font-weight-normal mb-4">
                  Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum
                  elitr dolore et eos labore, stet justo sed est sed. Diam sed
                  sed dolor stet amet eirmod eos labore diam
                </h4>
                <img
                  class="img-fluid mx-auto mb-3"
                  src="img/testimonial-3.jpg"
                  alt=""
                />
                <h5 class="m-0">Client Name</h5>
                <span>Profession</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

    <!-- Free course Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="text-center mb-5">
          <h5
            class="text-primary text-uppercase mb-3"
            style="letter-spacing: 5px"
          >
            <text id="new_text">Videos</text>
          </h5>
          <h1>Our Free Videos</h1>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
               <!-- <img class="img-fluid" src="img/java_thumb.jpg" height="100px" /> -->
               <iframe src="abc.mp4" height="200px"width="350px"></iframe>
              <div class="bg-secondary p-4" style="margin-top: -9px;">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href="../login/login.php"
                  >The Complete Java Course for beginners: From Zero to Expert!<br></a
                >
                <!-- <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$99</h5>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
              <iframe src="v1.mp4" height="200px"width="350px"></iframe>
              <div class="bg-secondary p-4" style="margin-top: -9px;">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href="../login/login.php"
                  >The complete CSS course for beginners: From Zero to Expert!</a
                >
                <!-- <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$99</h5>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
              <iframe src="pqr.mp4" height="200px"width="350px"></iframe>
              <div class="bg-secondary p-4" style="margin-top: -9px;">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href="../login/login.php"
                  >The complete Javascript course for beginners: From Zero to Expert!</a
                >
                <!-- <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$99</h5>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Free course end -->

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
    <div
      class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
      style="border-color: rgba(256, 256, 256, 0.1) !important;height: 70px;"
    >
      <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
          <!-- <p class="m-0 text-white">
            &copy; <a href="#">Domain Name</a>. All Rights Reserved. --> Designed by
            <a href="" style="color:white;">Ishita Sharma</a>
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

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
  </body>
</html>
