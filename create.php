<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Student</title>
	<style>
			
		input{
			width:185%;
			border-radius:5px;
		}
		h1,h2{
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

<h1>Student management System</h1>
<h2>Add Student <a href="index.php">List of Students</a></h2>
<form action="process.php" method="post">
	<fieldset>
		<legend>Add student</legend>
<table >
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" required></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" name="address" required></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td><input type="text" name="mobile" required></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" required></td>
	</tr>
	<tr>
		<td colspan="2">
			<button type="submit" name="submit" >Submit</button>
		</td>
	</tr>
</table>
</fieldset>
</form>

</body>
</html>