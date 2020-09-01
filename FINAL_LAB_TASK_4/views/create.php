<?php
	require_once('../php/session_header.php');
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
</head>
<body>
	<table width="100%" border="1">
		<tr>
			<td>
				<?php require_once 'includes/main_menu.php'; ?>
			</td>
		</tr>
		<tr height="300px">
			<td align="center">
				<?php
				if (isset($_GET['error'])) {
		
					if($_GET['error'] == 'db_error'){
						echo "Something went wrong...please try again";
					}
				}
				if (isset($_GET['success'])) {	
					if($_GET['success'] == 'done'){
						echo "Successfully Created";
					}
				}
				?>
				<form action="../php/userController.php" method="post">
					<fieldset>
						<legend>Create New User</legend>
						<table>
							<tr>
								<td>Username</td>
								<td><input type="text" name="username"></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="text" name="email"></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="submit" name="create" value="Create">
								</td>
							</tr>
						</table>
					</fieldset>
				</form> 
			</td>
		</tr>
	</table>
	
</body>
</html>