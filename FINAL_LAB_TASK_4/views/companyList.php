<?php
	require_once('../php/session_header.php');
	require_once('../service/companyService.php');
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
	<table width="100%" border="1" cellpadding="5">
		<tr>
			<td>
				<?php require_once 'includes/main_menu.php'; ?>
			</td>
		</tr>
		<tr height="300px">
			<td align="center">
				<?php
				if (isset($_GET['error'])) {
		
					if($_GET['error'] == 'delete_failed'){
						echo "Something went wrong... Deletion fail";
					}
				}

				if (isset($_GET['success'])) {
					if($_GET['success'] == 'update_done'){
						echo "Successfully updated!";
					}
					if($_GET['success'] == 'delete_done'){
						echo "Successfully Deleted";
					}
				}
				?>
				<h3>Company list</h3>
				<table border="1" cellpadding="8">
					<tr>
						<td>ID</td>
						<td>Company Name</td>
						<td>Description</td>
						<td>Industry</td>
						<td>Website</td>
						<td>Logo</td>
						<td>User ID</td>
						<td>Action</td>
					</tr>

					<?php  
						$company = getAllCompany();
						for ($i=0; $i != count($company); $i++) {  ?>
					<tr>
						<td><?=$company[$i]['id']?></td>
						<td><?=$company[$i]['company_name']?></td>
						<td><?=$company[$i]['profile_description']?></td>
						<td><?=$company[$i]['industry']?></td>
						<td><?=$company[$i]['company_website']?></td>
						<td><img height="50%" src="<?=$company[$i]['company_logo']?>"></td>
						<td><?=$company[$i]['user_account_id']?></td>
						<td>
							<a href="editCompany.php?id=<?=$company[$i]['id']?>">Edit</a> |
							<a href="../php/deleteCompany.php?id=<?=$company[$i]['id']?>">Delete</a> 
						</td>
					</tr>

					<?php } ?>
					
				</table>
			</td>
		</tr>
	</table>
	
	
</body>
</html>