function funHead(){
	document.getElementById("msa").style.fontSize = "2.5vw";
	document.getElementById("msa").style.width = "7.5vw";
	document.getElementById("msa").style.padding = "0.25vw 1.25vw";
	document.getElementById("msa").style.borderWidth = "0.4vw";
	document.getElementById("msa").style.top = "9.5vw";
	document.getElementById("msa").style.left = "19.3vw";
	if (color1 === "red"){
		document.getElementById("msa").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(255,0,0,0.6)";
	}
	else if (color1 === "green"){
		document.getElementById("msa").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(0,255,0,0.6)";
	}
	else if (color1 === "blue"){
		document.getElementById("msa").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(0,0,255,0.6)";
	}
	else if (color1 === "yellow"){
		document.getElementById("msa").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(255,255,0,0.6)";
	}
	else if (color1 === "pink"){
		document.getElementById("msa").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(255,0,255,0.6)";
	}
	else{
		document.getElementById("msa").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(0,255,255,0.6)";
	}
}
function funHead2(){
	document.getElementById("msa").style.boxShadow = "0 0 0 0 rgba(0,0,0,0)";
	document.getElementById("msa").style.fontSize = "2vw";
	document.getElementById("msa").style.width = "6vw";
	document.getElementById("msa").style.padding = "0.2vw 1.vw";
	document.getElementById("msa").style.borderWidth = "0.3vw";
	document.getElementById("msa").style.top = "10vw";
	document.getElementById("msa").style.left = "20vw";
}
var color1 = "red";
function funHead3(){
	if(color1 === "red"){
		document.getElementById("msa").style.color = "#00ff00";
		document.getElementById("msa").style.borderColor = "#00ff00";
		document.getElementById("msa").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(0,255,0,0.6)";
		document.getElementById("msa").style.backgroundColor = "#004400";
		document.getElementById("bdd").style.backgroundColor = "#003300";
		document.getElementById("jak").innerHTML = "2";
		color1 = "green";
	}
	else if (color1 === "green") {
		document.getElementById("msa").style.color = "#0000ff";
		document.getElementById("msa").style.borderColor = "#0000ff";
		document.getElementById("msa").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(0,0,255,0.6)";
		document.getElementById("msa").style.backgroundColor = "#000044";
		document.getElementById("bdd").style.backgroundColor = "#000033";
		document.getElementById("jak").innerHTML = "3";
		color1 = "blue";
	}
	else if (color1 === "blue") {
		document.getElementById("msa").style.color = "#ffff00";
		document.getElementById("msa").style.borderColor = "#ffff00";
		document.getElementById("msa").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(255,255,0,0.6)";
		document.getElementById("msa").style.backgroundColor = "#444400";
		document.getElementById("bdd").style.backgroundColor = "#333300";
		document.getElementById("jak").innerHTML = "4";
		color1 = "yellow";
	}
	else if (color1 === "yellow") {
		document.getElementById("msa").style.color = "#ff00ff";
		document.getElementById("msa").style.borderColor = "#ff00ff";
		document.getElementById("msa").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(255,0,255,0.6)";
		document.getElementById("msa").style.backgroundColor = "#440044";
		document.getElementById("bdd").style.backgroundColor = "#330033";
		document.getElementById("jak").innerHTML = "5";
		color1 = "pink";
	}
	else if (color1 === "pink") {
		document.getElementById("msa").style.color = "#00ffff";
		document.getElementById("msa").style.borderColor = "#00ffff";
		document.getElementById("msa").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(0,255,255,0.6)";
		document.getElementById("msa").style.backgroundColor = "#004444";
		document.getElementById("bdd").style.backgroundColor = "#003333";
		document.getElementById("jak").innerHTML = "6";
		color1 = "cyan";
	}
	else {
		document.getElementById("msa").style.color = "#ff0000";
		document.getElementById("msa").style.borderColor = "#ff0000";
		document.getElementById("msa").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(255,0,0,0.6)";
		document.getElementById("msa").style.backgroundColor = "#440000";
		document.getElementById("bdd").style.backgroundColor = "#330000";
		document.getElementById("jak").innerHTML = "1";
		color1 = "red";
	}
}
function funHead4(){
	document.getElementById("msa").innerHTML = "PPS6";
}
let text = "The quick brown fox jumped over the lazy dog or maybe the dog was just dead!";
let length = text.length;
document.getElementById("demo1").innerHTML = text;
document.getElementById("demo2").innerHTML = length;