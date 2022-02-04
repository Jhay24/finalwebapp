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
							<a href="blog.php">Major Courses Description </a>
							
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
		
		
		<div class="container">

	
			<!-- Hero-area -->
			<div class="hero-area section">

				<!-- Backgound Image -->
				<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); " ></div>
				<!-- /Backgound Image -->

				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 text-center">
							<ul class="hero-area-tree">
								<li><a href="main.php">Home</a></li>
								<li>Bachelor of Science in Information Technology</li>
								<li>Specialization Track</li>
							</ul>
							<h1 class="white-text">Web and Application Development</h1>
						</div>
					</div>
				</div>

			</div>
			<!-- /Hero-area -->

			<!-- Blog -->
			<div id="blog" class="section">

				<!-- container -->
				<div class="container">

					<!-- row -->
					<div class="row">

						<!-- main blog -->
						<div id="main" class="col-md-9">

							<!-- blog post -->
							<div class="blog-post" style= "text-align:justify; ">
							<h2>Web and Application Development Description</h2>
								<!-- row -->
								<div class="row">

								<p style="font-size:16px;" >This specialization track introduces students in different priciples of web designig. </p>
								
								</div>
								<!-- /row -->

								<!-- row -->
								<div class="row">
								<h2>Course and Prerequisites </h2>
								
								<ul style="font-size:16px;">
										<li><b>(ITST 301) Principle of Web Design</b><br>
										<b>Course Credits :</b> 3 units<br>
										<b>Course Prerequisites :</b> Junior Standing<br>
										<b>Course Description :</b> This course offers a high-level overview of the infinite
											possibilities available to creatives who seek to use the web as their medium of choice. Discussions, readings, and a
											real-world hands-on approach to the subject matter allow students to explore the web as a creative outlet for both
											designers and developers. This course culminates with a simple to advance website design project, wireframes and
											schematics, individual presentations, and a formal critique.</li><br>

										<li><b>(ITST 302) Client-Server Technologies</b><br>
										<b>Course Credits :</b> 3 units<br>
										<b>Course Prerequisites :</b> Junior Standing<br>
										<b>Course Description :</b> TThis course covers the evolution, impact and services
											available with Client/Server technology and distributed computing. The characteristics of clients and servers and
											the role of middleware will be discussed. Students will explore the various type of Client/Server implementations:
											SQL databases, transaction servers, distributed objects, groupware, Web applications and JAVA.</li><br>
										
											<li><b>(ITST 303) Web and Database Integration</b><br>
										<b>Course Credits :</b> 3 units<br>
										<b>Course Prerequisites :</b> ITST 301, ITST302 <br>
										<b>Course Description :</b> This course introduces advanced techniques to design and
											develop dynamic websites through use of cascading style sheets (CSS) and integration of databases. It also provides
											students’ knowledge to server-side scripting and large site management.</li><br>

											<li><b>(ITST 304) Mobile Computing </b><br>
										<b>Course Credits :</b> 3 units<br>
										<b>Course Prerequisites :</b> ITST 301<br>
										<b>Course Description :</b> This course will give you an understanding of mobile
											computer systems particularly in the context of wireless network systems such as 2G/3G/4G mobile telephony, data
											networks, and other wireless networks and infrastructure.
											The course emphasizes how to interface hardware to mobile computing devices and programming those devices.</li><br>

										<li><b>(ITST 305) Cloud Computing</b><br>
										<b>Course Credits :</b> 3 units<br>
										<b>Course Prerequisites :</b> ITST 302<br>
										<b>Course Description :</b> This course covers topics and technologies related to Cloud
											Computing and their practical implementations. Focus on different architectural models of cloud computing, the
											concepts of virtualization, cloud orchestration, cloud platforms, cloud programming paradigms, concept of
											modern Big Data analysis on cloud platforms, cloud application development and deployment, use of cloud
											storage, creation and configuration of virtual machines and data analysis on cloud using data mining tools.</li><br>	 
										
											<li><b>(ITST 306) UX/UI and Cross Platform Applications </b><br>
										<b>Course Credits :</b> 3 units<br>
										<b>Course Prerequisites :</b> ITST303, ITST 304 <br>
										<b>Course Description :</b> This course covers a comprehensive course for
											characterizing user experience in different platforms. This includes introduction to user interface design process
											including conceptual designs based on the needs of users.I will also cover design-centric approach to user interface
											and user experience design, and offers practical, skill-based instruction centered around a visual communications
											perspective, rather than on one focused on marketing or programming alone.</li><br>

							
										
										
										
										
										</ul>
								</div>
								<!-- /row -->

								
								<!-- row -->
								<div class="row">
								<h2>Possible Career Paths</h2>
								
								<ol style="font-size:16px;">
								<li><b>1. </b>Web Designer</li>
									<li><b>2. </b>Back End Web Developer</li>
									<li><b>3. </b>Front End web Developer</li>
									<li><b>4. </b>Web Architect</li>
								</ol>
								</div>
								<!-- /row -->

				

							</div>
							<!-- /blog post -->

						</div>
						<!-- /main blog -->

					</div>
					<!-- row -->

				</div>
				<!-- container -->

			</div>
		</div>
		<!-- /Blog -->

		<?php include 'footer.php'?>
	</body>
</html>
