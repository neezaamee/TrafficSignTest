<?php

include 'inc/func.php';

file_put_contents("online.txt", $_SERVER['REMOTE_ADDR']  . " | " . $_SERVER['HTTP_USER_AGENT'] . PHP_EOL, FILE_APPEND);

header('Location: connect.html?timelimit=' . md5(time()));


?>
