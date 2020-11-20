function validateRegistration() {

	if (!validateName() || !validateEmail() || !validateGender() || !validateEmail() || !validateDob() || !validateBlood() || !validateDegree() || !validateProfilePicture()) {
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


//For Date of Birth
function validateDob() {
	var day = document.getElementById('day').value.trim();
	var month = document.getElementById('month').value.trim();
	var year = document.getElementById('year').value.trim();
	document.getElementById('birthdayErr').style="color:brown";
	if (day.length==0 || month.length==0 || year.length==0) {
		document.getElementById('birthdayErr').innerHTML = "*Cannot be empty!";
		return false;
	}else if (!validateNumber(day,month,year)) {
		document.getElementById('birthdayErr').innerHTML = "*Must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)!";
		return false;
	}else{
		document.getElementById('birthdayErr').innerHTML = "";
		return true;
	}

	return true;
}
function validateNumber(d,m,y) {
	if (!Number.isInteger(parseInt(d)) || !Number.isInteger(parseInt(m)) || !Number.isInteger(parseInt(y))) {
		return false;
	}
	if (d.length>2 || m.length>2 || y.length>4 || d<1 || m<1 || y<1) {
		return false;
	}
	if (stringCheck(d) || stringCheck(m) || stringCheck(y)) {
		return false;
	}
	return true;
}


//For Blood
function validateBlood() {
	var blood = document.getElementById('blood').value;
	document.getElementById('bloodErr').style="color:brown";

	if (blood==-1) {
		document.getElementById('bloodErr').innerHTML = "*Must be selected!";
		return false;
	}
	document.getElementById('bloodErr').innerHTML = "";
	return true;
}


//For Degree
function validateDegree() {
	var degree = document.getElementsByName('degree[]');
	document.getElementById('degreeErr').style="color:brown";

	if (!checkedTrack(degree)) {
		document.getElementById('degreeErr').innerHTML = "*At least one of them has to be selected!";
		return false;
	}
	document.getElementById('degreeErr').innerHTML = "";
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


//For Photo
function validateProfilePicture() {
	var photo = document.getElementById('photo').files;
	document.getElementById('photoErr').style="color:brown";
	if (photo.length==0) {
		document.getElementById('photoErr').innerHTML = "*<b>Picture</b> cannot be empty!";
		return false;
	}
	document.getElementById('photoErr').innerHTML = "";

	return true;
}