{{#short_panel}}
<?php /* <li><strong><a href="{{base_uri}}panels/{{profile_panel_id}}#{{profile_id}}">{{profile_name}},</a></strong> {{profile_title}}</li> */ ?>
<li><strong>{{profile_name}},</strong> {{profile_title}}</li>
{{/short_panel}}
<?php
/*
{{^short_panel}}
<section id="{{profile_id}}">
	<hgroup>
		<h1>{{profile_role}}: {{profile_name}}</h1>
		<h2>{{profile_title}}</h2>
	</hgroup>
	<div class="profile">
		{{>template/panelist-picture}}
		{{{profile_content}}}
	</div>
</section>
{{/short_panel}}
*/
?>
