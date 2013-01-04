<?php
set('profile_id', 'jon-voskuil');
set('profile_name', 'Jon Voskuil');
set('profile_title', 'Director of Business Strategy, Alticor; Director of Regional Planning and Management, Amway Corporation');
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
		<p>Jon Voskuil currently serves as the Director of Regional Planning and Business Management for Amway, working with more than 40 affiliates with annual revenue in excess of USD $4 billion. In this current role, he supports the Asia Pacific Regional President with a broad range of annual and long range business planning activity and managerial support. He is also engaged in a number of enterprise-wide planning and operating model initiatives.  Jon was previously head of Global Sales and Business Intelligence for the company, where he has worked since 1991.</p>
	</div>
</section>
{{/short_panel}}