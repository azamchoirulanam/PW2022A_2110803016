<?php
// PHP code to print Floyd's Triangle

// Function to display Floyd's Triangle
function FloydsTriangle($n)
{
	$val = 1;
	
	// loop for number of lines
	for($i = 1; $i <= $n; $i++)
	{
		// loop for number of elements
		// in each line
		for($j = 1; $j <= $i; $j++)
		{
			print($val." ");
			$val++;
		}
		print("\n");
	}
}

// Driver's Code
$n = 6;
FloydsTriangle($n);

// This code is contributed by akash7981
