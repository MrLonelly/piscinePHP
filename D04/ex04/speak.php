<?php 
	session_start();

	if($_POST['message'])
	{
		if(file_exists("./private/chat"))
		{
			$data = unserialize(file_get_contents("./private/chat"));
		}

		$message['login'] = $_SESSION['logged_as_user'];
		$message['message'] = $_POST['message'];

		$data[] = $message;

		file_put_contents("./private/chat", serialize($data));
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Speak</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		input[type="text"] {
			width: 70%;
			height: 35px;
			font-size: 1em;
			padding: 5px;
		}

		input[type="submit"] {
			width: 20%;
			margin: 0 10px;

			height: 38px;
			text-align: center;
		}
	</style>
</head>
<body>
	<form action="speak.php" method="post">
		<input type="text" name="message">
		<input type="submit" name="submit" value="Send Message">
	</form>
</body>
</html>