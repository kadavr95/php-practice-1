<?php 
	// Practice №1, Task 5, Variant 5
	srand();
	$side = rand(0, 10000)/100; // random value generation 
	$square = pow($side, 2) * 6;
	$volume = pow($side, 3);
	echo 'Side: ' . $side . '<br>Square: ' . $square . '<br>Volume: ' . $volume;
?>