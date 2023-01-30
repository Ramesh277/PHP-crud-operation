<?php

$host = '127.0.0.1'; // localhost
$user = 'root';
$pass = 'admin';
$db   = 'db_guestbook';

$mysqli = new mysqli($host,$user,$pass,$db);

if ($mysqli->connect_error) {
	die('Could not connect to db server: ' . $mysqli->connect_error);
}

?>