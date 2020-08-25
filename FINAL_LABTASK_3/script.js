function validateRegistration() {

	if (!validateName() || !validateEmail() || !validateGender()) {
		return false;
	}


	return true;
}


//For Name
function validateName() {
	var name = document.getElementById('name').value.trim();
	document.getElementById('nameErr').style="color:brown";
	if (name.length<=0) {
		document.getElementById('nameErr').innerHTML = "*Can not be empty!";
		return false
	}else if (name.split(" ").length<2) {
		document.getElementById('nameErr').innerHTML = "*Contains at least two words!";
		return false
	}else if (stringCheck(name.charAt(0))) {
		if (!checkEveryChar(name)) {
			document.getElementById('nameErr').innerHTML = "*Can contain a-z or A-Z or dot(.) or dash(-)!";
			return false
		}
	}else{
		document.getElementById('nameErr').innerHTML = "*Must start with a letter!";
		return false
	}

	document.getElementById('nameErr').innerHTML = "";
	return true;
}

function stringCheck(val) {
  return val.toLowerCase() != val.toUpperCase();
}

function checkEveryChar(val) {
	//var datas="";
	for (var i = 0; i < val.length; i++) {
		if (stringCheck(val[i])==true || val[i]=='.' || val[i]=='-' || val[i]==' ') {
			continue;
		}else{
			return false;
		}

	}

	
	return true;
}


//For Email
function validateEmail() {
	var email = document.getElementById('email').value.trim();
	document.getElementById('emailErr').style="color:brown";
	if (email.length<=0) {
		document.getElementById('emailErr').innerHTML = "*Can not be empty!";
		return false;
	}else if (!emailBreakdown(email)) {
		document.getElementById('emailErr').innerHTML = "*Must be a valid email address (i.e anything@example.com)!";
		return false;
	}else{
		document.getElementById('emailErr').innerHTML = "";
		return true;
	}

	return true;
}

function emailBreakdown(email) {
	if (email.toString().indexOf("@") == -1) {
        return false;
    }
    var div = email.split("@");
    var dot = div[1].indexOf(".");
    var countdot = div[1].split(".").length-1;
    if (dot == -1 || countdot > 2) {
        return false;
    }
    return true;
}

//For Gender
function validateGender() {
	var gender = document.getElementById('gender').checked;
	document.getElementById('genderErr').style="color:brown";
	if (gender!=true) {
		document.getElementById('genderErr').innerHTML = "*At least one of them has to be selected!";
		return false;
	}
	document.getElementById('genderErr').innerHTML = "";
	return true;
}


