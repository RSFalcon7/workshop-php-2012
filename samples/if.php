<?php
	header('content-type: text/plain; charset=utf-8');
	$a = 5;
	$b = 4;
	if ($a == $b)
		echo '$a and $b are the same';
	else {
		$c = $a * $b;
		echo '$c  =  $a * $b  =  '. "$a * $b  =  $c";
	}
?>