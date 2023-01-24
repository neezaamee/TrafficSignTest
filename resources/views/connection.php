<?php
/*$con = mysqli_connect('localhost','root','','ctpfsd');
if(!$con)
{
	echo "Db Connection Error ".mysqli_error($con) ;
}
else
{
	echo "";
}*/

$servername = 'localhost';
$username = 'ctpfsdgo';
$password = 'CaFtEOhbON3Y';
//$password = '15VttLlq07';
$dbname = 'ctpfsdgo_web';

$conn = new mysqli($servername, $username, $password, $dbname);

$con = mysqli_connect('localhost','ctpfsdgo','CaFtEOhbON3Y','ctpfsdgo_web');
if(!$con)
{
	echo "Db Connection Error ".mysqli_error($con) ;
}
else
{
	echo "";
}

function CleanData($Data)
{
	$Data = addslashes($Data);
	$Data = trim($Data);
	$Data = stripslashes($Data);
	return $Data;
}
?>
