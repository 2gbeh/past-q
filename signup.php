<?php
include_once('Bin/Kernel.php');
include_once('Action/Shared/Local.php');
include_once('Action/Server/Server-Signup.php');
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
	<div class="signup">
        <h2>Welcome to <?PHP echo APPNAME; ?></h2>    
        <div class="legend">
		    <form <?php echo JSP_FORM_POST; ?>>
				<?php echo _ERROR($err); ?>
                <label>Enter Full Name</label>        
                <?php echo JSP_FORMS_TEXTBOX('fullname'); ?>                
    	        <label>Select Faculty</label>  
    	        <?PHP echo _SELECT('faculty',LOCAL_ENUMS('FACULTY')); ?>
	            <label>Select Department</label>            
	            <?PHP echo _SELECT('department',LOCAL_ENUMS('DEPT')); ?>          
                <label>Enter Matric. Number</label>
                <?php echo JSP_FORMS_TEXTBOX('matno','MAT NO. (E.g. '.LOCAL_MATNO.')'); ?>
                <label>Enter Password</label>
                <?php echo JSP_FORMS_TEXTBOX('password'); ?>
                <input type="submit" value="Sign up" />
            </form>
        </div>  
        <p></p>      
        <footer>
            Already have an Account? 
            <a href="login.php" style="text-decoration:underline;">Log in</a>        
        </footer>
	</div>   
</main> 
</body>
</html>
