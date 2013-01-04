<?php
set('profile_id', 'gautam-ahuja');
set('profile_name', 'Gautam Ahuja');
set('profile_title', 'Harvey C. Fruehauf Professor of Business Administration; Professor of Strategy; Chair of Strategy');
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
		<p>Dr.&nbsp;Ahuja has received numerous teaching awards including Best Professor in the MBA program in 1997, 1999, 2000 and 2001 at The University of Texas-Austin and in 2003 and 2004 at Michigan. In addition, he has received the Best Professor award in the PhD program in 2004 at Michigan. Dr. Ahuja has also been recognized in Business Week's annual guide to the top Business schools. His research on innovation and technology strategy has received several international awards including the Free Press Award for outstanding research in Strategy, the Sade-Pongy and West Publishing Awards for Organization Theory, and the Best Dissertation Award from The Institute for Operations Research and the Management Sciences.</p>
	</div>
</section>
{{/short_panel}}

