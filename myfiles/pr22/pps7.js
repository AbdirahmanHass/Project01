function funHead(){
	document.getElementById("kin").style.fontSize = "2.5vw";
	document.getElementById("kin").style.width = "7.5vw";
	document.getElementById("kin").style.padding = "0.25vw 1.25vw";
	document.getElementById("kin").style.borderWidth = "0.4vw";
	document.getElementById("kin").style.top = "1.5vw";
	document.getElementById("kin").style.right = "4.3vw";
	if (color1 === "red"){
		document.getElementById("kin").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(255,0,0,0.6)";
	}
	else if (color1 === "green"){
		document.getElementById("kin").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(0,255,0,0.6)";
	}
	else if (color1 === "blue"){
		document.getElementById("kin").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(0,0,255,0.6)";
	}
	else if (color1 === "yellow"){
		document.getElementById("kin").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(255,255,0,0.6)";
	}
	else if (color1 === "pink"){
		document.getElementById("kin").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(255,0,255,0.6)";
	}
	else{
		document.getElementById("kin").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(0,255,255,0.6)";
	}
}
function funHead2(){
	document.getElementById("kin").style.boxShadow = "0 0 0 0 rgba(0,0,0,0)";
	document.getElementById("kin").style.fontSize = "2vw";
	document.getElementById("kin").style.width = "6vw";
	document.getElementById("kin").style.padding = "0.2vw 1.vw";
	document.getElementById("kin").style.borderWidth = "0.3vw";
	document.getElementById("kin").style.top = "2vw";
	document.getElementById("kin").style.right = "5vw";
}
var color1 = "red";
function funHead3(){
	if(color1 === "red"){
		document.getElementById("kin").style.color = "#00ff00";
		document.getElementById("mak").style.backgroundColor = "#00ff00";
		document.getElementById("mak2").style.borderBottomColor = "#00ff00";
		document.getElementById("mak3").style.borderTopColor = "#00ff00";
		document.getElementById("mak4").style.borderLeftColor = "#00ff00";
		document.getElementById("mak5").style.borderRightColor = "#00ff00";
		document.getElementById("kin").style.borderColor = "#00ff00";
		document.getElementById("kin").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(0,255,0,0.6)";
		document.getElementById("kin").style.backgroundColor = "#004400";
		color1 = "green";
	}
	else if (color1 === "green") {
		document.getElementById("kin").style.color = "#0000ff";
		document.getElementById("mak").style.backgroundColor = "#0000ff";
		document.getElementById("mak2").style.borderBottomColor = "#0000ff";
		document.getElementById("mak3").style.borderTopColor = "#0000ff";
		document.getElementById("mak4").style.borderLeftColor = "#0000ff";
		document.getElementById("mak5").style.borderRightColor = "#0000ff";
		document.getElementById("kin").style.borderColor = "#0000ff";
		document.getElementById("kin").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(0,0,255,0.6)";
		document.getElementById("kin").style.backgroundColor = "#000044";
		color1 = "blue";
	}
	else if (color1 === "blue") {
		document.getElementById("kin").style.color = "#ffff00";
		document.getElementById("mak").style.backgroundColor = "#ffff00";
		document.getElementById("mak2").style.borderBottomColor = "#ffff00";
		document.getElementById("mak3").style.borderTopColor = "#ffff00";
		document.getElementById("mak4").style.borderLeftColor = "#ffff00";
		document.getElementById("mak5").style.borderRightColor = "#ffff00";
		document.getElementById("kin").style.borderColor = "#ffff00";
		document.getElementById("kin").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(255,255,0,0.6)";
		document.getElementById("kin").style.backgroundColor = "#444400";
		color1 = "yellow";
	}
	else if (color1 === "yellow") {
		document.getElementById("kin").style.color = "#ff00ff";
		document.getElementById("mak").style.backgroundColor = "#ff00ff";
		document.getElementById("mak2").style.borderBottomColor = "#ff00ff";
		document.getElementById("mak3").style.borderTopColor = "#ff00ff";
		document.getElementById("mak4").style.borderLeftColor = "#ff00ff";
		document.getElementById("mak5").style.borderRightColor = "#ff00ff";
		document.getElementById("kin").style.borderColor = "#ff00ff";
		document.getElementById("kin").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(255,0,255,0.6)";
		document.getElementById("kin").style.backgroundColor = "#440044";
		color1 = "pink";
	}
	else if (color1 === "pink") {
		document.getElementById("kin").style.color = "#00ffff";
		document.getElementById("mak").style.backgroundColor = "#00ffff";
		document.getElementById("mak2").style.borderBottomColor = "#00ffff";
		document.getElementById("mak3").style.borderTopColor = "#00ffff";
		document.getElementById("mak4").style.borderLeftColor = "#00ffff";
		document.getElementById("mak5").style.borderRightColor = "#00ffff";
		document.getElementById("kin").style.borderColor = "#00ffff";
		document.getElementById("kin").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(0,255,255,0.6)";
		document.getElementById("kin").style.backgroundColor = "#004444";
		color1 = "cyan";
	}
	else {
		document.getElementById("kin").style.color = "#ff0000";
		document.getElementById("mak").style.backgroundColor = "#ff0000";
		document.getElementById("mak2").style.borderBottomColor = "#ff0000";
		document.getElementById("mak3").style.borderTopColor = "#ff0000";
		document.getElementById("mak4").style.borderLeftColor = "#ff0000";
		document.getElementById("mak5").style.borderRightColor = "#ff0000";
		document.getElementById("kin").style.borderColor = "#ff0000";
		document.getElementById("kin").style.boxShadow = "0 0.8vw 1.6vw 0 rgba(255,0,0,0.6)";
		document.getElementById("kin").style.backgroundColor = "#440000";
		color1 = "red";
	}
}
var jum = new Date();
var vim = jum.getSeconds();
if (vim % 2 == 0){
	document.getElementById("lon").style.backgroundColor = "#0000ff";
}
else {
	document.getElementById("lon").style.backgroundColor = "#ff0000";
}