<!DOCTYPE html>
<html>
<head>
	<title>CAT 1</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style>
		body{
			text-align: center;
		}
		.jumbotron {
			background-image: url(img/calendar.gif);
			background-position: center;
			background-size: 40%;
			border-radius: 50px;

		}
		
	</style>
</head>
<body>
	<h3> In months.php:</h3>
		<p>-First create an array called $months. Use the names of the months as keys, and the number of days for each month a values. For february, use the following for your value: "28 days, if leap year 29".<br><br>
		-Next, write a function to create an option element for a form's select field. Make sure each option will be upper case. Both the array and the function should precede the HTML for the page.
		<br><br>
		-Once again, you will be requesting user input. Create a form for the user with the request, "Please choose a month." Next, provide a select field with the months as options, looping through the array you created and using the function to create the option elements.<br><br>
		-When the user clicks the submit buttn, return the statement "The month of $month has $number days.", where $month is the name of the month the user chose and $number is the number of days. Be sure to include a different response for february.</p>
		<hr>
			<div class=" container jumbotron">
			<?php
		
		 
		$months = [
			"January" => 31,
			"February" => $ran,
			"March" => 31,
			"April" => 30,
			"May" => 31,
			"June" => 30,
			"July" => 31,
			"August" => 31,
			"September" => 30,
			"October" => 31,
			"November" => 30,
			"December" => 31
		];
		function press($monthArrays){
			echo "<option value=''>Please Select Month </option>";
			echo "<option value=''>------</option>";
			foreach ($monthArrays as $month => $number) {
				$monthArrays = strtoupper($month);
				
				echo "<option value='$monthArrays'>$monthArrays </option>";
			}
		}

		if (isset($_POST['submit'])){
				$specificMonth = $_POST['monthSelect'];
				$numbers = $months[$specificMonth];
				$date=strval($numbers);

				if ($specificMonth!=="February") {
					echo "<h4> This month of <strong>$specificMonth</strong> has $numbers days</h4>";

				}elseif ($specificMonth=="February") {
					echo "The month of $specificMonth has 28 days. 29 if leap year";
				} 
			}
			
		?>


			
			
		<div class="container ">
			
				<form action="months.php" method="post">
				<div class="form-group">
					
					<select class="Form-control" name="monthSelect">
						<?php 
						press($months);
						?>
					</select>

				</div>
				<input class="btn btn-info" type="submit" name="submit" value="Go!">	
			</form>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
			
	</div>
	</body>
	<br>
	</html>