<?php
//ACTIVE TABLE
$TABLE = JSP_TABLE_USER;
$SHELL = 'admin/';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$_FILTER = _FILTER($_POST);
	//ADMIN LOGIN
	if ($_FILTER['matno'] == 'admin-ssql' && $_FILTER['password'] == '_Thatssqlb0y')
		_REDIR($SHELL);
	else if ($_FILTER['matno'] == 'pastq' && $_FILTER['password'] == '_Strongp@ssw0rd')
		_REDIR($SHELL);
	else
	{		
		$JSP_SSQL_SIGNIN = JSP_SSQL_SIGNIN($TABLE,'matno,password',$_FILTER);	
		if (!JSP_ERROR_CATCH($JSP_SSQL_SIGNIN))
		{
			_SET('CAU',$JSP_SSQL_SIGNIN);
			$err = 'Log In was succesful.';			
			if (IS_HISTORY_USER)
				_REDIR(_HISTORY_USER);
			else
				_REDIR(LANDING);			
		}
		else if ($JSP_SSQL_SIGNIN == JSPON)
			$err = '!Matric. Number not registered.';
		else if ($JSP_SSQL_SIGNIN == JSPIL)
			$err = '!Password does not match.';
		else
			$err = '!'.$JSP_SSQL_SIGNIN;
	}
}

?>











