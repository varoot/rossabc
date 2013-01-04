<?php
set('profile_id', 'peter-adriaens');
set('profile_name', 'Peter Adriaens');
set('profile_title', 'Professor of Civil and Environmental Engineering; Professor of Entrepreneurship and Strategy');
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
		<p>Aside from his professor positions, Dr. Adriaens serves as CleanTech Director to the Wolverine Venture Fund of the University of Michigan. He is past-President of the Association of Environmental Science and Engineering Professors, and a member-by-eminence of the American Academy of Environmental Engineering. Following a 20-year career focused on validating laboratory-based bioremediation, environmental sensing and green building technologies in the field, his current work focuses on CleanTech innovation and entrepreneurship. He founded Global CleanTech LLC, and is Director of Asian Operations at LimnoTech, an environmental services firm focused on energy-water nexus issues in the US and China.</p>
	</div>
</section>
{{/short_panel}}

