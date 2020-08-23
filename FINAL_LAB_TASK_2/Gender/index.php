<!DOCTYPE html>
<html>
<head>
	<title>Gender Validation | Rokan</title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		echo "Your Submitted Gender is: <b>". $_POST['gender']."</b>";
	}
	?>
	<form method="post" action="" onsubmit="return validateGender()">
		<table>
			<tr>
				<td>Gender : </td>
				<td>
					<input type="radio" name="gender" value="Male"> Male
					<input type="radio" name="gender" value="Female"> Female
					<input type="radio" name="gender" value="Other"> Other
				</td>
				<td><span id="message"></span></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2"> <input type="submit" name="submit" value="Submit"></td>
			</tr>
			<tr>
				<td colspan="4">
					<span id="dump"></span>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>