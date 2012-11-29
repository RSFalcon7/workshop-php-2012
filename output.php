<?php
	header('content-type: text/plain; charset=utf-8');
	$name = 'Pedro';
	$caos['php'] = 2012;
	echo $name . $caos['php'], "\n";
	echo $name, $caos['php'], "\n";
	echo "$name back in ${caos[php]}", "\n";
?>
<?= $name ?>
