
<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="create.php" method="post">
		<input type="text" name="login"><br />
		<input type="password" name="password"><br />
		<input type="submit" name="submit" value="ok">
	</form>
</body>
</html>