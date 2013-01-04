<?php
set('profile_id', 'masaaki-maeda');
set('profile_name', 'Masaaki Maeda');
set('profile_title', 'President and CEO, NTT DOCOMO USA, Inc.');
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
		<p>Mr.&nbsp;Maeda is currently the President &amp; CEO of NTT DOCOMO USA, a wholly owned subsidiary of NTT DOCOMO Inc, Japan’s leading mobile telecommunications company. Also serving as the Associate Senior Vice President in NTT DOCOMO, Mr. Maeda oversees new business development in the Americas.</p>
	</div>
</section>
{{/short_panel}}

