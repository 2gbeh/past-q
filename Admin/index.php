<?php
include_once('../Bin/Kernel.php');
include_once('../Action/Shared/Local.php');
include_once('../Action/utils.php');
var_dump
(
);
?>
<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<head>
<title>PastQ LTE Database</title>
<?php
include_once('../Action/Shared/Head.php');	
include_once('../Bin/JRAD/Library-Blend.php'); 
include_once('../Action/Shared/Media-Query.php');		
?>
</head>
<body>
<?php 
	$table = $TABLE;
	$th = 'faculty,department,level,semester,session,course title,course code,material,,,uploaded by,date,time,ID';
	//GET TEAM TABLE
	$assoc_array = JSP_FETCH_PREDEF($table,'*',1);
	$td = JSP_TRANS_RID($assoc_array,JSP_TABLE_USER,'fullname',10);
	$td = JSP_TRANS_PREDEF($td,LOCAL_ENUMS('FACULTY'),0);	
	$td = JSP_TRANS_PREDEF($td,LOCAL_ENUMS('DEPT'),1);
	$td = JSP_TRANS_PREDEF($td,LOCAL_ENUMS('LEVEL'),2);
	$td = JSP_TRANS_PREDEF($td,LOCAL_ENUMS('SEMESTER'),3);
	$td = JSP_TRANS_PREDEF($td,LOCAL_ENUMS('SESSION'),4);					
	if (_THROW($td)) //ONLY TABLES WITH RECORDS
	{
		$extra = ' in <a class="anchor">'.$table.'</a>';
		echo JSP_SPRY_SHOWING($td[0],$extra);
		echo JSP_DISPLAY_TABLE($td,$th);
	}
?>
</body>
</html>
