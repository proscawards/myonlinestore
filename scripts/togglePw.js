function togglePw(){
	var pw = document.getElementById("pwInput");
	var pwRe = document.getElementById("pwReInput");
	var pwOl = document.getElementById("pwOlInput");	
	var toggle = document.getElementById("eyeIcon");
	var toggle1 = document.getElementById("eyeIconRe");	
	var toggle2 = document.getElementById("eyeIconOl");
	if (pw.type == "password"){
		pw.type = "text";
		toggle.className = "fas fa-eye-slash eyeIcon";
	}
	else{
		pw.type = "password";
		toggle.className = "fas fa-eye eyeIcon";
	}
	if (pwRe.type == "password"){
		pwRe.type = "text";
		toggle1.className = "fas fa-eye-slash eyeIconRe";
	}
	else{
		pwRe.type = "password";
		toggle1.className = "fas fa-eye eyeIconRe";
	}	
	if (pwOl.type == "password"){
		pwOl.type = "text";
		toggle2.className = "fas fa-eye-slash eyeIconOl";
	}
	else{
		pwOl.type = "password";
		toggle2.className = "fas fa-eye eyeIconOl";
	}
}