<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) || ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:index.php');
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mail Box</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					Mail Box
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
				<table width="100%" cellpadding="8" border="1">
				<?php if(isset($_GET['detailsId']) && !empty($_GET['detailsId'])){ ?>
					<tr>
						<th>
							From
						</th>
						<td>
							hello@rokanbd.cf
						</td>
					</tr>
					<tr>
						<th>
							Subject
						</th>
						<td>
							There is not subject
						</td>
					</tr>
					<tr>
						<th width="12%">
							Date Time
						</th>
						<td>
							20/12/2019 10:12AM
						</td>
					</tr>
					<tr>
						<th>
							Message
						</th>
						<td>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</td>
					</tr>
				<?php }else{ ?>
					<tr>
						<th>Sl.</th>
						<th>From</th>
						<th>Subject</th>
						<th>Date Time</th>
						<th>Action</th>
					</tr>
					<tr>
						<td>1</td>
						<td>hello@rokanbd.cf</td>
						<td>Testing Mail..</td>
						<td>20/12/2019 10:12AM</td>
						<td><a href="mailbox.php?detailsId=1">View Details</a></td>
					</tr>
				<?php } ?>
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