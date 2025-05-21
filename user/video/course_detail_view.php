<?php
error_reporting(0);
session_start();
$con=mysqli_connect("localhost","root","","online_education")or die('connection error');
$cid=$_GET['id'];
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$id=$_SESSION['id'];
if ($_GET['id']=="") {
	// code...
$cid=$_SESSION['id_video'];

}else{

$_SESSION['id_video']=$cid;

}
$sqlnew="SELECT * FROM `tbl_course` WHERE `c_id`=$cid;";
$qrynew=mysqli_query($con,$sqlnew);
$rownew=mysqli_fetch_assoc($qrynew);
$course=$rownew['c_title'];
$id=$_SESSION['id'];
if(isset($_POST['submit']))
{	
	$cmsg=$_POST['comment'];
	$sql="SELECT * FROM `tbl_reg` WHERE s_id=$id;";
	$qry=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($qry);
	$pic=$row['s_photo'];
	$name=$row['s_name'];
	$date=date("Y/m/d");
	$sql1="INSERT INTO `tbl_comment` (`stud_name`, `comment`, `photo`) VALUES ('$name', '$cmsg', '$pic');";
	$qry1=mysqli_query($con,$sql1);
	if ($qry1) 
	{
		echo '<script>window.location="course_detail_view.php";</script>';
	}
	else
	{
		echo "<script>alert('UnSuccessfull.....');</script>";
	}
}
$results_per_page = 5;  
$query = "SELECT * FROM `tbl_comment`;";  
$result = mysqli_query($con, $query);  
$number_of_result = mysqli_num_rows($result);  
$number_of_page = ceil ($number_of_result / $results_per_page);  
if (!isset ($_GET['page']) ) {  
  $page = 1;  
} 
else {  
  $page = $_GET['page'];  
} 
$page_first_result = ($page-1) * $results_per_page;
$query = "SELECT * FROM `tbl_comment` LIMIT " . $page_first_result . ',' . $results_per_page;  
$run = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from gambolthemes.net/html-items/cursus_main_demo/course_detail_view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jul 2023 03:23:48 GMT -->
<head>
		<meta charset="utf-8">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Study Squad</title>
    <link rel = "icon" href = "img/logo3.png" type = "image/x-icon">
		<!-- Favicon Icon -->

		<link rel="icon" type="image/png" href="images/fav.png">
		
		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/vertical-responsive-menu.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/night-mode.css" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">	
		<!-- new css file -->


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
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/footer/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/footer/css/line.css"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="footer/css/style.css" rel="stylesheet" />

	</head> 

