
<?php
	session_start();

	if($_GET['submit'] == 'ok')
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['password'] = $_GET['password'];
		echo "OK";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="." method="get">
		<input type="text" name="login" value="<?php if(isset($_SESSION['login'])){ echo $_SESSION['login'];}?>"><br />
		<input type="password" name="password" value="<?php if(isset($_SESSION['password'])){ echo $_SESSION['password'];}?>"><br />
		<input type="submit" name="submit" value="ok">
	</form>
</body>
</html>