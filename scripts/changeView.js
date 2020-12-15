function displayCatView() {
	var x = document.getElementById("catView");
	var y = document.getElementById("itemView"); 
	var m = document.getElementById("mTitle");
	var m1 = document.getElementById("mDesc");
	var w = document.getElementById("wTitle");
	var w1 = document.getElementById("wDesc");	
    if (x.style.display === "none") {
		x.style.display = "block";
		y.style.display = "none";	
	} else {
		x.style.display = "block";
		y.style.display = "none";
	}
	if (m.innerHTML === "All Products"){
		m.innerHTML = "Men's Fashion";
		m1.style.display = "block";
	}
	if (w.innerHTML === "All Products"){
		w.innerHTML = "Women's Fashion";
		w1.style.display = "block";
	}
}

function displayItemView() {
	var x = document.getElementById("catView");
	var y = document.getElementById("itemView"); 
	var m = document.getElementById("mTitle");
	var m1 = document.getElementById("mDesc");
	var w = document.getElementById("wTitle");
	var w1 = document.getElementById("wDesc");
	if (y.style.display === "none") {
		y.style.display = "block";
		x.style.display = "none";	
	} else {
		y.style.display = "block";
		x.style.display = "none";	
	}
	if (m.innerHTML === "Men's Fashion"){
		m.innerHTML = "All Products";
		m1.style.display = "none";
	}
	if (w.innerHTML === "Women's Fashion"){
		w.innerHTML = "All Products";
		w1.style.display = "none";
	}
}

function filterOnClick(){
	var x = document.getElementById("catView");
	var y = document.getElementById("itemView"); 
	if (y.style.display === "block") {
		y.style.display = "block";
		x.style.display = "none";
	}
	if (y.style.display === "none") {
		y.style.display = "block";
		x.style.display = "none";
	}	
	else{
		y.style.display = "block";
		x.style.display = "none";		
	}
}

function displayDropdown() {
	document.getElementById("myDropdown").classList.toggle("show");
	}

	// Close the dropdown if the user clicks outside of it
	window.onclick = function(e) {
	  if (!e.target.matches('.dropbtn')) {
	  var myDropdown = document.getElementById("myDropdown");
		if (myDropdown.classList.contains('show')) {
		  myDropdown.classList.remove('show');
		}
	  }
}