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
     
</style>
<body>
  <div class="stick_nav">
	 <div class="container-fluid" style="margin-top: 0px;">
      <div class="row border-top px-xl-5" style="background-color: #006e72;margin-top:-2px;position: sticky;top: 0;">
        <div
          class="col-lg-3 d-none d-lg-block"
          style="background-color: #006e72;margin-top: -2px;"
        >
            <h5 class="text-primary m-0">
            </h5>
          </a>
          
            <div class="navbar-nav w-100" style="height:60px;position: relative;">
            <span onclick="gotott('index.php')" style="cursor: pointer;"> 
              <img src="img/logo3.png" height="100%" width="20%" style="margin-left: -30px; color: white; margin-top: 5px;">&nbsp;<span style=" color: white;padding-top: 10px;font-size: 30px;top:2px;position: absolute;"><b>Study Squad</b></span>
            </span>
            <script type="text/javascript">
              function gotott(url)
              {
                window.location.href=url;
              }
            </script>
              
            </div>
          </nav>
        </div>
        <div class="col-lg-9" style="background-color: #006e72;margin-top: -2px;">
          <nav
            class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0"
          >
            <a href="" class="text-decoration-none d-block d-lg-none">
              

            </a>
            
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
                
                <a href="contact.php?status=Contact" class="nav-item nav-link <?php 
                	error_reporting(0);
					if ($_GET['status']=='Contact') 
					{
						echo 'active';
					}
                 ?>" style="float:left;">Contact</a>
                <?php 
                session_start();
                 if ($_SESSION['role']!='user') 
                 {
                    echo '<span onclick="goto()"
                    class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" 
                    style="width:135px;margin-top:13px;color:#006e72;text-align:center;margin-right:-165px;padding-left:20px;padding-right:20px;cursor: pointer;"
                    id="loginbtn"
                    >Login Now</span>';

                    
                 }
                ?> 
                
                 <script type="text/javascript">
                            function goto()
                            {
                             window.location.href='../login/login.php';
                            }
                </script>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</body>
</html>