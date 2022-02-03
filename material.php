<?php
include_once('Bin/Kernel.php');
include_once('Action/Shared/Local.php');
include_once('Action/Server/Server-Material.php');
var_dump
(
	//$_SESSION
	//$LOCAL_FETCH
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
    	<div class="menu">
            <a href="index.php"><?PHP echo $_f; ?></a> / 
            <a href="department.php"><?PHP echo $_d; ?></a> / 
            <a href="level.php"><?PHP echo $_x.' > '.$_y; ?></a> / 
            <a href="session.php"><?PHP echo $_z; ?></a> / *
        </div>
    </div>
    <ul class="feed">
    <?PHP
		
		if (_THROW($LOCAL_FETCH))
		{
			foreach ($LOCAL_FETCH as $row)
			{
				$title = ucwords($row[5]);
				$code = strtoupper($row[6]);
				$author = _CELLOF(JSP_TABLE_USER,'fullname',$row[10]);
				$eta = LOCAL_MKPASTQ($row[11],$row[12]);
				$list .= '<li>
					<h2>'.$title.', <abbr>'.$code.'</abbr></h2>
					<div class="feed-meta">
						Uploaded by <b>'.$author.'</b> on
						<span class="date">'.$eta.'</span>	
					</div>
					<div class="feed-action">
						<a href="'.$FOLDER.$row[7].'" target="_blank">Download</a>
					</div>
				</li>';
			}
		}
		else
			$list = '<div class="about">
						<h2>Error 404!</h2>
						<p></p>
						<b>No materials uploaded for this session.</b><br/>
						<p></p>            
						 <a href="session.php" class="btn pri-btn">Return</a> &nbsp;
						 <a href="'.LOCAL_UPLOAD_LINK().'" class="btn sec-btn">Upload Now</a>
					</div>';
		echo $list;
	?>
	</ul>
</main>

<a class="add" href="<?php echo LOCAL_UPLOAD_LINK(); ?>">
	<span>+</span>
</a>

</body>
</html>
