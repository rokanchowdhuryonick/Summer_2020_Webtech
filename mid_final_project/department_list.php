<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) ||  ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:index.php');
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Department List</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					Department List
				</h1>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<?php include_once 'includes/topbar.php'; ?>
			</td>
		</tr>
		<tr height="360px">
			<td width="25%">
				<?php include_once 'includes/sidebar.php'; ?>
			</td>
			<td align="center" bgcolor="cadetblue">
				<?php if(isset($_SESSION['message']) && !empty($_SESSION['message'])) echo $_SESSION['message']; unset($_SESSION['message']); ?>
				<table width="100%">
					<tr>
						<td align="right">
							<input type="text" name="search" placeholder="Search..">
						</td>
					</tr>
				</table><br>
				<table width="100%" border="1" cellpadding="5">
					<tr>
						<th>Sl. No</th>
						<th>Department Name</th>
						<th>Faculty</th>
						<th>Created</th>
						<th>Action</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Computer Science & Engineering</td>
						<td>Faculty of Science and Technology</td>
						<td>10/12/2010</td>
						<td>[<a href="edit_department.php?deptId=1">Edit</a>] [<a href="delete_account.php?deptId=1">Delete</a>]</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Software Engineering</td>
						<td>Faculty of Science and Technology</td>
						<td>12/01/2011</td>
						<td>[<a href="edit_department.php?deptId=2">Edit</a>] [<a href="delete_account.php?deptId=2">Delete</a>]</td>
					</tr>
					<tr>
						<td>3</td>
						<td>BBA</td>
						<td>Faculty of Business and Administration</td>
						<td>15/01/2011</td>
						<td>[<a href="edit_department.php?deptId=3">Edit</a>] [<a href="delete_account.php?deptId=3">Delete</a>]</td>
					</tr>
					<tr>
						<td>4</td>
						<td>English</td>
						<td>Faculty of Art & Social Sciences</td>
						<td>15/01/2011</td>
						<td>[<a href="edit_department.php?deptId=4">Edit</a>] [<a href="delete_account.php?deptId=4">Delete</a>]</td>
					</tr>
					<tr>
						<td>5</td>
						<td>LLB</td>
						<td>Faculty of Art & Social Sciences</td>
						<td>22/10/2015</td>
						<td>[<a href="edit_department.php?deptId=5">Edit</a>] [<a href="delete_account.php?deptId=5">Delete</a>]</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="65px" bgcolor="dimgray" colspan="3">
				<center>Copyright &copy; Rokan Chowdhury Onick</center>
			</td>
		</tr>
	</table>

</body>
</html>