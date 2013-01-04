<?php
require_once('lib/limonade.php');
require_once('lib/Mustache.php');
require_once('lib/lessc.inc.php');

function configure()
{
	date_default_timezone_set('America/Detroit');

	$base_path = option('base_path');
	if (substr($base_path, strlen($base_path)-1) != '/') {
		$base_path .= '/';
	}
	option('base_uri', $base_path);
	set('base_uri', $base_path);

	layout('template.php');

	set('site_title', 'Ross Asia Business Conference');

	$deadline_early_registration = strtotime('2012-02-08 11:59pm');
	$deadline_registration = strtotime('2012-02-10 3:00pm');
	$date_fmt = 'F j, g:ia';
	set('register_early', time() < $deadline_early_registration);
	set('register_online', time() < $deadline_registration);
	set('register_early_deadline', date($date_fmt, $deadline_early_registration));
	set('register_deadline', date($date_fmt, $deadline_registration));

	$nav = array(
		'Home' => '',
		'About Us' => 'about',
		'Keynote' => 'keynote',
		'Schedule' => 'schedule',
		'Panels' => 'panels',
		'Sponsors' => 'sponsors',
		'Logistics' => 'logistics',
		'Team' => 'team',
		'Contact Us' => 'contact',
	);
	set('nav', $nav);
	
	// Site map is used for suggestions in 404 page
	$sitemap = $nav + array(
		'Register'=>'register',
		'ASEAN Panel'=>'panels/asean',
		'China Panel'=>'panels/china',
		'Corporate Social Responsibility Panel'=>'panels/csr',
		'Energy & Environment Panel'=>'panels/energy',
		'Entrepreneurship Panel'=>'panels/entrepreneurship',
		'Finance Panel'=>'panels/finance',
		'Japan & Korea'=>'panels/japan-korea',
		'India Panel'=>'panels/india',
		'Technology Panel'=>'panels/technology',
	);
	set('sitemap', $sitemap);
	
	set('google_analytics_id', 'UA-28569317-1');
	compile_less();
}

function compile_less()
{
	$less_file = 'css/style.less';
	$css_file = 'css/style.css';
	$cache_file = 'css/style.cache';
	
	$cache = unserialize(@file_get_contents($cache_file));

	if (!empty($cache)) {
		$last_updated = $cache['updated'];
		$cache = lessc::cexecute($cache);
		if ($cache['updated'] > $last_updated) {
			file_put_contents($css_file, $cache['compiled']);
		}
	} else {
		// create a new cache object, and compile
		$cache = lessc::cexecute($less_file);
		file_put_contents($css_file, $cache['compiled']);
		file_put_contents($cache_file, serialize($cache));
	}
}

function after_render($content, $locals)
{
	$m = new Mustache;
	return $m->render($content, $locals);
}

function not_found($errno, $errstr, $errfile=null, $errline=null)
{
    set('errno', $errno);
    set('errstr', $errstr);
    set('errfile', $errfile);
    set('errline', $errline);
    return render("errors/404.php");
}

function sendEmail($data) {
	$email_address = 'contact.abc2013@umich.edu';
	$data['ip_address'] = $_SERVER["REMOTE_ADDR"];
	$data['user_agent'] = $_SERVER["HTTP_USER_AGENT"];
	$data['message'] = str_replace("\r\n", "\n", $data['message']);
	
	$name = preg_replace('/[^a-zA-Z0-9 ]/', '', $data['name']);
	
	// Send an email to Ross ABC
	$headers = "From: $name <{$data['email']}>\r\n".
    "Reply-To: $name <{$data['email']}>\r\n";
	if (!mail($email_address, $data['subject'], partial('emails/query.php', $data), $headers)) {
		return false;
	}
	
	// Send a receipt to the sender
	$headers = "From: Ross Asia Business Conference <$email_address>\r\n".
    "Reply-To: Ross Asia Business Conference <$email_address>\r\n";
	return mail($data['email'], 'Receipt: '.$data['subject'], partial('emails/receipt.php', $data), $headers);
}

dispatch('^/panels/([-\w]+)', 'panel');
	function panel()
	{
		$uri = $page = params(0);
		set('uri', 'panels/'.$uri);
		set('page', $page);
		if (!is_file('views/panels/'.$page.'.php')) {
			halt(NOT_FOUND);
		}
		set('panel_content', partial('panels/'.$page.'.php'));
		set('page_title', set('panel_title').' Panel');
		return render('template/panel.php');
	}

