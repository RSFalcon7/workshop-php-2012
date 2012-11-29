<?php
	if (isset($_POST['message']))
		echo $_POST['message'];
	else
		header('location: form.html');
?>