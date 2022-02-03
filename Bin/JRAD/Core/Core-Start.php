<?php
if (IS_LOCALHOST)
{
	$coreDatabase = PSEUDO.'_dbl';
	$coreUsername = 'root';
	$corePassword = '';
}
else
{
	$coreDatabase = PSEUDO.'_db';
	$coreUsername = PSEUDO.'_root';
	$corePassword = '_Strongp@ssw0rd';
}

define('_DB',$coreDatabase);
define('_USERNAME',$coreUsername);
define('_PASSWORD',$corePassword);
//define('_DBCONN',mysql_connect("localhost",_USERNAME,_PASSWORD));
//define('_DBCONN',mysqli_connect("localhost",_USERNAME,_PASSWORD,_DB));

$GLOBALS['CORE_START_TABLE'] = array 
(
	JSP_TABLE_ADMIN,
	JSP_TABLE_USER,
	'material_tb'
);

$GLOBALS['CORE_START_FIELD'] = array 
(
	array('email','username','password','control','status'),
    array('fullname','faculty','department','matno','password'),
	array('faculty','department','level','semester','session','course','code','page1','page2','page3','user_rid')
);

$GLOBALS['CORE_START_DATATYPE'] = array
(
	array('VARCHAR (50)','VARCHAR (25)','VARCHAR (25)','INT (1)','INT (1)'),
	array('VARCHAR (50)','INT (3)','INT (3)','VARCHAR (25)','VARCHAR (25)'),
	array('INT (3)','INT (3)','INT (1)','INT (1)','INT (7)','VARCHAR (50)','VARCHAR (25)','VARCHAR (160)','VARCHAR (160)','VARCHAR (160)','INT (7)')
);	

$GLOBALS['CORE_START_RECORD'] = array 
(
	array
	(
		array(JSP_SUPER_ADMIN,JSP_SSQL_USER,JSP_SSQL_PASSWORD,2,0),
		array(EMAIL,PSEUDO,JSP_SUPER_PASSWORD,1,0)
	),
	array
	(	
		array('Tugbeh Osaretin',0,3,'CNA/10/11/4444','4444'),
		array('Oyibode Eseoghene',0,3,'CNA/14/15/1355','1355')	
	),
	array
	(
		array('0','3','3','0','0','Computer Graphics &amp; Visualization','CSC409','CSC4092018.jpg','','','2'),
		array('0','3','3','0','0','Design &amp; Analysis of Algorithms','CSC401','CSC4012018.jpg','','','2'),
		array('0','3','3','0','2','Database Design &amp; Management','CSC311','CSC3112016.jpg','','','2'),
		array('0','3','3','0','1','Computer Architecture','CSC305','CSC3052017.jpg','','','2'),
		array('0','3','3','0','2','Computer Architecture','CSC305','CSC3052016.jpg','','','2'),
		array('0','3','3','0','1','Operating System','CSC303','CSC3032017.jpg','','','2'),
		array('0','3','3','0','1','Advanced Programming with Java','CSC309','CSC3092017.jpg','','','2'),
		array('0','3','3','0','2','Advanced Programming with Java','CSC309','CSC3092016.jpg','','','2')	
	)	
);	

function CORE_START ()
{
	$tableArray = $GLOBALS['CORE_START_TABLE'];
	foreach ($tableArray as $bin => $table)
	{
		//ARRANGE
		$fieldBin = $GLOBALS['CORE_START_FIELD'][$bin];
		$datatypeBin = $GLOBALS['CORE_START_DATATYPE'][$bin];
		$recordBin = $GLOBALS['CORE_START_RECORD'][$bin];		
		
		//SET FIELD ARRAY
		$JSP_CONCAT_FIELD = JSP_CONCAT_ARRAY(array($fieldBin,$datatypeBin),'Y',2);
		$JSP_GLOB_FIELD = JSP_BUILD_CSV(JSP_GLOB_FIELD);
		$fieldArray[$table] = JSP_PUSH_ARRAY($JSP_CONCAT_FIELD,$JSP_GLOB_FIELD,'END');
		
		//SET RECORD ARRAY
		$JSP_GLOB_FIELD = JSP_PUSH_ARRAY($fieldBin,array('date','time'),'END');		
		$JSP_GLOB_RECORD = JSP_BUILD_CSV(JSP_GLOB_RECORD);
		$JSP_CONCAT_RECORD = array(); //RESET ARRAY		
		if (_ISDIM($recordBin))
		{
			foreach ($recordBin as $assoc_array)
			{
				$pushRecord = JSP_PUSH_ARRAY($assoc_array,$JSP_GLOB_RECORD,'END');				
				$JSP_CONCAT_RECORD[] = JSP_DEFKEY_ARRAY($pushRecord,$JSP_GLOB_FIELD);
			}
		}
		else
		{
			if ($recordBin) //NOT EMPTY
			{
				$pushRecord = JSP_PUSH_ARRAY($recordBin,$JSP_GLOB_RECORD,'END');				
				$JSP_CONCAT_RECORD[] = JSP_DEFKEY_ARRAY($pushRecord,$JSP_GLOB_FIELD);
			}
		}
		$recordArray[$table] = $JSP_CONCAT_RECORD;
	}
	$output = array
	(
		'DATABASE' => _DB,
		'USERNAME' => _USERNAME,
		'PASSWORD' => _PASSWORD,
		'TABLE' => $tableArray,
		'SCHEMA' => array
		(
			'FIELD' => $fieldArray,
			'RECORD' => $recordArray
		)
	);
	return $output;
}
?>
