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
						<h1 class="white-text">Service Management / Business Processes Outsourcing</h1>
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
                        <h2>Service Management/Business Processes Outsourcing Description</h2>
                            <!-- row -->
                            <div class="row">

							<p style="font-size:16px;" >This specialization track introduces students in different priciples of web designig. </p>
                            
                            </div>
                            <!-- /row -->

                            <!-- row -->
                            <div class="row">
							<h2>Course and Prerequisites </h2>
							
							<ul style="font-size:16px;">
                               		 <li><b>(ITST 301) Effective Business Communication</b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> Junior Standing<br>
									   <b>Course Description :</b> The course builds the students’ understanding of, and basic
										competencies in, effective communication in the workplace. It introduces students to key concepts of business
										communication, methods, and techniques for its efficacy and its impact on organizational success. Actual business
										applications and scenarios are used to illustrate the fundamentals of effective business communication.</li><br>

									   <li><b>(ITST 302) Fundamentals of Business Outsourcing 101</b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> Junior Standing<br>
									   <b>Course Description :</b> The course provides the students with an overview of the
										outsourcing industry, including the rationale for outsourcing, critical factors which affect different outsourcing industries,
										and the processes involved in engaging in, operating, and maintaining an outsourced service. The course also
										introduces different tools and methodologies used in outsourcing operations and provide the students with
										opportunities to apply these tools in simulations at a computer laboratory or “Game Lab”. The course enables the
										students to recognize areas of opportunities in outsourcing, as well as to analyze and assess how changes in
										technology, regulation, and business environments may affect current industries. It also increases the students’
										awareness of the different processes critical to maintaining outsourcing engagements, such as maintaining client
										relationships in the context of a service culture, and the effective management of costs and resources.</li><br>
									   
										<li><b>(ITST 303) Service Culture</b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> ITST302 <br>
									   <b>Course Description :</b> The course builds students’ personal and social
										competencies (values and attitudes) necessary to executing and delivering excellent service in any professional
										endeavor. It introduces students to various service companies and industries and key concepts in being a
										customer-centric organization. It enables students to practice practical customer service skills and to manage a
										project.</li><br>

										<li><b>(ITST 304) Principles of System Thinking </b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> ITST 302<br>
									   <b>Course Description :</b> The course prepares the students for the 21st century
										workplace by building their foundations in systems thinking, enabling them to examine business systems, identify the
										inter-dependencies of a specific systems within an organization, and recommend suggestions to improve
										systems performance within organizations. It introduces students to concepts in system architecture and systems
										optimization, with the intent of developing the student’s analytical skills in identifying and resolving issues in
										business systems.</li><br>

									   <li><b>(ITST 305) Fundamentals of Business Outsourcing 102</b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> ITST 302<br>
									   <b>Course Description :</b> The course provides introduction to fundamental business
										process outsourcing concepts via an understanding of the techniques for using business practices and methods to
										create and improve business processes. The foundational study of business processes provides a basis by which
										performance improvements are identified and implemented across business process management. The student is exposed to a set of qualitative and quantitative topics aimed
										to enhance process-oriented thinking, in order to develop the knowledge and skills necessary to appreciate and
										implement program of process reengineering, management, and excellence in organizations.</li><br>	 
									
										<li><b>(ITST 306) SMP Appplication </b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> ITST305 <br>
									   <b>Course Description :</b> This course is a practical application of Service
										Management Program. Students will be assigned under theguidance of the faculty members in different offices inside
										the campus to serve as customer support staff.</li><br>

						
									
									
									
									
									</ul>
                            </div>
                            <!-- /row -->

                            
                            <!-- row -->
                            <div class="row">
							<h2>Possible Career Paths</h2>
							
							<ol style="font-size:16px;">
                            <li><b>1. </b>Accounting</li>
                                <li><b>2. </b>Costumer Service/Call Center</li>
                                <li><b>3. </b>Administration</li>
                                <li><b>4. </b>HR</li>
								<li><b>5. </b>IT Management and Services/li>
								<li><b>6. </b>Marketing</li>
								<li><b>7. </b>Research</li>
								<li><b>8. </b>Sales</li>
								<li><b>9. </b>Manufactoring</li>
								<li><b>10. </b>Shipping and Logistics</li>
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
		<!-- /Blog -->

		<?php include 'footer.php'?>
</html>
