<?php
set('profile_id', 'brian-wu');
set('profile_name', 'Brian Wu');
set('profile_title', 'Assistant Professor of Strategy, Ross School of Business');
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
		<p>Professor Wu received his B.S. from Tsinghua University in China, M.Sc. from National University of Singapore, and Ph.D. from the Wharton School at the University of Pennsylvania prior to joining the Ross School of Business in 2007. His work focuses on the interactions of firm capabilities, corporate strategy, and industry evolution. His research has been recognized with several awards, including the 2006 AOM Technology and Innovation Management (TIM) <em>Division Stephan Schrader Best Conference Paper Award</em> and the 2005 US Small Business Administration <em>Best Student Paper Award.</em></p>
	</div>
</section>
{{/short_panel}}