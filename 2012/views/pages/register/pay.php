<?php
set('page_title', 'Confirm Information');

$fee = array('$5', '$10', '$10', '$10');
// Regular registration
$paypalID = array('SZBRFEXW5KNWQ', 'L3Y4GUP6PRRPG', 'L3Y4GUP6PRRPG', 'L3Y4GUP6PRRPG');
if ($register_early) {
	// Early registration
	$paypalID = array('QWTZFHWJY42D4', '4HBN36NYBSHP4', '4HBN36NYBSHP4', '4HBN36NYBSHP4');
}

$q1 = array('Student', 'Faculty', 'Michigan Alumni', 'Professional/Other');
$q2 = array('China', 'Energy', 'ASEAN (Southeast Asia)');
$q3 = array('Finance', 'Entrepreneurship', 'Corporate Social Responsibility');
$q4 = array('India', 'Japan & Korea', 'Technology');
$q5 = array('Yes', 'No');
$q6 = array('Conference Website','Email from the ABC','Email from a friend/professor/club/etc.','Flyer','Asia Business Conference Table','Word of mouth','Other, please describe:');
?>
<article>
<h1>Confirm Information</h1>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
{{#form}}
<dl>
	<dt>Name</dt>
	<dd>{{firstname}} {{lastname}}</dd>
</dl>
<dl>
	<dt>Email Address</dt>
	<dd>{{email}}</dd>
</dl>
<dl>
	<dt>Registration Type</dt>
	<dd><?php echo $q1[$form['q1']-1]?></dd>
</dl>
<dl>
	<dt>Registration Fee</dt>
	<dd><?php echo $fee[$form['q1']-1]?></dd>
</dl>
<dl>
	<dt>Session 1 (10am – 11:30am)</dt>
	<dd><?php echo $q2[$form['q2']-1]?></dd>
</dl>
<dl>
	<dt>Session 2 (12:45pm – 2:15pm)</dt>
	<dd><?php echo $q3[$form['q3']-1]?></dd>
</dl>
<dl>
	<dt>Session 3 (2:30pm – 4:00pm)</dt>
	<dd><?php echo $q4[$form['q4']-1]?></dd>
</dl>
<dl>
	<dt>Attending the Networking Reception</dt>
	<dd><?php echo $q5[$form['q5']-1]?></dd>
</dl>
{{/form}}
<div class="submit">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="<?php echo $paypalID[$form['q1']-1]?>">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</div>
</form>
</article>
