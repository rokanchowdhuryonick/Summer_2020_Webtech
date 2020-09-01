<?php
	require_once('../php/session_header.php');
	require_once('../service/companyService.php');

	if (isset($_GET['id'])) {
		$company = getCompanyByID($_GET['id']);	
	}else{
		header('location: companyList.php');
	}
	
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
						<legend>Edit Company</legend>
						<table>
							<tr>
								<td>Company Name</td>
								<td><input type="text" value="<?=$company['company_name']?>" name="companyName"></td>
							</tr>
							<tr>
								<td>Profile Description</td>
								<td><textarea name="description"><?=$company['profile_description']?></textarea></td>
							</tr>
							<tr>
								<td>Industry</td>
								<td><input type="text" name="industry" value="<?=$company['industry']?>"></td>
							</tr>
							<tr>
								<td>Company Website</td>
								<td><input type="text" name="website" value="<?=$company['company_website']?>"></td>
							</tr>
							<tr>
								<td>Logo</td>
								<td><input type="file" name="logo"><br>
									<img height="60%" src="<?=$company['company_logo']?>">
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="hidden" name="id" value="<?=$company['id']?>">
									<input type="submit" name="editCompany" value="Update Company">
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