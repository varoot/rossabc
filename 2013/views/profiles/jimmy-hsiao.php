<?php
set('profile_id', 'jimmy-hsiao');
set('profile_name', 'Jimmy Hsiao');
set('profile_title', 'CEO, Logic Solutions');
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
		<p>Mr.&nbsp;Hsiao founded Logic Solutions in 1995, a global company that provides technology solutions and services, including custom mobile strategy and application development, web applications, and comprehensive websites for businesses across the US. He has grown Logic from a one man shop to employees in five locations around the world - Ann Arbor, Irvine, Beijing, Shanghai and Nanjing. Logic's mobile development expertise is evidenced by its impressive portfolio of technologically sophisticated B2B apps developed for companies in a wide array of diverse industries. Mr.&nbsp;Hsiao holds a Master of Science degree in Computer Engineering and a Bachelor of Science degree in Electrical Engineering, both from the University of Michigan. Before founding Logic Solutions, he was a senior software engineer at Mallinckrodt Sensor Systems and the Leco Corporation.</p>
	</div>
</section>
{{/short_panel}}