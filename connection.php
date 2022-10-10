<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php

		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "login";

		if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
		{
			die("failed to connect!");
		}
?>

</body>
</html>