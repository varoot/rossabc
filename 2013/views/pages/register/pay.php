<?php
set('page_title', 'Confirm Information');

$fee = array('$5', '$10', '$15', '$15', '$15');
// Regular registration
$paypalID = array('QWTZFHWJY42D4', 'SZBRFEXW5KNWQ', 'L3Y4GUP6PRRPG', 'L3Y4GUP6PRRPG', 'L3Y4GUP6PRRPG');
if ($register_early) {
	// Early registration
	// $paypalID = array('QWTZFHWJY42D4', '4HBN36NYBSHP4', '4HBN36NYBSHP4', '4HBN36NYBSHP4');
}
?>
<article>
<h1>Confirm Information</h1>
<div class="form">
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
	<dd><?php echo $registration_display['q1'][$form['q1']-1]?></dd>
</dl>
<dl>
	<dt>Registration Fee</dt>
	<dd><?php echo $fee[$form['q1']-1]?></dd>
</dl>
<dl>
	<dt>Session 1 (10am – 11:30am)</dt>
	<dd><?php echo $registration_display['q2'][$form['q2']-1]?></dd>
</dl>
<dl>
	<dt>Session 2 (12:45pm – 2:15pm)</dt>
	<dd><?php echo $registration_display['q3'][$form['q3']-1]?></dd>
</dl>
<dl>
	<dt>Session 3 (2:30pm – 4:00pm)</dt>
	<dd><?php echo $registration_display['q4'][$form['q4']-1]?></dd>
</dl>
<dl>
	<dt>Attending the Networking Reception</dt>
	<dd><?php echo $registration_display['q5'][$form['q5']-1]?></dd>
</dl>
{{/form}}
<form action="{{base_uri}}/register/form" method="post">
	<div class="submit">
		<input type="hidden" name="edit" value="{{unique_id}}">
		<input type="submit" value="Edit" class="btn">
	</div>
</form>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<div class="submit">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="custom" value="{{unique_id}}">
		<input type="hidden" name="hosted_button_id" value="<?php echo $paypalID[$form['q1']-1]?>">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</div>
</form>
</article>
