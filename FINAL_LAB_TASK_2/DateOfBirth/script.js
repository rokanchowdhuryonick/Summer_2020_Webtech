function validateDob() {
	var day = document.getElementById('day').value.trim();
	var month = document.getElementById('month').value.trim();
	var year = document.getElementById('year').value.trim();
	document.getElementById('message').style="color:brown";
	if (day.length==0 || month.length==0 || year.length==0) {
		document.getElementById('message').innerHTML = "*Cannot be empty!";
		return false;
	}else if (!validateNumber(day,month,year)) {
		document.getElementById('message').innerHTML = "*Must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)!";
		return false;
	}else{
		return true;
	}

	return true;
}


function validateNumber(d,m,y) {
	if (!Number.isInteger(parseInt(d)) || !Number.isInteger(parseInt(m)) || !Number.isInteger(parseInt(y))) {
		return false;
	}
	if (d.length>2 || m.length>2 || y.length>4) {
		return false;
	}
	
	return true;
}