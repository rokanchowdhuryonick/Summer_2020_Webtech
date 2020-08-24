<!DOCTYPE html>
<html>
<head>
	<title>Blood Validation | Rokan</title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		echo "Your Submitted Blood Group is: <b>". $_POST['blood']."</b>";
	}
	?>
	<form method="post" action="" onsubmit="return validateBlood()">
		<table>
			<tr>
				<td>Blood Group : </td>
				<td>
					<select name="blood" id="blood">
						<option value="-1">Select Blood</option>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>AB+</option>
						<option>AB-</option>
						<option>O+</option>
						<option>O-</option>
					</select>
				</td>
				<td><span id="message"></span></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2"> <input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

</body>
</html>