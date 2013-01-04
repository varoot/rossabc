<?php
set('profile_id', 'shotaro-nakahama');
set('profile_name', 'Shotaro Nakahama');
set('profile_title', 'Vice President & Treasurer, Cable Technologies North America, Inc.');
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
		<p>Mr.&nbsp;Nakahama started his working career with Mistui &amp; Co., Ltd after graduating from Keio University in Tokyo, Japan. He nourished his international business skill during his career with Mistui &amp; Co., mainly in the steel sector. He engaged in global business with diverse customer base in all of the five continents, and his strong ability to establish relationships and network in multi-cultural environment is the foundation of his career with the Japan Business Society of Detroit. Mr.&nbsp;Nakahama is also on the Executive Committee Member for Japan Center for Michigan Universities and a Asian Committee Member for the Detroit Regional Economic Partnership.</p>
	</div>
</section>
{{/short_panel}}