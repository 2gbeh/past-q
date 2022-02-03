// JavaScript Document
window.addEventListener 
(	
	"resize", function ()
	{
		BLN_DJANGO();
	}
);

function BLN_DJANGO ()
{
	BLN_SPRY_DRAWER('onResize');
	var container = document.getElementsByClassName('container'),
	wrap = document.getElementsByClassName('wrap'),
	STEM_PANEL = document.querySelectorAll('.STEM_PANEL li'),
	STEM_FORM = document.querySelectorAll('.STEM_FORM fieldset');	
	
	if (window.innerWidth <= BLN_SPRY_DRAWER('Estate'))
	{
		var containerWidth = '100%',
		wrapWidth = '100%',
		STEM_PANELWidth = '100%',
		STEM_FORMWidth = '90%';		
	}
	else
	{
		var containerWidth = '80%',
		wrapWidth = '80%',		
		STEM_PANELWidth = '50%',
		STEM_FORMWidth = '40%';
	}
	for (var i = 0; i < container.length; i++)
		container[i].style.width = containerWidth;		
	for (var i = 0; i < wrap.length; i++)
		wrap[i].style.width = wrapWidth;		
	for (var i = 0; i < STEM_PANEL.length; i++)
		STEM_PANEL[i].style.width = STEM_PANELWidth;
	for (var i = 0; i < STEM_FORM.length; i++)
		STEM_FORM[i].style.width = STEM_FORMWidth;		
}
