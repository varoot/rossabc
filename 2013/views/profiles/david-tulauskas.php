<?php
set('profile_id', 'david-tulauskas');
set('profile_name', 'David J. Tulauskas');
set('profile_title', 'Director of Sustainability, General Motors Company');
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
		<p>David Tulauskas is responsible for all aspects of sustainability reporting and managing the “Sustainability Council” of subject matter experts and functional leaders. Since joining GM in 1991 as staff engineer on the Environmental Activities Staff in Detroit, Mr. Tulauskas has worked in a wide range of functions from manufacturing to product development to government relations and public policy. He was previously based in Shanghai, where he developed GM's Alternative Fuel Strategy for Asia. He also oversaw GM's public policy activities throughout Asia, and helped build a unified regional and global strategies & business priorities on key issues impacting energy, the environment, trade, and safety. Mr. Tulauskas holds a Bachelor of Science degree in mechanical engineering from the University of Michigan, a Master of Science degree in civil/environmental engineering from Wayne State University and an International Executive MBA from Rutgers University. He and his wife are blessed with three children.</p>
	</div>
</section>
{{/short_panel}}