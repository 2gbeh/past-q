<?php
function JSP_ENUMS_GENERIC ($param)
{
	$paramArray = array($param);
	if (JSP_PARAM_FORMAT($paramArray)) 
		return JSPIF;
	else
	{
		if ($param == 'GENDER')
			$output = array('male','female');
		else if ($param == 'SEX')
			$output = array('m','f');
		else if ($param == 'AGE_RANGE')
			$output = array('13 - 17','18 - 24','25 - 34','35 - 54','55+');			
		else if ($param == 'STATUS')
			$output = array('single','married','separated','divorced','widowed');		
		else if ($param == 'STATE')
			$output = array('abia','adamawa','akwa ibom','anambra','bauchi','bayelsa','benue','borno','cross river','delta','ebonyi','edo','ekiti','enugu','gombe','imo','jigawa','kaduna','kano','katsina','kebbi','kogi','kwara','lagos','nasarawa','niger','ogun','ondo','osun','oyo','plateau','rivers','sokoto','taraba','yobe','zamfara','abuja fct');
		else if ($param == 'BANK')
			$output = array('access bank','aso bank','citi bank','diamond bank','ecobank','FCMB','fidelity bank','first bank','guaranty trust bank','heritage bank','jaiz bank','jubilee bank','keystone bank','mainstreet bank','page MFB','skye bank','stanbic ibtc','standard chartered bank','sterling bank','suntrust bank','UBA','union bank','unity bank','wema bank','zenith bank');
		else if ($param == 'ANSWER')
			$output = array('yes','no');
		else
			JSPIP;
		return JSP_TITLE_CASE($output);			
	}
}

function JSP_ENUMS_DATE ($param)
{
	$paramArray = array($param);
	if (JSP_PARAM_FORMAT($paramArray)) 
		return JSPIF;
	else
	{
		if ($param == 'DOW_INDEX')
			$output = range(1,7);
		else if ($param == 'DOW_INDEX_UNIX')
			$output = range(0,6);
		else if ($param == 'DOW_SUBSTR')
		{
			$newArray = JSP_ENUMS_DATE('DOW_SHORT');
			foreach ($newArray as $value)
			{
				$output[] = substr($value,0,2);
			}
		}
		else if ($param == 'DOW_SUBSTR_UNIX')
		{
			$newArray = JSP_ENUMS_DATE('DOW_SHORT_UNIX');
			foreach ($newArray as $value)
			{
				$output[] = substr($value,0,2);
			}
		}
		else if ($param == 'DOW_SHORT')
			$output = array('sun','mon','tue','wed','thu','fri','sat');		
		else if ($param == 'DOW_SHORT_UNIX')
			$output = array('mon','tue','wed','thu','fri','sat','sun');
		else if ($param == 'DOW_LONG')
			$output = array('sunday','monday','tuesday','wednesday','thursday','friday','saturday');
		else if ($param == 'DOW_LONG_UNIX')
			$output = array('monday','tuesday','wednesday','thursday','friday','saturday','sunday');			
		else if ($param == 'DAY' || $param == 'MONTH_DAYS')
			$output = range(1,31);				
		else if ($param == 'MONTH_INDEX')
			$output = range(1,12);
		else if ($param == 'MONTH_SUBSTR')
		{
			$newArray = JSP_ENUMS_DATE('MONTH_SHORT');
			foreach ($newArray as $value)
			{
				$output[] = substr($value,0,1);
			}
		}								
		else if ($param == 'MONTH_SHORT')
			$output = array('jan','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec');					
		else if ($param == 'MONTH_QUARTER')
			$output = array('jan - mar','apr - may','jul - sep','oct - dec');
		else if ($param == 'MONTH' || $param == 'MONTH_LONG')
			$output = array('january','february','march','april','may','june','july','august','september','october','november','december');		
		else if ($param == 'QUARTER_SUBSTR')
		{
			$newArray = range(1,4);
			foreach ($newArray as $value)
			{
				$output[] = 'q'.$value;
			}			
		}		
		else if ($param == 'QUARTER_SHORT')
		{
			$newArray = array('1st','2nd','3rd','4th');
			foreach ($newArray as $value)
			{
				$output[] = $value.' quarter';
			}
		}		
		else if ($param == 'QUARTER_LONG')
		{
			$newArray = array('first','second','third','fourth');			
			foreach ($newArray as $value)
			{
				$output[] = $value.' quarter';
			}
		}	
		else if ($param == 'YEAR')
			$output = range(date('Y')-49,date('Y'));
		else if ($param == 'HOURS_24')
			$output = range(0,23);		
		else if ($param == 'HOURS_12')
			$output = range(1,12);				
		else if ($param == 'MINUTES')
			$output = range(0,59);		
		else if ($param == 'SECONDS')
			$output = range(0,59);									
		else if ($param == 'MERIDIEM')
			$output = array('am','pm');
		else
			JSPIP;
		return JSP_TITLE_CASE($output);			
	}
}

