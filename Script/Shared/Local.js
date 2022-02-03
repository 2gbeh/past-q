// JavaScript Document
//alert("Server request recieved!");
function toggleMenu () {
	var	menu = document.getElementsByTagName('nav');
	var display = menu[0].style.display;		
	if (display == 'block')
		menu[0].style.display = 'none';
	else
		menu[0].style.display = 'block';
}

function toggleSublist (index) {
	var	sublist = document.getElementsByClassName('sublist');
	var display = sublist[index].style.display;		
	for (var i = 0; i < sublist.length; i++)
		sublist[i].style.display = 'none';
	if (display == 'block')
		sublist[index].style.display = 'none';
	else
		sublist[index].style.display = 'block';
}