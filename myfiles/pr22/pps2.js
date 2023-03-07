document.getElementById("mad").innerHTML = 
	"Hello Dolly!";
	
let a,b,c;
	a = 76;
	b = 34;
	c = a + b;

document.getElementById("ans").innerHTML = 
	c;
function myFunction(){
	document.getElementById("btt").style.display = "none";
	document.getElementById("alpha").style.display = "block";
	
	let prg1,prg2,prg3,prg4,prg5,prg6;
	prg1 = "The quick brown fox jumped over the lazy dog!";
	prg2 = "Kenya has an election every five years.";
	prg3 = "Watermelons have very many seeds.";
	prg4 = "Are penguins really birds?";
	prg5 = "A matrioshka brain is physically possible.";
	prg6 = "This is the last paragraph!";
	
	document.getElementById("para1").innerHTML = prg1;
		document.getElementById("para1").style.fontSize = "2vw";
	document.getElementById("para2").innerHTML = prg2;
		document.getElementById("para2").style.fontSize = "2vw";
	document.getElementById("para3").innerHTML = prg3;
		document.getElementById("para3").style.fontSize = "2vw";
	document.getElementById("para4").innerHTML = prg4;
		document.getElementById("para4").style.fontSize = "2vw";
	document.getElementById("para5").innerHTML = prg5;
		document.getElementById("para5").style.fontSize = "2vw";
	document.getElementById("para6").innerHTML = prg6;
		document.getElementById("para6").style.fontSize = "2vw";
	
	document.getElementById("btt2").style.display = "block";
}
function myFunction2(){
	document.getElementById("alpha").style.display = "none";
	document.getElementById("btt").style.display = "block";
}