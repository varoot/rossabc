<?php
set('profile_id', 'john-kwant');
set('profile_name', 'John F. Kwant');
set('profile_title', 'Director of International Government Affairs for Asia-Pacific and Africa Matters, Ford Motor Company');
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
		<p>As Ford's Director of International Government Affairs for Asia-Pacific and Africa Matters, Mr.&nbsp;Kwant responsible for fully advocating for all Asia-Pacific &amp; Africa matters in the US and ensuring corporate alignment and collaboration between the US and APA markets on Ford's public policy and lobbying priorities. Mr.&nbsp;Kwant recently returned from a nearly three year assignment in Shanghai as the VP for Government Affairs for Ford's APA Operations, which represents operations in 12 countries with combined sales of over $10 billion. Mr.&nbsp;Kwant joined Ford in 1999, where he previously assisted in business development, mergers, acquisitions, and strategic alliances surrounding Internet distribution channel partners.</p>
	</div>
</section>
{{/short_panel}}