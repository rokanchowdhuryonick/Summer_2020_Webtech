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
	<title>On Hold Accounts List</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					On Hold Accounts List
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
						<th width="1%" height="30px">Sl</th>
						<th>Account Type</th>
						<th>User ID</th>
						<th>Name</th>
						<th>Dept.</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Action</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Teacher</td>
						<td>18-1002-1</td>
						<td>Md. Rokan Chowdhury Onick</td>
						<td>CSE</td>
						<td>hello@rokanbd.cf</td>
						<td>01771891512</td>
						<td>[<a href="view_user.php?teacherId=1">View</a>] [<a href="verify.php?teacherId=1">Verify</a>] [<a href="delete_account.php?onholdId=1">Delete</a>]</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Student</td>
						<td>19-30002-1</td>
						<td>Mr. Jhon</td>
						<td>CSE</td>
						<td>jhon@gmail.com</td>
						<td>01999523253</td>
						<td>[<a href="view_user.php?studentId=2">View</a>] [<a href="verify.php?studentId=2">Verify</a>] [<a href="delete_account.php?onholdId=2">Delete</a>]</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Student</td>
						<td>19-33003-1</td>
						<td>Miss. Fatema</td>
						<td>BBA</td>
						<td>fatem@gmail.com</td>
						<td>0188885777</td>
						<td>[<a href="view_user.php?studentId=3">View</a>] [<a href="verify.php?studentId=3">Verify</a>] [<a href="delete_account.php?onholdId=3">Delete</a>]</td>
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