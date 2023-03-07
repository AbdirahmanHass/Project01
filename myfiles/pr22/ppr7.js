var lightState = "off";
function toggleLight() {
	if (lightState === "off") {
		document.getElementById('myImage').src='pic_bulbon.gif';
		document.getElementById('lightButton').innerHTML = "ON";
		lightState = "on";
	} else {
		document.getElementById('myImage').src='pic_bulboff.gif';
		document.getElementById('lightButton').innerHTML = "OFF";
		lightState = "off";
	}
}
var displayMode = "off";
function show() {
	if (displayMode === "off") {
		document.getElementById("bulb").style.display="block";
		displayMode = "on";
	} else {
		document.getElementById("bulb").style.display="none";
		displayMode = "off";
	}
}