function JSP_ENUMS_PREDEF ($param)
{
	$paramArray = array($param);
	if (JSP_PARAM_FORMAT($paramArray)) 
		return JSPIF;
	else
	{
		if ($param == 'IMAGE')
			$output = array('jpeg','jpg','png','gif','bmp','tif');
		else if ($param == 'VIDEO')
			$output = array('3gp','mp4','avi','ogg','flv','mkv','webm');
		else if ($param == 'DOC')
			$output = array('txt','doc','docx','pdf');
		else if ($param == 'ACCT_TYPE')
			$output = array('savings','current','others');
		else if ($param == 'TRANS_TYPE')
			$output = array('credit','debit','others');			
		else if ($param == 'FOREX')
			$output = JSP_BUILD_CASE(array('chy','eur','gbp','inr','ngn','usd'));			
		else if ($param == 'JUMBO')
			$output = array('sales','reach','clients');
		else if ($param == 'MOSONE')
			$output = array('revenue','expense','profit');			
		else if ($param == 'DEXTER')
			$output = array('sales','cost','gross');
		else if ($param == 'STARTUP')
			$output = array('expense','asset','investment','loan');
		else if ($param == 'SCALE')
			$output = range(date('Y')-4,date('Y'));		
		else if ($param == 'ERROR')			
			$output = JSP_BUILD_CASE(array('primary','success','info','warning','danger','default'));
		else if ($param == 'MKDATE')			
			$output = array('today','yesterday','this week','last week','this month','last month','this year','last year');
		else if ($param == 'MKFORMAT')			
			$output = array ('PRESET','LONG','SHORT','EVENT','STAMP','FORMAL','LBS','METRO','TELLER','FEED','ETA');
		else if ($param == 'HEXCODE')			
			$output = array
			(
				'lbs blue' => '#0093DD',
				'sea blue' => '#75C5F0',
				'dark blue' => '#007BB8',
				'teal' => '#008080',
				'dark teal' => '#006666',
				'call green' => '#16BC00',
				'dark red' => '#EE1111',
				'border' => '#DDD',
				'footer' => '#373435',
				'whitish' => '#F7F7F7',
				'android gray' => '#E0E0E0',
				'android bg' => '#EEEEEE',
				'watermark' => '#EDEDED'
			);
		else 
			$output = JSPIP;
		return $output;
	}
}

