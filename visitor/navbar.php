<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	.navbar-nav a.active,
	.navbar-nav a:hover
	{
		
		background-color: #f5f5f536;
		color: #006e72;
	}
  /*.stick_nav
  {
    position: relative;
    position: sticky;
    top: 0;
    margin-top: -2px;
  }*/
</style>
<body>
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
              <img src="img/logo3.png" height="100%" width="20%" style="margin-left: -30px; color: white; margin-top: 5px;">&nbsp;<span style=" color: white;padding-top: 10px;font-size: 30px;top:2px;position: absolute;"><b>Study Squad</b></span>
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
              style="background-color: #006e72"
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
                 ?>" style="float:left;">Home</a>
                <a href="course.php?status=Courses" class="nav-item nav-link <?php error_reporting(0);
					if ($_GET['status']=='Courses') 
					{
						echo 'active';
					}
                 ?>" style="float:left;">Courses</a>
                <a href="about.php?status=About" class="nav-item nav-link <?php 
                	error_reporting(0);
					if ($_GET['status']=='About') 
					{
						echo 'active';
					}
                 ?>" style="float:left;">About</a>
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
                 ?>" style="float:left;">Contact</a>
              </div>
              <a
                class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"
                href="../login/login.php"
                >Login Now</a
              >
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</body>
</html>