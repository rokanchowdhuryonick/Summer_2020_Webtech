<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) ||  ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:index.php');
	exit();
}
$message ="";
if (isset($_POST['createStudentPayment'])) {
	$message = "<font color='darkgreen'>Student Payment successfully added!</font><br>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Student Payment</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					Student Payment
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
					<table width="100%" cellpadding="8">
						<tr>
							<td>
								Student Id
							</td>
							<td>
								<input type="text" name="studentId">
							</td>
							<td>
								Semester
							</td>
							<td>
								<input type="text" name="semesterName">
							</td>
							<td>
								Credit Enrolled
							</td>
							<td>
								<input type="text" name="credit">
							</td>
						</tr>
						<tr>
							<td>
								Development Fee
							</td>
							<td>
								<input type="text" name="devFee">
							</td>
							<td>
								Lab Fee
							</td>
							<td>
								<input type="text" name="labFee">
							</td>
							<td>
								Due Fee
							</td>
							<td>
								<input type="text" name="dueFee">
							</td>
						</tr>
						<tr>
							<td align="center" colspan="6">
								<input type="submit" name="createStudentPayment" value="Pay">
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