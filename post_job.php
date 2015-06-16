
<!DOCTYPE html>
<html lang="en">

<?php require_once('config.php'); ?>
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
			</div>
		</div>
		<!-- End Header Bar -->

		<!-- Start Hero Section -->
		<div id="hero-post" class="hero">
			
		</div>
		<!-- End Hero Section -->

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

		<!-- Start Home Content -->
			<div id="post-content" >
				<div class="container">
				<form action="post_job.php" method="post" accept-charset="utf-8">
					<p>Job Title</p><input type="text" name="job_title" placeholder="Finance, Graphic Designer...">
					<p>Company Name</p><input type="text" name="company" placeholder="Google">
					<p>Location</p><input type="text" name="job_location" placeholder="San Francisco, CA">
					<p>Job Description</p><textarea name="desc" cols="40" rows="8" placeholder="Let me tell you about this job."></textarea>
					<input type="submit" name="submit" value="Post this Job Listing">
				</form>
				</div>
			</div> 

			<?php
				$link = mysqli_connect("localhost", "
tadamwoo_thomas", "~Mtw3301246", "tadamwoo_jobsearch");
				mysqli_select_db($link, "search");

				if(isset($_POST['submit'])) {

					$position = $_POST['job_title'];
					$company = $_POST['company'];
					/*$date = $row['date'];*/
					$location = $_POST['job_location'];
					/*$link = $row['link'];
					$image = $row['image'];*/
					$desc = $_POST['desc'];

					mysqli_query($link, "insert into search (position, company, location, desc) values ('$position', '$company', '$location', '$desc')");
					

					// while($row=mysqli_fetch_array($run,MYSQLI_BOTH)) {
					// 	//create the variables according to the table rows here
					// 	// $position = $row['job_title'];
					// 	// $company = $row['company'];
					// 	// /*$date = $row['date'];*/
					// 	// $location = $row['location'];
					// 	// /*$link = $row['link'];
					// 	// $image = $row['image'];*/
					// 	// $desc = $row['desc'];
					// }
				}

			?>
		<!-- End Home Content -->

		<!-- Start Footer -->
			<div id="footer">
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
	<!-- End Container Div -->

</body>
</html>