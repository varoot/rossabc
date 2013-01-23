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
	set('site_domain', 'http://rossabc.com');
	option('contact_email', 'contact.abc2013@umich.edu');

	layout('template.php');

	set('site_title', 'Ross Asia Business Conference');
	option('db_driver', 'sqlite:db.sqlite');
	option('paypal_email', 'duykhiem@umich.edu');

	$deadline_early_registration = strtotime('2012-02-08 11:59pm');
	$deadline_registration = strtotime('2013-02-01 3:00pm');
	$date_fmt = 'F j, g:ia';
	set('register_early', time() < $deadline_early_registration);
	set('register_online', time() < $deadline_registration);
	set('register_early_deadline', date($date_fmt, $deadline_early_registration));
	set('register_deadline', date($date_fmt, $deadline_registration));

	$registration_options = array(
		'q1' => array('Undergraduate Student (any university)', 'Non-Undergraduate Student (any university)', 'Faculty (any university)', 'Michigan Alumni', 'Professional/Other'),
		'q2' => array('China', 'Transportation and Energy', 'ASEAN (Southeast Asia)'),
		'q3' => array('India', 'Japan', 'Technology'),
		'q4' => array('Finance', 'Entrepreneurship'),
		'q5' => array('Yes', 'No'),
		'q6' => array('Conference Website','Email from the ABC','Email from a friend/professor/club/etc.','Flyer','Asia Business Conference Table','Word of mouth','Facebook','Other, please describe:'),
	);

	$registration_display = $registration_options;
	$registration_display['q1'] = array('Undergraduate Student', 'Non-Undergraduate Student', 'Faculty', 'Michigan Alumni', 'Professional/Other');
	$registration_display['q4'] = array('Finance', 'Entrepreneurship', 'Korea'); // Korea got cancelled

	$registration_internal = $registration_display;
	$registration_internal['q1'] = array('Udg', 'Non-Udg', 'Faculty', 'Alumni', 'Other');
	$registration_internal['q2'] = array('China', 'Energy', 'ASEAN');
	$registration_internal['q3'] = array('India', 'Japan', 'Tech');
	$registration_internal['q4'] = array('Finance', 'Entrepreneur', 'Korea'); // Korea got cancelled
	$registration_internal['q5'] = array('✓', '');

	set('registration_options', $registration_options);
	set('registration_display', $registration_display);
	set('registration_internal', $registration_internal);

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
		'Transportation and Energy Panel'=>'panels/transportation-and-energy',
		'Entrepreneurship Panel'=>'panels/entrepreneurship',
		'Finance Panel'=>'panels/finance',
		'Japan Panel'=>'panels/japan',
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

