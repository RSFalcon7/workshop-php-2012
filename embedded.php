<?php
	require_once('prelude.php');
?>
<!doctype html>
<html>
	<head>
		<title><?= $title ?></title>
	</head>
	<body>
		<?php if ($ok) { ?>
			<p>Hello <?= $name ?></p>
		<?php } else { ?>
			<p>Bye <?= $name ?></p>
		<?php } ?>
	</body>
</html>