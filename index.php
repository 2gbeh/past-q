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
	<ul class="tiles faculty">
    	<li>
        	<a href="department.php">
            	<div class="tiles-title">*Natural &amp; Applied Sciences (CNA)</div>
                <div class="tiles-meta">
                	<span class="tiles-total">11,470</span>
                 	Available
                 </div>
            </a>
        </li>
    	<li>
        	<a href="department_csm.php">
            	<div class="tiles-title">Social &amp; Management Sciences (CSM)</div>
                <div class="tiles-meta">
                	<span class="tiles-total">2,092</span>
                 	Available
                 </div>
            </a>
        </li>             
    </ul>
</main>
</body>
</html>
