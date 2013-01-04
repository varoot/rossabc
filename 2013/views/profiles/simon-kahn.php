<?php
set('profile_id', 'simon-kahn');
set('profile_name', 'Simon Kahn');
set('profile_title', 'Head of Marketing for Asia Pacific, Google');
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
		<p>Mr.&nbsp;Simon Kahn recently joined Google as Head of Marketing, Asia Pacific.  Previously, he worked at American Express for thirteen years including serving as Country Manager for Singapore from 2008 to 2011.  Prior to joining American Express, Mr.&nbsp;Kahn was Executive Director of Youth Venture, a non-profit organization based in Washington, D.C. that works with young people to develop and run their own businesses and organizations.  Mr.&nbsp;Kahn worked in national politics and government for four years before joining Youth Venture including working in the White House Liaison office in the Department of State.  He holds a BA in Asian Studies from Swarthmore College and a Masters in Chinese Studies and MBA from the University of Michigan.</p>
	</div>
</section>
{{/short_panel}}

