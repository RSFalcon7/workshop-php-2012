<?php
	header('content-type: text/plain; charset=utf-8');
	$name = 'Pedro';            # string(5) "Pedro"
	$s1 = '$name';              # string(5) "$name"
	$s2 = "$name";              # string(5) "Pedro"
	$s3 = $s1 . ' = ' . $s2;    # string(10) "$name = Pedro"
	$s4 = "Oh no!\n\t" . 'The line broke';
								# string(22) "Oh no!
	                            #     The line broke"

	var_dump($name);
	var_dump($s1);
	var_dump($s2);
	var_dump($s3);
	var_dump($s4);
?>
