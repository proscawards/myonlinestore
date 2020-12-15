function displayMyAccount(){
	var a = document.getElementById("userMain");
	var b = document.getElementById("userAddBook");
	var c = document.getElementById("userChangePw");
	var d = document.getElementById("userTrack");
	var btn = document.getElementsByClassName("innerBtn");
	if (btn.innerHTML === "My Account"){
		a.style.display = "block";		
		b.style.display = "none";		
		c.style.display = "none";		
		d.style.display = "none";	
	}
	else{
		a.style.display = "block";		
		b.style.display = "none";		
		c.style.display = "none";		
		d.style.display = "none";	
	}
}

function displayAddressBook(){
	var a = document.getElementById("userMain");
	var b = document.getElementById("userAddBook");
	var c = document.getElementById("userChangePw");
	var d = document.getElementById("userTrack");
	var btn = document.getElementsByClassName("innerBtn");
	if (btn.innerHTML === "Address Book"){
		a.style.display = "none";		
		b.style.display = "block";		
		c.style.display = "none";		
		d.style.display = "none";	
	}
	else{
		a.style.display = "none";		
		b.style.display = "block";		
		c.style.display = "none";		
		d.style.display = "none";	
	}
}

function displayChangePw(){
	var a = document.getElementById("userMain");
	var b = document.getElementById("userAddBook");
	var c = document.getElementById("userChangePw");
	var d = document.getElementById("userTrack");
	var btn = document.getElementsByClassName("innerBtn");
	if (btn.innerHTML === "Change Password"){
		a.style.display = "none";		
		b.style.display = "none";		
		c.style.display = "block";		
		d.style.display = "none";	
	}
	else{
		a.style.display = "none";		
		b.style.display = "none";		
		c.style.display = "block";		
		d.style.display = "none";	
	}
}

function displayTrackOrder(){
	var a = document.getElementById("userMain");
	var b = document.getElementById("userAddBook");
	var c = document.getElementById("userChangePw");
	var d = document.getElementById("userTrack");
	var btn = document.getElementsByClassName("innerBtn");
	if (btn.innerHTML === "Track My Order"){
		a.style.display = "none";		
		b.style.display = "none";		
		c.style.display = "none";		
		d.style.display = "block";	
	}
	else{
		a.style.display = "none";		
		b.style.display = "none";		
		c.style.display = "none";		
		d.style.display = "block";	
	}
}