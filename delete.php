<?php
include 'dbconfig.php';

$sid = isset($_GET['sid']) ? $_GET['sid'] : '';

if ($sid =='') {
	print "Invalid ID<br>";
	print "<a href='index.php'>Back to List Page</a>";
	exit;
}

$sql = "DELETE FROM tbl_guests WHERE sid = $sid";

$result = $mysqli->query($sql);

header('Location: index.php');

?>