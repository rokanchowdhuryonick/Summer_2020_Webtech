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
	<title>Course List</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					Course List
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
						<th>Course Name</th>
						<th>Department</th>
						<th>Credit</th>
						<th>Action</th>
					</tr>
					<tr>
						<td>1</td>
						<td>WEB TECHNOLOGIES</td>
						<td>CSE</td>
						<td>3</td>
						<td>[<a href="edit_course.php?courseId=1">Edit</a>] [<a href="delete_account.php?courseId=1">Delete</a>]</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Software Engineering</td>
						<td>CSE</td>
						<td>3</td>
						<td>[<a href="edit_course.php?courseId=2">Edit</a>] [<a href="delete_account.php?courseId=2">Delete</a>]</td>
					</tr>
					<tr>
						<td>3</td>
						<td>DIGITAL ELECTRONICS</td>
						<td>EEE</td>
						<td>3</td>
						<td>[<a href="edit_course.php?courseId=3">Edit</a>] [<a href="delete_account.php?courseId=3">Delete</a>]</td>
					</tr>
					<tr>
						<td>4</td>
						<td>OBJECT ORIENTED PROGRAMMING 1 (JAVA)</td>
						<td>CSE</td>
						<td>3</td>
						<td>[<a href="edit_course.php?courseId=4">Edit</a>] [<a href="delete_account.php?courseId=4">Delete</a>]</td>
					</tr>
					<tr>
						<td>5</td>
						<td>ALGORITHMS</td>
						<td>CSE</td>
						<td>3</td>
						<td>[<a href="edit_course.php?courseId=5">Edit</a>] [<a href="delete_account.php?courseId=5">Delete</a>]</td>
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