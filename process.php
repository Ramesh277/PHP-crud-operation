<?php

include 'dbconfig.php';


$sid = isset($_POST['sid']) ? $_POST['sid'] : '';
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];


if ($sid == '') {
	$sql = "INSERT INTO tbl_guests (name, address, email, mobile) VALUES ('$name','$address','$email','$mobile')";

} else {
	$sql = "UPDATE tbl_guests SET name = '$name', address = 
	'$address', mobile = '$mobile', email = '$email' WHERE sid = $sid";
}
$mysqli->query($sql);

header('Location: index.php');

?>



