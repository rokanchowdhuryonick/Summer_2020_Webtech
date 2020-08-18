<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'delete_failed'){
			echo "Something went wrong... Deletion fail";
		}
	}

	if (isset($_GET['success'])) {
		
		if($_GET['success'] == 'delete_done'){
			echo "Successfully Deleted";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<a href="home.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3>User list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Password</td>
			<td>Email</td>
			<td>Type</td>
			<td>Action</td>
		</tr>

		<?php  
			$users = getAllUser();
			for ($i=0; $i != count($users); $i++) {  ?>
		<tr>
			<td><?=$users[$i]['id']?></td>
			<td><?=$users[$i]['username']?></td>
			<td><?=$users[$i]['password']?></td>
			<td><?=$users[$i]['email']?></td>
			<td><?=$users[$i]['userType']?></td>
			<td>
				<a href="edit.php?id=<?=$users[$i]['id']?>">Edit</a> |
				<a href="../php/delete.php?id=<?=$users[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>