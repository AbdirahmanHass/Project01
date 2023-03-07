let numb1 = '';
let numb2 = '';
var camp = '';
let caq = 98;
let cambna = 1;
function input1(){
	if (cambna === 1){
		numb1 = numb1 + '1';
		camp = camp + '1';
	}
	else {
		numb2 = numb2 + '1';
		camp = camp + '1';
	}
	document.getElementById('box1').innerHTML = camp;
}
function input2(){
	if (cambna === 1){
		numb1 = numb1 + '2';
		camp = camp + '2';
	}
	else {
		numb2 = numb2 + '2';
		camp = camp + '2';
	}
	document.getElementById('box1').innerHTML = camp;
}
function input3(){
	if (cambna === 1){
		numb1 = numb1 + '3';
		camp = camp + '3';
	}
	else {
		numb2 = numb2 + '3';
		camp = camp + '3';
	}
	document.getElementById('box1').innerHTML = camp;
}
function input4(){
	if (cambna === 1){
		numb1 = numb1 + '4';
		camp = camp + '4';
	}
	else {
		numb2 = numb2 + '4';
		camp = camp + '4';
	}
	document.getElementById('box1').innerHTML = camp;
}
function input5(){
	if (cambna === 1){
		numb1 = numb1 + '5';
		camp = camp + '5';
	}
	else {
		numb2 = numb2 + '5';
		camp = camp + '5';
	}
	document.getElementById('box1').innerHTML = camp;
}
function input6(){
	if (cambna === 1){
		numb1 = numb1 + '6';
		camp = camp + '6';
	}
	else {
		numb2 = numb2 + '6';
		camp = camp + '6';
	}
	document.getElementById('box1').innerHTML = camp;
}
function input7(){
	if (cambna === 1){
		numb1 = numb1 + '7';
		camp = camp + '7';
	}
	else {
		numb2 = numb2 + '7';
		camp = camp + '7';
	}
	document.getElementById('box1').innerHTML = camp;
}
function input8(){
	if (cambna === 1){
		numb1 = numb1 + '8';
		camp = camp + '8';
	}
	else {
		numb2 = numb2 + '8';
		camp = camp + '8';
	}
	document.getElementById('box1').innerHTML = camp;
}
function input9(){
	if (cambna === 1){
		numb1 = numb1 + '9';
		camp = camp + '9';
	}
	else {
		numb2 = numb2 + '9';
		camp = camp + '9';
	}
	document.getElementById('box1').innerHTML = camp;
}
function input0(){
	if (cambna === 1){
		numb1 = numb1 + '0';
		camp = camp + '0';
	}
	else {
		numb2 = numb2 + '0';
		camp = camp + '0';
	}
	document.getElementById('box1').innerHTML = camp;
}
function inputSum(){
	document.getElementById('box1').innerHTML='+';caq = 'sum';
	camp = '';
	cambna = 2;
}
function inputSub(){
	document.getElementById('box1').innerHTML='-';caq = 'sub';
	camp = '';
	cambna = 2;
}
function inputMult(){
	document.getElementById('box1').innerHTML='*';caq = 'mult';
	camp = '';
	cambna = 2;
}
function inputDiv(){
	document.getElementById('box1').innerHTML='/';caq = 'div';
	camp = '';
	cambna = 2;
}
function inputPoint(){
	document.getElementById('box1').innerHTML='.';
	cambna = 2;
}
function inputAns(){
	let ans = 0;
	if (caq === 'sum'){
		ans = numb1 + numb2;
		document.getElementById('box1').innerHTML = ans;
	}
	else if (caq === 'sub'){
		ans = numb1 - numb2;
		document.getElementById('box1').innerHTML = ans;
	}
	else if (caq === 'mult'){
		ans = numb1 * numb2;
		document.getElementById('box1').innerHTML = ans;
	}
	else if (caq === 'div'){
		ans = numb1 / numb2;
		document.getElementById('box1').innerHTML = ans;
	}
	else {
		document.getElementById('box1').innerHTML = 'Unknown input!';
	}
}