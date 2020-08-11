<?php
	session_start();

	if(!$_SESSION['logged_as_user'])
	{
		header("Location: ./index.html");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>42-Chat</title>
	<style>
		iframe {
			border: 1px solid #000;
		}
		
		.chat {
			width: 80%;
			margin: 30px auto;
			height: 550px;
		}

		.chat-input {
			width: 80%;
			margin: 0 auto 30px;
			height: 50px;
		}
	</style>
</head>
<body>
	<iframe class="chat" src="chatdata.php" frameborder="0"></iframe>
	<iframe class="chat-input" src="speak.php" frameborder="0"></iframe>
	<br />
	<br />
	<a href="logout.php">Log out</a>
</body>
</html>