function validateEmail() {
	var email = document.getElementById('email').value.trim();
	document.getElementById('message').style="color:brown";
	if (email.length<=0) {
		document.getElementById('message').innerHTML = "*Can not be empty!";
		return false;
	}else if (!emailBreakdown(email)) {
		document.getElementById('message').innerHTML = "*Must be a valid email address (i.e anything@example.com)!";
		return false;
	}
	document.getElementById('message').innerHTML = "";	

	return false;
}

function emailBreakdown(email) {
	if (email.indexOf("@") == -1) {
        return false;
    }
    var div = email.split("@");
    var dot = div[1].indexOf(".");
    var countdot = div[1].split(".").length-1;
    document.getElementById('dump').innerHTML = div[1].split(".");
    if (dot == -1 || countdot > 2) {
        return false;
    }
    return true;
}