dispatch('/:page', 'page');
dispatch('/:page/:subpage', 'page');
	function page()
	{
		$uri = $page = params('page');
		$subpage = params('subpage');
		if ($subpage != '') {
			$subpage = '/'.$subpage;
			$uri = $uri.$subpage;
		}
		set('uri', $uri);
		if (substr($page, strlen($page)-5) == '.html') {
			$page = substr($page, 0, strlen($page)-5);
			if ($page == "index") {
				redirect_to("", array('status'=>HTTP_MOVED_PERMANENTLY));
			} else {
				redirect_to($page, array('status'=>HTTP_MOVED_PERMANENTLY));
			}
		}
		if ($page == '') $page = 'home';
		set('page', $page);
		$file = 'pages/'.$page.$subpage.'.php';
		if (!is_file('views/'.$file)) {
			foreach (set('sitemap') as $title => $url) {
				if ($url == $uri) {
					set('page_title', $title);
					return render('comingsoon.php');
				}
			}
			halt(NOT_FOUND);
		}
		return render($file);
	}

dispatch_post('/contact', 'checkContact');
	function checkContact()
	{
		$form = $_POST;
		$error = array();
		foreach (array('name', 'email', 'email2', 'subject', 'message') as $field) {
			$form[$field] = trim($form[$field]);
			if (empty($form[$field])) {
				$error[$field] = 'Please do not leave this field blank';
			}
		}
		
		$form['name'] = str_replace(array("\r","\n"), "", $form['name']);
		$form['subject'] = str_replace(array("\r","\n"), "", $form['subject']);
		
		if ($form['email'] != filter_var($form['email'], FILTER_SANITIZE_EMAIL)) {
			$error['email'] = 'Please enter a valid email address';
		} else {
			if ($form['email'] != $form['email2']) {
				$error['email'] = 'Emails do not match';
			}
		}
		
		set('form', $form);
		set('error', $error);
		set('uri', 'contact');
		set('page', 'contact');
		if (empty($error)) {
			if (sendEmail($form)) {
				redirect_to('contact', 'thanks', array('status'=>HTTP_SEE_OTHER));
			} else {
				set('error_all', 'Your message failed to send. Please try later or email umichrossabc@gmail.com.');
				return render('pages/contact.php');
			}
		} else {
			return render('pages/contact.php');
		}
	}

dispatch_post('/register/list', 'registerList');
	function registerList()
	{
		set('uri', 'register/list');
		set('page', 'register');
		set('pwd', $_POST['pwd']);
		if ($_POST['pwd'] != 'aBC2012!') {
			return render('pages/register/list.php');
		}
		$f = file('log.txt');
		$list = array();
		foreach ($f as $entry) {
			if (empty($entry)) continue;
			$data = @unserialize($entry);
			if (!empty($data['timestamp'])) {
				$data['time'] = date('Y-m-d g:ia', $data['timestamp']);
			}
			$q1 = array('Student', 'Faculty', 'Michigan Alumni', 'Professional/Other');
			$q2 = array('China', 'Energy', 'ASEAN');
			$q3 = array('Korea', 'Finance', 'Entrepreneurship', 'CSR');
			$q4 = array('India', 'Japan', 'Technology');
			$q5 = array('Yes', 'No');
			if ($data['timestamp'] > strtotime('2012-01-27')) {
				$q3 = array('Finance', 'Entrepreneurship', 'CSR');
				$q4 = array('India', 'Japan & Korea', 'Technology');
			}
			$data['type'] = $q1[$data['q1']-1];
			$data['panel1'] = $q2[$data['q2']-1];
			$data['panel2'] = $q3[$data['q3']-1];
			$data['panel3'] = $q4[$data['q4']-1];
			$data['network'] = $q5[$data['q5']-1];
			$hash = $data['lastname'].'-'.$data['firstname'].'-'.$data['email'];
			$list[$hash] = $data;
		}
		
		//ksort($list);
		$count = 1;
		$sorted_list = array();
		foreach ($list as $l) {
			$l['id'] = $count;
			$count++;
			$sorted_list[] = $l;
		}
		
		set('list', $sorted_list);
		return render('pages/register/list.php');
	}

dispatch_post('/register/form', 'checkRegister');
	function checkRegister()
	{
		$form = $_POST;
		$error = array();
		for ($i = 1; $i <= 6; $i++) {
			if (empty($form['q'.$i])) {
				$error['q'.$i] = 'Please answer this question';
			}
		}
		foreach (array('firstname', 'lastname', 'email') as $field) {
			$form[$field] = trim(@$form[$field]);
			if (empty($form[$field])) {
				$error[$field] = 'Please do not leave this field blank';
			}
		}
		set('form', $form);
		set('error', $error);
		set('uri', 'register/form');
		set('page', 'register');
		if (empty($error)) {
			$f = fopen('log.txt','a');
			$form['timestamp'] = time();
			$form['ip'] = $_SERVER["REMOTE_ADDR"];
			fwrite($f, serialize($form)."\n");
			fclose($f);
			return render('pages/register/pay.php');
		} else {
			return render('pages/register/form.php');
		}
	}


run();