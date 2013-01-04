<?php
set('profile_id', 'vinay-gupta');
set('profile_name', 'Vinay Gupta');
set('profile_title', 'Founder & CEO, Janeeva Inc.');
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
		<p>Mr.&nbsp;Gupta is the founder and CEO of Janeeva Inc, an outsourcing relationship management company based in Ann Arbor, Michigan. Before Janeeva, he was an Entrepreneur in Residence with Ardesta LLC, a pioneer in investing in "small tech" MEMS companies. Through Ardesta, Mr.&nbsp;Gupta served as president of three venture backed companies: Sensicore, Discera and Translume. In 1996, he co-founded BlueGill Technologies, an Internet infra-structure company that specializes in Internet billing software. BlueGill was sold to CheckFree Corporation in 2000 for $250 million. Mr. Gupta has held positions as Managing Director-Asia Pacific and General Manager-India for Cabletron Systems, as well as Manager of Global Operations at NCR and Zenith Electronics. He continues to serve on the board of directors for Translume.</p>
	</div>
</section>
{{/short_panel}}