function sendEmail($data)
{
	$email_address = option('contact_email');
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

function confirmationEmail($data)
{
	$email_address = option('contact_email');
	
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

dispatch_post('/payment-process', 'logPayment');
	function logPayment()
	{
		// STEP 1: Read POST data

		// reading posted data from directly from $_POST causes serialization 
		// issues with array data in POST
		// reading raw POST data from input stream instead. 
		$raw_post_data = file_get_contents('php://input');
		$raw_post_array = explode('&', $raw_post_data);
		$myPost = array();

		// Log
		$f = fopen('payment.txt','a');
		fwrite($f, 'Log: '.time()."\n");
		fwrite($f, $raw_post_data."\n");
		fclose($f);

		foreach ($raw_post_array as $keyval) {
			$keyval = explode ('=', $keyval);
			if (count($keyval) == 2)
			{
				$myPost[$keyval[0]] = urldecode($keyval[1]);
			}
		}
		// read the post from PayPal system and add 'cmd'
		$req = 'cmd=_notify-validate';
		if (function_exists('get_magic_quotes_gpc'))
		{
			$get_magic_quotes_exists = true;
		} 
		foreach ($myPost as $key => $value) {        
			if ($get_magic_quotes_exists == true and get_magic_quotes_gpc() == 1)
			{ 
				$value = urlencode(stripslashes($value)); 
			}
			else
			{
				$value = urlencode($value);
			}
			$req .= "&$key=$value";
		}

		// STEP 2: Post IPN data back to paypal to validate
		$ch = curl_init('https://www.paypal.com/cgi-bin/webscr');
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));

		// In wamp like environments that do not come bundled with root authority certificates,
		// please download 'cacert.pem' from "http://curl.haxx.se/docs/caextract.html" and set the directory path 
		// of the certificate as shown below.
		// curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__) . '/cacert.pem');
		if( !($res = curl_exec($ch)) ) {
			// error_log("Got " . curl_error($ch) . " when processing IPN data");
			curl_close($ch);
			exit;
		}
		curl_close($ch);

		// STEP 3: Inspect IPN validation result and act accordingly
 
		if (strcmp ($res, "VERIFIED") == 0) {
			// check whether the payment_status is Completed
			// check that txn_id has not been previously processed
			// check that receiver_email is your Primary PayPal email
			// check that payment_amount/payment_currency are correct
			// process payment

			// assign posted variables to local variables
			$item_name = $_POST['item_name'];
			$item_number = $_POST['item_number'];
			$payment_status = $_POST['payment_status'];
			$payment_amount = $_POST['mc_gross'];
			$payment_currency = $_POST['mc_currency'];
			$txn_id = $_POST['txn_id'];
			$receiver_email = $_POST['receiver_email'];
			$payer_email = $_POST['payer_email'];

			if ( ! ipn_check($txn_id, $raw_post_data))
			{
				return 'Payment already processed';
			}

			if ($receiver_email != option('paypal_email'))
			{
				return 'Payment to wrong account';
			}

			$unique_id = $_POST['custom'];

			$status = 99;
			if ($payment_status == 'Completed')
			{
				$status = 1;
			}

			if ($payment_status == 'Refunded')
			{
				$status = 2;
			}

			registration_status($unique_id, $status);

			return 'Payment Processed';
		} else if (strcmp ($res, "INVALID") == 0) {
			// log for manual investigation
			return 'Invalid Payment';
		}
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
		set('short_panel', false);
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
		if (hash('sha512', $_POST['pwd']) != '57bc880d9629245c7ae239ab3fe0e8bc63ca0d46e9300751d24200cefa216d1cdaa9a0960eb2aed8310a2cd5272ea039bad781f1e7f9317cfa331a55d06abeae') {
			return render('pages/register/list.php');
		}

		$display = set('registration_display');
		$internal = set('registration_internal');

		$types = $display['q1'];
		$panels = array_merge($display['q2'], $display['q3'], $display['q4']);
		$panel_stats = array_fill_keys($panels, 0);

		$network_count = 0;
		$registrant_stats = array_fill_keys($types, 0);

		$list = array();
		foreach (registration_find_all() as $row)
		{
			$entry = $row['data'];
			if (empty($entry)) continue;

			// Only list people who paid
			if ($row['status'] != 1) continue;

			$data = @unserialize($entry);
			if ( ! empty($row['timestamp']))
			{
				$data['time'] = date('M j, g:ia', $row['timestamp']);
			}

			$data['type'] = $internal['q1'][$data['q1']-1];
			$data['panel1'] = $internal['q2'][$data['q2']-1];
			$data['panel2'] = $internal['q3'][$data['q3']-1];
			$data['panel3'] = $internal['q4'][$data['q4']-1];
			$data['network'] = $internal['q5'][$data['q5']-1];
			$hash = $data['lastname'].'-'.$data['firstname'].'-'.$data['email'];
			$list[$hash] = $data;

			// Count registrant stats
			$registrant_stats[$display['q1'][$data['q1']-1]]++;

			// Count panel stats
			$panel_stats[$display['q2'][$data['q2']-1]]++;
			$panel_stats[$display['q3'][$data['q3']-1]]++;
			$panel_stats[$display['q4'][$data['q4']-1]]++;

			// Count Networking
			if ($data['q5'] == 1)
			{
				$network_count++;
			}
		}
		
		//ksort($list);
		$count = 1;
		$sorted_list = array();
		foreach ($list as $l) {
			$l['id'] = $count;
			$count++;
			$sorted_list[] = $l;
		}

		if (count($list) == 0)
		{
			set('emptylist', true);
		}
		
		set('list', $sorted_list);
		set('panel_stats', $panel_stats);
		set('registrant_stats', $registrant_stats);
		set('network_count', $network_count);
		return render('pages/register/list.php');
	}

dispatch_post('/register/form', 'checkRegister');
	function checkRegister()
	{
		$form = $_POST;
		$edit = false;

		if ( ! empty($_POST['edit']))
		{
			// Load data from database
			$edit = true;
			$unique_id = $_POST['edit'];
			$form = registration_load($unique_id);
		}

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
		if (empty($error) and ! $edit) {
			if ( ! empty($form['unique_id']))
			{
				$unique_id = $form['unique_id'];
				unset($form['unique_id']);
				registration_save($form, $unique_id);
			}
			else
			{
				$unique_id = registration_save($form);
			}
			set('unique_id', $unique_id);
			return render('pages/register/pay.php');
		} else {
			if ($edit)
			{
				set('unique_id', $unique_id);
			}
			return render('pages/register/form.php');
		}
	}

run();