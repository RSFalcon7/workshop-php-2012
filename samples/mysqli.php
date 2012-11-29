<?php
	header('content-type: text/html; charset=utf-8');
	require_once('mysqlinfo.php');

	$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

	if ($con->connect_error) {
		die('Connect Error (' . $con->connect_errno . ') ' . $con->connect_error);
	}

	echo 'Success... ', $con->host_info, "\n";

	if ($result = $con->query('SELECT * FROM posts')) {
		while ($row = $result->fetch_row()) {
			print_r($row);
		}
		$result->close;
	}

	$con->close();
?>