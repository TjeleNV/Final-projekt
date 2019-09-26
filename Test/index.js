function insertText(){
	document.getElementById("newContent").innerHTML =  "<br> HELLO <br>";
	}

function calculate(){
	var t = widthBox.value;
	var w = document.getElementById("widthBox").value;
	var l = document.getElementById("lenghtBox").value;
	var h = document.getElementById("heightBox").value;
	
	w = parseFloat(w);
	l = parseFloat(l);
	h = parseFloat(h);
	
	var result = w*l*h;
	
	document.getElementById("result").innerHTML = result;
	}
	
function multiplication(){
	document.getElementById("mult-tb").innerHTML="";
	var f = document.getElementById("factor").value;
	for(var i=1; i<=10; i++){
		var res = f*i;
		document.getElementById("mult-tb").innerHTML += res+"<br/>";
		}
	}
	