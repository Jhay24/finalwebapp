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
						<h1 class="white-text">Animation and Motion Graphics</h1>
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
                        <h2>Animation and Motion Graphics Description</h2>
                            <!-- row -->
                            <div class="row">

							<p style="font-size:16px;" >This specialization track introduces students </p>
                            
                            </div>
                            <!-- /row -->

                            <!-- row -->
                            <div class="row">
							<h2>Course and Prerequisites </h2>
							
							<ul style="font-size:16px;">
                               		 <li><b>(ITST 301) Fundamentals of Drawing</b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> Junior Standing<br>
									   <b>Course Description :</b> This course introduces basic principles of digital drawing,
										perspective, and sketching techniques using various media,
										to depict a variety of subjects.</li><br>

									   <li><b>(ITST 302) Digital Arts, Photography and Print Media</b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> Junior Standing<br>
									   <b>Course Description :</b> The course provides art theory concepts such the elements
										of art, principle of design, composition, lighting, camera
										handling techniques, history of photography, commercial
										applications, and digital arts career. The students will use
										camera, computer and software tools to create artwork and
										print media.</li><br>
									   
										<li><b>(ITST 303) 2D Design and Animation</b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> ITST 301, ITST302 <br>
									   <b>Course Description :</b> A comprehensive course devoted to the development of
										skills in creating characters for 2D animation that are aesthetically pleasing and are of industry standard. This
										course is a beginning course for 2D Animation Character 
										Design. This course provides students the fundamental skills required to develop character design that is considered appealing by the 2D Animation industry leading up to the Portfolio course. Students can also apply skills learned in
										this class in other areas including any course involvingtraditional or computer-generated animation.</li><br>

										<li><b>(ITST 304) Advanced Sound Production </b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> ITST 302<br>
									   <b>Course Description :</b> The course is about the technical production and control of
										sound in the field of animation and motion graphics. The students will be taught of theoretical and practical
										knowledge on recording, mixing, production and mastering of sounds.</li><br>

									   <li><b>(ITST 305) 3D design and Modeling 1</b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> ITST 301<br>
									   <b>Course Description :</b> This is the first of two 3D Design and Modeling courses that
										will utilize 3D software for the creation of informational graphics and visual presentations. The content for the
										course begins with an exploration of the 3D workspace environment, and progresses through the fundamental
										techniques of modeling, material application, lighting, animating and photorealistic rendering. The course will
										provide opportunity to develop student skills by creating a variety of increasingly complex 3D models.</li><br>	 
									
										<li><b>(ITST 306) 3D Design and modeling 2 </b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> ITST304C <br>
									   <b>Course Description :</b> The course is the continuation of 3D Design and Modeling
										It will focus in applying camera to a scene, how to create a rendering of a 3D scene and how to build an advance animation. It will also examine the box modeling technique
										and experiment with complex textures using different mapping techniques. This course includes the use of
										appropriate 3D printers and software.</li><br>

						
									
									
									
									
									</ul>
                            </div>
                            <!-- /row -->

                            
                            <!-- row -->
                            <div class="row">
							<h2>Possible Career Paths</h2>
							
							<ol style="font-size:16px;">
                            <li><b>1. </b>Art Director</li>
                                <li><b>2. </b>Animator</li>
                                <li><b>3. </b>Character and background Designer</li>
                                <li><b>4. </b>Special Effects Artist</li>
                                <li><b>5. </b>Game Designer</li>
                                <li><b>6. </b>Motion Graphic Designer</li>
                                <li><b>7. </b>Graphic Designer</li>
                                <li><b>8. </b>Illustrator</li>
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
