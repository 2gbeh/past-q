<?php
function JSP_TYPECHECK_POST ($input)
{
	$input = trim($input);
	$input = stripslashes($input);
	$input = htmlspecialchars($input);
	return $input;		
}

function JSP_FILTER_POST ($postArray)
{
	$paramArray = array($postArray);	
	if (JSP_PARAM_FORMAT($paramArray))
		return JSPIF;
	else
	{
		foreach ($postArray as $key => $value)
		{
			if 
			(
				$key != 'hidden' && 
				$key != 'id' && 
				$key != 'terms' && 
				$key != 'checkbox' 
			)
			{
				if ($key == 'email')
					$value = strtolower($value);
				$nowsp = JSP_CRUNCH_WHITESPACE($value);
				if (_THROW($nowsp))
					$newArray[$key] = JSP_TYPECHECK_POST($nowsp);
				else
					$newArray[$key] = JSP_TYPECHECK_POST($value);
			}
		}
		foreach ($newArray as $index => $assoc_array)
			$output[$index] = JSP_DROP_ARRAY($assoc_array,',');
		return $newArray;
	}
}

function JSP_FILTER_FILE ($postArray, $file = 'image', $position = 'CURRENT')
{
	$paramArray = array($postArray,$file,$position);
	if (JSP_PARAM_FORMAT($paramArray))
		return JSPIF;
	else
	{
		$file = JSP_NAME_SPACE($_FILES[$file]['name']);
		$filterArray = JSP_FILTER_POST($postArray);
		$shiftArray = JSP_SHIFT_ARRAY($filterArray,$file,$position);
		if (_THROW($shiftArray))
			return $shiftArray;
		else
			return JSPIP;
	}
}

function JSP_SANITIZE_POST ($throwArray, $postArray)
{
	$paramArray = array($throwArray,$postArray);
	if (JSP_PARAM_FORMAT($paramArray)) 
		return JSPIF;		
	else
	{
		$throwArray = _CSV($throwArray);
		$key = 0;		
		foreach ($postArray as $name => $value)
		{			
			//BAD EMAIL
			if ($name == 'email' && !JSP_SPAM_ISEMAIL($value))
				$catch .= $throwArray[$key].' field is invalid.<br/>';
				
			if //NOT NUMERIC 
			(
				JSP_SORT_GATE($name,'year,month,day,age,postalcode,zipcode,number,phone,mobile,contact,pin,vercode,acc_number,amount','OR') && 
				!is_numeric($value)
			) 
				$catch .= $throwArray[$key].' field is invalid.<br/>';
			
			//INCOMPLETE
			if 
			(
				(
					JSP_SORT_GATE($name,'number,phone,mobile,contact','OR') && 
					strlen($value) < 11
				) || 
				(
					$name == 'acc_number' && 
					strlen($value) < 10
				) ||
				(
					JSP_SORT_GATE($name,'fullname,name,acc_name','OR') && 
					strlen($value) < 7
				)				
				
			)
				$catch .= $throwArray[$key].' field is incomplete.<br/>';
			$key++;
		} #foreach
		return $catch;
	} #else
}

function JSP_SANITIZE_TEXTAREA ($name)
{
	$paramArray = array($name);
	if (JSP_PARAM_FORMAT($paramArray)) 
		return JSPIF;		
	else
	{
		if ($_POST[$name] == 'Enter '.$name.' here..')
			return ucwords($name).' field is empty.';		
	}
}

function JSP_VALIDATE_POST ($table, $fieldArray, $throwArray, $postArray)
{
	$paramArray = array($table,$fieldArray,$throwArray,$postArray);
	if (JSP_PARAM_FORMAT($paramArray)) 
		return JSPIF;		
	else
	{	
		$fieldArray = JSP_BUILD_CSV($fieldArray);
		$throwArray = JSP_BUILD_CSV($throwArray);
		$prikey = JSP_FETCH_PRIKEY($table,'VALUE'); //GET PRIKEY
		$switch = _BYID($table,$_POST[$prikey]); //GET POST['id']
		
		foreach ($fieldArray as $key => $field)
		{					
			//BAD EMAIL
			if ($field == 'email' && !JSP_SPAM_ISEMAIL($postArray[$field]))
				$catch .= 'Invalid '.$throwArray[$key].' format.<br/>';				
				
			if //NOT NUMERIC 
			(
				JSP_SORT_GATE($field,'year,month,day,age,postalcode,zipcode,number,phone,mobile,contact,pin,vercode,acc_number,amount','OR') && 
				!is_numeric($postArray[$field])
			) 
				$catch .= 'Invalid '.$throwArray[$key].' format.<br/>';
			
			//INCOMPLETE
			if 
			(
				(
					JSP_SORT_GATE($field,'number,phone,mobile,contact','OR') && 
					strlen($postArray[$field]) < 11
				) || 
				(
					$field == 'acc_number' && 
					strlen($postArray[$field]) < 10
				)
			)
				$catch .= 'Incomplete '.$throwArray[$key].'.<br/>';
			
			//TUPLES
			if 
			(
				JSP_SORT_GATE($field,'fullname,name,acc_name','OR') && 
				JSP_SSQL_TUPLES($table,$field,$postArray[$field])
			)
			{
				if (strtolower($switch[$field]) != strtolower($postArray[$field]))
					$catch .= $throwArray[$key].' already exist.<br/>';
			}
			else
			{			
				//FIELD ALREADY EXIST
				if (_EXIST($table,$field,$postArray[$field]))
				{
					//SAFE CHECK FOR UPDATES
					if (strtolower($switch[$field]) != strtolower($postArray[$field]))
						$catch .= $throwArray[$key].' already exist.<br/>';
				}
			}
		}
		return $catch;
	}
}

?>

