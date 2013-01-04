<?php
set('profile_id', 'ujjwal-kumar');
set('profile_name', 'Ujjwal Kumar');
set('profile_title', 'Business Leader - North American Products P&L, GE Energy/Oil & Gas');
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
		<p>Mr.&nbsp;Kumar leads a business that has sales and service operations on five continents supported by an engineering team from the US, France, Italy, Poland, and India; and supply chain operations in US, Italy, China, and India. He has moved seamlessly across diverse industries like automotive, healthcare, aviation, energy and oil &amp; gas in roles varying from P&L management, product management, business development, and marketing. He is known amongst his peers as the turnaround man &mdash; an expert at business turnaround, tactical strike back against tough competitive situations, and new market entry. Mr.&nbsp;Kumar received his MBA from the Ross School of Business.</p>
	</div>
</section>
{{/short_panel}}