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
	<title>Notice List</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					Notice List
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
						<th>Subject</th>
						<th width="50%">Notice</th>
						<th>Created</th>
						<th>To</th>
						<th width="12%">Action</th>
					</tr>
					<tr>
						<td>1</td>
						<td>The First Notice</td>
						<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
						<td>10/12/2010</td>
						<td>CSE, All</td>
						<td>[<a href="edit_notice.php?noticeId=1">Edit</a>] [<a href="delete_account.php?noticeId=1">Delete</a>]</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Emergency Call</td>
						<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </td>
						<td>12/01/2011</td>
						<td>SE, Md. Abul</td>
						<td>[<a href="edit_notice.php?noticeId=2">Edit</a>] [<a href="delete_account.php?noticeId=2">Delete</a>]</td>
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