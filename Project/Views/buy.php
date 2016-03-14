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

	<div class="container-fluid">
		<?php

			if(isset($_POST['iPhone']))
			{
				echo '<h3>iPhone/Android/Smartphone Repair</h3>
						<h4>Typical price list</h4>
						<ul class="list-group">
						  <li class="list-group-item">
						    <span class="label label-default label-pill pull-xs-right">$50-300</span>
						    Cracked glass/Broken display (Newer=More expensive)
						  </li>
						  <li class="list-group-item">
						    <span class="label label-default label-pill pull-xs-right">$150</span>
						    Water Damage
						  </li>
						  <li class="list-group-item">
						    <span class="label label-default label-pill pull-xs-right">$40</span>
						    Battery/Charging
						  </li>
						</ul>
						<h4>Steps after purchase</h4>
						<ul class="list-group">
						  <li class="list-group-item">
						    <span class="label label-default label-pill pull-xs-right">Step 1</span>
						    Package your device in your own safe packaging (not responsible for shipping damages), along with your name and email.
						  </li>
						  <li class="list-group-item">
						    <span class="label label-default label-pill pull-xs-right">Step 2</span>
						    Ship your package to: </br>
						    Luke Kljucaric </br>
						    3347 Juliet street </br>
						    Oakland, PA 15213
						  </li>
						  <li class="list-group-item">
						    <span class="label label-default label-pill pull-xs-right">Step 3</span>
						    We will inspect the device and email you with an appropriate quote. If you agree to the charges you will be billed and the device will be fixed.
						  </li>
						  <li class="list-group-item">
						    <span class="label label-default label-pill pull-xs-right">Step 4</span>
						    We will notify you when the fix is complete and provide you with tracking information for your device.
						  </li>
						</ul>
						<h5>All inspection fees are $2.00</h5>
						<h5>You will be notified of the actual charge after the inspection and asked if you accept.</h5>
						';
			}
			elseif (isset($_POST['Computer']))
			{
				echo '<h3>Computer/Laptop Repair</h3>
						<p>list of steps</p>';
			}
			elseif (isset($_POST['iPad']))
			{
				echo '<h3>iPad/iPod/Tablet Repair</h3>
						<p>list of steps</p>';
			}

		?>
		<img src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" align="left" style="margin-right:7px;"> -or-
		<a href="Main.php">Cancel and go back home <span class="glyphicon glyphicon-home"></span></a>
	 </div>'

	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

</body>
</html>