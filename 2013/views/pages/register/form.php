<?php
set('page_title', 'Registration Information');

function radioInput($name, $options, $form=array()) {
	echo '<ul class="radio">';
	foreach ($options as $value => $option) {
		echo '<li><label><input type="radio" name="'.$name.'" value="'.(1+$value).'" '.((@$form[$name]-1)==$value ? ' checked':'').' required>'.$option.'</label></li>';
	}
	echo "</ul>";
}

function checkboxes($name, $options, $form=array(), $other = false) {
	echo '<ul class="radio">';
	$count = count($options);
	$i = 0;
	foreach ($options as $value => $option) {
		$i++;
		echo '<li><label><input type="checkbox" name="'.$name.'[]" value="'.(1+$value).'"'.(in_array(1+$value, @$form[$name]) ? ' checked':'').'>'.$option.'</label>';
		if ($i == $count and $other) {
			echo '<input class="other" type="text" name="'.$name.'other">';
		}
		echo '</li>';
	}
	echo "</ul>";
}

function errorFormat($error) {
	if (!empty($error)) {
		echo '<div class="error">'.$error.'</div>';
	}
}
?>
<article>
<h1>Registration Information</h1>
<p>Please answer all questions</p>
<form method="POST" class="form">
	<fieldset class="columns">
		<?php errorFormat(@$error['firstname']); ?>
		<div><label for="firstname">First Name</label><input id="firstname" name="firstname" type="text" size="40" value="<?php echo htmlspecialchars(@$form['firstname']) ?>" required></div>
		<?php errorFormat(@$error['lastname']); ?>
		<div><label for="lastname">Last Name</label><input id="lastname" name="lastname" type="text" size="40" value="<?php echo htmlspecialchars(@$form['lastname']) ?>" required></div>
		<?php errorFormat(@$error['email']); ?>
		<div><label for="email">Email Address</label><input id="email" name="email" type="email" size="40" value="<?php echo htmlspecialchars(@$form['email']) ?>" required></div>
	</fieldset>
	<div class="question-block">
		<?php errorFormat(@$error['q1']); ?>
		<div class="question">Q1. Are you currently a Student, Faculty Member, Alumni, or Professional?</div>
		<?php
		radioInput('q1', $registration_options['q1'], @$form);
		?>
		<p><strong>Note: Students will need to show their Student ID when picking up their name tags the day of the conference.</strong></p>
	</div>
	<div class="question-block">
		<?php errorFormat(@$error['q2']); ?>
		<div class="question">Q2. Which panel do you plan to attend during the first panel session (10am – 11:30am)?</div>
		<?php
		radioInput('q2', $registration_options['q2'], @$form);
		?>
		<p><strong>Note: Please choose carefully as other panels may fill up, and you may not be able to switch.</strong></p>
	</div>
	<div class="question-block">
		<?php errorFormat(@$error['q3']); ?>
		<div class="question">Q3. Which panel do you plan to attend during the second panel session (12:45pm – 2:15pm)?</div>
		<?php
		radioInput('q3', $registration_options['q3'], @$form);
		?>
	</div>
	<div class="question-block">
		<?php errorFormat(@$error['q4']); ?>
		<div class="question">Q4. Which panel do you plan to attend during the third panel session (2:30pm – 4:00pm)?</div>
		<?php
		radioInput('q4', $registration_options['q4'], @$form);
		?>
	</div>
	<div class="question-block">
		<?php errorFormat(@$error['q5']); ?>
		<div class="question">Q5. Do you plan to attend the post-conference networking reception?</div>
		<?php
		radioInput('q5', $registration_options['q5'], @$form);
		?>
	</div>
	<div class="question-block">
		<?php errorFormat(@$error['q6']); ?>
		<div class="question">Q6. How did you hear about the Asia Business Conference? (check all that apply)</div>
		<?php
		checkboxes('q6', $registration_options['q6'], @$form, true);
		?>
	</div>
	<div class="submit">
		<input type="hidden" name="unique_id" value="{{unique_id}}">
		<input type="submit" value="Next" class="btn btn-primary">
	</div>
</form>
</article>