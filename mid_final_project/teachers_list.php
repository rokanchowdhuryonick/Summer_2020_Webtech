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
	<title>Teachers List</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					Teachers List
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
						<th>Teacher ID</th>
						<th>Name</th>
						<th>Dept.</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Action</th>
					</tr>
					<tr>
						<td>1</td>
						<td>15-1001-1</td>
						<td>Mr. Hamma Hamma</td>
						<td>CSE</td>
						<td>hamma@gmail.com</td>
						<td>0177777777</td>
						<td>Dhaka, BD</td>
						<td>[<a href="view_user.php?teacherId=1">View</a>] [<a href="block_account.php?teacherId=1">Block</a>] [<a href="edit_user.php?teacherId=1">Edit</a>] [<a href="delete_account.php?teacherId=1">Delete</a>]</td>
					</tr>
					<tr>
						<td>2</td>
						<td>15-1002-1</td>
						<td>Mr. Jhon</td>
						<td>CSE</td>
						<td>jhon@gmail.com</td>
						<td>01999523253</td>
						<td>Dhaka, BD</td>
						<td>[<a href="view_user.php?teacherId=2">View</a>] [<a href="block_account.php?teacherId=2">Block</a>] [<a href="edit_user.php?teacherId=2">Edit</a>] [<a href="delete_account.php?teacherId=2">Delete</a>]</td>
					</tr>
					<tr>
						<td>3</td>
						<td>15-1003-1</td>
						<td>Miss. Fatema</td>
						<td>BBA</td>
						<td>fatem@gmail.com</td>
						<td>0188885777</td>
						<td>Dhaka, BD</td>
						<td>[<a href="view_user.php?teacherId=3">View</a>] [<a href="block_account.php?teacherId=3">Block</a>] [<a href="edit_user.php?teacherId=3">Edit</a>] [<a href="delete_account.php?teacherId=3">Delete</a>]</td>
					</tr>
					<tr>
						<td>4</td>
						<td>16-1001-2</td>
						<td>Md. Golam Rabbani</td>
						<td>BBA</td>
						<td>golam@gmail.com</td>
						<td>019999999</td>
						<td>Dhaka, BD</td>
						<td>[<a href="view_user.php?teacherId=4">View</a>] [<a href="block_account.php?teacherId=4">Block</a>] [<a href="edit_user.php?teacherId=4">Edit</a>] [<a href="delete_account.php?teacherId=4">Delete</a>]</td>
					</tr>
					<tr>
						<td>5</td>
						<td>16-1002-2</td>
						<td>Jhone Doe</td>
						<td>EEE</td>
						<td>doe@gmail.com</td>
						<td>0133333333</td>
						<td>Dhaka, BD</td>
						<td>[<a href="view_user.php?teacherId=5">View</a>] [<a href="block_account.php?teacherId=5">Block</a>] [<a href="edit_user.php?teacherId=5">Edit</a>] [<a href="delete_account.php?teacherId=5">Delete</a>]</td>
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