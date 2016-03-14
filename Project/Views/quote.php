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
	<?php
		if($_POST['name'] != "" & $_POST['email'] != "" & $_POST['make'] != "" & $_POST['model'] != "" & $_POST['description'] != "")
		{
			#Will add auto email to my email address based on form information
			echo '<div class="container-fluid">
					<h3>Thank you for filling out the form! <span class="glyphicon glyphicon-ok"></span></h3>
					<small>We will respond to your request in less than 24 hours.</small>
					<a href="Main.php">Go back home <span class="glyphicon glyphicon-home"></span></a>
				  </div>';
		}
		else
		{
			echo '<div class="container-fluid">
					<h3>The form was not completed correctly! <span class="glyphicon glyphicon-remove"></span></h3>
					<small>You must fill out all fields of the form.</small>
					<a href="Main.php">Go back home <span class="glyphicon glyphicon-home"></span></a>
				  </div>';
		}

	?>

	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

</body>
</html>