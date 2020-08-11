
<?php

if(!isset($_SERVER['PHP_AUTH_USER']))
{
	header("WWW-Authenticate: Basic realm='Members grup'");
	header("HTTP/1.0 401 Unauthorized");
}
else
{
	if($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'imelespetitsponeys')
	{
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Home</title>
		</head>
		<body>
			Bonjour zaz <br />
			<img src="data:image/png; base64, <?php echo base64_encode(file_get_contents("img/42.png"))?>">
		</body>
		</html>
		<?php
	}
	else
	{
		header("WWW-Authenticate: Basic realm='Members group only'");
		header("HTTP/1.0 401 Unauthorized");
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Unauthorized</title>
		</head>
		<body>
			<h4>Unauthorized access ! only for members</h4>
		</body>
		</html>
		<?php
	}
}

?>