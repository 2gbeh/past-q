<?php
include_once('Bin/Kernel.php');
include_once('Action/Shared/Local.php');
include_once('Action/Server/Server-Login.php');
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
<body class="landing">
    <div class="profile">&nbsp;</div>
    <h2>Welcome to <?PHP echo APPNAME; ?></h2>
    <div class="legend">
	    <form <?php echo JSP_FORM_POST; ?>>
			<?php 
				echo _ERROR($err); 			
				echo JSP_FORMS_TEXTBOX('matno','MAT NO. (E.g. '.LOCAL_MATNO.')');
				echo JSP_FORMS_TEXTBOX('password','Password');
			?>
            <input type="submit" value="Log in" />
        </form>
        <div class="api">    
            <a href="#">
            <ul>
                <li><img src="Media/Icon/Facebook-Glyph.png" alt=" " /></li>
                <li>Log in with Facebook</li>
            </ul>
            </a>
        </div>
    </div>        
	<footer>
    	<a href="signup.php">Don't have an Account</a>
        <span> | </span>
    	<a href="#">Forgot Password</a>        
	</footer>
</body>
</html>
