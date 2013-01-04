<?php
set('profile_id', 'janny-lu');
set('profile_name', 'Janny Lu');
set('profile_title', 'CEO, Ebinger Manufacturing & Jets Glove Manufacturing; President, Fuchi Textile North America');
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
		<p>Ms.&nbsp;Lu serves as Chief Executive Officer for Ebinger Manufacturing (EMC). EMC is the manufacturer and master distributor for full range of industrial fasteners and construction related product. She is also the CEO of Jets Glove, U.S.A, and partner of Jets Glove Manufacturing, with 3 manufacturing facilities in China. Ms.&nbsp;Lu is also the President of Fuchi Textile North America, which is part of Fuchi Textile Company, a manufacturer of all types of fabrics and leather for automotive seating with manufacturing facilities in Taiwan, China, Malaysia and Thailand. She is a recipient of the Michigan Top 10 Best Businessman award in 2001, and also the Presidential Award from the President of Taiwan as a Top 10 Outstanding Entrepreneur overseas in 2002. She also has experience serving as President of the Taiwanese Chamber of commerce in 1999.</p>
	</div>
</section>
{{/short_panel}}