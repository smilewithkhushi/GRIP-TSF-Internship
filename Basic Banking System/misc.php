<?php

// Input section
// $a = 10
$a = (int)readline('Enter an integer: ');

// $b = 9.78
$b = (float)readline('Enter a floating'
			. ' point number: ');

// Entered integer is 10 and
// entered float is 9.78
echo "Entered integer is " . $a
	. " and entered float is " . $b;
?>


<?php
$p=(float)readline("Principal: ");
$r=(float)readline("Rate: ");
$t=(float)readline("Time: ");
$CI = $p * (pow((1 + $r / 100), $t));

echo "Compound Interest = " . $CI;

?>