<?php
set('profile_id', 'airlangga-hartarto');
set('profile_name', 'The Hon. Airlangga Hartarto');
set('profile_title', 'Chairman of Trade, Investment, and Industry Commission, The House of Representatives of the Republic of Indonesia');
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
		<p>Mr.&nbsp;Airlangga Hartarto was elected as Indonesia’s Member of Parliament in 2004. As the Chairman of Trade, Investment, and Industry Commission, Mr.&nbsp;Hartarto contributes to a range of worthwhile economic developments in Indonesia. Previously, he held the Chairman position of Energy, Environment, Research and Technology Commission (2006–2009). As an entrepreneur, Mr.&nbsp;Hartarto co-founded Fajar Paper, a leading packaging paper manufacturer in Indonesia. He also serves as three-time Chairman of Indonesia’s Association of Publicly Listed Companies. Mr.&nbsp;Hartarto has written the book <em>Industrialization Strategy Clustering in Indonesia</em> (2004). He graduated with Mechanical Engineering degree (Gadjah Mada University, Indonesia) and obtained dual Master degree in Management Technology (Melbourne Business School) and MBA (Monash University), Australia.</p>
	</div>
</section>
{{/short_panel}}