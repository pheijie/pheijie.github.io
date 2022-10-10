<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php

		session_start();

		if(isset($_SESSION['user_id']))
		{
			unset($_SESSION['user_id']);

		}

		header("Location: login.php");
		die;

	?>

</body>
</html>
