<?php
set('profile_id', 'sanjeev-maddila');
set('profile_name', 'Sanjeev Maddila');
set('profile_title', 'Managing Partner & Founder, Sumpura Management Consulting');
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
		<p>Sanjeev Maddila specializes in developing strategies for process, systems and metrics for their manufacturing, sourcing, distribution, and service &amp; parts operations. Prior to SUMPURA, he was a partner in Deloitte Consulting's Supply Chain practice and led the planning and optimization group. Before that Sanjeev was an associate partner at Accenture (prev. Andersen Consulting) where he spent more than 10 years in supply chain consulting and taught computer science at Northwestern University. He received his BTech in Computer Science from the Indian Institute of Technology, Kanpur, MS from the Johns Hopkins University and a PhD in Computer Engineering from the University of Illinois, Urbana-Champaign. Sanjeev is actively involved with the IIT alumni group and has founded the India Development Institute, an India-focused think tank. He served on the board of CityYear, a not-for-profit focused on K-12 literacy in Chicago Public Schools. He and his wife have lived in Chicago with their 2 kids since 1989.</p>
	</div>
</section>
{{/short_panel}}