<body>
	<!-- Video Model Start -->
	<div class="modal vd_mdl fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body">
					<iframe  src="" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- Video Model End -->
	<!-- Header Start -->
	<header class="header clearfix">
		<button type="button" id="toggleMenu" class="toggle_menu">
		  <i class='uil uil-bars'></i>
		</button>
		<!-- <button id="collapse_menu" class="collapse_menu">
			<i class="uil uil-bars collapse_menu--icon "></i>
			<span class="collapse_menu--label"></span>
		</button> -->
		<div class="main_logo" id="logo" style="width: 300px;position: relative;">
			<a href="../index.php"><img src="images/logo3.png"  style="height: 55px;width: 55px;" alt="">&nbsp<span	style="font-size: 30px;color: white;font-weight: bolder;position: absolute;top:5px;">Study Squad</span></a>
			<!-- <a href="index.html"><img class="logo-inverse" src="images/ct_logo.svg" alt=""></a> -->
		</div>
		
		<div class="search120" style="margin-left:90px;">
			<div class="ui search">
			  <div class="ui left icon input swdh10" style="width: 700PX;">
				<input class="prompt srch10" type="text" placeholder="Search for Tuts Videos, Tutors, Tests and more.." >
				<i class='uil uil-search-alt icon icon1'></i>
			  </div>
			</div>
		</div>
		<div class="header_right">
			<ul>
			<?php
				$sqlnew="SELECT * FROM `tbl_reg` WHERE s_email='$email' AND s_id=$id;";
				$qrynew=mysqli_query($con,$sqlnew);
				$rownew=mysqli_fetch_assoc($qrynew);
				echo '<li class="ui dropdown" style="margin-left:-50px">
					<a href="#" class="opts_account" title="Account">
						<img src="../../login/form/'.$rownew['s_photo'].'" alt="">
					</a>
					<div class="menu dropdown_account">
						<div class="channel_my">
							<div class="profile_link">
								<img src="../../login/form/'.$rownew['s_photo'].'" alt="">
								<div class="pd_content">
									<div class="rhte85">
										<h6><b>'.$name.'</b></h6>
										<div class="mef78" title="Verify">
											<i class="uil uil-check-circle"></i>
										</div>
									</div>
									<span>'.$email.'</span>
								</div>							
							</div>
						</div>
						<a href="../dashboard/user_profile.php" class="item channel_item">My Profile</a>		
						<a href="../dashboard/index.php" class="item channel_item">My Dashboard</a>
						<a href="../../login/logout.php" class="item channel_item">Log Out</a>
					</div>
				</li>';
			?>
			</ul>
		</div>
	</header>
	<!-- Header End -->
	<!-- Left Sidebar Start -->
	<nav class="vertical_nav vertical_nav__minify">
		<div class="left_section menu_left" id="js-menu" >
			<div class="left_section">
				<ul>
					<li class="menu--item">
						<a href="index.html" class="menu--link active" title="Home">
							<i class='uil uil-home-alt menu--icon'></i>
							<span class="menu--label">Home</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="live_streams.html" class="menu--link" title="Live Streams">
							<i class='uil uil-kayak menu--icon'></i>
							<span class="menu--label">Live Streams</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="explore.html" class="menu--link" title="Explore">
							<i class='uil uil-search menu--icon'></i>
							<span class="menu--label">Explore</span>
						</a>
					</li>
					<li class="menu--item menu--item__has_sub_menu">
						<label class="menu--link" title="Categories">
							<i class='uil uil-layers menu--icon'></i>
							<span class="menu--label">Categories</span>
						</label>
						<ul class="sub_menu">
							<li class="sub_menu--item">
								<a href="#" class="sub_menu--link">Development</a>
							</li>
							<li class="sub_menu--item">
								<a href="#" class="sub_menu--link">Business</a>
							</li>
							<li class="sub_menu--item">
								<a href="#" class="sub_menu--link">Finance & Accounting</a>
							</li>
							<li class="sub_menu--item">
								<a href="#.html" class="sub_menu--link">IT & Software</a>
							</li>
							<li class="sub_menu--item">
								<a href="#" class="sub_menu--link">Office Productivity</a>
							</li>
							<li class="sub_menu--item">
								<a href="#" class="sub_menu--link">Personal Development</a>
							</li>
							<li class="sub_menu--item">
								<a href="#" class="sub_menu--link">Design</a>
							</li>
							<li class="sub_menu--item">
								<a href="#" class="sub_menu--link">Marketing</a>
							</li>
							<li class="sub_menu--item">
								<a href="#" class="sub_menu--link">Lifestyle</a>
							</li>
							<li class="sub_menu--item">
								<a href="#" class="sub_menu--link">Photography</a>
							</li>
							<li class="sub_menu--item">
								<a href="#" class="sub_menu--link">Health & Fitness</a>
							</li>
							<li class="sub_menu--item">
								<a href="#" class="sub_menu--link">Music</a>
							</li>
							<li class="sub_menu--item">
								<a href="#" class="sub_menu--link">Teaching & Academics</a>
							</li>
						</ul>
					</li>
					<li class="menu--item  menu--item__has_sub_menu">
						<label class="menu--link" title="Tests">
						  <i class='uil uil-clipboard-alt menu--icon'></i>
						  <span class="menu--label">Tests</span>
						</label>
						<ul class="sub_menu">
							<li class="sub_menu--item">
								<a href="certification_center.html" class="sub_menu--link">Certification Center</a>
							</li>
							<li class="sub_menu--item">
								<a href="certification_start_form.html" class="sub_menu--link">Certification Fill Form</a>
							</li>
							<li class="sub_menu--item">
								<a href="certification_test_view.html" class="sub_menu--link">Test View</a>
							</li>
							<li class="sub_menu--item">
								<a href="certification_test__result.html" class="sub_menu--link">Test Result</a>
							</li>
							<li class="sub_menu--item">
								<a href="http://www.gambolthemes.net/html-items/edututs+/Instructor_Dashboard/my_certificates.html" class="sub_menu--link">My Certification</a>
							</li>
						</ul>
					</li>
					<li class="menu--item">
						<a href="saved_courses.html" class="menu--link" title="Saved Courses">
						  <i class="uil uil-heart-alt menu--icon"></i>
						  <span class="menu--label">Saved Courses</span>
						</a>
					</li>
					<li class="menu--item  menu--item__has_sub_menu">
						<label class="menu--link" title="Pages">
						  <i class='uil uil-file menu--icon'></i>
						  <span class="menu--label">Pages</span>
						</label>
						<ul class="sub_menu">
							<li class="sub_menu--item">
								<a href="about_us.html" class="sub_menu--link">About</a>
							</li>
							<li class="sub_menu--item">
								<a href="sign_in.html" class="sub_menu--link">Sign In</a>
							</li>
							<li class="sub_menu--item">
								<a href="sign_up.html" class="sub_menu--link">Sign Up</a>
							</li>
							<li class="sub_menu--item">
								<a href="sign_up_steps.html" class="sub_menu--link">Sign Up Steps</a>
							</li>
							<li class="sub_menu--item">
								<a href="membership.html" class="sub_menu--link">Paid Membership</a>
							</li>
							<li class="sub_menu--item">
								<a href="course_detail_view.html" class="sub_menu--link">Course Detail View</a>
							</li>
							<li class="sub_menu--item">
								<a href="checkout_membership.html" class="sub_menu--link">Checkout</a>
							</li>
							<li class="sub_menu--item">
								<a href="invoice.html" class="sub_menu--link">Invoice</a>
							</li>
							<li class="sub_menu--item">
								<a href="career.html" class="sub_menu--link">Career</a>
							</li>
							<li class="sub_menu--item">
								<a href="apply_job.html" class="sub_menu--link">Job Apply</a>
							</li>
							<li class="sub_menu--item">
								<a href="our_blog.html" class="sub_menu--link">Our Blog</a>
							</li>
							<li class="sub_menu--item">
								<a href="blog_single_view.html" class="sub_menu--link">Blog Detail View</a>
							</li>
							<li class="sub_menu--item">
								<a href="company_details.html" class="sub_menu--link">Company Details</a>
							</li>
							<li class="sub_menu--item">
								<a href="press.html" class="sub_menu--link">Press</a>
							</li>
							<li class="sub_menu--item">
								<a href="live_output.html" class="sub_menu--link">Live Stream View</a>
							</li>
							<li class="sub_menu--item">
								<a href="add_streaming.html" class="sub_menu--link">Add live Stream</a>
							</li>
							<li class="sub_menu--item">
								<a href="search_result.html" class="sub_menu--link">Search Result</a>
							</li>
							<li class="sub_menu--item">
								<a href="thank_you.html" class="sub_menu--link">Thank You</a>
							</li>
							<li class="sub_menu--item">
								<a href="coming_soon.html" class="sub_menu--link">Coming Soon</a>
							</li>
							<li class="sub_menu--item">
								<a href="error_404.html" class="sub_menu--link">Error 404</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="left_section">
				<h6 class="left_title">SUBSCRIPTIONS</h6>
				<ul>
					<li class="menu--item">
						<a href="instructor_profile_view.html" class="menu--link user_img">
							<img src="images/left-imgs/img-1.jpg" alt="">
							Rock Smith
							<div class="alrt_dot"></div>
						</a>
					</li>
					<li class="menu--item">
						<a href="instructor_profile_view.html" class="menu--link user_img">
							<img src="images/left-imgs/img-2.jpg" alt="">
							Jassica William
						</a>
						<div class="alrt_dot"></div>
					</li>
					<li class="menu--item">
						<a href="all_instructor.html" class="menu--link" title="Browse Instructors">
						  <i class='uil uil-plus-circle menu--icon'></i>
						  <span class="menu--label">Browse Instructors</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="left_section pt-2">
				<ul>
					<li class="menu--item">
						<a href="setting.html" class="menu--link" title="Setting">
							<i class='uil uil-cog menu--icon'></i>
							<span class="menu--label">Setting</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="help.html" class="menu--link" title="Help">
							<i class='uil uil-question-circle menu--icon'></i>
							<span class="menu--label">Help</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="report_history.html" class="menu--link" title="Report History">
							<i class='uil uil-windsock menu--icon'></i>
							<span class="menu--label">Report History</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="feedback.html" class="menu--link" title="Send Feedback">
							<i class='uil uil-comment-alt-exclamation menu--icon'></i>
							<span class="menu--label">Send Feedback</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="left_footer">
				<ul>
					<li><a href="about_us.html">About</a></li>
					<li><a href="press.html">Press</a></li>
					<li><a href="contact_us.html">Contact Us</a></li>
					<li><a href="coming_soon.html">Advertise</a></li>
					<li><a href="coming_soon.html">Developers</a></li>
					<li><a href="terms_of_use.html">Copyright</a></li>
					<li><a href="terms_of_use.html">Privacy Policy</a></li>
					<li><a href="terms_of_use.html">Terms</a></li>
				</ul>
				<div class="left_footer_content">
					<p>© 2020 <strong>Cursus</strong>. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</nav>
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper _bg4586 wrapper__minify">
		<div class="_215b01" style="background-color:white;">
			<div class="container-fluid">			
				<div class="row">
					<div class="col-lg-12">
						<div class="section3125">							
							<div class="row justify-content-center" width="900px" height="600px" style="background-color:white;margin-top:30px">											
											<iframe src="<?php if ($_GET['url']=="") {
												// code...

												$sql2="SELECT * FROM `tbl_video` WHERE c_title='$course';";
											$qry2=mysqli_query($con,$sql2);
										$row2=mysqli_fetch_assoc($qry2);
													$path=$row2['v_file'];
													$total=mysqli_num_rows($qry2);

													if ($total<=0) {
														// code...

		
												echo "abc.mp4";
											}else{
echo "../../admin/".$path;

											}
											}else{
echo "../../admin/".$_GET['url'];
											}
											 ?>" width="976px" height="549px" style="background-color: white;padding-right: -20px;padding-left: -20px;border: none;"></iframe>
										</a>							
							</div>							
						</div>							
					</div>															
				</div>
			</div>
			<!-- <input type="submit" name="buy" value="By Now" style="position: relative;top: 60px;left: 70px;border: none;background: #006e72;width: 100px;height: 35px;color: white;font-weight: bolder;"> -->
		</div>
		<div class="_215b15 _byt1458">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="user_dt5">
							<div class="user_dt_left">
								<div class="live_user_dt">
								</div>
							</div>
						</div>
						<div class="course_tabs">
							<nav>
								<div class="nav nav-tabs tab_crse justify-content-center" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-selected="true">About Course</a>
									<a class="nav-item nav-link" id="nav-courses-tab" data-toggle="tab" href="#nav-courses" role="tab" aria-selected="false">Videos</a>
									<a class="nav-item nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="false">Reviews</a>
								</div>
							</nav>						
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="_215b17">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="course_tab_content">
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-about" role="tabpanel">
									<div class="_htg451">
										<div class="_htg452">
											<h3>Requirements</h3>
											<ul>
												<li><span class="_5f7g11">Have a computer with Internet</span></li>
												<li><span class="_5f7g11">Be ready to learn an insane amount of awesome stuff</span></li>
												<li><span class="_5f7g11">Prepare to build real web apps!</span></li>
											</ul>
										</div>
										<div class="_htg452 mt-35">
											<h3>Description</h3>
											<!-- <span class="_abc123">Just updated to include Bootstrap 4.1.3!</span>
											<p>Hi! Welcome to the Web Developer Bootcamp, the <strong>only course you need to learn web development</strong>. There are a lot of options for online developer training, but this course is without a doubt the most comprehensive and effective on the market.  Here's why:</p> -->
											<ul class="_abc124">
												<li><span class="_5f7g11">This is the only online course taught by a professional bootcamp instructor.</span></li>
												<li><span class="_5f7g11">94% of my in-person bootcamp students go on to get full-time developer jobs. Most of them are complete beginners when I start working with them.</span></li>
												<li><span class="_5f7g11">The previous 2 bootcamp programs that I taught cost $14,000 and $21,000.  This course is just as comprehensive but with brand new content for a fraction of the price.</span></li>
												<li><span class="_5f7g11">Everything I cover is up-to-date and relevant to today's developer industry. No PHP or other dated technologies. This course does not cut any corners.</span></li>
												<li><span class="_5f7g11">This is the only complete beginner full-stack developer course that covers NodeJS.</span></li>
												<li><span class="_5f7g11">We build 13+ projects, including a gigantic production application called YelpCamp. No other course walks you through the creation of such a substantial application.</span></li>
												<li><span class="_5f7g11">The course is constantly updated with new content, projects, and modules.  Think of it as a subscription to a never-ending supply of developer training.</span></li>
											</ul>
											<p>When you're learning to program you often have to sacrifice learning the exciting and current technologies in favor of the "beginner friendly" classes.  With this course, you get the best of both worlds.  This is a course designed for the complete beginner, yet it covers some of the most exciting and relevant topics in the industry.</p>
											<!-- <p>Throughout the course we cover tons of tools and technologies including:</p>
											<ul class="_abc124">												
												<li><span class="_5f7g11"><strong>HTML5</strong></span></li>
												<li><span class="_5f7g11"><strong>CSS3</strong></span></li>
												<li><span class="_5f7g11"><strong>JavaScript</strong></span></li>
												<li><span class="_5f7g11"><strong>Bootstrap 4</strong></span></li>
												<li><span class="_5f7g11"><strong>SemanticUI</strong></span></li>
												<li><span class="_5f7g11"><strong>DOM Manipulation</strong></span></li>
												<li><span class="_5f7g11"><strong>jQuery</strong></span></li>
												<li><span class="_5f7g11"><strong>Unix(Command Line) Commands</strong></span></li>
												<li><span class="_5f7g11"><strong>NodeJS</strong></span></li>
												<li><span class="_5f7g11"><strong>NPM</strong></span></li>
												<li><span class="_5f7g11"><strong>ExpressJS</strong></span></li>
												<li><span class="_5f7g11"><strong>REST</strong></span></li>
												<li><span class="_5f7g11"><strong>MongoDB</strong></span></li>
												<li><span class="_5f7g11"><strong>Database Associations</strong></span></li>
												<li><span class="_5f7g11"><strong>Authentication</strong></span></li>
												<li><span class="_5f7g11"><strong>PassportJS</strong></span></li>
												<li><span class="_5f7g11"><strong>Authorization</strong></span></li>
											</ul> -->
											
												<p>This course is also unique in the way that it is structured and presented. Many online courses are just a long series of "watch as I code" videos.  This course is different. I've incorporated everything I learned in my years of teaching to make this course not only more effective but more engaging. The course includes:</p>
												<ul class="_abc124">												
													<li><span class="_5f7g11">Lectures</span></li>
													<li><span class="_5f7g11">Code-Alongs</span></li>
													<li><span class="_5f7g11">Projects</span></li>
													<li><span class="_5f7g11">Exercises</span></li>
													<li><span class="_5f7g11">Research Assignments</span></li>
													<li><span class="_5f7g11">Slides</span></li>
													<li><span class="_5f7g11">Downloads</span></li>
													<li><span class="_5f7g11">Readings</span></li>
												</ul>
												<p>If you have any questions, please don't hesitate to contact me.  I got into this industry because I love working with people and helping students learn.  Sign up today and see how fun, exciting, and rewarding web development can be!</p>
										</div>
										<div class="_htg452 mt-35">
											<h3>Who this course is for :</h3>
											<ul class="_abc124">												
												<li><span class="_5f7g11">This course is for anyone who wants to learn about web development, regardless of previous experience</span></li>
												<li><span class="_5f7g11">It's perfect for complete beginners with zero experience</span></li>
												<li><span class="_5f7g11">It's also great for anyone who does have some experience in a few of the technologies(like HTML and CSS) but not all</span></li>
												<li><span class="_5f7g11">If you want to take ONE COURSE to learn everything you need to know about web development, take this course</span></li>
											</ul>
										</div>	
										<!--<div class="_htgdrt mt-35">
 											<h3>What you'll learn</h3>
											<div class="_scd123">
												<div class="row">
													<div class="col-lg-6">
														<ul class="_htg452 _abcd145">												
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Donec ultricies elit porttitor, ultrices enim a, commodo dolor.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Nunc dapibus ligula sed justo porta, id volutpat odio iaculis.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Maecenas pharetra mi quis nisl mollis, molestie imperdiet lorem molestie.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Maecenas ultricies felis in pulvinar blandit.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Praesent ac libero consequat, efficitur tortor et, interdum sem.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Nullam non lacus nibh. Etiam et fringilla neque, ut vulputate sapien. Sed vitae tortor gravida, interdum felis at, pulvinar enim. Integer tempor urna leo.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Phasellus ultrices tellus sed volutpat vestibulum. Curabitur aliquet dictum leo non congue.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>In hac habitasse platea dictumst. Aenean vel fermentum neque.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Suspendisse semper feugiat urna dictum interdum.</span></div></li>
														</ul>
													</div>
													<div class="col-lg-6">
														<ul class="_htg452 _abcd145">
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Nullam non lacus nibh. Etiam et fringilla neque, ut vulputate sapien. Sed vitae tortor gravida, interdum felis at, pulvinar enim. Integer tempor urna leo.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Phasellus ultrices tellus sed volutpat vestibulum. Curabitur aliquet dictum leo non congue.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>In hac habitasse platea dictumst. Aenean vel fermentum neque.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Suspendisse semper feugiat urna dictum interdum.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Donec ultricies elit porttitor, ultrices enim a, commodo dolor.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Nunc dapibus ligula sed justo porta, id volutpat odio iaculis.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Maecenas pharetra mi quis nisl mollis, molestie imperdiet lorem molestie.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Maecenas ultricies felis in pulvinar blandit.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Praesent ac libero consequat, efficitur tortor et, interdum sem.</span></div></li>
														</ul>
													</div>
												</div>
											aa</div> 
										</div>-->							
									</div>							
								</div>
								<div class="tab-pane fade" id="nav-courses" role="tabpanel">
									<div class="crse_content">
										<h3>Course content</h3>
										<div class="_112456">
											<ul class="accordion-expand-holder">
												<li><span class="accordion-expand-all _d1452">Expand all</span></li>
												<!-- <li><span class="_fgr123"> 402 lectures</span></li>
												<li><span class="_fgr123">47:06:29</span></li> -->
											</ul>
										</div>
										<div id="accordion" class="ui-accordion ui-widget ui-helper-reset">
											<a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">	
											<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class="uil uil-presentation-play crse_icon"></i>
														<span class="section-title-text">Videos Of This Course</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">5 lectures</span>
													<!-- <span class="section-header-length">22:08</span> -->
												</div>
											</a>
											<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">			
											<?php
												

												
											$sql2="SELECT * FROM `tbl_video` WHERE c_title='$course';";
											$qry2=mysqli_query($con,$sql2);
										while($row2=mysqli_fetch_assoc($qry2))
										{
											$path=$row2['v_file'];

												echo '
												<a href="?url='.$row2['v_file'].'">
												<div class="lecture-container">
													<div class="left-content">
														<i class="uil uil-play"></i>
														<div class="top">
															<div class="title">'.$row2['v_title'].'</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary"></span>
													</div>
												</div>
												</a>
												';
										}
									
											// 	<div class="lecture-container">
											// 		<div class="left-content">
											// 			<i class="uil uil-file icon_142"></i>
											// 			<div class="top">
											// 				<div class="title">Introducing Our TA</div>
											// 			</div>
											// 		</div>
											// 		<div class="details">
											// 			<span class="content-summary">Free!</span>
											// 		</div>
											// 	</div>
											// 	<div class="lecture-container">
											// 		<div class="left-content">
											// 			<i class="uil uil-file icon_142"></i>
											// 			<div class="top">
											// 				<div class="title">Join the Online Community</div>
											// 			</div>
											// 		</div>
											// 		<div class="details">
											// 			<span class="content-summary"></span>
											// 		</div>
											// 	</div>
											// 	<div class="lecture-container">
											// 		<div class="left-content">
											// 			<i class="uil uil-play-circle icon_142"></i>
											// 			<div class="top">
											// 				<div class="title">Why This Course?</div>
											// 			</div>
											// 		</div>
											// 		<div class="details">
											// 			<!-- <a href="#" class="preview-text">Preview</a> -->
											// 			<span class="content-summary">Free!</span>
											// 		</div>
											// 	</div>
											// 	<div class="lecture-container">
											// 		<div class="left-content">
											// 			<i class="uil uil-file-download-alt icon_142"></i>
											// 			<div class="top">
											// 				<div class="title">Syllabus Download</div>
											// 			</div>
											// 		</div>
											// 		<div class="details">
											// 			<!-- <a href="#" class="preview-text">Preview</a> -->
											// 			<span class="content-summary"></span>
											// 		</div>
											// 	</div>
											// 	<div class="lecture-container">
											// 		<div class="left-content">
											// 			<i class="uil uil-play-circle icon_142"></i>
											// 			<div class="top">
											// 				<div class="title">Syllabus Walkthrough</div>
											// 			</div>
											// 		</div>
											// 		<div class="details">
											// 			<!-- <a href="#" class="preview-text">Preview</a> -->
											// 			<span class="content-summary">Free!</span>
											// 		</div>
											// 	</div>
											// 	<div class="lecture-container">
											// 		<div class="left-content">
											// 			<i class="uil uil-file icon_142"></i>
											// 			<div class="top">
											// 				<div class="title">Lecture Slides</div>
											// 			</div>
											// 		</div>
											// 		<div class="details">
											// 			<span class="content-summary"></span>
											// 		</div>
											// 	</div>
											// </div>';


											?>							
												</div>
											<!-- <a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Introduction to Front End Development</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">6 lectures</span>
													<span class="section-header-length">27:26</span>
												</div>
											</a> -->
											<!-- <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
													<a href="#" class="preview-text">Preview</a>
														<span class="content-summary">01.40</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Setting Up Front-End Developer Environment</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:30</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Setting Up Front-End Developer Environment</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">03:11</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Introduction to the Web</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:11</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Introduction to the Web</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10.08</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The Front End Holy Trinity</div>
														</div>
													</div>
													<div class="details">
														<a href="#" class="preview-text">Preview</a>
														<span class="content-summary">11:46</span>
													</div>
												</div>
											</div> -->
											<!-- <a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Introduction to HTML</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">13 lectures</span>
													<span class="section-header-length">58:55</span>
												</div>
											</a> -->
											<!-- <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01.38</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Basicsng Up Front-End Developer Environment</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:53</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Introduction to MDN</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:19</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Introduction to MDN</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:51</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Boilerplate and Comments</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">09:42</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Basic Tags</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:23</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Lists</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04:32</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Lists Assignment</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:23</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Lists Assignment: SOLUTION</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:59</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Divs and Spans</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:23</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Attributes</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">09:00</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Recreate Webpage Assignment</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:00</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Recreate Webpage Assignment: SOLUTION</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">03:56</span>
													</div>
												</div>
											</div> -->
											<!-- <a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Intermediate HTML</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">13 lectures</span>
													<span class="section-header-length">01.12:29</span>
												</div>
											</a> -->
											<!-- <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01.19</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Tables</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">06:03</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Tables Exercise</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:18</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Introduction to Forms</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">06:19</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Playing with Inputs</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">03:04</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The Form Tag</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">06:36</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Labels</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">03:32</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Form Validations</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">03:43</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Dropdowns and Radio Buttons</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">11:19</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Form Exercise</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">07:23</span>
													</div>
												</div>												
											</div> -->
											<!-- <a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Introduction to CSS</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">15 lectures</span>
													<span class="section-header-length">01.40:15</span>
												</div>
											</a> -->
											<!-- <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">02.28</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">CSS Basics</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:25</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Our First Stylesheet</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10:18</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about CSS Colors and Background and Border (next 2 lectures)</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:20</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">CSS Colors</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">14:35</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Background and Border</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">06:58</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Selectors Basics Todo List</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:32</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Selectors Basics Todo List</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10:43</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Introduction to Chrome Inspector</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:43</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">More Advanced Selectors</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">09:23</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Specificity and the Cascade</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:23</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Specificity and the Cascade</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10:38</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Selectors Practice Exercise</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:22</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Selectors Practice Exercise</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04:28</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Selectors Practice Exercise: SOLUTION</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">16:48</span>
													</div>
												</div>
											</div> -->
											<!-- <a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Intermediate CSS</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">16 lectures</span>
													<span class="section-header-length">01.26:40</span>
												</div>
											</a> -->
											<!-- <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary"></span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Text and Fonts</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary"></span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">More Text and Fonts</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary"></span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Google Fonts</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary"></span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Using Google Fonts</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary"></span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Introduction to the Box Model</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary"></span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Creating a Tic Tac Toe Board</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:41</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Creating a Tic Tac Toe Board: SOLUTION</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">07:43</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Image Gallery Code Along Pt. 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:20</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Image Gallery Code Along Pt. 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:20</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about changes to Google Fonts</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:40</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Image Gallery Code Along Pt. 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:46</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">CSS Blog From Scratch Exercise Intro</div>
														</div>
													</div>
													<div class="details">
														<a href="#" class="preview-text">Preview</a>
														<span class="content-summary">03:23</span>
													</div>
												</div>											
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">CSS Blog From Scratch Exercise SOLUTION Pt. 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:38</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">CSS Blog From Scratch Exercise SOLUTION Pt. 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:12</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">CSS Blog From Scratch Exercise SOLUTION Pt. 3</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">07:28</span>
													</div>
												</div>												
											</div> -->
											<!-- <a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Bootstrap</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">16 lectures</span>
													<span class="section-header-length">01.59:54</span>
												</div>
											</a> -->
											<!-- <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">02.28</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Bootstrap versions</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:44</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">What is Bootstrap?</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:02</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Adding Bootstrap to a Project</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">09:15</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Forms and Inputs</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">14:00</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Nav Bars</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">15:44</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about The Grid System</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:11</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The Grid System</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:43</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Grid System Pt. 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">11:43</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Bootstrap Image Gallery Pt. 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:55</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Bootstrap Image Gallery Pt. 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">14:20</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Font Awesome</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:16</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Bootstrap Image Gallery Pt. 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">09:46</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Creating a Startup Landing Page Code Along</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">14:23</span>
													</div>
												</div>											
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Creating a Startup Landing Page Code Along Pt. 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10:30</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about making bootstrap responsive on mobile devices</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:14</span>
													</div>
												</div>																								
											</div> -->
											<!-- <a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Bootstrap 4!</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">11 lectures</span>
													<span class="section-header-length">01.16:28
													</span>
												</div>
											</a> -->
											<!-- <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">A History of Bootstrap 4</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04.40</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The Bootstrap 4 Documentation</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">02:24</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Changes from Bootstrap 3 to 4</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">07:52</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Bootstrap 4 Code/Solutions Download</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:41</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Getting Started With Bootstrap 4</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:15</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Bootstrap 4 Colors and Backgrounds</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:59</span>
													</div>
												</div>												
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Typography</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">11:12</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">New Fancy Spacing Utilities</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">12:28</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Responsive Breakpoints</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10:55</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Bootstrap4 Navbars</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:20</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The New Display Utility</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">07:26</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Bootstrap 4: Flexbox and Layout</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10:14</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Flexbox Utilities Part 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">07:23</span>
													</div>
												</div>											
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Navs and Flexbox</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">09:56</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The Bootstrap 4 Grid</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:56</span>
													</div>
												</div>											
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">PATTERN PROJECT Part 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">12:06</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">PATTERN PROJECT Part 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">11:30</span>
													</div>
												</div>											
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The Grid + Flexbox</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">11:44</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Museum of Candy Project Part 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:36</span>
													</div>
												</div>																						
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Museum of Candy Project Part 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:12</span>
													</div>
												</div>
											</div> -->
											<!-- <a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Assignments</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">5 Assignments</span>
													 <span class="section-header-length">56:21</span> 
												</div>
											</a>
											<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">Download</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The JavaScript Console</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">Download</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Primitives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">Download</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Primitives Exercises</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">Download</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Variables</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">Download</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Null and Undefined</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">Download</span>
													</div>
												</div>												
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Useful Built-In Methods</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">Download</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Writing JavaScript in a Separate File</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">Download</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">JS Stalker Exercise</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">Download</span>
													</div>
												</div> -->
												<!-- <div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">JS Stalker Exercise: SOLUTION</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04:45</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Age Calculator Exercise</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:10</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Age Calculator Exercise: SOLUTION</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04:01</span>
													</div>
												</div> 										
											</div>											
										</div>
										<!-- <a class="btn1458" href="#">20 More Sections</a> -->
									</div>
								</div>
								<div class="tab-pane fade" id="nav-reviews" role="tabpanel">
									<div class="student_reviews">
										<div class="row">
											<div class="col-lg-5">
												<div class="reviews_left">
													<h3>Give Valueable Comment</h3>
													<form action="" method="post" enctype="multipart/form-data">
													<div class="total_rating">													
														<div class="_rate002"><input type="text" name="comment" placeholder="Comments" style="width:497px;height:37px;margin-left: -12px;border-top-style: none;border-right-style: none;border-left-style: none;outline: none;background: transparent;font-size: 17px;padding-left: 10px;padding-right: 10px;"></div>
													</div>
													
														
													
													<!-- <button class="subscribe-btn" style="margin-top:30px;margin-left:220px">Submit</button> -->
													<input type="submit" name="submit" class="subscribe-btn" style="margin-top:30px;margin-left:220px;">

													</form>
													<!-- <div class="_rate003">
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
															</div>
															<div class="_rate002">70%</div>
														</div>
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star empty-star"></span>
															</div>
															<div class="_rate002">40%</div>
														</div>
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-5" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
															</div>
															<div class="_rate002">5%</div>
														</div>
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-2" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
															</div>
															<div class="_rate002">1%</div>
														</div>
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
															</div>
															<div class="_rate002">1%</div>
														</div>
													</div> -->
												</div>												
											</div>
											<div class="col-lg-7">
												<div class="review_right">
													<div class="review_right_heading">
														<h3>Reviews</h3>
														<div class="review_search">
															<input class="rv_srch" type="text" placeholder="Search reviews...">
															<button class="rvsrch_btn"><i class='uil uil-search'></i></button>
														</div>
													</div>
												</div>
												<div class="review_all120">
												<?php
													$sqlnew="SELECT * FROM `tbl_comment` ORDER BY id DESC LIMIT 5;";
													$qrynew=mysqli_query($con,$sqlnew);
													while ($row1=mysqli_fetch_assoc($qrynew)) 
													{
														echo '<div class="review_item">
														<div class="review_usr_dt">
															<img src="../../login/form/'.$row1['photo'].'" alt="">
															<div class="rv1458">
																<h4 class="tutor_name1" style="margin-top:10px">'.$row1['stud_name'].'</h4>
																
															</div>
														</div>
												
														<p class="rvds10">'.$row1['comment'].'</p>
														<div class="rpt100">
															
														</div>
													</div>';
													}
													
												?>
													<!-- <div class="review_item">
														<div class="review_usr_dt">
															<img src="images/left-imgs/img-2.jpg" alt="">
															<div class="rv1458">
																<h4 class="tutor_name1">Jassica William</h4>
																<span class="time_145">12 hour ago</span>
															</div>
														</div>
														
														<p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
														<div class="rpt100">
															
														</div>
													</div>
													<div class="review_item">
														<div class="review_usr_dt">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<div class="rv1458">
																<h4 class="tutor_name1">Albert Dua</h4>
																<span class="time_145">5 days ago</span>
															</div>
														</div>
														
														<p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
														<div class="rpt100">
															
														</div>
													</div>
													<div class="review_item">
														<div class="review_usr_dt">
															<img src="images/left-imgs/img-4.jpg" alt="">
															<div class="rv1458">
																<h4 class="tutor_name1">Zoena Singh</h4>
																<span class="time_145">15 days ago</span>
															</div>
														</div>
														
														<p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
														<div class="rpt100">
															
														</div>
													</div>
													<div class="review_item">
														<div class="review_usr_dt">
															<img src="images/left-imgs/img-5.jpg" alt="">
															<div class="rv1458">
																<h4 class="tutor_name1">Joy Dua</h4>
																<span class="time_145">20 days ago</span>
															</div>
														</div>
														
														<p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
														<div class="rpt100">
															
														</div> 
													</div>-->
													<!-- <div class="review_item"> -->
														<!-- <a href="#" class="more_reviews">See More Reviews</a> -->
													

														<!-- <ul class="pagination" style="text-align: center; font-size: 24px;color: #006E72;font-weight: bolder;position: relative;left: 350px;">
																												</ul> -->

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer mt-30">
			<div class="container" >
				<div class="row">
					<!--<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="item_f1">
							<a href="about_us.html">About</a>
							<a href="our_blog.html">Blog</a>
							<a href="career.html">Careers</a>
							<a href="press.html">Press</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="item_f1">
							<a href="help.html">Help</a>
							<a href="coming_soon.html">Advertise</a>
							<a href="coming_soon.html">Developers</a>
							<a href="contact_us.html">Contact Us</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="item_f1">
							<a href="terms_of_use.html">Copyright Policy</a>
							<a href="terms_of_use.html">Terms</a>
							<a href="terms_of_use.html">Privacy Policy</a>
							<a href="sitemap.html">Sitemap</a>
						</div>
					</div>
					<--<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="item_f3">
							<a href="#" class="btn1542">Teach on Cursus</a>
							<div class="lng_btn">
								<div class="ui language bottom right pointing dropdown floating" id="languages" data-content="Select Language">
									<a href="#"><i class='uil uil-globe lft'></i>Language<i class='uil uil-angle-down rgt'></i></a>
									<div class="menu">
										<div class="scrolling menu">
											<div class="item" data-percent="100" data-value="en" data-english="English">
												<span class="description">English</span>
												English
											</div>
											<div class="item" data-percent="94" data-value="da" data-english="Danish">
												<span class="description">dansk</span>
												Danish
											</div>
											<div class="item" data-percent="94" data-value="es" data-english="Spanish">
												<span class="description">Español</span>
												Spanish
											</div>
											<div class="item" data-percent="34" data-value="zh" data-english="Chinese">
												<span class="description">简体中文</span>
												Chinese
											</div>
											<div class="item" data-percent="54" data-value="zh_TW" data-english="Chinese (Taiwan)">
												<span class="description">中文 (臺灣)</span>
												Chinese (Taiwan)
											</div>
											<div class="item" data-percent="79" data-value="fa" data-english="Persian">
												<span class="description">پارسی</span>
												Persian
											</div>
											<div class="item" data-percent="41" data-value="fr" data-english="French">
												<span class="description">Français</span>
												French
											</div>
											<div class="item" data-percent="37" data-value="el" data-english="Greek">
												<span class="description">ελληνικά</span>
												Greek
											</div>
											<div class="item" data-percent="37" data-value="ru" data-english="Russian">
												<span class="description">Русский</span>
												Russian
											</div>
											<div class="item" data-percent="36" data-value="de" data-english="German">
												<span class="description">Deutsch</span>
												German
											</div>
											<div class="item" data-percent="23" data-value="it" data-english="Italian">
												<span class="description">Italiano</span>
												Italian
											</div>
											<div class="item" data-percent="21" data-value="nl" data-english="Dutch">
												<span class="description">Nederlands</span>
												Dutch
											</div>
											<div class="item" data-percent="19" data-value="pt_BR" data-english="Portuguese">
												<span class="description">Português(BR)</span>
												Portuguese
											</div>
											<div class="item" data-percent="17" data-value="id" data-english="Indonesian">
												<span class="description">Indonesian</span>
												Indonesian
											</div>
											<div class="item" data-percent="12" data-value="lt" data-english="Lithuanian">
												<span class="description">Lietuvių</span>
												Lithuanian
											</div>
											<div class="item" data-percent="11" data-value="tr" data-english="Turkish">
												<span class="description">Türkçe</span>
												Turkish
											</div>
											<div class="item" data-percent="10" data-value="kr" data-english="Korean">
												<span class="description">한국어</span>
												Korean
											</div>
											<div class="item" data-percent="7" data-value="ar" data-english="Arabic">
												<span class="description">العربية</span>
												Arabic
											</div>
											<div class="item" data-percent="6" data-value="hu" data-english="Hungarian">
												<span class="description">Magyar</span>
												Hungarian
											</div>
											<div class="item" data-percent="6" data-value="vi" data-english="Vietnamese">
												<span class="description">tiếng Việt</span>
												Vietnamese
											</div>
											<div class="item" data-percent="5" data-value="sv" data-english="Swedish">
												<span class="description">svenska</span>
												Swedish
											</div>
											<div class="item" data-precent="4" data-value="pl" data-english="Polish">
												<span class="description">polski</span>
												Polish
											</div>
											<div class="item" data-percent="6" data-value="ja" data-english="Japanese">
												<span class="description">日本語</span>
												Japanese
											</div>
											<div class="item" data-percent="0" data-value="ro" data-english="Romanian">
												<span class="description">românește</span>
												Romanian
											</div>										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<div class="col-lg-12" >
						<div class="footer_bottm" style="height:30px" >
							<div class="row">
								<div  style="margin-left: 550px;">
									<!-- <ul class="fotb_left">
										<li>
											<p style="margin-top:-67px;">Created By <b> Ishita Sharma</b></p>
										</li>
									</ul> -->
								</div>
								<!-- <div class="col-md-6">
									<div class="edu_social_links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-google-plus-g"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
										<a href="#"><i class="fab fa-youtube"></i></a>
										<a href="#"><i class="fab fa-pinterest-p"></i></a>
									</div>
								</div>	 -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer> 
		
	</div>
	<!-- Body End -->

	<script src="js/vertical-responsive-menu.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/semantic/semantic.min.js"></script>
	<script src="js/custom.js"></script>	
	<script src="js/night-mode.js"></script>	
	<!-- <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="js/script.js"></script> -->
	
</body>

<!-- Mirrored from gambolthemes.net/html-items/cursus_main_demo/course_detail_view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jul 2023 03:23:48 GMT -->
</html>