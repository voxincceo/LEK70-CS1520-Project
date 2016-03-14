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

<div class="row">
	<img style="float:left" height=15% width=15% src="../Images/VOX.png">
	<div class="container">
  		<h1>VOX Electronic Repair</h1>
  		<p>If you want a toaster in your TV, we can do it.</p> 
  </div>
</div>

<div id="main">
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	  <li class="active"><a href="#Home" data-toggle="tab">Home</a></li>
	  <li><a href="#Services" data-toggle="tab">Services</a></li>
	  <li><a href="#About" data-toggle="tab">About Us</a></li>
	  <li><a href="#Contact" data-toggle="tab">Contact Us</a></li>
	</ul>

	<div id="pages" class="tab-content" style = "background:linear-gradient(to bottom, #ffffff , #ffcc00); height:100%;">
		<div class="tab-pane active" id="Home">
            <?php
            	include("Home.php");
            ?>
        </div>
        <div class="tab-pane" id="Services">
            <?php
            	include("Services.php");
            ?>
        </div>
        <div class="tab-pane" id="About">
            <?php
            	include("About.php");
            ?>
        </div>
        <div class="tab-pane" id="Contact">
            <?php
            	include("Contact.php");
            ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

</body>
</html>