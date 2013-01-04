<?php
set('profile_id', 'jim-frey');
set('profile_name', 'Jim Frey');
set('profile_title', 'CEO and Co-founder, Resource Recycling Systems (RRS)');
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
		<p>Jim Frey has thirty years of expertise in environmental program development both in public service and private enterprise. Mr. Frey is often involved in project negotiations that bring together key stakeholders representing both public and private sector interests as they build long-term partnerships that create a foundation for program growth many years into the future. He chairs  the State of Michigan Waste Reduction Advisory Committee, Michigan Solar Energy Association and the Ann Arbor Energy Commission. Jim is also a member of the Erb Advisory Board of the Erb Institute for Global Corporate Sustainability at the University of Michigan. Mr. Frey holds an MBA with High Distinction from the University of Michigan.</p>
	</div>
</section>
{{/short_panel}}