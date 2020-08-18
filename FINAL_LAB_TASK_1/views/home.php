<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<table width="100%" border="1">
		<tr>
			<td>
				<?php require_once 'includes/main_menu.php'; ?>
			</td>
		</tr>
		<tr height="300px">
			<td align="center">
				<h1>Welcome Home! <?=$_SESSION['username']?></h1> 
			</td>
		</tr>
	</table>
	 
</body>
</html>