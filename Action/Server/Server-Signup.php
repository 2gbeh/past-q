<?php
//ACTIVE TABLE
$TABLE = JSP_TABLE_USER;
$_POST = JSP_FOOBAR_FORMFIL();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{			
	//ARRANGE
	$_FILTER = _FILTER($_POST);

	//CHECKS	
	$fieldArray = array('fullname','matno');
	$throwArray = array('Full Name','Matric. Number');
	$errorTray = _VALIDATE($TABLE,$fieldArray,$throwArray,$_FILTER);
	
	if ($errorTray)
		$err = '!'.$errorTray;
	else
	{
		$JSP_CRUD = _CREATE($TABLE,$_FILTER);
		if (_THROW($JSP_CRUD))
		{
			$row = _SWITCH($TABLE,'matno',$_FILTER['matno']);			
			_SET('CAU',$row['id']);
			$err = 'Sign Up was succesful.';
			if (IS_HISTORY_USER)
				_REDIR(_HISTORY_USER);
			else
				_REDIR(LANDING);			
		}
		else
			$err = '!'.$JSP_CRUD;			
	}
}

?>