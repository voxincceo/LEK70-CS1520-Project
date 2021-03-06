<!DOCTYPE html>
<html lang="en">
	<head>
		<title>VOX Electronic Repair</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<!-- Entrance to the site -->
		<?php
			include("header.html");
		?>

		<div id="main"> <!-- navigation bar -->
			<nav class="navbar navbar-inverse">
				<ul id="tabs" class="nav navbar-nav" data-tabs="tabs">
					<li class="active"><a href="#Home" data-toggle="pill">Home</a></li>
					<li><a href="#Services" data-toggle="pill">Services</a></li>
					<li><a href="#About" data-toggle="pill">About Us</a></li>
					<li><a href="#Contact" data-toggle="pill">Contact Us</a></li>
				</ul>
			</nav>

			<!-- Area left to display other pages that the user has selected via include() -->
			<div id="pages" class="tab-content" style="background:linear-gradient(to bottom, #ffffff , #ffcc00); height:100%;">
				<div class="tab-pane fade in active" id="Home">
					<?php
						include("Home.php");
					?>
				</div>
				<div class="tab-pane fade in" id="Services">
					<?php
						include("Services.php");
					?>
				</div>
				<div class="tab-pane fade in" id="About">
					<?php
						include("About.php");
					?>
				</div>
				<div class="tab-pane fade in" id="Contact">
					<?php
						include("Contact.php");
					?>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

	</body>
</html>