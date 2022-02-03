<?php
$TABLE = 'material_tb';
$FOLDER = 'PastQ/Media/Uploads/';
$_POST = JSP_FOOBAR_FORMFIL();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//ARRANGE
	$_FILTER = _FILTER($_POST);	
	foreach ($_FILTER as $name => $input)
	{
		$__POST[$name] = $input;
		if ($name == 'code')
		{
			foreach ($_FILES as $page => $array)
			{			
				$i++;				
				$__POST['page'.$i] = $array['name'];
			}
		}
	}
	
	//UPDATE
	$JSP_SSQL_CLONE = JSP_SSQL_CLONE($TABLE,'*',$__POST);
	if ($JSP_SSQL_CLONE)
	{
		_UPDATE($TABLE,'*',$__POST,$JSP_SSQL_CLONE);
		foreach ($_FILES as $key => $fileArray)		
			JSP_FILE_DELETE($FOLDER.$fileArray['name']);
		foreach ($_FILES as $key => $fileArray)
			JSP_FILE_UPLOAD($fileArray,$FOLDER);
		$err = 'Material Updated Successfully.';		
	}
	else	
	{
//		var_dump($_SESSION);
		//CREATE
		_CREATE($TABLE,$__POST);
		foreach ($_FILES as $key => $fileArray)
			JSP_FILE_UPLOAD($fileArray,$FOLDER);
		$err = 'Material Uploaded Successfully.';
	}
}

?>