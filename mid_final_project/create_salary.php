<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) ||  ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:index.php');
	exit();
}
$message ="";
if (isset($_POST['createSalary'])) {
	$message = "<font color='darkgreen'>Salary successfully created!</font><br>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Salary</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					Create Salary
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
					<table width="80%" cellpadding="8">
						<tr>
							<td>
								Department
							</td>
							<td>
								<select name="department">
									<option value="1">Computer Science & Engineering</option>
									<option value="2">Software Engineering</option>
									<option value="3">BBA</option>
									<option value="4">English</option>
									<option value="5">LLB</option>
								</select>
							</td>
							<td>
								Designation
							</td>
							<td>
								<select name="position">
									<option value="1">Lecturer</option>
									<option value="2">Assistant Professor</option>
									<option value="3">Associate Professor</option>
								</select>
							</td>
							<td>
								Bonus
							</td>
							<td>
								<input type="text" name="bonus">
							</td>
						</tr>
						<tr>
							<td align="right" colspan="6">
								<input type="submit" name="createSalary" value="Create Salary">
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