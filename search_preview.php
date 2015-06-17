<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Site Title -->
	<title>Job Search</title>

	<!-- Loading Stylesheet -->
	<link rel="stylesheet" href="stylesheets/style.css">

	<!-- HTML5 Shiv -->
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!-- End Shiv -->
</head>
<body>
	<!-- Start Container Div -->
	<div id="container">

		<!-- Start Header Bar -->
		<div id="head">
			<div class="head-content">
				<h1 class="nine columns"><a href="index.html"><img src="img/logo.png" alt="lgbt safe logo"></a></h1>
				<!-- <a href="">
				 <div id="head-login" class="two columns">
					<img src="http://placehold.it/26x26" alt="">
					<p>Login</p>
				</div> 
				</a> -->
				<a href="post_job.php">
				<div id="head-employer" class="four columns">
					<h1>Employers</h1>
					<p>Post Jobs</p>
				</div>
				</a>
			</div>
		</div>
		<!-- End Header Bar -->
		<div id="search_hero" class="hero">
			
		</div>

		<!-- Start Search Bar -->
			<div id="grey-search">
				<div class="container">
					<form action="search_preview.php" method="post" class="search-form">
						<input type="text" name="jobs" placeholder="Search for Jobs">
						<input type="text" name="location" placeholder="Location">
						<input type="submit" name="search" value="Search">
					</form>
					<p><a href="">Advanced Search</a></p>
				</div>
			</div>
		<!-- End Search Bar -->

		<!-- Start Search Content -->
		<div id="search-content" class="content">
			<!-- Side Bar -->
			<div id="side-bar" class="three columns">
				<h1>Popular Searches:</h1>
					<ul>
						<li><a href="">Graphic Design</a></li>
						<li><a href="">Web Design</a></li>
						<li><a href="">UX</a></li>
						<li><a href="">Law</a></li>
						<li><a href="">Childcare</a></li>
						<li><a href="">Nurse</a></li>
						<li><a href="">San Francisco</a></li>
						<li><a href="">New York</a></li>
						<li><a href="">Retail</a></li>
						<li><a href="">Accounting</a></li>
						<li><a href="">Project Management</a></li>
						<li><a href="">Front-end Web Development</a></li>
						<li><a href="">Customer Service</a></li>
					</ul>
					<h1>Top Employers:</h1>
					<ul>
						<li><a href="">Google</a></li>
						<li><a href="">Twitter</a></li>
						<li><a href="">Younoodle</a></li>
						<li><a href="">Oracle</a></li>
						<li><a href="">Twitch.tv</a></li>
						<li><a href="">Firefox</a></li>
						<li><a href="">Walmart</a></li>
						<li><a href="">Target</a></li>
						<li><a href="">Best Buy</a></li>
						<li><a href="">Nescafe</a></li>
						<li><a href="">Starbucks</a></li>
						<li><a href="">Sony</a></li>
						<li><a href="">Nintendo</a></li>
					</ul>
			</div>
			<!-- End Side Bar -->
			
			<!-- Search Results -->
			<div class="nine columns">
				<div id="search-specifics">
					<h1>Search Specifications:</h1>
					<h2>sort by: <a href="">relavance</a> - <a href="">date</a></h2>
				</div>

				<?php
					// $link = mysqli_connect("69.195.126.104", "tadamwoo_thomas", "~Mtw3301246", "tadamwoo_jobsearch");
					$link = mysqli_connect("localhost", "tadamwoo_thomas", "~Mtw3301246")
					or die("Can't connect to the db.");
					mysqli_select_db($link, "tadamwoo_jobsearch");

					if(isset($_POST['search'])) {
						$job_title = $_POST['jobs'];
						$job_location = $_POST['location'];
						// $specifications = $POST['jobs']. "in" . $_POST['location'];

						$run = mysqli_query($link, "select * from search where keywords like '%$job_title%' ");

						while($row=mysqli_fetch_array($run,MYSQLI_BOTH)) {
							//create the variables according to the table rows here
							$position = $row['position'];
							$company = $row['company'];
							$date = $row['date'];
							$location = $row['location'];
							$link = $row['link'];
							$image = $row['image'];
							$desc = $row['desc'];

							echo "
								<div class='search-result-pre'>
									<div class='nine columns'>
										<h1><a href='result_preview.html'>$position</a></h1>
										<h2>$company</h2>
										<h3>$date</h3>
										<h4>$location</h4>
								</div>
								<img  class='two columns' src='$image' alt='$company image'>
							</div>
							";
						}
					}
				?>
				<!-- <div class="search-result-pre">
					<div class="nine columns">
						<h1><a href="">Design Director</a></h1>
						<h2>Uline</h2>
						<h3>7 days ago</h3>
						<h4>Milwakee, WI</h4>
					</div>
					<img  class="two columns" src="http://placehold.it/100x75" alt="">
				</div> -->
				

				<!-- <div class="search-page-switch">
					<p>Previous 1 2 3 4 5 6 7 Next</p>
				</div> -->
			</div>
			<!-- End Search Results -->

			<!-- Start Search Bar -->
			<div id="grey-search" class="purple twelve columns">
				<div class="container">
					<form action="search_preview.php" method="post" class="search-form">
						<input type="text" name="jobs" placeholder="Search for Jobs">
						<input type="text" name="location" placeholder="Location">
						<input type="submit" name="search" value="Search">
					</form>
					<p><a href="">Advanced Search</a></p>
				</div>
			</div>
			<!-- End Search Bar -->
			
			<!-- Start Footer -->
			<div id="footer" class="twelve columns">
				<div class="container">
					<a href="index.html"><img src="img/logo.png" alt="lgbt safe logo"></a>
					<ul>
						<li><a href="post_job.php">Post Jobs |</a></li>
						<li><a href="">Search Resumes |</a></li>
						<li><a href="">Find Jobs |</a></li>
						<li><a href="">Resume Help</a></li>
					</ul>
					<ul>
						<li><a href="">About LGBT Safe |</a></li>
						<li><a href="">Work for [name] |</a></li>
						<li><a href="">Advertise With Us |</a></li>
						<li><a href="">Partner With Us</a></li>
					</ul>
					<ul>
						<li><a href="">Investor Relations |</a></li>
						<li><a href="">Social Media |</a></li>
						<li><a href="">Terms of Use |</a></li>
						<li><a href="">Privacy Center |</a></li>
						<li><a href="">Accessibility Center |</a></li>
						<li><a href="">Help |</a></li>
						<li><a href="">Security |</a></li>
						<li><a href="">Contact Us |</a></li>
						<li><a href="">Sitemap</a></li>
					</ul>
					<p>Copyright 2015 Thomas Wood</p>
				</div>
			</div>
		<!-- End Footer -->
			
		</div>
		<!-- End Search Content -->

	<!-- End Container Div -->
	
</body>
</html>