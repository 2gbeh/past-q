<?php
include_once('Bin/Kernel.php');
include_once('Action/Shared/Local.php');
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
	<ul class="list">
    	<li>
        	<a onClick="toggleSublist(0)">100 Level</a>
            <ol class="sublist">
                <li><a href="session.php?x=1&y=1">First Semester</a></li>
                <li><a href="session.php?x=1&y=2">Second Semester</a></li>
            </ol>
        </li>
    	<li>
        	<a onClick="toggleSublist(1)">200 Level</a>
            <ol class="sublist">
                <li><a href="session.php?x=2&y=1">First Semester</a></li>
                <li><a href="session.php?x=2&y=2">Second Semester</a></li>
            </ol>
        </li>
    	<li>
        	<a onClick="toggleSublist(2)">300 Level</a>
            <ol class="sublist">
                <li><a href="session.php?x=3&y=1">First Semester</a></li>
                <li><a href="session.php?x=3&y=2">Second Semester</a></li>
            </ol>
        </li>
    	<li>
        	<a onClick="toggleSublist(3)">*400 Level</a>
            <ol class="sublist">
                <li><a href="session.php?x=4&y=1">*First Semester</a></li>
                <li><a href="session.php?x=4&y=2">Second Semester</a></li>
            </ol>
        </li>
    	<li>
        	<a onClick="toggleSublist(4)">500 Level</a>
            <ol class="sublist">
                <li><a href="session.php?x=5&y=1">First Semester</a></li>
                <li><a href="session.php?x=5&y=2">Second Semester</a></li>
            </ol>
        </li>                
    </ul>
</main>
</body>
</html>
