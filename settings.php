<?php
include_once('Bin/Kernel.php');
include_once('Action/Shared/Local.php');
include_once('Action/Server/Server-Settings.php');
LOCAL_ACCESS_DENY('Settings');
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
        <h2>Profile Settings</h2>    
        <div class="legend">
		    <form <?php echo JSP_FORM_POST; ?>>
				<?php echo _ERROR($err); ?>            
                <label>Profile Name</label>        
				<input type="text" name="fullname" value="<?php echo ucwords($_USER['fullname']); ?>" required />
    	        <label>Faculty</label>  
                <select name="faculty" required>
	               	<option></option>                
					<?PHP 
                        foreach (LOCAL_ENUMS('FACULTY') as $key => $value)
                        {
                            if ($key == $_USER['faculty'])
                                echo "<option value=".$key." selected>".$value."</option>";
                            else
                                echo "<option value=".$key.">".$value."</option>";
                        }
                    ?>
                </select>
	            <label>Department</label>            
                <select name="department" required>
	               	<option></option>
					<?PHP 
						var_dump(LOCAL_ENUMS('DEPT'));
                        foreach (LOCAL_ENUMS('DEPT') as $key => $value)
                        {
                            if ($key == $_USER['department'])
                                echo "<option value=".$key." selected>".$value."</option>";
                            else
                                echo "<option value=".$key.">".$value."</option>";
                        }
                    ?>
                </select>                
                <label>Matric. Number</label>
                <input type="text" value="<?php echo strtoupper($_USER['matno']); ?>" disabled />
                <input type="hidden" name="matno" value="<?php echo strtoupper($_USER['matno']); ?>" />                
                <label>Password</label>
                <input type="password" name="password" value="" required />
                <input type="submit" value="Update" />
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
