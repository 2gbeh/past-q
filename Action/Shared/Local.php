<?php
define('LOCAL_TABLE','material_tb');
define('LOCAL_SCH','Western Delta University');
define('LOCAL_FACULTY','Natural and Applied Sciences');
define('LOCAL_DEPT','Computer Science');
define('LOCAL_USER','Oyibode Eseoghene');
define('LOCAL_COURSE','Introduction to Computer Science');
define('LOCAL_CODE','CSC101');
define('LOCAL_MATNO','CNA/14/15/1355');
define('LOCAL_PASSW','1355');

function LOCAL_USER_BADGE () 
{
	if (IS_USER)
	{
		$name = strtoupper($GLOBALS['_USER']['fullname']);
		$matno = strtoupper($GLOBALS['_USER']['matno']);		
		return '<b>[User ID]</b> '.$name.' <span>('.$matno.')</span>';
	}
}

function LOCAL_ACCESS_DENY ($page) 
{
	if (!IS_USER)
		CORE_ACCESS_DENY('login.php','Log in to access '.$page.' page.');
}

function LOCAL_UPLOAD_LINK () 
{
	return _SWISS('upload.php','login.php','USER');
}

function LOCAL_LOGOUT_LINK () 
{
	return _SWISS('?logout=true','login.php','USER');
}	

if ($_GET['logout'])	
{
	_CLEAR('CAU');
	_REDIR('login.php');				
}

function LOCAL_SEARCH ($key)
{
	if (!$_GET[$key] && !is_numeric($_SESSION[$key]))
		$_GET[$key] = 1;
	if ($_GET[$key] > 0)
		$_SESSION[$key] = $_GET[$key] - 1;
}

function LOCAL_FETCH ($x, $y, $z)
{		
	$table = LOCAL_TABLE;
	$strSQL = "SELECT * FROM ".$table." WHERE level = ".$x." && semester = ".$y." && session = ".$z;
	$result = mysqli_query(_DBCONN(),$strSQL);
	while ($row = mysqli_fetch_row($result))
		$output[] = $row;
	mysqli_close(_DBCONN());
	return $output;
}

function LOCAL_MKPASTQ ($date, $time)
{
	//Jun 22, 2018 at 14:00
	$crunchArray = JSP_CRUNCH_DATE($date,'ARRAY');
	$year = $crunchArray['year'];
	$month = $crunchArray['month'];
	$day = $crunchArray['day'];						
	$mktime = mktime(0,0,0,$month,$day,$year);
	$date = date('M j, Y',$mktime);
	
	$crunchArray = JSP_CRUNCH_TIME($time,'ARRAY');
	$hour = $crunchArray['hour'];
	$minute = $crunchArray['minute'];
	$second = $crunchArray['second'];						
	$mktime = mktime($hour,$minute,$second,0,0,0);
	$time = date('H:i',$mktime);
	
	return $date.' at '.$time.'.';
}
	
function LOCAL_ENUMS ($rtype = 'FACULTY', $key) {
	$map = array
	(
		'FACULTY' => array 
		(
			'Natural &amp; Applied Sciences (CNA)',
			'Social &amp; Management Sciences (CSM)'
		),
		'DEPT' => array
		(	
			'Accounting (ACC)',	
			'Basic &amp; Industrial Chemistry (ICH)',
			'Biochemistry (BCH)',
			'Computer Science (CSC)',
			'Economics (ECO)',		
			'Environmental Management &amp; Toxicology (EMT)',
			'Geology &amp; Petroleum Studies (GLY)',
			'Hotel &amp; Tourism Management (HTM)',		
			'Mass Communication (MCN)',
			'Mathematics (MTH)',
			'Microbiology (MCB)',
			'Physics (PHY)',	
			'Political Science (POL)',
			'Sociology (SOC)'	
		),	
		
		'DPT_CNA' => array
		(
			'Basic &amp; Industrial Chemistry (ICH)',
			'Biochemistry (BCH)',
			'Computer Science (CSC)',
			'Environmental Management &amp; Toxicology (EMT)',
			'Geology &amp; Petroleum Studies (GLY)',
			'Mathematics (MTH)',
			'Microbiology (MCB)',
			'Physics (PHY)'
		),
		'DPT_CSM' => array
		(	
			'Accounting (ACC)',
			'Economics (ECO)',
			'Hotel &amp; Tourism Management (HTM)',
			'Mass Communication (MCN)',
			'Political Science (POL)',
			'Sociology (SOC)'	
		),
		'LEVEL' => array
		(	
			'100 Level',
			'200 Level',
			'300 Level',
			'400 Level',
			'500 Level'
		),
		'SEMESTER' => array
		(	
			'First Semester',
			'Second Semester'	
		),
		'SESSION' => array
		(	
			'2017/2018',
			'2016/2017',
			'2015/2016',
			'2014/2015',
			'2013/2014',
			'2012/2013',
			'2011/2012',
			'2010/2011',
			'2009/2010',
			'2008/2009'	
		)
	);
	if (is_numeric($key))
		return $map[$rtype][$key];
	else
		return $map[$rtype];
}
?>
