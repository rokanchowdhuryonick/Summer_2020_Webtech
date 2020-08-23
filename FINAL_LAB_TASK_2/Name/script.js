function validateName() {
	var name = document.getElementById('name').value.trim();
	document.getElementById('message').style="color:brown";
	if (name.length<=0) {
		document.getElementById('message').innerHTML = "*Can not be empty!";
		return false
	}else if (name.split(" ").length<2) {
		document.getElementById('message').innerHTML = "*Contains at least two words!";
		return false
	}else if (stringCheck(name.charAt(0))) {
		if (!checkEveryChar(name)) {
			document.getElementById('message').innerHTML = "*Can contain a-z or A-Z or dot(.) or dash(-)!";
			return false
		}
	}else{
		document.getElementById('message').innerHTML = "*Must start with a letter!";
		return false
	}

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
		 //datas+= val[i] + "<br>";
	}

	//document.getElementById('dump').innerHTML = datas;
	
	return true;
}
