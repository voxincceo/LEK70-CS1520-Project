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

<div class = "container-fluid">
	<h1>VOX Electronic Repair</h1>
	<div class="row container-fluid">
		<div class="col-xs-8">
			<div class="container-fluid">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Common Services <span class="glyphicon glyphicon-wrench"></h4></div>
					<div class="panel-body">
						<div class="list-group">
						  <div class="list-group-item">
						  	<h5 class="list-group-item-heading">iPhone/Android/Smartphone Repair</h5>
						  	<p class="list-group-item-text">Glass, display, water damage, etc! We can also fix almost every software probelm as well! We support every smartphone!</p>
						  </div>
						  <div class="list-group-item">
						  	<h5 class="list-group-item-heading">Computer/Laptop Repair</h5>
						  	<p class="list-group-item-text">Mac, PC, and Linux operating systems! Hardware upgrades and fixes! Software fixes/virus, trojan, etc removal/computer speed-up!</p>
						  </div>
						  <div class="list-group-item">
						  	<h5 class="list-group-item-heading">Game Console Repair</h5>
						  	<p class="list-group-item-text">Disc read errors, "Red ring/light" repairs, HDD upgrades, controller fixes, console/controller custom mods!</p>
						  </div>
						  <div class="list-group-item">
						  	<h5 class="list-group-item-heading">Tabet Repair</h5>
						  	<p class="list-group-item-text">iPad/Android/iPod/etc. Glass, display, and water damage fixes along with software fixes as well! </p>
						  </div>
						  <div class="list-group-item">
						  	<h5 class="list-group-item-heading">Custom Inquiries</h5>
						  	<p class="list-group-item-text">As our slogan says, "If you want a toaster in your TV, we can do it" no matter what kind of fix or custom modifcation you need, send us a request!</p>
						  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Hours <span class="glyphicon glyphicon-time"></span></h4></div>
					<div class="panel-body">We don't have set working hours, but we work 24/7 to get your devices fixed and in your hands as fast as possible!</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Deals <span class="glyphicon glyphicon-tags"></span></h4></div>
					<div class="panel-body">We don't have any curent specials/coupons currently, but our service prices are the lowest on the internet guarenteed!</div>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Get a free and quick estimate!</h3>
					<small>If you want to know an estimated price before you send your device in, just submit this form!</small>
				</div>
				<div class="panel-body">
					<form role="form" action="quote.php" method="POST">
						<div class="form-group">
					    	<label for="name">Name:</label>
					    	<input type="text" class="form-control" id="name" name="name">
					  	</div>
						<div class="form-group">
					    	<label for="email">Email address:</label>
					    	<input type="email" class="form-control" id="email" name="email">
					  	</div>
					  	<div class="form-group">
					    	<label for="make">Device Make:</label>
					    	<input type="text" class="form-control" id="make" name="make">
					  	</div>
					  	<div class="form-group">
					    	<label for="model">Device Model:</label>
					    	<input type="text" class="form-control" id="model" name="model">
					  	</div>
					  	<div class="form-group">
					    	<label for="description">Description:</label>
					    	<textarea class="form-control" rows = "5" id="description" name="description"></textarea>
					  	</div>
					  	<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

</body>
</html>