function validateGender() {
	var gender = document.getElementById('gender').checked;
	document.getElementById('message').style="color:brown";
	if (gender!=true) {
		document.getElementById('message').innerHTML = "*At least one of them has to be selected!";
		return false;
	}

	return true;
}


