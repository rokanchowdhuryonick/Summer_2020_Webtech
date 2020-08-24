function validateDegree() {
	var degree = document.getElementsByName('degree[]');
	document.getElementById('message').style="color:brown";

	if (!checkedTrack(degree)) {
		document.getElementById('message').innerHTML = "*At least one of them has to be selected!";
		return false;
	}
	return true;
}

function checkedTrack(d) {
	for (var i = 0; i < d.length; i++) {
		if (d[i].checked==true) {
			return true;
		}else{
			continue;
		}
	}
	return false;
}