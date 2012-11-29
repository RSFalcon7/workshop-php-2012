<?php
	include_once('mysqlinfo.php');
	$name = 'Pedro Costa';

	try {
		$mysql_cons = "mysql:host=$mysql_host;dbname=$mysql_db";
		$dbh = new PDO($mysql_cons, $mysql_user, $mysql_pass); # connect
		$rows = $dbh->query('SELECT * from posts', PDO::FETCH_ASSOC);
		$dbh = null; # close the connection
	} catch (PDOException $e) {
		$msg = $e->getMessage();
		die("Error: $msg\n");
	}
?>
<!doctype html>
<html>
	<head>
		<title>Exemplo</title>
		<link rel="stylesheet" type="text/css" href="../global/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../global/css/custom.css">
	</head>
	<body>
		<section>
			<h1><?= $name ?></h1>
			<h2>Hello</h2>
		</section>
		<table class="table">
			<thead>
				<th>Título</th>
				<th>Criado em</th>
				<th>Corpo</th>
			</thead>
		<?php if (isset($rows)) {
			foreach ($rows as $row) { ?>
				<tr>
					<?php foreach ($row as $field) { ?>
						<td><?= $field ?></td>
					<?php } ?>
				</tr>
		<?php }
		} else { ?>
			<tr>
				<td colspan="3">Não há linhas</td>
			</tr>
		<?php } ?>
		</table>
	</body>
</html>