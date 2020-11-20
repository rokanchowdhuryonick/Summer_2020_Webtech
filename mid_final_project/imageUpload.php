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
	<title>File Upload</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					File Upload
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
							<input type="file" name="image">
						</td>
						<td>
							<input type="submit" name="">
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
						<td colspan="7" align="right" height="30">
						
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