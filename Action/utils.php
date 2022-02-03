<?php
$embed = false;
$dpt = false;
$TABLE = LOCAL_TABLE;
$dimarray = array
(
	array('0','0','3','0','0','*Computer Graphics &amp; Visualization','CSC409','CSC4092018.jpg','','','2'),
	array('0','0','3','0','0','Design &amp; Analysis of Algorithms','CSC401','CSC4012018.jpg','','','2'),
	array('0','0','3','0','2','Database Design &amp; Management','CSC311','CSC3112016.jpg','','','2'),
	array('0','0','3','0','1','Computer Architecture','CSC305','CSC3052017.jpg','','','2'),
	array('0','0','3','0','2','Computer Architecture','CSC305','CSC3052016.jpg','','','2'),
	array('0','0','3','0','1','Operating System','CSC303','CSC3032017.jpg','','','2'),
	array('0','0','3','0','1','Advanced Programming with Java','CSC309','CSC3092017.jpg','','','2'),
	array('0','0','3','0','2','Advanced Programming with Java','CSC309','CSC3092016.jpg','','','2')	
);
if ($embed)
{
	foreach ($dimarray as $array)
	{
		_CREATE($TABLE,$array);
	}
}
if ($dpt)
{
	_UPDATE($TABLE,'department',3,'*');
}
?>
