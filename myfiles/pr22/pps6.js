function comps(){
	var limp = new Date();
	var con = limp.getSeconds();
	document.getElementById("juku").innerHTML = con;
}

let demo1 = "the quick brown fox jumped over the lazy dog";
let gama1 = demo1.length;
document.getElementById('demo101').innerHTML = demo1;
document.getElementById('demo201').innerHTML = gama1;


let demo2 = "the quick brown fox jumped over the lazy dog";
let gama2 = demo2.substring(10,20);
document.getElementById('demo102').innerHTML = demo2;
document.getElementById('demo202').innerHTML = gama2;


let demo3 = "the quick brown fox jumped over the lazy dog";
let gama3 = demo3.substr(10,5);
document.getElementById('demo103').innerHTML = demo3;
document.getElementById('demo203').innerHTML = gama3;


let demo4 = "the quick brown fox jumped over the lazy dog";
let gama4 = demo4.replace('brown','yellow');
document.getElementById('demo104').innerHTML = demo4;
document.getElementById('demo204').innerHTML = gama4;


let demo5 = "the quick brown fox jumped over the lazy dog";
let gama5 = demo5.replaceAll('the','a');
document.getElementById('demo105').innerHTML = demo5;
document.getElementById('demo205').innerHTML = gama5;


let demo6 = "the quick brown fox jumped over the lazy dog";
let gama6 = demo6.toUpperCase(demo6);
document.getElementById('demo106').innerHTML = demo6;
document.getElementById('demo206').innerHTML = gama6;


let demo7 = "THE QUICK BROWN FOX JUMPED OVER THE LAZY DOG";
let gama7 = demo7.toLowerCase(demo7);
document.getElementById('demo107').innerHTML = demo7;
document.getElementById('demo207').innerHTML = gama7;


let demo81 = "the quick brown fox ";
let demo82 = "jumped over the lazy dog";
let gama8 = demo81.concat(demo82);
document.getElementById('demo1081').innerHTML = demo81;
document.getElementById('demo1082').innerHTML = demo82;
document.getElementById('demo208').innerHTML = gama8;


let demo9 = "the quick brown fox jumped over the lazy dog             ";
let gama9 = demo9.trim();
document.getElementById('demo109').innerHTML = demo9;
document.getElementById('demo1092').innerHTML = demo9.length;
document.getElementById('demo209').innerHTML = gama9;
document.getElementById('demo2092').innerHTML = gama9.length;


let demo10 = "          the quick brown fox jumped over the lazy dog";
let gama10 = demo10.trimStart();
document.getElementById('demo110').innerHTML = demo10;
document.getElementById('demo1102').innerHTML = demo10.length;
document.getElementById('demo210').innerHTML = gama10;
document.getElementById('demo2102').innerHTML = gama10.length;
console.log(demo10);
console.log(gama10);


let demo11 = "the quick brown fox jumped over the lazy dog      ";
let gama11 = demo11.trimEnd();
document.getElementById('demo111').innerHTML = demo11;
document.getElementById('demo1112').innerHTML = demo11.length;
document.getElementById('demo211').innerHTML = gama11;
document.getElementById('demo2112').innerHTML = gama11.length;


let demo12 = "brown fox jumped over the lazy dog";
let gama12 = demo12.padStart(44,'the quick ');
document.getElementById('demo112').innerHTML = demo12;
document.getElementById('demo212').innerHTML = gama12;


let demo13 = "the quick brown fox jumped over ";
let gama13 = demo13.padEnd(44,'the lazy dog');
document.getElementById('demo113').innerHTML = demo13;
document.getElementById('demo213').innerHTML = gama13;


let demo14 = "the quick brown fox jumped over the lazy dog";
let gama14 = demo14.charAt(20);
document.getElementById('demo114').innerHTML = demo14;
document.getElementById('demo214').innerHTML = gama14;


let demo15 = "the quick brown fox jumped over the lazy dog";
let gama15 = demo15.charCodeAt(22);
document.getElementById('demo115').innerHTML = demo15;
document.getElementById('demo215').innerHTML = gama15;


let demo16 = "the quick brown fox jumped over the lazy dog";
let gama16 = demo16.split(' ');
document.getElementById('demo116').innerHTML = demo16;
document.getElementById('demo216').innerHTML = gama16;


let demo17 = "the quick brown fox jumped over the lazy dog";
let gama17 = demo17.slice(16,31);
document.getElementById('demo117').innerHTML = demo17;
document.getElementById('demo217').innerHTML = gama17;