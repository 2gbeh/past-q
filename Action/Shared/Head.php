<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="copyright" content="<?php echo META_COPY; ?>">
<meta name="description" content="<?php echo META_DESC; ?>">
<meta name="keywords" content="<?php echo META_KEYWORD; ?>">
<meta name="author" content="<?php echo META_AUTHOR; ?>">
<meta name="robots" content="noindex,follow">
<link href="Media/Icon/Favicon.ico" rel="icon" type="image/x-icon" />
<title>
<?php 
	if 
	(
		TYPE && 
		(
			JSP_DROP_CASE(JSP_PAGE_NAME) == 'index' || 
			JSP_DROP_CASE(JSP_PAGE_NAME) == 'home'
		)
	)
		$title = ': '.TYPE;
	else
		$title = ' - '.JSP_TITLE_CASE(JSP_PAGE_NAME); 
	echo APPNAME.$title;
?>
</title>  