<!DOCTYPE html>
<html>
<head>
	<title>Profile Picture Validation | Rokan Chowdhury Onick</title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		echo "Your Submitted User ID is: <b>". $_POST['userid']."</b>";
		echo "Your Submitted Photo Name is: <b>". $_FILES['photo']['name']."</b>";
	}
	?>
	<form method="post" action="" onsubmit="return validateProfilePicture()">
		<table>
			<tr>
				<td>User ID : </td>
				<td>
					<input type="text" name="userid" placeholder="User Id" id="userid">
				</td>
				<td><span id="message1"></span></td>
			</tr>
			<tr>
				<td>Picture </td>
				<td>
					<input type="file" name="photo" id="photo" accept="image/*">
				</td>
				<td><span id="message2"></span></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2"> <input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

</body>
</html>