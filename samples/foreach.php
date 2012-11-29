<?php
	header('content-type: text/plain; charset=utf-8');

	$me = array('name' => 'Pedro', 'surname' => 'Costa');

	foreach ($me as $name)
		echo "$name\n";

	foreach ($me as $key => $value)
		echo "$key => $value\n";
?>