function JSP_ENUMS_PROFILE ($param = 'MAP')
{
	$treeArray = array
	(
		'fullname' => 'Tugbeh Emmanuel Osaretin',
		'name' => 'Tugbeh Emmanuel Osaretin',	
		'fname' => 'Emmanuel',
		'lname' => 'Tugbeh',
		'surname' => 'Tugbeh',		
		'mname' => 'Osaretin',
//		'gender' => 0,		
//		'sex' => 0,
//		'answer' => 0,
		'dob' => '1992/9/15',
		'year' => '1992',
		'month' => '9',
		'day' => '15',
		'age' => date('Y') - 1992,
		'soo' => 11,
		'origin' => 11,
		'state' => 11,
		'location' => 11,
		'lga' => 'Uhunmwode',
		'area' => 'Ugbowo',
		'district' => 'Ugbowo',		
		'po_box' => '300283',		
		'pobox' => '300283',				
		'postal_code' => '300283',
		'postalcode' => '300283',			
		'postal' => '300283',		
		'zip_code' => '300283',	
		'zipcode' => '300283',			
		'zip' => '300283',					
		'address' => 'No. 39b Uwasota road, off Eagle Furniture junc, Ugbowo, B/c.',
		'addr' => 'No. 39b Uwasota road, off Eagle Furniture junc, Ugbowo, B/c.',
		'hq' => 'One Lbs way, Uwasota, BC 300283.',
		'venue' => 'One Lbs way, Uwasota, BC 300283.',
		'email' => JSP_SUPER_USER,
		'number' => '08117390235',
		'phone' => '08117390235',
		'mobile' => '08117390235',		
		'contact' => '08117390235',
		'home' => '08169960927',
		'office' => '08169960927',
		'work' => '08169960927',
		'username' => '2gbeh',
		'userid' => '2gbeh',
		'handle' => '2gbeh',
		'password' => '4444',
		'psw' => '4444',		
		'pin' => '4444',
		'vercode' => '4444',		
		'bank' => 8,
		'file' => 'default.png',
		'upload' => 'default.png',		
		'profile' => 'default.png',
		'image' => 'default.png',
		'img' => 'default.png',
		'acct_name' => 'Tugbeh Emmanuel Osaretin',
		'acct_number' => '0131988214',
//		'acct_type' => 0,
//		'trans_type' => 0,		
		'topic' => 'Welcome to HWP Labs',
		'headline' => 'Welcome to HWP Labs',
		'title' => 'Welcome to HWP Labs',
		'subtitle' => 'Software Engineering and Business R&amp;D',
		'subject' => 'Software Engineering and Business R&amp;D',		
		'slogan' => JSP_FOOBAR_ARTICLE('SLOGAN'),
		'motto' => JSP_FOOBAR_ARTICLE('SLOGAN'),		
		'tagline' => JSP_FOOBAR_ARTICLE('SLOGAN'),		
		'about' => JSP_FOOBAR_ARTICLE(),		
		'article' => JSP_FOOBAR_ARTICLE(),		
		'writeup' => JSP_FOOBAR_ARTICLE(),		
		'content' => JSP_FOOBAR_ARTICLE(),
		'essay' => JSP_FOOBAR_ARTICLE(),
		'message' => JSP_FOOBAR_ARTICLE('SERVICE'),
		'comment' => JSP_FOOBAR_ARTICLE('SERVICE'),
		'summary' => JSP_FOOBAR_ARTICLE('CLIENT'),
		'feedback' => JSP_FOOBAR_ARTICLE('CLIENT'),
		'narration' => JSP_FOOBAR_ARTICLE('INTRO'),
		'listing' => JSP_FOOBAR_ARTICLE('LISTING'),
		'skill' => JSP_FOOBAR_ARTICLE('LISTING'),		
		'event_date' => JSP_DATE_EVENT,
		'event_time' => JSP_TIME_EVENT,		
		'event_venue' => 'One Lbs way, Uwasota, BC 300283.',		
		'website' => 'www.hwplabs.com',
//		'status' => 0,
		'school' => 'Benson Idahosa University',
		'college' => 'Benson Idahosa University',		
		'uni' => 'Benson Idahosa University',
		'study' => 'Computer Science',
		'course' => 'Computer Science',
		'grad_yr' => '2014',				
		'gradyr' => '2014',
		'degree' => 'B.Sc in Computer Science',		
		'qualification' => 'B.Sc in Computer Science',
		'qual' => 'B.Sc in Computer Science',		
		'ppa' => 'Government Girls Secondary School',
		'ppa_lga' => 'Ahoada',
		'ppa_state' => 31,		
		'state_code' => 'RV/14C/0247',				
		'statecode' => 'RV/14C/0247',		
		'date' => JSP_DATE_LONG,
		'time' => JSP_TIME_LONG,
		'reg' => JSP_DATE_ETA,
		'eta' => JSP_DATE_STAMP,			
	);		
	$array_keys = JSP_PUSH_ARRAY(array_keys($treeArray),'map','END');
	$paramArray = array($param);
	$parseArray = JSP_BUILD_CASE($array_keys);
	if (JSP_PARAM_FORMAT($paramArray)) 
		return JSPIF;
	else if (JSP_PARAM_PARSE($parseArray,$param)) 
		return JSPIP;
	else
	{	
		if ($param == 'MAP')
		{
			foreach ($treeArray as $key => $value)
				$output[JSP_BUILD_CASE($key)] = $value;
		}
		else
			$output = $treeArray[JSP_DROP_CASE($param)];
		return $output;
	}
}
?>








