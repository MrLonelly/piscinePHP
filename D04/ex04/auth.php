<?php

function auth($login, $password)
{
	if(file_exists("./private/passwd"))
	{
		$data = unserialize(file_get_contents("./private/passwd"));

		foreach($data as $user)
		{
			if($user['login'] === $login && $user['password'] === hash('whirlpool', $password))
				return true;
		}
	}
	return false;
}

?>