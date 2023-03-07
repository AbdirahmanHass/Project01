var disState = 'off';
function funJama(){
	if (disState === 'off'){
		document.getElementById('jama').style.display = 'block';
		disState = 'on';
	}
	else {
		document.getElementById('jama').style.display = 'none';
		disState = 'off';
	}
}
var x;
x = ((0.1 * 10) + (0.2 * 10)) / 10;
document.getElementById('jama1').innerHTML = x;
let y = 0xaa;
document.write(y);
let z = 56;
document.write('My number is: ' + z + '<br>');
document.write('My number in binary: ' + z.toString(2) + '<br>');
document.write('My number in octal: ' + z.toString(8) + '<br>');
document.write('My number in hexadecimal: ' + z.toString(18) + '<br>');
document.write('My number in base36: ' + z.toString(36) + '<br>');
