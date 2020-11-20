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
	<title>Salary List</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					Salary List
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
						<th width="2%">Sl. No</th>
						<th>Department</th>
						<th>Position</th>
						<th>Created</th>
						<th>Bonus/Person</th>
						<th>Total Paid Salary</th>
						<th width="12%">Action</th>
					</tr>
					<tr>
						<td>1</td>
						<td>CSE</td>
						<td>Lecturer [Total-30]</td>
						<td>10/12/2010</td>
						<td>30</td>
						<td>12900</td>
						<td>[<a href="delete_account.php?salaryId=1">Delete</a>]</td>
					</tr>
					<tr>
						<td>2</td>
						<td>CSE</td>
						<td>Associate Professor [Total-4]</td>
						<td>10/12/2010</td>
						<td>0</td>
						<td>3200</td>
						<td>[<a href="delete_account.php?salaryId=2">Delete</a>]</td>
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