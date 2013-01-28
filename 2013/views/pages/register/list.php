<?php

set('page_title', 'Registration List');

?>

<article>

{{^list}}
	{{#emptylist}}
		<p>No one has registered yet</p>
	{{/emptylist}}
	{{^emptylist}}
		<form method="POST" class="form">

		<fieldset class="columns">
			{{#pwd}}
					<div class="error">Incorrect Password</div>
			{{/pwd}}

			<div><label for="pwd">Password</label><input name="pwd" id="pwd" type="password"></div>

			<div class="submit">
				<input type="submit" value="View Registration" class="btn btn-primary">
			</div>

		</fieldset>

		</form>
	{{/emptylist}}
{{/list}}

<?php if (!empty($list)) { ?>
<section class="admin-float">
<h1>Registrant Statistics</h1>
<table class="admin">
	<thead>
		<tr>
			<th>Type
			<th>Count
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($registrant_stats as $type => $count)
	{
	?>
		<tr>
			<td><?php echo $type ?>
			<td><?php if ($count > 0) echo $count ?>
		</tr>
	<?php
	}
	?>
		<tr>
			<td><em>Total</em>
			<td>{{total_count}}
		</tr>
	</tbody>
</table>
</section>
<section class="admin-float">
<h1>Panel Statistics</h1>
<table class="admin">
	<thead>
		<tr>
			<th>Panel
			<th>Count
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($panel_stats as $panel => $count)
	{
	?>
		<tr>
			<td><?php echo $panel ?>
			<td><?php if ($count > 0) echo $count ?>
		</tr>
	<?php
	}
	?>
		<tr>
			<td><em>Networking Reception</em>
			<td>{{network_count}}
		</tr>
	</tbody>
</table>
</section>
<section class="admin-full">
	<div class="bar-graph">{{#graph}}<span title="{{date}}"><span class="bar" style="height: {{height}}px"></span><span class="label">{{label}}</span></span>{{/graph}}</div>
</section>
<section class="admin-full">
<h1>Registrants</h1>
<table class="admin admin-tiny">
	<thead>
		<tr>
			<th>ID
			<th>Name
			<th>Type
			<th>Email Address
			<th>Panel&nbsp;1
			<th>Panel&nbsp;2
			<th>Panel&nbsp;3
			<th><abbr title="Attend Networking Reception?">NW?</abbr>
			<th>Time
		</tr>
	</thead>
	<tbody>
	{{#list}}
		<tr>
			<td>{{#remark}}<abbr title="{{remark}}">{{/remark}}{{id}}{{#remark}}</abbr>{{/remark}}
			<td>{{firstname}} {{lastname}}
			<td>{{type}}
			<td>{{email}}
			<td>{{panel1}}
			<td>{{panel2}}
			<td>{{panel3}}
			<td>{{network}}
			<td>{{time}}
		</tr>
	{{/list}}
	</tbody>
</table>
</section>
<?php } ?>
</article>