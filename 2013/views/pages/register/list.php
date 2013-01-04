<?php
set('page_title', 'Registration List');
?>
<article>
{{^list}}
<form method="POST">
<fieldset class="columns">
	{{#pwd}}
	<div class="error">Incorrect Password</div>
	{{/pwd}}
	<div><label for="pwd">Password</label><input name="pwd" id="pwd" type="password"></div>
	<div class="submit">
		<input type="submit" value="View Registration">
	</div>
</fieldset>
</form>
{{/list}}
<?php if (!empty($list)) { ?>
<table class="admin">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Panel 1</th>
			<th>Panel 2</th>
			<th>Panel 3</th>
			<th>Network?</th>
			<th>Time</th>
		</tr>
	</thead>
	<tbody>
{{#list}}
		<tr>
			<td>{{id}}</td>
			<td>{{firstname}} {{lastname}}</td>
			<td>{{email}}</td>
			<td>{{panel1}}</td>
			<td>{{panel2}}</td>
			<td>{{panel3}}</td>
			<td>{{network}}</td>
			<td>{{time}}</td>
		</tr>
{{/list}}
	</tbody>
</table>
<?php } ?>
</article>