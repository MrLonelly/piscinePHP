
<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>

	<style>
		form {
			margin-bottom: 40px;
		}
		
		input {
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<form action="create.php" method="post">
		<input type="text" name="login" placeholder="login"><br />
		<input type="password" name="password" placeholder="password"><br />
		<input type="submit" name="submit" value="ok">
	</form>
	<form action="modif.php" method="post">
		<input type="text" name="login" placeholder="login"><br />
		<input type="password" name="oldpw" placeholder="oldpwd"><br />
		<input type="password" name="newpw" placeholder="newpwd"><br />
		<input type="submit" name="submit" value="ok">
	</form>
</body>
</html>