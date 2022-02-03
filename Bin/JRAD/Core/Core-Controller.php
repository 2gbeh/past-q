<?php
function CORE_CONTROL_ADMIN ($page)
{
	if (!IS_LOCALHOST)
		$page = JSP_BASE_SSQL.$page; #Bin/SlingshotSQL/Home.php
	if (!JSP_SSQL_APPSTATE(array(JSP_TABLE_ADMIN,'control',2),_ADMIN))
		_REDIR($page,JSPER,JSP_ERROR_PAGE);
}

function CORE_ACCESS_ADMIN ($page)
{
	if (!IS_ADMIN || !_VALID(JSP_TABLE_ADMIN,_ADMIN) || _DISABLED(JSP_TABLE_ADMIN,_ADMIN))
	{
		$url = 'Login.php';	
		if (!IS_LOCALHOST)
		{
			$page = JSP_BASE_SSQL.$page; #Bin/SlingshotSQL/Home.php
			$url = JSP_BASE_SSQL.$url; #Bin/SlingshotSQL/Login.php
		}
		_SET('CHA',$page);
		_REDIR($url,JSPER,'Login to access Admin Portal.');
	}
}

function CORE_ACCESS_USER ($page)
{
	if (!IS_USER || !_VALID(JSP_TABLE_USER,_USER) || _DISABLED(JSP_TABLE_USER,_USER))
	{
		_SET('CHU',$page);		
		_REDIR('Login.php',JSPER,'Login to access Dashboard.');
	}
}

function CORE_ACCESS_DENY ($page, $message)
{
	if (!isset($page))
		$page = $_SERVER['SERVER_NAME'];
	if (isset($message))
		_REDIR($page,JSPER,$message);	
	else
		_REDIR($page);
}


?>