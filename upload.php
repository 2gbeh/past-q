<?php
include_once('Bin/Kernel.php');
include_once('Action/Shared/Local.php');
include_once('Action/Server/Server-Upload.php');
LOCAL_ACCESS_DENY('Upload');
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
	<div class="tab">
    	<b>[Upload As]</b> 
		<?PHP echo strtoupper($_USER['fullname']); ?>  
        <span>(<?PHP echo strtoupper($_USER['matno']); ?>)</span>
        <a href="<?PHP echo LOCAL_LOGOUT_LINK(); ?>" id="action">Log out</a>
    </div>
    <div class="signup">
	    <form <?php echo JSP_FORM_FILE; ?>>
			<?php echo _ERROR($err); ?>
            <label>Select Faculty</label>  
            <?PHP echo _SELECT('faculty',LOCAL_ENUMS('FACULTY')); ?>
            <label>Select Department</label>            
            <?PHP echo _SELECT('department',LOCAL_ENUMS('DEPT')); ?>
          	<label>Select Level</label>            
            <?PHP echo _SELECT('level',LOCAL_ENUMS('LEVEL')); ?>
            <label>Select Semester</label>         
            <?PHP echo _SELECT('semester',LOCAL_ENUMS('SEMESTER')); ?>
            <label>Select Sesssion</label>            
            <?PHP echo _SELECT('session',LOCAL_ENUMS('SESSION')); ?>
            <label>Enter Course Title</label>
            <input type="text" name="course" value="" placeholder="E.g. <?PHP echo LOCAL_COURSE; ?>" maxlength="50" required />
            <label>Enter Course Code</label>
            <input type="text" name="code" value="" placeholder="E.g. <?PHP echo LOCAL_CODE; ?>" maxlength="25" required />
            <label>Select Material</label>
            <div class="file">
			<label>Page 1</label>
                <input type="file" name="page1" required/> <br/>
            <label>Page 2</label>                
                <input type="file" name="page2" /> <br/>
            <label>Page 3</label>                
                <input type="file" name="page3" /> <br/>
            </div>
            <input type="hidden" name="user_rid" value="<?php echo $_USER['id']; ?>" />            
            <input type="submit" value="Upload" />
        </form>
    </div>  	
</main>
</body>
</html>
