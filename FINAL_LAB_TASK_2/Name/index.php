<!DOCTYPE html>
<html>
<head>
	<title>Name Validation | R</title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		echo "Your Submitted value is: <b>". $_POST['name']."</b>";
	}
	?>
	<form method="post" action="" onsubmit="return validateName()">
		<table>
			<tr>
				<td>Name : </td>
				<td><input type="text" name="name" placeholder="Enter your name" id="name"></td>
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