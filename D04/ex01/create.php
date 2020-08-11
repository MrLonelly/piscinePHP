<?php
	if($_POST['submit'] == 'ok' && isset($_POST['login']) && isset($_POST['password']))
	{

		if(!file_exists("./private"))
			mkdir("./private");

		if(file_exists("./private/passwd"))
		{
			$str = unserialize(file_get_contents("./private/passwd"));

			foreach($str as $usr)
			{
				if($usr['login'] == $_POST['login'])
				{
					echo "Error\n";
					return;
				}
			}
		}

		$user['login'] = $_POST['login'];
		$user['password'] = hash('wirlpool', $_POST['password']);

		$str[] = $user;

		file_put_contents("./private/passwd", serialize($str));
		echo "OK\n";
	}
	else
		echo "Error\n";
?>