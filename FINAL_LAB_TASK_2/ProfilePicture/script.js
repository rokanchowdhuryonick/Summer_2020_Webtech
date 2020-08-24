function validateProfilePicture() {
	var userid = document.getElementById('userid').value.trim();
	var photo = document.getElementById('photo').files;
	document.getElementById('message1').style="color:brown";
	document.getElementById('message2').style="color:brown";
	var checkUser = 0;
	var checkPhoto = 0;
	if ((userid.length<1 || userid<1 || !Number.isInteger(parseInt(userid)) || stringCheck(userid))) {
		checkUser=0;
		document.getElementById('message1').innerHTML = "*<b>UserId</b> cannot be empty and has to be a positive number!";
	}else{
		checkUser=1;
		document.getElementById('message1').innerHTML = "";
	}
	if (photo.length==0) {
		checkPhoto=0;
		document.getElementById('message2').innerHTML = "*<b>Picture</b> cannot be empty!";
	}else{
		checkPhoto=1;
		document.getElementById('message2').innerHTML ="";
	}


	// if ((userid.length<1 || userid<0 || !Number.isInteger(parseInt(userid))) && photo.length==0) {
	// 	document.getElementById('message1').innerHTML = "*<b>UserId</b> cannot be empty and has to be a positive number!";
	// 	document.getElementById('message2').innerHTML = "*<b>Picture</b> cannot be empty!";
	// 	return false;
	// }

	// if ((userid.length>1 && userid>0 && Number.isInteger(parseInt(userid))) && photo.length==0) {
	// 	document.getElementById('message1').innerHTML ="";
	// 	document.getElementById('message2').innerHTML = "*<b>Picture</b> cannot be empty!";
	// 	return false;
	// }

	// if ((userid.length<1 || userid<0 || !Number.isInteger(parseInt(userid))) && photo.length>0) {
	// 	document.getElementById('message1').innerHTML = "*<b>UserId</b> cannot be empty and has to be a positive number!";
	// 	document.getElementById('message2').innerHTML = "";
	// 	return false;
	// }

	if (checkUser==1 && checkPhoto==1) {
		return true;
	}
	// document.getElementById('message1').innerHTML ="";
	// document.getElementById('message2').innerHTML ="";

	return false;
}


function stringCheck(val) {
  return val.toLowerCase() != val.toUpperCase();
}