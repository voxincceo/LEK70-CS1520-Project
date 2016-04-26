<!DOCTYPE html>
<html lang="en">
	<head>
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
			#generate email
			mail("voxincceo@gmail.com", "VOX Quote", 
				"Name: " . $_POST['name'] . 
				"\nEmail: " . $_POST['email'] .
				"\nMake: " . $_POST['make'] .
				"\nModel: " . $_POST['model'] .
				"\nDescription: " . $_POST['description']);

			#display success
			echo 	'<div class="container-fluid">
						<h3>Thank you for filling out the form! <span class="glyphicon glyphicon-ok"></span></h3>
						<small>We will respond to your request in less than 24 hours.</small>
						<button onclick="loadForm()" class="btn btn-default">Go Back <span class="glyphicon glyphicon-home"></span></button>
				  	</div>';
		?>

		<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

	</body>
</html>