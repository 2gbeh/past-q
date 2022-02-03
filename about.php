<?php
include_once('Bin/Kernel.php');
include_once('Action/Shared/Local.php');
//include_once('Action/utils.php');
var_dump
(
);
?>
<!DOCTYPE HTML>
<html>
<head>
<?php
include_once('Action/Shared/Head.php');	
include_once('Bin/JRAD/Library-Blend.php'); 
include_once('Action/Shared/Media-Query.php');		
?>
</head>
<body>
<?php include_once('Action/Shared/Header.php');	?>
<main>
	<div class="about">
	    	<h2><?PHP echo STYLISED; ?></h2>
            <?PHP echo ABBR; ?> v4.0 - FR22062018
        <p></p>
            <b>ANDROID MOBILE APP FOR PAST QUESTIONS</b> <br/>
            BY <br/>
            <b><?PHP echo strtoupper(LOCAL_USER); ?> <br/>
            <?PHP echo LOCAL_MATNO; ?></b> <br/>
        <p></p>            
            A PROJECT WORK PRESENTED TO THE <br/>
            DEPARTMENT OF COMPUTER SCIENCE &amp; MATHEMATICS, <br/>
            COLLEGE OF <?PHP echo strtoupper(LOCAL_FACULTY); ?>, <br/>
            <?PHP echo strtoupper(LOCAL_SCH); ?>, <br/>
            OGHARA, DELTA STATE.
        <p></p>            
            JUNE, 2018.
        <p>&nbsp;</p>
        	Copyright &copy; 2018 Sharman, HWP Labs. All rights reserved. <br/>
        <p></p>                   
        	For more information, visit <a href="http://www.hwplabs.com/" target="_new">HWP Labs</a>
    </div>
</main>
</body>
</html>
