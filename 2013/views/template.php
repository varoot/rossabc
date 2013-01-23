<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>{{#page_title}}{{page_title}} - {{/page_title}}{{site_title}}</title>
	<meta name="description" content="Official website of the 23rd Annual Asia Business Conference hosted by the Ross Business School, Universtity of Michigan.">
	<meta name="author" content="Stephen M. Ross School of Business">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" href="{{base_uri}}images/favicon.ico" type="image/vnd.microsoft.icon">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{base_uri}}css/style.css?v=4" type="text/css">
	{{>template/prefetch}}
	<script src="{{base_uri}}js/modernizr-2.0.6.min.js"></script>
	{{#page_title}}<meta property="og:title" content="{{page_title}}">{{/page_title}}
	<meta property="og:url" content="{{site_domain}}{{base_uri}}{{uri}}">
	<meta property="og:image" content="{{site_domain}}{{base_uri}}images/logo-square.png">
	<meta property="og:site_name" content="{{site_title}}">
	<meta property="og:type" content="website">
</head>
<body id="page-{{page}}">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="{{base_uri}}js/jquery-1.8.3.min.js"><\/script>')</script>
	<script src="{{base_uri}}js/jquery-ui-1.9.2.custom.min.js"></script>
	<div id="container">
		{{>template/header}}
		<div id="main" role="main">{{{content}}}</div>
		{{>template/footer}}
	</div>
	{{#google_analytics_id}}
	<script>
		window._gaq = [['_setAccount','{{google_analytics_id}}'],['_trackPageview'],['_trackPageLoadTime']];
		Modernizr.load({
		  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
		});
	</script>
	{{/google_analytics_id}}
	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
</body>
</html>