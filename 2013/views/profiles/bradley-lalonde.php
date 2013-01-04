<?php
set('profile_id', 'bradley-lalonde');
set('profile_name', 'Bradley LaLonde');
set('profile_title', 'CEO & Co-Founder, Vietnam Partners, LLC');
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
		<p>Mr.&nbsp;Bradley LaLonde co-founded Vietnam Partners in 2004 after a 25-year career with Citibank in a variety of international positions. Mr.&nbsp;LaLonde headed Citibank’s move into Vietnam and implemented the strategy that resulted in Citibank becoming the largest and most successful foreign bank in the country. Presently, Mr.&nbsp;LaLonde heads Vietnam Partners investment banking business. Vietnam Partners LLC is a boutique investment bank serving Vietnam and raises/invests capital, provides advice to clients and seeks unusual opportunities for trade and investment. Most recently, Vietnam Partners has secured the rights to distribute Chrysler brands throughout Indochina. Mr.&nbsp;LaLonde received a bachelor’s degree from the University of Michigan in 1975 and a Master’s degree in International Affairs from Columbia University in 1977. He currently resides in Hanoi.</p>
	</div>
</section>
{{/short_panel}}
