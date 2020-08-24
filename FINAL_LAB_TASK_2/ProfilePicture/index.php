<!DOCTYPE html>
<html>
<head>
	<title>Profile Picture Validation | Rokan Chowdhury Onick</title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		echo "Your Submitted Blood Group is: <b>". $_POST['userid']."</b>";
	}
	?>
	<form method="post" action="" onsubmit="return validateBlood()">
		<table>
			<tr>
				<td>User ID : </td>
				<td>
					<input type="text" name="userid" placeholder="User Id" id="userid">
				</td>
				<td><span id="message"></span></td>
			</tr>
			<tr>
				<td>Picture </td>
				<td colspan="4">
					<input type="file" name="photo" id="photo" accept="image/*">
				</td>
			</tr>
			<tr>
				<td></td>
				<td colspan="4"> <input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

</body>
</html>