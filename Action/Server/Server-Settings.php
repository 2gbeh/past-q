<?php
$TABLE = JSP_TABLE_USER;
$_POST = JSP_FOOBAR_FORMFIL();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//ARRANGE
	$_FILTER = _FILTER($_POST);	
	
	if ($_FILTER['password'] != $_USER['password'])
		$err = '!Profile Password Incorrect.';
	else
	{
		$JSP_CRUD = _UPDATE($TABLE,'*',$_FILTER,$_USER['id']);
		if (_THROW($JSP_CRUD))
			$err = 'Profile Updated Successfully.';
		else
			$err = '!'.$JSP_CRUD;			
	}
}

?>