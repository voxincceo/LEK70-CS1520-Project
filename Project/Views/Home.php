<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			var visibleErrors = false;

			function checkForm(){
				var error;
				var submit = true;

				//erase current errors
				if(visibleErrors)
				{
					document.getElementById("nameLabel").innerHTML = "Name:";
					document.getElementById("emailLabel").innerHTML = "Email Address:";
					document.getElementById("makeLabel").innerHTML = "Device Make:";
					document.getElementById("modelLabel").innerHTML = "Device Model:";
					document.getElementById("descriptionLabel").innerHTML = "Description:";
				}

				//name field check
				if(document.getElementById("name").value === "")
				{
					error = " Please enter a name!";
					var nameError = error.fontcolor("red");
					document.getElementById("nameLabel").innerHTML += nameError;
					submit = false;
					visibleErrors = true;
				}

				//email field check
				if(document.getElementById("email").value === "")
				{
					error = " Please enter an email!";
					var emailError = error.fontcolor("red");
					document.getElementById("emailLabel").innerHTML += emailError;
					submit = false;
					visibleErrors = true;
				}

				//make field check
				if(document.getElementById("make").value === "")
				{
					error = " Please enter a device manufacturer!";
					var makeError = error.fontcolor("red");
					document.getElementById("makeLabel").innerHTML += makeError;
					submit = false;
					visibleErrors = true;
				}

				//model field check
				if(document.getElementById("model").value === "")
				{
					error = " Please enter a device model!";
					var modelError = error.fontcolor("red");
					document.getElementById("modelLabel").innerHTML += modelError;
					submit = false;
					visibleErrors = true;
				}

				//description field check
				if(document.getElementById("description").value === "")
				{
					error = " Please enter a description!";
					var descriptionError = error.fontcolor("red");
					document.getElementById("descriptionLabel").innerHTML += descriptionError;
					submit = false;
					visibleErrors = true;
				}

				//call get quote if no form errors
				if(submit)
				{
					getQuote();
				}

			}

			function getQuote(){
				var xhttp, params;

				xhttp = new XMLHttpRequest();
			    xhttp.open("POST", "Quote.php", true);

			    //generate parameters from form
			    params = "name=" + document.getElementById("name").value + "&email=" + document.getElementById("email").value + "&make=" + document.getElementById("make").value + "&model=" + document.getElementById("model").value + "&description=" + document.getElementById("description").value;
			    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
			    xhttp.send(params);

			    xhttp.onreadystatechange = function() {
			        if (xhttp.readyState == 4 && xhttp.status == 200) {
			        	//display the result of form submission
			        	document.getElementById("formBody").innerHTML = xhttp.responseText;
			        }
			    };
			}

			function loadForm(){
				/* Show a new blank form
				 * Sorry for the +, wrapping the entire thing in just '' game me a JS parse error so I had to use + to show the html semantics in a human readable way in case of changes here 
				 */
				document.getElementById("formBody").innerHTML = '<div>' +
																	'<div class="form-group">' +
																    	'<label for="name" id="nameLabel">Name:</label>' +
																    	'<input type="text" class="form-control" id="name" name="name">' +
																  	'</div>' +
																	'<div class="form-group">' +
																    	'<label for="email" id="emailLabel">Email Address:</label>' +
																    	'<input type="email" class="form-control" id="email" name="email">' +
																  	'</div>' +
																  	'<div class="form-group">' +
																    	'<label for="make" id="makeLabel">Device Make:</label>' +
																    	'<input type="text" class="form-control" id="make" name="make">' +
																  	'</div>' +
																  	'<div class="form-group">' +
																    	'<label for="model" id="modelLabel">Device Model:</label>' +
																    	'<input type="text" class="form-control" id="model" name="model">' +
																  	'</div>' +
																  	'<div class="form-group">' +
																    	'<label for="description" id="descriptionLabel">Description:</label>' +
																    	'<textarea class="form-control" rows = "5" id="description" name="description"></textarea>' +
																  	'</div>' +
																  	'<button onclick="checkForm()" class="btn btn-default">Submit</button>' +
																'</div>';
			}
		</script>
	</head>
	<body>
		<!-- Home page of the site -->
		<div class="container-fluid">
			<h1>VOX Electronic Repair</h1>
			<div class="row container-fluid">
				<div class="col-xs-8">
					<div class="container-fluid">
						<div class="panel panel-default">
							<div class="panel-heading"><h4>Common Services <span class="glyphicon glyphicon-wrench"></h4></div> <!-- list of typicall services we provide -->
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
					<div class="container-fluid"> <!-- Display information about hours-->
						<div class="panel panel-default">
							<div class="panel-heading"><h4>Hours <span class="glyphicon glyphicon-time"></span></h4></div>
							<div class="panel-body">We don't have set working hours, but we work 24/7 to get your devices fixed and in your hands as fast as possible!</div>
						</div>
					</div>
					<div class="container-fluid"> <!-- Display current deals -->
						<div class="panel panel-default">
							<div class="panel-heading"><h4>Deals <span class="glyphicon glyphicon-tags"></span></h4></div>
							<div class="panel-body">Get a free speed-up/clean-up service for your computer when you purchase the Virus/Trojan/Malware fix!</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="panel panel-default"> <!-- form that is used to email me about a direct quote for a fix -->
						<div class="panel-heading">
							<h3>Get a free and quick estimate!</h3>
							<small>If you want to know an estimated price before you send your device in, just submit this form!</small>
						</div>
						<div class="panel-body" id="formBody"></div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript"> loadForm();</script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

	</body>
</html>