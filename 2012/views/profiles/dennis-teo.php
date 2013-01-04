<?php
set('profile_id', 'dennis-teo');
set('profile_name', 'Dennis Teo');
set('profile_title', 'Managing Partner, Waypointe Management Consulting');
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
		<p>Based in Shanghai, China, Mr.&nbsp;Teo has over 17 years of supply chain transformation experience across Automotive and Hi-Tech industries in the US, Singapore, Thailand, and China. Prior to Waypointe, he was the General Manager of GITI Tire's supply chain an international marketing, where he led optimization of GITI's entire supplpy chain and domestic distribution center network. Mr.&nbsp;Teo also has experience as part of BearingPoint and Deloitte's supply chain practices. He has Masters degrees in both Business Administration and Industrial Operations Engineering from U of M.</p>
	</div>
</section>
{{/short_panel}}