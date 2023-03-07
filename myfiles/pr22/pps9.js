function funMath(){
	var amp1 = math.random();
	var amp2 = math.floor(math.random());
	var amp3 = math.floor(math.random() * 100);
	var amp4 = math.floor(math.random() * 101);
	var amp5 = math.floor(math.random() * 10) + 1;
	var amp6 = math.floor(math.random() * 100) + 1;
	
	var amp11 = 'math.random: ' + amp1;
	var amp22 = 'math.floor(math.random()): ' + amp2;
	var amp33 = 'math.floor(math.random() * 100): ' + amp3;
	var amp44 = 'math.floor(math.random() * 101): ' + amp4;
	var amp55 = 'math.floor(math.random() * 10) + 1: ' + amp5;
	var amp66 = 'math.floor(math.random() * 100) + 1: ' + amp6;
	
	document.getElementById('amp1').innerHTML = amp11;
	document.getElementById('amp2').innerHTML = amp22;
	document.getElementById('amp3').innerHTML = amp33;
	document.getElementById('amp4').innerHTML = amp44;
	document.getElementById('amp5').innerHTML = amp55;
	document.getElementById('amp6').innerHTML = amp66;
}