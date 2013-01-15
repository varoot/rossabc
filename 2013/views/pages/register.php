<?php
set('page_title', 'Registration');
?>
<article>
<h1>Registration</h1>
<p class="pre-list">
Registration is open to the public and required for all conference attendees. The registration fee covers all of the following on Saturday, February 2nd, 2013:
</p>
<ul>
	<li>Access to three panels over the course of the day.</li>
	<li>Free lunch.</li>
	<li>Admission to the post-conference networking reception with the panelists.</li>
</ul>
<h2>Registration Fee</h2>
{{#register_online}}
{{#register_early}}
<p class="pre-list">If you register by <strong>{{register_early_deadline}}</strong>:</p>
<ul>
	<li>$5 for students (from any academic institution)</li>
	<li>$10 for non-students/professionals</li>
</ul>
{{/register_early}}
<p class="pre-list">If you register by <strong>{{register_deadline}}</strong>:</p>
<ul>
	<li>$5 for undergraduate students (from any academic institution)</li>
	<li>$10 for non-undergraduate students (from any academic institution)</li>
	<li>$15 for non-students/professionals</li>
</ul>
{{/register_online}}
<p class="pre-list">On the day of the conference, <strong>February 2</strong>:</p>
<ul>
	<li>$10 for undergraduate students (from any academic institution)</li>
	<li>$15 for non-undergraduate students (from any academic institution)</li>
	<li>$20 for non-students/professionals</li>
</ul>
{{#register_online}}
<p>
The registration button below will take you to a page that will require you to enter your personal information and indicate your panel preferences. Once this process is complete, you will be taken to a separate page to make your registration fee payment. 
</p>
<p>
<strong>Panels have limited space so register EARLY!</strong>
</p>
<form action="{{base_uri}}register/form">
<div class="submit">
<input type="submit" value="Register" class="btn btn-primary">
</div>
</form>
{{/register_online}}
{{^register_online}}
<p><strong>The online registration is now closed.</strong> Please register at the event.</p>
{{/register_online}}
</article>