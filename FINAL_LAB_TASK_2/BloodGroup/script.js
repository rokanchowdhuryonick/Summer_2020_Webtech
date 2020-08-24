function validateBlood() {
	var blood = document.getElementById('blood').value;
	document.getElementById('message').style="color:brown";

	if (blood==-1) {
		document.getElementById('message').innerHTML = "*Must be selected!";
		return false;
	}
	return true;
}
