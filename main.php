<?php
// Initialize the session
session_start();
?>
http://127.0.0.1:5000
<!DOCTYPE html>
<html lang="en">


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
        <header id="header" class="transparent-nav" style="position: fixed;background-color: rgb(120, 70, 167 ); top: 0;">
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
                       
						<li><a href="main.php#about">About </a></li>
					
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
								<a href="http://127.0.0.1:5000/"> Specialization Track Prediction</a>
                                <a href="courses.php">Online Course</a>
                                <a href="blog.php">Explore Specializations  </a>
								
                            </div>
                        </li>
						<li><a href="main.php#about">About </a></li>
						<!-- <li><a href="contact.php">Contact Us</a></li> -->
						<li><a href="logout.php" >Log out</a></li>
						
                        
					</ul>
				</nav>
				<!-- /Navigation -->
				<?php endif ?>

			</div>
		</header>
		<!-- /Header -->

 <!-- ########################################################################################## -->
 <!-- ########################################################################################## -->

 <!-- ########################################################################################## -->
 <!-- ########################################################################################## -->
  <!-- ##############################################
 <a href='https://www.freepik.com/vectors/creative'>Creative vector created by pikisuperstar - www.freepik.com</a> 
  ############################################ -->

        <!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bckground.jpg); width:100%; height: 656px;"></div>
			

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
						

							<h1 class="white-text" style="font-size: 40px;margin-top: 20px;
							margin-bottom:50px;">SPECIALIZATION TRACK RECOMMENDATION SYSTEM</h1>
							
							<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<p class="lead white-text" style="margin-left: 5px;" ><b>Discover yourself<br>Take the test to find which specialization track in Information Technology Education fits in your interest.</b></p>

									<a class="main-button icon-button" href="login.php">Get Started!</a>

								<?php else: ?>
									<p class="lead white-text" style="margin-left: 5px;" ><b>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?> !<br><b>Discover yourself,<br>Take the test to find the perfect role for you after Engineering</b></p>

									<a class="main-button icon-button" href=" http://127.0.0.1:5000/ ">Get Started!</a>
								
							<?php endif ?>
							
							
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->



        <!-- Why us -->
		<div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
					

						<h2 style="margin-top: 100px; font-size: 45px;">Welcome to Course.Co</h2>
						<!--<p class="lead">We all want to fly high and in real time!<br> And in this random pursuit of success, we end up making wrong career choices.</p>-->
						
						<p class="lead"><b style="color: rgb(56, 48, 48);">Course.Co</b> is one stop destination <br>in helping you understand the specialization track for you <br> and providing all the resources in the process.</p>
					</div>
				</div>	

				<div class="row">
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa "><span> &#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="#" >
								<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<a href="login.php"><h4>Career Prediction</h4></a>
								<?php else: ?>
									<a href="http://127.0.0.1:5000/"><h4>Specialization Track Prediction</h4></a>
									
								
							<?php endif ?>
								
								<p>Take the test to find which specialization track in Information Technology Education fits in your interest.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
					
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="blog.php" >
								<h4>Explore Specializations.</h4>
								</a>
								<p>Explore more about the specialization track. Gain knowledge of what the track has to offer</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="courses.php" >
								<h4>Online Courses</h4>
								</a>
								<p>Learn from a variety of sources, including important informational links and access to study materials.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
									
				</div>
				<!-- /row -->
				
				<hr class="section-hr">

			</div>
			<!-- /container -->

		</div>
		<!-- /Why us -->

		<!-- Call To Action -->
		<div id="cta" class="section" style="height: 400px;">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgmid1.jpg)"></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
					
						
							<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi,</h2>

									<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your Career Path Begins Here</h2>
									<p class="lead white-text" >We assists you to Choose a Specialization Track in college with the help of machine learning.</p>
									<a class="main-button icon-button" href="register.php">Get Started!</a>
								<?php else: ?>
									<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?> !</b></h2>

								<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your Career Path Begins Here</h2>
								<p class="lead white-text" > We assists you to Choose a Specialization Track in college with the help of machine learning. </p>
							
									<a class="main-button icon-button" href="main.php">Get Started!</a>
									
							<?php endif ?>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Call To Action -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2 style="font-size: 35px;">About Course.Co</h2>
							<p class="lead" style="font-size: 18px; font-style: italic; margin-top: 50px;"><p>
							

							<p>The Course.Co is a predictor and recommendation system for major courses based on your interests and preferences. This recommender system is intended to assist students in identifying appropriate courses for them as well as assisting them in deciding on their majors.</p>

						</div>

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img src="./img/bg1.png" alt="">
						</div>
					</div>

				</div>
				<!-- row -->
				<hr class="section-hr">
			</div>
			<!-- container -->
		</div>
		<!-- /About -->

		

<?php include 'footer.php'?>

	</body>
</html>
