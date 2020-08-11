<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>42-Chat</title>

	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body{
			background: url("https://visualmodo.com/wp-content/uploads/2018/06/Pattern-Backgrounds.jpg") repeat;
		}

		h1 {
			color: #DA444F;
			font-size: 5em;
			text-shadow: 2px 2px black;
			text-align: center;
			margin: 40px 0;
		}

		a {
			color: #DA444F;
			font-size: 5em;
			background-color: white;
			text-align: center;
			text-decoration: none;
			padding: 20px;
			border: 2px solid #DA444F;
			margin: 150px;
		}

	</style>
</head>
<body>

	<?php
	if(isset($_POST['login']) && isset($_POST['password']))
	{
		if(!file_exists("./private"))
			mkdir("./private");

		if(file_exists("./private/passwd"))
		{
			$data = unserialize(file_get_contents("./private/passwd"));

			foreach($data as $user)
			{
				if($user['login'] == $_POST['login'])
				{
					?><h1><?php echo "User already exists\n";?></h1><?php
					return;
				}
			}
		}

		$new_user['login'] = $_POST['login'];
		$new_user['password'] = hash('whirlpool', $_POST['password']);

		$data[] = $new_user;

		file_put_contents("./private/passwd", serialize($data));
		$_SESSION['logged_as_user'] = $new_user['login'];
 		header("Location: ./chat.php");
	}
	else
	{
		echo "Error\n";
	}
	?>

</body>
</html>