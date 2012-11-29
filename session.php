<?php
	header('content-type: text/plain; charset=utf-8');
	session_start();

	if (isset($_GET['off']) && $_GET['off'])
		session_destroy();
	else {
		$now = date('d/m/Y H:i:s');
		echo "Last access: ${_SESSION['last']}\n";
		echo "Now: $now\n";
		$_SESSION['last'] = $now;
	}
?>