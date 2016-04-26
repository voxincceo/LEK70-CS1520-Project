<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript">
	  		var oldView;

	  		function moreInfo(service){
	  			if(!oldView)
	  			{
	  				oldView = document.getElementById("mainContainer").innerHTML;
	  			}

	  			var xhttp, params;
		  		xhttp = new XMLHttpRequest();
		        xhttp.open("POST", "Buy.php", true);

		        //generate parameters from form
		        params = "service=" + service;
		        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
		        xhttp.send(params);

		        xhttp.onreadystatechange = function() {
		            if (xhttp.readyState == 4 && xhttp.status == 200) {
		            	//display the result of form submission
		            	document.getElementById("mainContainer").innerHTML = xhttp.responseText;
		            }
		        };
	  		}

	  		function showServices(){
	  			document.getElementById("mainContainer").innerHTML = oldView;
	  		}
		</script>
	</head>
	<body>
		<div class = "container-fluid">
			<h1>Services</h1>
		</div>
		
		<?php
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
			$checkTable = "SELECT * FROM Services;";

			#make the query
			echo	'<div class="container-fluid" id="mainContainer">';
			$ctQuery = $dbConn->query($checkTable);
			if($ctQuery->num_rows != 0)
			{
				echo	'<div class="panel panel-default">';
				while($row = $ctQuery->fetch_assoc())
				{
					#show list of services from db
					echo  	'<div class="panel-heading"><h4>'.  $row['Name'] . '</h4>
								<div>
									<button onclick=\'moreInfo("' . $row['Short'] . '")\' class="btn btn-default">More info</button>
								</div>
						  	</div>
							<div class="panel-body">' . $row['Description'] . '</div>';
				}
				echo	'</div></br>';
			}
			else
			{
				#no serivces
				echo	'<h3>No services in database</h3>';
			}
			echo	'</div>';
		?>

		<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	</body>
</html>