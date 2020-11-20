<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) ||  ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:index.php');
	exit();
}
$message ="";
if (isset($_POST['createNotice'])) {
	$message = "<font color='darkgreen'>Notice successfully created!</font><br>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Notice</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					Create Notice
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
								Select Department
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
								Select Faculty Member
							</td>
							<td>
								<select name="faculty">
									<option value="0">All</option>
									<option value="1">Mr. X</option>
									<option value="2">Mis. Fatema</option>
									<option value="3">Hamma Hamma</option>
									<option value="4">Testing Testing</option>
									<option value="5">RR</option>
								</select>
							</td>
							
						</tr>
						<tr>
							<td>
								Notice Subject
							</td>
							<td colspan="3">
								<input type="text" name="courseName" size="78">
							</td>
						</tr>
						<tr>
							<td>
								Details
							</td>
							<td colspan="3">
								<textarea cols="80" rows="5" placeholder="Write anything bro..."></textarea>
							</td>
						</tr>
						<tr>
							<td colspan="6" align="right"><hr>
								<input type="submit" name="createNotice" value="Create Notice" >
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