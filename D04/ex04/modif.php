<?php
	if($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'])
	{
		if(!file_exists("./private") && !file_exists("./private/passwd"))
		{
			echo "Error\n";
			return;
		}
		else
		{
			$data = unserialize(file_get_contents("private/passwd"));

			$login = $_POST['login'];
			$oldpw = hash('whirlpool', $_POST['oldpw']);
			$newpw = hash('whirlpool', $_POST['newpw']);

			foreach($data as $user)
			{
				if($user['login'] === $login && $user['password'] === $oldpw && $oldpw != $newpw)
				{
					$user['password'] = $newpw;
					file_put_contents('./private/passwd', serialize($data));

					header("Location: ./index.html");
					return;
				}
			}

			echo "Error\n";
			return;
		}
	}
	else
		echo "Error\n";
?>