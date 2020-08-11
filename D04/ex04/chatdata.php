<?php

	session_start();

	if(file_exists("./private/chat"))
	{
		$data = unserialize(file_get_contents("./private/chat"));

		foreach($data as $message)
		{
			if($message['login'] == $_SESSION['logged_as_user'])
			{
				?><p><span style="color: red;">Me: </span><?php echo $message['message']?></p><?php
			}
			else
			{
				?><p><span style="color: blue;"><?php echo $message['login'] ?>: </span><?php echo $message['message']?></p><?php
			}
		}
	}
?>