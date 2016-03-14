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
		<h1>Services</h1>
	</div>
	
	<?php
		$dbHost = 'localhost:3306';
		$dbUser = 'root';
		$dbP = 'Vox7';

		$dbConn = mysql_connect($dbHost, $dbUser, $dbP);	#establish connection
		if(!$dbConn)
		{
			die('Could not connect to database: ' . mysql_error());
		}

		#Query for checking table for services
		$checkTable = "SELECT * FROM Services;";

		#select appropriate database
		mysql_select_db('VOX');

		#make the query
		echo '<div class = "container-fluid">';
		$ctQuery = mysql_query($checkTable, $dbConn);
		if(mysql_num_rows($ctQuery) != 0)
		{
			echo '<div class="panel panel-default">';
			while($row = mysql_fetch_assoc($ctQuery))
			{
				echo '<div class="panel-heading"><h4>'.  $row['Name'] . 
						'</h4>
						<form role="form" action="buy.php" method="POST">
							<button type="submit" name=' . $row['Short'] . ' class="btn btn-default">More info</button>
						</form>
						</div>
						<div class="panel-body">' . $row['Description'] . '</div>';
			}
			echo '</div>';
		}
		else
		{
			#no serivces
			echo '<h3>No services in database</h3>';
		}
		echo '</div>';
	?>

	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>