<?php
	header('content-type: text/plain; charset=utf-8');
	$names = array('name' => 'Pedro', 'surname' => 'Costa');
	$names[1] = 'CAOS';
	$names['php'] = 2012;
	var_dump($names);
?>
