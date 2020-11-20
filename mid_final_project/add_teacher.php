<?php
//Coded by Rokan Chowdhury Onick
//From Github.com/rokanchowdhuryonick
session_start();
require_once 'config.php';

if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) ||  ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:index.php');
	exit();
}
$message ="";
if (isset($_POST['addTeacher'])) {
	$message = "<font color='darkgreen'>Teacher Successfully Added! <br>--Rokan</font><br>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Teacher</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					Add Teacher | From Rokan Chowdhury Onick
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
								Name
							</td>
							<td>
								<input type="text" name="name" size="50">
							</td>
							<td>
								Date of Birth
							</td>
							<td colspan="3">
								<input type="date" name="birthday">
							</td>
						</tr>
						<tr>
							<td>
								Email
							</td>
							<td>
								<input type="text" name="email" size="50">
							</td>
							<td>
								Mobile
							</td>
							<td colspan="3">
								<input type="text" name="phone">
							</td>
						</tr>
						<tr>
							<td>
								Address
							</td>
							<td>
								<input type="text" name="address" size="50">
							</td>
							<td>
								Department
							</td>
							<td colspan="3">
								<select name="department">
									<option value="1">Department of CSE</option>
									<option value="2">Department of BBA</option>
									<option value="3">Department of EEE</option>
									<option value="4">Department of English</option>
									<option value="5">Department of Psycology</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								User Id
							</td>
							<td>
								<input type="text" name="username" size="50">
							</td>
							<td>
								Password
							</td>
							<td colspan="3">
								<input type="text" name="password" >
							</td>
						</tr>
						<tr>
							<td>
								Profile Image
							</td>
							<td>
								<input type="file" name="photo" accept="image/*">
							</td>
							<td>
								Position
							</td>
							<td>
								<select name="position">
									<option value="1">Lecturer</option>
									<option value="2">Assistant Professor</option>
									<option value="3">Associate Professor</option>
								</select>
							</td>
							<td>
								Gender
							</td>
							<td>
								<select name="gender">
									<option value="0">Male</option>
									<option value="1">Female</option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="6" align="right"><hr>
								<input type="submit" name="addTeacher" value="Add Teacher" >
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