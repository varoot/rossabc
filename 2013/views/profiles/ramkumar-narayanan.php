<?php
set('profile_id', 'ramkumar-narayanan');
set('profile_name', 'Ramkumar Narayanan');
set('profile_title', 'V.P. Global Product Management, Yahoo! India');
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
		<p>Mr.&nbsp;Narayanan is responsible for leading product strategy and management for growth in Emerging Markets and Small Business. Primarily focused on India and the Middle East, he was previously leading some of Yahoo!'s efforts in developing global advertising platforms, search, and a number of consumer products. Prior to joining Yahoo!, Mr.&nbsp;Narayanan served in many capacities at Microsoft, both in the US and India, including leading the Unlimited Potential Group in Microsoft India, bringing affordable & relevant technology driven solutions to underserved communities. He also has over 12 years of experience in the US auto industry working for Chrysler Corporation and Ford Motor Company, where in 1998, he received the prestigious Ford President's Customer Driven Quality Award.</p>
	</div>
</section>
{{/short_panel}}

