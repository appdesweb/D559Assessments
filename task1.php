<!DOCTYPE>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Generate Multiplication Table</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<div id="container">

<h1>Multiplication Tables</h1>
<h2>Using For Loops, with switch-case statement</h2>
<table>
<caption>1 to 12 times tables</caption>
<tr><?php 
		/**
		* var $h number assigned to header row
		*/
		for ($h=0; $h<=12; $h+=1) {
			echo "<th scope=\"column\">$h</th>"; 
		}
	?>
</tr>
<?php
	/**first for loop - create rows numbered 1 to 12 
	*
	*/
	for ($i=1; $i<=12; $i+=1) {
			//open table row
			//assign class to alternate rows - to change background color
			if ($i%2) {
				echo "<tr class=\"rowbg\">";
			}else {
				echo "<tr>";
			}
			//begin each table row with a header cell
				echo "<th scope='row'>$i</th>"; 
				//define second variable $j to multiply with variable $i
				for ($j=1; $j<=12; $j+=1) {
						
						//calculation
						$result = $i * $j;
						
						switch ($j){
							//assign class to color the cells of squared numbers
							case $i:
								echo "<td class=\"square\">$result</td>";
							break;
							default:							
							//all other cells should not be colored
							echo "<td>$result</td>";
							break;
						}
				}
		//close the table row
		echo "</tr>";
	}
?>
</table>
<h2>Using While Loops with for loop and switch-case statement</h2>
<table>
<caption>1 to 12 times tables</caption>
<tr><?php 
		/**
		* var $h number assigned to header row
		*/
		for ($h=0; $h<=12; $h+=1) {
			echo "<th scope=\"column\">$h</th>"; 
		}
	?>
</tr>
<?php 
	//loop numbers 1 to 12 to create the rows
	$i=1;
	while ($i<=12) {
		$j = 1; //define variable $j to always begin at 1
		//open table row apply background color to every second row with a class
			if ($i % 2) {
				echo "<tr class='rowbg'>";
			}else {
				echo "<tr>";
			}
			//begin each table row with a header cell
			echo "<th scope='row'>$i</th>"; 
			while ($j<=12) {
				//calculation
				$result = $i * $j;
					switch ($j){
						//assign class to color the cells of squared numbers
						case $i:
							echo "<td class=\"square\">$result</td>";
							break;
						default:							
							//all other cells should not be colored
							echo "<td>$result</td>";
							break;
					}	
				$j++;//increment for inner loop		
				
			}									
			//close off the table row
			echo "</tr>";
	$i++;//increment for outer loop
	}
	?>
</table>
</div>
</body>
</html>
