<!DOCTYPE html>
<html>
<head>
	<title>Transportation</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style>
		body {
			text-align: center;
			
		}
	li {
		text-decoration: underline;
		list-style-type: none;
	

	}
	.question {
			color: darkslategrey;
		}
	.jumbotron {
		background-image: url(img/another.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		border-radius: 50px;
	}
	.jumbotron  h5,h3{
		color: white;
	}	
	</style>
</head>
<body>
	<h2><u>In transportation.php:</u></h2>
		<p class="question">-You will create an array, print it to the browser then ask the user to add on to it.<br><br>
		-Create an array of modes of transportation, including automobile,jet,train,ferry. Print to the browser,<br> "Travel takes many forms, whether across the country, or around the world. Here is a list of some comon modes of transport:".<br> Follow this with an unordered list created by iterating through the array you created.<br><br>
		-Next,give the user a text box and ask the user to add other modes of transport to the list separated by commas, then add these values to your original array.<p>
			<hr>


	<div class=" container jumbotron">

		<?php
		if (isset($_POST["enter"])) {
		}
		array_push($modesOfTransport, $otherModes);
		$modesOfTransport= array("Jet "," Automobile "," Train "," Ferry ");
		$otherModes=array($_POST['transport']);
		
		echo "<h3>Travel takes many forms, whether across the country, or around the world.<br>Here is a list of some common modes of transport:</h3><br>";
		foreach ($modesOfTransport as $mode) {
		echo "<h5> 
		<ul>
		<li> $mode </li>
		</ul> 
		</h5>";
		}

		
		
	

		?>
		<br>
		<h5>Add other modes of transportation separated by commas</h5>
		<form class="form" action="transportation.php" method="post">
			<input type="text" name="transport[]" placeholder="Modes of transport">
			<input type="submit" name="enter" value="Enter!">
		</form>
		
		<?php

		?>

	</div>	
</body>
</html>