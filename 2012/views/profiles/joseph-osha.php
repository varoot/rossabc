<?php
set('profile_id', 'joseph-osha');
set('profile_name', 'Joseph Osha');
set('profile_title', 'Managing Director & Senior Equity Analyst Global Solar Energy Research, Bank of America Merrill Lynch');
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
		<p>Mr.&nbsp;Osha is the senior equity analyst in charge of overseeing solar energy research at Bank of America Merrill Lynch. During his 20-year career in equity research Joe has worked in a variety of industries and locations. He began his career as an equity analyst with Baring Securities in 1992, in Tokyo. Prior to taking up his current role, he was head of Asia ex-Japan equity research for BAML, based in Hong Kong. He joined Bank of America in 1995 as an equity analyst based in Tokyo.  He returned to the United States in 1997 to cover semiconductor stocks, and worked in that capacity in New York and San Francisco until 2007.  He relocated to Hong Kong in the fall of 2007 as a member of the research management team.</p>
	</div>
</section>
{{/short_panel}}

