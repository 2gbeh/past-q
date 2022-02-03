<?php
define('APPNAME','PastQ LTE');
define('STYLISED','<b>PastQ</b> LTE');
define('ABBR','PastQ');
define('TYPE','Moblie App');
define('MISSION','');
define('SLOGAN','');
define('COY','HWP Labs<sup>&reg;</sup>');
define('MASTHEAD','2018 '.COY);

define('DOMAIN','pastq.io');
if (strlen(JSP_BUTCHER_STR(DOMAIN,'.','RIGHT')) >= 8)
	define('PSEUDO',substr(DOMAIN,0,8));
else
	define('PSEUDO',JSP_BUTCHER_STR(DOMAIN,'.','RIGHT'));
define('SERVER','http://www.'.DOMAIN.'/');
define('EMAIL','info@'.DOMAIN);
define('MAILTO','<a href="mailto:'.EMAIL.'?Subject=Prospective%20Customer" target="_new">'.EMAIL.'</a>');
define('TEL','+234(0) 70 3423 8774');
define('LANDING','index.php');

define('LOGO','<img src="Media/Icon/Logo.png" alt="'.APPNAME.'" width="50" />');
define('TYPEFACE',COY);
define('SIGNAGE','<a href="'.LANDING.'">'.LOGO.' '.TYPEFACE.'</a>');

define('HEX_PRI','#20467E');
define('HEX_SEC','#CC9933');
define('HEX_ALT','');

define('REP_NAME','Oyibode Eseoghene');
define('REP_EMAIL','esebonez0@gmail.com');
define('REP_TEL',TEL);

define('META_COPY',"Copyright &copy; ".MASTHEAD);
define('META_DESC',MISSION);
define('META_KEYWORD','Western Delta University, Past Questions, PastQ, HWP Labs');
define('META_AUTHOR',REP_NAME);

define('STDIO','jRAD');
define('CMS','SlingshotSQL 4.0');
define('API','Sharman');

define('INITIAL','2018/06/22');
define('STABLE','2018/06/25');
define('REVISED',STABLE);

function CORE_MANIFEST ()
{
	$keyArray = array
	(
		'APPNAME','ABBR','TYPE','MISSION','SLOGAN','COY','MASTHEAD',
		'DOMAIN','PSEUDO','SERVER','EMAIL','MAILTO','TEL','LANDING',		
		'LOGO','TYPEFACE','SIGNAGE','HEX_PRI','HEX_SEC','HEX_ALT',
		'REP_NAME','REP_EMAIL','REP_TEL',
		'META_COPY','META_DESC','META_KEYWORD','META_AUTHOR',		
		'STDIO','CMS','API',
		'INITIAL','STABLE','REVISED'
	);
	$fnArray = array
	(
		APPNAME,ABBR,TYPE,MISSION,SLOGAN,COY,MASTHEAD,
		DOMAIN,PSEUDO,SERVER,EMAIL,MAILTO,TEL,LANDING,		
		LOGO,TYPEFACE,SIGNAGE,HEX_PRI,HEX_SEC,HEX_ALT,
		REP_NAME,REP_EMAIL,REP_TEL,		
		META_COPY,META_DESC,META_KEYWORD,META_AUTHOR,		
		STDIO,CMS,API,
		INITIAL,STABLE,REVISED
	);
	foreach ($keyArray as $key => $value)
		$newArray[$value] = $fnArray[$key];
	return $newArray;
}
?>