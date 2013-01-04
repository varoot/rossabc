<?php
set('profile_id', 'aneel-karnani');
set('profile_name', 'Professor Aneel Karnani');
set('profile_title', 'Professor of Strategy, Stephen M. Ross School of Business');
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
		<p>Professor Karnani’s interests are focused on three topics: strategies for growth, global competition, and the role of business in society. His recent research is on poverty reduction and the appropriate roles for the private sector, the state and civil society. He is interested in how society can strike the appropriate balance between private profits and public welfare in tackling major societal problems. He is the author of the book Fighting Poverty Together published by Macmillan in 2011. In addition to these university activities, Dr. Karnani is actively involved in executive development programs both in companies and throughout the University of Michigan. He consults with firms on strategic planning processes, and strategy analysis and formulation.</p>
	</div>
</section>
{{/short_panel}}