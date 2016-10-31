<?php

$user = 'root';
$pass = '';
$db = 'petnetwork';

$conn = mysqli_connect('localhost', $user , $pass, $db );
//$conn = mysql_connect('localhost', $user, $pass);
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}
?>