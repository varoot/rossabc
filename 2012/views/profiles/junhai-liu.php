<?php
set('profile_id', 'junhai-liu');
set('profile_name', 'Junhai Liu');
set('profile_title', 'Professor of Law, Renmin University of China');
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
		<p>As well as his Professor position at Renmin University of China, Mr.&nbsp;Junhai has been the Director of RUC Business Law Center since 2006. He is also the Vice Chairman of China Consumers' Association, the Vice President &amp; Secretary General of China Consumers Protection Law Society, and the Founder &amp; Editor-in-Chief of the E-Journal of www.chinacapitallaw.com. He has also advised the Supreme Court on many judicial interpretations and controversial cases in the field of corporate law and business law. Mr.&nbsp;Junhai has a diverse educational background, having studied at Hebei University, Oslo University, Amsterdam Law School, and was a visiting scholar at Ross School of Business from 2000-01.</p>
	</div>
</section>
{{/short_panel}}