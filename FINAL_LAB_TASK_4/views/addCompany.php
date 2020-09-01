<?php
	require_once('../php/session_header.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
						echo "Something went wrong... Creation Failed!";
					}
					if($_GET['error'] == 'null_value'){
						echo "Field can't be empty..!!";
					}
				}
				?>
				<form action="../php/companyController.php" method="post" enctype="multipart/form-data">
					<fieldset>
						<legend>Create New Company</legend>
						<table>
							<tr>
								<td>Company Name</td>
								<td><input type="text" name="companyName"></td>
							</tr>
							<tr>
								<td>Profile Description</td>
								<td><textarea name="description"></textarea></td>
							</tr>
							<tr>
								<td>Industry</td>
								<td><input type="text" name="industry"></td>
							</tr>
							<tr>
								<td>Company Website</td>
								<td><input type="text" name="website"></td>
							</tr>
							<tr>
								<td>Logo</td>
								<td><input type="file" name="logo"></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="submit" name="createCompany" value="Add Company">
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