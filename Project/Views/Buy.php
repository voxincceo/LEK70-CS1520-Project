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
	<div class="container-fluid">	<!-- Php that checks which button is pressed and then displays relevant information about the service -->
		<?php
			$product = $_POST['service'];

			if($_POST['service'] === "iPhone")		#check which button isset
			{
				echo '<h3>iPhone/Android/Smartphone Repair</h3>';
			}
			elseif ($_POST['service'] === "Computer")
			{
				echo '<h3>Computer/Laptop Repair</h3>';
			}
			elseif ($_POST['service'] === "iPad")
			{
				echo '<h3>iPad/iPod/Tablet Repair</h3>';
			}
			elseif ($_POST['service'] === "Game")
			{
				echo '<h3>Game Console Repair</h3>';
			}
			elseif ($_POST['service'] === "Custom")
			{
				echo '<h3>Custom Repair, Upgrade, or Modification</h3>';
			}

			$dbHost = 'localhost:3306';
			$dbUser = 'root';
			$dbP = 'Vox7';
			$db = 'VOX';

			$dbConn = new mysqli($dbHost, $dbUser, $dbP, $db);	#establish connection
			if(!$dbConn)
			{
				die('Could not connect to database: ' . mysql_error());
			}

			#Query for checking table for services
			$checkTable = "SELECT * FROM $product;";

			$ctQuery = $dbConn->query($checkTable);
			echo '<h4>Typical price list</h4>
					<ul class="list-group">';

			if($ctQuery->num_rows != 0)
			{
				while($row = $ctQuery->fetch_assoc())	#make list
				{
					echo '<li class="list-group-item">
					    	<span class="label label-default label-pill pull-xs-right">' . $row['Price'] . '</span>
					    	' . $row['Description'] . '
					  	  </li>';
				}
			}
			else
			{
				#no serivces
				echo '<h3>No information about service in database</h3>';
			}

			echo '</ul>';

			#display information on steps after purchase
			echo '<h4>Steps after purchase</h4>
						<ul class="list-group">
						  <li class="list-group-item">
						    <span class="label label-default label-pill pull-xs-right">Step 1</span>
						    You will receive an email confirming your purchase along with these instructions.
						  </li>
						  <li class="list-group-item">
						    <span class="label label-default label-pill pull-xs-right">Step 2</span>
						    Package your device in your own safe packaging (not responsible for shipping damages), along with your name and email.
						  </li>
						  <li class="list-group-item">
						    <span class="label label-default label-pill pull-xs-right">Step 3</span>
						    Ship your package to: </br>
						    Luke Kljucaric </br>
						    3347 Juliet street </br>
						    Oakland, PA 15213
						  </li>
						  <li class="list-group-item">
						    <span class="label label-default label-pill pull-xs-right">Step 4</span>
						    We will inspect the device and email you with an appropriate quote. If you agree to the charges you will be billed and the device will be fixed.
						  </li>
						  <li class="list-group-item">
						    <span class="label label-default label-pill pull-xs-right">Step 5</span>
						    We will notify you when the fix is complete and provide you with tracking information for your device.
						  </li>
						</ul>
						<h5>All inspection fees are $5.00</h5>
						<h5>You will be notified of the actual charge after the inspection and asked if you accept.</h5>
						';

		?>
		<!-- options to continue PayPal is a TODO-->
		<button class="btn btn-default"><img src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" align="left" style="margin-right:7px;"></button> -or-
		<button onclick="showServices()" class="btn btn-default">Cancel and go back <span class="glyphicon glyphicon-home"></span></button>
	 </div>
	</br>

	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

</body>
</html>