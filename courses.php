<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    

	
	<!-- ############################################################################################################### -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>SPECIALIZATION TRACK RECOMMENDATION </title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/s.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>

	<body>

<!-- 120, 70, 167 -->

	<!--Header-->
	<header id="header" class="transparent-nav" style="position: fixed;background-color: rgb(120, 70, 167); top: 0;">
		<div class="container">

			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="main.php">Course.Co</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
					<span></span>
				</button>
				<!-- /Mobile toggle -->
			</div>

			<?php
				// Check if the user is logged in, if not then redirect him to login page
				if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):
			?>

			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-menu nav navbar-nav navbar-right">
					<li><a href="main.php">Home</a></li>
					<li class="dropdown">
						<a class="dropbtn" href="javascript:void(0)">Services <span>&#11167;</span></a>
						<div class="dropdown-content">
							<a href="http://127.0.0.1/php%20CAREERLY/login.php">TSpecialization Track Prediction</a>
							<a href="http://127.0.0.1/php%20CAREERLY/courses.php">Online Courses</a>
							<a href="http://127.0.0.1/php%20CAREERLY/blog.php">Explore Specialization </a>
							
						</div>
					</li>
					<li><a href="main.php#about">About </a></li>
					<!-- <li><a href="contact.php">Contact Us</a></li> -->
					<li>
						<a href="login.php">Login</a>
					</li>
					<li>
						<a href="register.php">Register</a>
					</li>
					
					
				</ul>
			</nav>
			<!-- /Navigation -->
			<?php else: ?>
				<!-- Navigation -->
			<nav id="nav">
				<ul class="main-menu nav navbar-nav navbar-right">
					<li><a href="main.php">Home</a></li>
					<li class="dropdown">
						<a class="dropbtn" href="javascript:void(0)">Services <span>&#11167;</span></i></a>
						<div class="dropdown-content">
							<a href="http://127.0.0.1:5000/"n>Specialization Track Prediction</a>
							<a href="courses.php">Online Course</a>
							<a href="blog.php">Explore Specialization </a>
							
						</div>
					</li>
					<li><a href="main.php#about">About</a></li>
					<!-- <li><a href="contact.php">Contact Us</a></li> -->
					<li><a href="logout.php" >Log out</a></li>
					
					
				</ul>
			</nav>
			<!-- /Navigation -->
			<?php endif ?>

		</div>
	</header>
	<!-- /Header -->

	<!-- ############################################################################################################## -->
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="main.php">Home</a></li>
							<li><a href="courses.php">Online Courses</a></li>
						</ul>
						<h1 class="white-text">Teach Yourself a New Skills </h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->
		
        <!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row 
				<div class="row">
					<div class="section-header text-center">
						<h2>Explore Courses</h2>
						<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
					</div>
				</div>
				 -->
				
				<!-- tags widget -->
				<div class="widget tags-widget">
					<a class="tag" href="#web">Web Development</a>
					<a class="tag" href="#prog">Programming Langauges</a>
					<a class="tag" href="#graphics">Graphics</a>
					<a class="tag" href="#web">Responsive</a>
				
					<a class="tag" href="#web">Html</a>
					<a class="tag" href="#server">Server Side</a>
					<a class="tag" href="#animation">Animation and Motion Design</a>
				</div>
				<!-- /tags widget -->
				
				<!-- courses -->
				<hr class="section-hr" id="web">
				<div id="courses-wrapper" >
                 		
					<!-- row -->
					<div class="row" >
                        <div class="section-header text-center" >
							<h2  >Web Development</h2>
						</div>
						   
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/jquery/default.asp" target="_blank" class="course-img">
									<img src="./img/web1.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/jquery/default.asp" target="_blank" style="font-size:18px; text-align: center">The Complete jQuery Course</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6" >
							<div class="course">
								<a href="https://www.w3schools.com/css/default.asp" target="_blank" class="course-img">
									<img src="./img/web2.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/css/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>Introduction to CSS </b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Design</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://progate.com/courses/java" target="_blank" class="course-img">
									<img src="./img/web3.png " alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://progate.com/courses/java" target="_blank" style="font-size:18px; text-align: center">The Complete course on HTML</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
										<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/bootstrap4/default.asp" class="course-img" target="_blank">
									<img src="./img/web4.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/bootstrap4/default.asp" target="_blank" style="font-size:18px; text-align: center" id="bootstrap">Introduction to Bootstrap</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Design</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/cs/default.asp" target="_blank" class="course-img">
									<img src="./img/web5.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/cs/default.asp" target="_blank" style="font-size:18px; text-align: center">JavaScript Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" class="course-img">
									<img src="./img/web6.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" style="font-size:18px; text-align: center">React Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://progate.com/courses/java" target="_blank" class="course-img">
									<img src="./img/web7.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://progate.com/courses/java" target="_blank" style="font-size:18px; text-align: center">Ruby Tips and Tricks</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/bootstrap4/default.asp" class="course-img" target="_blank">
									<img src="./img/web8.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/bootstrap4/default.asp" target="_blank" style="font-size:18px; text-align: center">HTML & CSS</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/cs/default.asp" target="_blank" class="course-img">
									<img src="./img/web9.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/cs/default.asp" target="_blank" style="font-size:18px; text-align: center">Ruby on Rails5</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" class="course-img">
									<img src="./img/web10.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" style="font-size:18px; text-align: center">Introduction to Sass</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://progate.com/courses/java" target="_blank" class="course-img">
									<img src="./img/web11.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://progate.com/courses/java" target="_blank" style="font-size:18px; text-align: center">React complete course</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/bootstrap4/default.asp" class="course-img" target="_blank">
									<img src="./img/web12.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/bootstrap4/default.asp" target="_blank" style="font-size:18px; text-align: center">Complete guide on JavaScript</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        <div class="section-header text-center">
                            <h2 id="prog">Programming Langauges</h2>
                        </div>

						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.datacamp.com/tracks/r-programming" class="course-img">
									<img src="./img/web13.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.datacamp.com/tracks/r-programming" target="_blank" style="font-size:18px; text-align: center">R Programming</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/cpp/default.asp" class="course-img" target="_blank">
									<img src="./img/web14.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/cpp/default.asp" target="_blank" style="font-size:18px; text-align: center;" >Learn C++</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/java/default.asp" class="course-img" target="_blank">
									<img src="./img/web23.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/java/default.asp" target="_blank" style="font-size:18px; text-align: center">Java Tutorial</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/bootstrap4/default.asp" class="course-img" target="_blank">
									<img src="./img/coursepy.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/bootstrap4/default.asp" target="_blank" style="font-size:18px; text-align: center">Complete guide on python</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://progate.com/courses/java" target="_blank" class="course-img">
									<img src="./img/coursejv.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://progate.com/courses/java" target="_blank" style="font-size:18px; text-align: center">Core Java</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/bootstrap4/default.asp" class="course-img" target="_blank">
									<img src="./img/coursepyth.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/bootstrap4/default.asp" target="_blank" style="font-size:18px; text-align: center">Python Programming</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/cs/default.asp" target="_blank" class="course-img">
									<img src="./img/coursec.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/cs/default.asp" target="_blank" style="font-size:18px; text-align: center">C# Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" class="course-img">
									<img src="./img/coursecp.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" style="font-size:18px; text-align: center">Complete C programming</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        <div class="section-header text-center">
                            <h2 id="server">Server Side</h2>
                        </div>

						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/course05.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>PHP Tips, Tricks, and Techniques</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/coursesql.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>SQL Tutorial</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/coursend.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>Node.js crash course</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/coursegit.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>Mastering Git</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- course for animation -->
						
                        </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <div class="section-header text-center">
                            <h2 id="animation">Animation and Motion Graphics</h2>
                        </div>

                        
                        <!-- single course -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="course">
                                <a href="https://bit.ly/3nckQOi" target="_blank" class="course-img">
                                    <img src="./img/coursemaya.jpg" alt="">
                                    <i class="course-link-icon fa fa-link"></i>
                                </a>
                                <a class="course-title" href="https://bit.ly/3nckQOi" target="_blank" style="font-size:18px; text-align: center"><b>Autodesk Maya Tutorial</b></a>
                                <div class="course-details" style="margin: 5px;">
                                    <span class="course-category">Animation and Motion Graphics</span>
                                    <span class="course-price course-free">Free</span>
                                </div>
                            </div>
                        </div>
                        <!-- /single course -->
                        
                        <!-- single course -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="course">
                                <a href="https://bit.ly/3Fdf1WL" target="_blank" class="course-img">
                                    <img src="./img/courseps.jpg" alt="">
                                    <i class="course-link-icon fa fa-link"></i>
                                </a>
                                <a class="course-title" href="https://bit.ly/3Fdf1WL" target="_blank" style="font-size:18px; text-align: center" id="graphics"><b>Adobe Photoshop</b></a>
                                <div class="course-details" style="margin: 5px;">
                                    <span class="course-category">Animation and Motion Graphics</span>
                                    <span class="course-price course-free">Free</span>
                                </div>
                            </div>
                        </div>
                        <!-- /single course -->

                        <!-- single course -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="course">
                                <a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
                                    <img src="./img/coursebd.jpg" alt="">
                                    <i class="course-link-icon fa fa-link"></i>
                                </a>
                                <a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>Blender course</b></a>
                                <div class="course-details" style="margin: 5px;">
                                    <span class="course-category">Animation and Motion Graphics</span>
                                    <span class="course-price course-free">Free</span>
                                </div>
                            </div>
                        </div>
                        <!-- /single course -->

                        <!-- single course -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="course">
                                <a href="https://www.courseduck.com/programming/cinema-4d/" target="_blank" class="course-img">
                                    <img src="./img/coursecn.jpg" alt="">
                                    <i class="course-link-icon fa fa-link"></i>
                                </a>
                                <a class="course-title" href="https://www.courseduck.com/programming/cinema-4d/" target="_blank" style="font-size:18px; text-align: center"><b>Cinema 4D Courses</b></a>
                                <div class="course-details" style="margin: 5px;">
                                    <span class="course-category">Animation and Motion Graphics</span>
                                    <span class="course-price course-premium">Premium</span>
                                </div>
                            </div>
                        </div>
                        <!-- /single course -->


					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->

				<!--<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">More Courses</a>
					</div>
				</div>-->

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->
		<?php include 'footer.php'?>
	</body>
</html>
