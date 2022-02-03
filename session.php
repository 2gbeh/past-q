<?php
include_once('Bin/Kernel.php');
include_once('Action/Shared/Local.php');
LOCAL_SEARCH('x'); //LEVEL
LOCAL_SEARCH('y'); //SEMESTER
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
    	<li><a href="material.php?z=1">*2017/2018</a></li>
    	<li><a href="material.php?z=2">*2016/2017</a></li>
    	<li><a href="material.php?z=3">*2015/2016</a></li>
    	<li><a href="material.php?z=4">2014/2015</a></li>
    	<li><a href="material.php?z=5">2013/2014</a></li>
    	<li><a href="material.php?z=6">2012/2013</a></li>
    	<li><a href="material.php?z=7">2011/2012</a></li>
    	<li><a href="material.php?z=8">2010/2011</a></li>
    	<li><a href="material.php?z=9">2009/2010</a></li>
    	<li><a href="material.php?z=10">2008/2009</a></li>                
    </ul>
</main>
</body>
</html>
