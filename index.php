<?php

include 'dbconfig.php';

$sql = "SELECT * FROM tbl_guests";

$results = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Management System</title>
	<style>
		table { 
			width:60% ;
			margin-left:20%;
				
		}
		h1,h3{
		  text-align: center;
		}
		a{
			color:red;
		}

	</style>
</head>
<body>
<h1>Student Mamanagement System</h1>
<h3>Student details  &nbsp;&nbsp;<a href="create.php">Add Student</a></h3>
<?php if ($results->num_rows> 0):?>
<table  border="2">
	<thead>
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $sn=1;?>
		<?php while($row = $results->fetch_assoc()):?>
			<tr>
				<td><?php echo $sn++;?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['mobile'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['address'];?></td>
				<td>
					<a href='edit.php?sid=<?php echo $row['sid'];?>'>Edit</a>&nbsp;&nbsp;
					<a href='delete.php?sid=<?php echo $row['sid'];?>'>Delete</a>
				</td>
			</tr>
		<?php endwhile;?>
	</tbody>

</table>
<?php else:?>
	<h3>No Records</h3>
<?php endif;?>
</body>
</html>