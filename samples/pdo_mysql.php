<?php
	header('content-type: text/plain; charset=utf-8');
	try {
		require_once('mysqlinfo.php');
		
		$mysql_cons = "mysql:host=$mysql_host;dbname=$mysql_db";
		$dbh = new PDO($mysql_cons, $mysql_user, $mysql_pass); # connect
		foreach ($dbh->query('SELECT * from posts', PDO::FETCH_ASSOC) as $row) {
			print_r($row);
		}
		$dbh = null; # close the connection
	} catch (PDOException $e) {
		$msg = $e->getMessage();
		die("Error: $msg\n");
	}
?>