<!DOCTYPE html>
<html>
<head>
	<title>Degree Validation | Rokan</title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<?php
	if (isset($_POST['submit'])) {

		echo "Your Submitted Degree is: <br><b>";
		$i=0;
		foreach ($_POST['degree'] as $value) {
			echo ++$i.". {$value}<br>";
		}
		echo "</b>";
	}
	?>
	<form method="post" action="" onsubmit="return validateDegree()">
		<table>
			<tr>
				<td>Degree : </td>
				<td>
					<input type="checkbox" name="degree[]" value="SSC" id="degree"> SSC
					<input type="checkbox" name="degree[]" value="HSC" id="degree"> HSC
					<input type="checkbox" name="degree[]" value="BSc" id="degree"> BSc
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