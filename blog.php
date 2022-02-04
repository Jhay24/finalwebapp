<!-- for knowlegde network -->
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
							<a href="http://127.0.0.1/php%20CAREERLY/login.php">Specialization Track Prediction</a>
							<a href="http://127.0.0.1/php%20CAREERLY/courses.php">Online Courses</a>
							<a href="http://127.0.0.1/php%20CAREERLY/blog.php">Majors Course Description </a>
							
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
							<a href="http://127.0.0.1:5000/">Specialization Track Prediction</a>
							<a href="courses.php">Online Course</a>
							<a href="blog.php">Specialization Track</a>
							
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
							<li><a href="main.html">Home</a></li>
							<li>Major Courses Description</li>
						</ul>
						<h1 class="white-text">Specialization Track</h1>
					</div>
				</div>
				
			</div>

		</div>
		<!-- /Hero-area -->

		

		<!-- Knowledge Network -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">
				<!-- tags widget -->
					<div class="widget tags-widget">
							<a class="tag" href="#Web Development">Web Development</a>
							<a class="tag" href="#Animation and Motion Design ">Animation and Motion Design </a>
							<a class="tag" href="#Intelligent System">Intelligent System</a>
							<a class="tag" href="#Service management Program">Service Management Program</a>
		
						</div>
						<!-- /tags widget -->
				<!-- row -->
				<div class="row" id="AI ML Specialist">

					<!-- main Major Description -->
					<div id="main" class="col-md-9">

						<!-- row -->
						<div class="row">

						<ul class="list" >

							<li id="Web Development ">
								<h2>

									<!-- Title -->
									Web Development
									
								</h2>
								<p> This course offers a high-level overview of the infinite
										possibilities available to creatives who seek to use the web as their medium of choice. Discussions, readings, and a
										real-world hands-on approach to the subject matter allow students to explore the web as a creative outlet for both
										designers and developers. This course culminates with a simple to advance website design project, wireframes and
										schematics, individual presentations, and a formal critique.</p>
								<a href="Web_Development.php">Read more</a>
							</li>

							<li>
								<h2 id="Animation and Motion Design ">

									<!-- Title -->
									Animation and Motion Design 

								</h2>
								<p>This course introduces basic principles of digital drawing, perspective, and sketching techniques using various media, to depict a variety of subjects.The course builds the students’ understanding of, and basic competencies in, effective communication in the workplace..</p>
								<a href="Animation.php">Read more</a>
							</li>

							<li>
								<h2 id="Intelligent System">

									<!-- Title -->
									Intelligent System

								</h2>
								<p>This specialization track introduces students to the area of artificial intelligence (AI) his course offers a high-level overview of the infinite
										possibilities available to creatives who seek to use the web as their medium of choice.</p>
								<a href="Intelligent_System.php">Read more</a>
							</li>

							<li>
								<h2 id="Service management Program">

									<!-- Title -->
									Service management Program

								</h2>
								<p>The course builds the students’ understanding of, and basic competencies in, effective communication in the workplace. It introduces students to key concepts of business communication, methods, and techniques for its efficacy and its impact on organizational success. Actual business applications and scenarios are used to illustrate the fundamentals of effective business communication..</p>
								<a href="service_mp.php">Read more</a>
							</li>

						


						</ul>

							

						</div>
						<!-- /row -->
						
					</div>
					<!-- /main Knowledge Network -->


				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Knowledge Network -->

		
		<?php include 'footer.php'?>

	</body>
</html>
