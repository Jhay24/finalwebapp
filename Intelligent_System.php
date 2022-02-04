<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>

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
                            <li>Bachelor of Science in Computer Science</li>
							<li>Specialization Track</li>
						</ul>
						<h1 class="white-text">Intelligent System</h1>
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
                        <h2>Intelligent System Description</h2>
                            <!-- row -->
                            <div class="row">

							<p style="font-size:16px;" >This specialization track introduces students to the area of artificial intelligence (AI), with a focus on how it might be used to tackle real-world issues for which standard algorithmic solutions are difficult to articulate. It delves into the fundamental idea underpinning strategies for creating systems that work, display intelligent behavior, such as dealing with uncertainty, learning from experience, and using natural problem-solving solutions.</p>
                            
                            </div>
                            <!-- /row -->

                            <!-- row -->
                            <div class="row">
							<h2>Subjects and Prerequisites </h2>
							
							<ul style="font-size:16px;">
                               		 <li><b>(IS101) Advanced Representation and Reasoning</b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> Introduction to Intelligent System<br>
									   <b>Course Description :</b> This course introduces to the students the knowledge representation issues, non-monotonic
									   reasoning, argumentation, reasoning about action and change, temporal and spatial
									   reasoning, rule-based Expert Systems, Semantic networks, model-based and case-based
									   reasoning and planning.</li><br>

									   <li><b>(IS102) Natural Language Processing</b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> Introduction to Intelligent System, HCI<br>
									   <b>Course Description :</b> This course covers the topics on deterministic and stochastic grammars, parsing algorithms
										and semantics. It also covers topics such as corpus-based methods, N-grams and HMMs,
										smoothing and backoff, information retrieval and extraction, language translation and text
										classification.</li><br>
									   
										<li><b>(IS103) Advanced Machine Learning</b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> Introduction to Intelligent System, HCI<br>
									   <b>Course Description :</b> The course covers the definition and examples of broad variety of machine learning tasks,
										general statistical-based learning, parameter estimation (maximum likelihood), inductive logic
										programming (ILP), supervised learning, ensembles, nearest-neighbor algorithms,
										unsupervised Learning and clustering, semi-supervised learning, learning graphical models
										(Cross-reference IS/Reasoning under Uncertainty), performance evaluation (such as cross-
										validation, area under ROC curve), learning theory, the problem of overfitting, the curse of dimensionality, reinforcement learning, and application of Machine Learning algorithms to
										Data Mining.</li><br>

										<li><b>(IS104) Robotics</b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> Introduction to Intelligent System<br>
									   <b>Course Description :</b> The course covers the problems and progress in robotics. It will also discuss the configuration
										space and environmental maps, interpreting uncertain sensor data, localizing and mapping,
										navigation and control, motion planning and multiple-robot coordination.</li><br>

									   <li><b>IS105 – Perception and Computer Vision</b><br>
									   <b>Course Credits :</b> 3 units<br>
									   <b>Course Prerequisites :</b> Introduction to Intelligent System<br>
									   <b>Course Description :</b> The course covers Computer vision including image acquisition, representation, processing
										and properties, shape representation, object recognition and segmentation, and motion
										analysis. It will also tackle audio and speech recognition, modularity in recognition, and 
										approaches to pattern recognition such as classification algorithms and measures of classification quality and statistical techniques.</li><br>
                            </ul>
                            </div>
                            <!-- /row -->

                            
                            <!-- row -->
                            <div class="row">
							<h2>Possible Career Paths</h2>
							
							<ol style="font-size:16px;">
                            <li><b>1. </b>Data Analytics</li>
                                <li><b>2. </b>User Experience</li>
                                <li><b>3. </b>Natural Language Processing</li>
                                <li><b>4. </b>Software Engineer</li>
                                <li><b>5. </b>Data Mining and Anlysis</li>
                                <li><b>6. </b>Machine Learning Engineer</li>
                                <li><b>7. </b>Data Scientist</li>
                                <li><b>8. </b>Big Data Engineer/Architect</li>
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
