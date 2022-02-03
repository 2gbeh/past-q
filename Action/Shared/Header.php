<header>
	<ul>
        <li class="gear" onclick="toggleMenu()">&equiv;</li>
        <li class="logo"><a href="index.php"><img src="Media/Icon/Logo.png" alt=" " /></a></li>
        <li class="typeface"><?PHP echo STYLISED; ?></li>
    </ul>
</header>
<nav>
	<ul>
		<li id="userbox"><?php echo LOCAL_USER_BADGE(); ?></li>                    
		<li id="searchbox">
        <input type="search" name="keyword" list="datalist" placeholder="Search by Course Titles &amp; Course Codes" />
        <?php
            foreach (_BYCOL(LOCAL_TABLE,'course') as $value)
                $option .= '<option value="'.ucwords($value).'">';
            echo '<datalist id="datalist">'.$option.'</datalist>';
        ?>   
		</li>    
    	<li><a href="index.php">Home</a></li>
    	<li><a href="department.php">*Natural &amp; Applied Sciences</a></li>
    	<li><a href="department_csm.php">Social &amp; Management Sciences</a></li>
    	<li><a href="<?php echo LOCAL_UPLOAD_LINK(); ?>">Upload Material</a></li>
    	<li><a href="signup.php">Create Account</a></li>
    	<li><a href="settings.php">Settings</a></li>
    	<li><a href="<?php echo LOCAL_LOGOUT_LINK(); ?>">Log in/Log out</a></li>
    	<li><a href="about.php">About</a></li>
    </ul>
</nav>