<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) ||  ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:index.php');
	exit();
}
if ((!isset($_GET['deptId']) || empty($_GET['deptId']))) {
	header('location: dashboard.php');
	exit();
}
$message = "";
if (isset($_POST['editDepartment'])) {
	$message = "<font color='darkgreen'>Department Successfully Edited!</font><br>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Department</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					Edit Department
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
				<?php if(!empty($message))echo $message."<br>"; ?>
				<form action="" method="post">
					<table width="100%" cellpadding="6" cellspacing="3">
						<tr>
							<td>
								Select Faculty
							</td>
							<td>
								<select name="faculty">
									<option selected="" value="1">FACULTY OF SCIENCE AND TECHNOLOGY</option>
									<option value="2">Faculty of Business Administration</option>
									<option value="3">Faculty of Art & Social Sciences</option>
								</select>
							</td>
							<td>
								Department Name
							</td>
							<td colspan="3">
								<input type="text" name="deptName" value="Computer Sciences & Engineering" size="50">
							</td>
						</tr>
						<tr>
							<td colspan="6" align="right"><hr>
								<input type="submit" name="editDepartment" value="Edit Department" >
							</td>
						</tr>
					</table>
				</form>
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