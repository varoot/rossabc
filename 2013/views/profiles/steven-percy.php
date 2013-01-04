<?php
set('profile_id', 'steven-percy');
set('profile_name', 'Steven W. Percy');
set('profile_title', 'Former Chairman & CEO, BP America');
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
		<p>Steven Percy chairs the Board of Wavefront Technology Solutions, a service provider to the the oil and gas and environmental remediation industries. He is also a member of the Board of Omnova Solutions headquartered in Akron.  Since retiring from BP he has visited as a Professor at the University of Michigan’s Ross School of Business. Previously, he served on President Clinton’s Council on Sustainable Development as Co-Chair of its Climate Change Task Force.  Mr.&nbsp;Percy has contributed to the Millennium Ecosystem Assessment. His formal education includes a BSME, MBA, and a JD. He is an alumnus of the Ross School of Business where he received his MBA.</p>
	</div>
</section>
{{/short_panel}}

