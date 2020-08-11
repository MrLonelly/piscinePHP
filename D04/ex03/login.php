<?php

	session_start();
	require ("auth.php");

	if(isset($_SESSION['loggued_on_user']))
	{
		header("Location: ./index.php");
	}
	else
	{
		if($_POST['login'] && $_POST['password'])
		{
			if(auth($_POST['login'], $_POST['password']))
			{
				$_SESSION['loggued_on_user'] = $_POST['login'];
				echo "Ok\n";
				header("Location: ./index.php");
			}
			else
				echo "Unauthorized\n";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>

	<style>
		form {
			margin: 100px auto;
			width: 300px;
			border: 1px solid #000;
			border-radius: 10px;
			padding: 10px;
		}

		input[type='text'], input[type='password'] {
			margin-bottom: 10px;
			width: 90%;
			outline: none;
		}
	</style>
</head>
<body>
	<form action="login.php" method="post">
		<input type="text" name="login" placeholder="login"><br />
		<input type="password" name="password" placeholder="password"><br />
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>