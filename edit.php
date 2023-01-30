<?php
include 'dbconfig.php';

$sid = isset($_GET['sid']) ? $_GET['sid'] : '';

if ($sid =='') {
	print "Invalid ID<br>";
	print "<a href='index.php'>Back to List Page</a>";
	exit;
}

$sql = "SELECT * FROM tbl_guests WHERE sid = $sid";

$result = $mysqli->query($sql);

if ($result->num_rows != 1) {
	print "Invalid ID<br>";
	print "<a href='index.php'>Back to List Page</a>";
	exit;
}

$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Student</title>
	<style>
		input{
			width:185%;
			border-radius:5px;
		}
		h1{
			text-align:center;
		}
		
		
		a{
			color:red;
		}
		fieldset{
			width:30%;
			margin-left:35%;
		}
		button{
			margin-left:80%;
			background-color:rgb(234,182,118);
		}
	</style>
</head>
<body>
<h1>Update Student</h1>
<form action="process.php" method="post">
<fieldset>
	<legend>Update Student</legend>

<input type="hidden" name="sid" value="<?php echo $row['sid'];?>">
<table>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" name="address" value="<?php echo $row['address'];?>"></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
	</tr>
	<tr>
		<td colspan="2">
			<button type="submit" name="submit">Update</button>
		</td>
	</tr>
</table>
</fieldset>
</form>

</body>
</html>