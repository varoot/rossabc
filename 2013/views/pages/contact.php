<?php
set('page_title', 'Contact Us');

function errorFormat($error) {
	if (!empty($error)) {
		echo '<div class="error">'.$error.'</div>';
	}
}
?>
<article>
<h1>Contact Us</h1>
<p>All fields are required</p>
<?php errorFormat(@$error_all); ?>
<form method="POST" class="form">
	<fieldset class="columns wide">
		<?php errorFormat(@$error['name']); ?>
		<div>
			<label for="name">Your Name</label>
			<input type="text" id="name" name="name" size="40" required{{#form}} value="{{name}}"{{/form}}>
		</div>
		<?php errorFormat(@$error['email']); ?>
		<div>
			<label for="email">Email Address</label>
			<input type="email" id="email" name="email" size="40" required{{#form}} value="{{email}}"{{/form}}>
		</div>
		<?php errorFormat(@$error['email2']); ?>
		<div>
			<label for="email2">Confirm Email Address</label>
			<input type="email" id="email2" name="email2" size="40" required{{#form}} value="{{email2}}"{{/form}}>
		</div>
		<?php errorFormat(@$error['subject']); ?>
		<div>
			<label for="subject">Subject</label>
			<input type="text" id="subject" name="subject" size="40" required{{#form}} value="{{subject}}"{{/form}}>
		</div>
		<?php errorFormat(@$error['message']); ?>
		<div>
			<label for="message">Your Request or Message</label>
			<textarea id="message" name="message" rows="5" cols="50" required>{{#form}}{{message}}{{/form}}</textarea>
		</div>
	</fieldset>
	<div class="submit">
		<input type="submit" value="Send" class="btn btn-primary">
	</div>
</form>
</article>