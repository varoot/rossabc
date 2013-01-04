<?php
set('profile_id', 'debbie-rough');
set('profile_name', 'Debbie Rough');
set('profile_title', 'Consultant of Organizational Change Strategies and Human Resources, DR Consulting');
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
		<p>Ms.&nbsp;Rough is an organizational change consultant and an executive coach. She has designed and implemented change strategies for start-ups and mature organizations for over thirty years. Her career in Asia includes Managing Director of Organizational Change Strategies and Talent Management for GM Daewoo in South Korea, and Human Resources and Organizational Development Director - Asia Pacific based in Tokyo, Japan for Delphi Automotive Systems. She currently lives in Traverse City, Michigan, and she has two children who are working in Seoul.</p>
	</div>
</section>
{{/short_panel}}