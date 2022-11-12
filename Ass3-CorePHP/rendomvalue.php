<?php

	echo "Array Random:";
	echo '<br>';
	$e= array("PHP","ASP","PHp","AJAVA","ASP","PHP","PHP");
	echo "<br>";
	echo "Original Value of ";
	print_r($e);
	echo "<pre>";

	print_r(array_rand($e,5));
	echo '<br>';

	?>
