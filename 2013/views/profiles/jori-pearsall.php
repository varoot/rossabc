<?php
set('profile_id', 'jori-pearsall');
set('profile_name', 'Jori Pearsall');
set('profile_title', 'Senior Product Manager, GREE International');
?>
{{#short_panel}}
<li><strong><a href="{{base_uri}}panels/{{profile_panel_id}}#{{profile_id}}">{{profile_name}},</a></strong> {{profile_title}}</li>
{{/short_panel}}
{{^short_panel}}
<section id="{{profile_id}}">
	<hgroup>
		<h1>{{profile_role}}: {{profile_name}}</h1>
		<h2>{{profile_title}}</h2>
	</hgroup>
	<div class="profile">
		{{>template/panelist-picture}}
		<p>At GREE International, Mr.&nbsp;Pearsall is responsible for producing new social mobile games targeted at US and international markets. Prior to joining GREE International,  Mr.&nbsp;Pearsall spent four years as a Product Marketing Manager at Google, most recently focusing on the Google+ launch marketing strategy and the Asia Pacific product marketing lead for Android and Google Maps, based respectively in Tokyo and Sydney.</p>
	</div>
</section>
{{/short_panel}}

