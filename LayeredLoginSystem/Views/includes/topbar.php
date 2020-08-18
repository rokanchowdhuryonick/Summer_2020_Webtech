<table width="100%">
	<tr>
		<td align="left">
			[ <a href="dashboard.php">Dashboard</a> ] | [ <a href="../Views/admins.php">See Another Admins</a> ] | [ <a href="mailbox.php">Mail Box</a> ]
		</td>
		<td align="right">
			Welcome, <a href="profile.php"><?=$_SESSION['name']?></a> [<?php if($_SESSION['userType']=='admin')echo"Admin";else if($_SESSION['userType']=='teacher')echo"Teacher";else echo"Student";?>] | <a href="../Controller/logout.php">Logout</a>
		</td>
	</tr>
</table>
