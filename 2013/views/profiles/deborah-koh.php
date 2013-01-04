<?php
set('profile_id', 'deborah-koh');
set('profile_name', 'Deborah Koh');
set('profile_title', 'Center Director-Americas, Singapore Economic Development Board');
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
		<p>Ms.&nbsp;Koh is responsible for working with Midwest-base multinationals and fast-growing companies to explore opportunities in the Asia-Pacific region. Prior to this position, she was part of the Consumer Businesses division, where she promoted and developed the Household and Personal Care industry in Singapore. Ms.&nbsp;Koh holds a B.S. in Biology and Psychology from the University of Wisconsin-Madison, and a Master of Public Policy from the National Graduate Institute for Policy Studies in Tokyo, Japan.</p>
	</div>
</section>
{{/short_panel}}