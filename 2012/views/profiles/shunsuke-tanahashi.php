<?php
set('profile_id', 'shunsuke-tanahashi');
set('profile_name', 'Shunsuke Tanahashi');
set('profile_title', 'President & CEO, Ark Alternative Advisors Co., Ltd (Tokyo, Japan)');
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
		<p>Ark Alternative Advisors (Ark) is one of the very few independent placement agent specialized in alternative investment funds, primarily focusing on Private Equity funds. Mr.&nbsp;Tanahashi founded Ark in 2010, spinning out from Ant Capital Partners where he headed the Investor Relations team. Prior to joining Ant Capital, he worked at Goldman Sachs Asset Management Tokyo office promoting alternative products to institutional investors. He started his career at Mitsubishi UFJ Trust Bank in 1996 where he specialized in pension portfolio management, and was seconded to Research Institute for Pensions and Policies on Aging (Government Agency funded by GPIF) for 3 years during his assignment.</p>
	</div>
</section>
{{/short_panel}}

