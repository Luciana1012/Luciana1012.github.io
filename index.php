
<html>
	<head>
		<title>test</title>
	</head>
	<body>
		php test
		<h1>Multiple Script Sections</h1>
		<h2>First Script Section</h2>
		<?php echo "<p>Output from the first script section.</p>";?>
		<h2>Second Script Section</h2>
		<?php echo "<p>Output from the second script section.</p>";?>
		
		<?php
		/*This line is part of the block comment.
		This line is also part of the block comment.
		*/
		echo "<h1>Comments Example</h1>"; //Line comments can follow code statements 
		//This line comment takes up an entire line.
		# This is another way of creating a line comment.
		/*This is another way of creating
		a block comment.*/
		?>
		<?php 
			$votingAge = 18;
			echo $votingAge;
			echo "<p>The legal voting age is ", "- $votingAge -", ".</p>";
		?>
		<?php	
			$salesTotal = 40;
			echo "<p>Your sales total is $$salesTotal</p>";
			$salesTotal = 50;
			echo "<p>Your new sales total is $$salesTotal</p>";
		
		?>
		<?php
		$Provinces = array(
			"Newfoundland and Labrador",
			"Prince Edward Island",
			"Nova Scotia",
			"New Brunswick",
			"Quebec",
			"Ontario",
			"Manitoba",
			"Saskatchewan",
			"Alberta",
			"British Columbia"
			);
		echo "<p>Canada's smallest province is $Provinces[1].<br/>";
		echo "Canada's largest province is $Provinces[4].<p/>";
		?>
		<?php
		$Territories = array("Nunavut", "Northwest Territories", "Yukon Territory");
		echo "<p>Canada has ", count($Provinces), " provinces and ", count($Territories), " territories.<?p><br/>";
		print_r($Provinces)
		?>
		<?php
		$HospitalDepts = array(
			"Anesthesia",  // first element (0)
			"Molecular Biology", //second element (1)
			"Neurology"); //third element (2)
			$HospitalDepts[0] = "Anesthesiology";
			echo "<br/>$HospitalDepts[0]";
		?>
	</body>
</html>