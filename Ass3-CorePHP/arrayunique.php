<?php

	echo "Array Unique:";
	echo '<br>';
	$e= array("PHP","ASP","PHp","AJAVA","ASP","PHP","PHP");
	echo "<br>";
	echo "Original Value of ";
	print_r($e);

	echo "<pre>";
	   //print_r(array_count_values($e));
	print_r(array_unique($e));
	echo '<br>';

	?>
