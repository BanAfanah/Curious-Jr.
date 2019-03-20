function change_content() {
	var x = document.getElementById('Log_In');
	var y = document.getElementById('Sign_up');
	var z = document.getElementById('Sign_up2');
	if (x.style.display==="block"){
		x.style.display= "none";
	y.style.display= "none";
	z.style.display= "block";
	}
	else{
		x.style.display= "block";
	y.style.display= "block";
	z.style.display= "none";
	}
}
