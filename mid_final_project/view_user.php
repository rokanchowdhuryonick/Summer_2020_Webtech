<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) ||  ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:index.php');
	exit();
}

if ((!isset($_GET['teacherId']) || empty($_GET['teacherId'])) && (!isset($_GET['studentId']) || empty($_GET['studentId']))) {
	header('location: dashboard.php');
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Pofile</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					View Profile
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
				<table width="90%" border="1" cellpadding="6">
					<tr>
						<td rowspan="6" width="10%">
							<img src="images/ProfileImage.jpg" height="200px" width="">
						</td>
						<td>
							User ID
						</td>
						<td>
							15-1001-2
						</td>
						<td>
							Name
						</td>
						<td colspan="3">
							Mr. Demo Man
						</td>
					</tr>
					<tr>
						<td>
							Department
						</td>
						<td>
							Computer Science & Engineering
						</td>
						<td>
							Date of Birth
						</td>
						<td colspan="3">
							20/10/1985
						</td>
						
					</tr>
					
					<tr>
						<td>
							Email
						</td>
						<td>
							demo@gmail.com
						</td>
						<td>
							Phone
						</td>
						<td  colspan="3">
							0188888888
						</td>
					</tr>
					<tr>
						<td>
							Address
						</td>
						<td>
							Demo, Bangladesh
						</td>
						<td>
							Gender
						</td>
						<td colspan="3">
							Male
						</td>
						
					</tr>
				<?php if (isset($_GET['teacherId'])) { ?>
					<tr>
						<td>
							Position
						</td>
						<td>
							Associate Professor
						</td>
						<td>
							Join Date
						</td>
						<td>
							10/02/2019
						</td>
						<td>
							Salary
						</td>
						<td>
							800
						</td>
					</tr>
				<?php }else if (isset($_GET['studentId'])) { ?>
					<tr>
						<td>
							Father
						</td>
						<td>
							MD. Demo Sr.
						</td>
						<td>
							Mother
						</td>
						<td colspan="3">
							Mrs. Demo
						</td>
					</tr>
					<tr>
						<td>
							Admission Date
						</td>
						<td>
							20/01/2018
						</td>
						<td>
							Credit Complete
						</td>
						<td>
							0
						</td>
						<td>
							Current CGPA
						</td>
						<td>
							0.00
						</td>
					</tr>
				<?php } ?>
					<tr>
						<td colspan="7" align="right" height="30">
						<?php if(isset($_GET['teacherId'])){ ?>
							<a href="edit_user.php?teacherId=1">Edit Teacher</a>
						<?php }elseif (isset($_GET['studentId'])) {
							?>
							<a href="edit_user.php?studentId=1">Edit Student</a>
						<?php } ?>
						</td>
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