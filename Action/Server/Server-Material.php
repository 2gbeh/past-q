<?php
//LEVEL
if (!is_numeric($_SESSION['x']))	
	LOCAL_SEARCH('x');	
//SEMESTER
if (!is_numeric($_SESSION['y']))	
	LOCAL_SEARCH('y');
//SESSION	
LOCAL_SEARCH('z'); 
$TABLE = LOCAL_TABLE;
$FOLDER = 'Media/Uploads/';
//KEY
$f = 0;
$d = 3;
$x = $_SESSION['x'];
$y = $_SESSION['y'];
$z = $_SESSION['z'];
//VALUE
$_f = LOCAL_ENUMS('FACULTY',$f);
$_d = LOCAL_ENUMS('DEPT',$d);
$_x = LOCAL_ENUMS('LEVEL',$x);
$_y = LOCAL_ENUMS('SEMESTER',$y);
$_z = LOCAL_ENUMS('SESSION',$z);	
//RECORDS
$LOCAL_FETCH = LOCAL_FETCH($x,$y,$z);
?>