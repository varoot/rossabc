<?php
set('profile_id', 'rama-krishna');
set('profile_name', 'A. Rama Krishna');
set('profile_title', 'Chief Investment Officer, ARGA Investment Management');
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
		<p>Founded by Mr. Krishna, ARGA Investment Management is an independent investment management firm focused on global equities. He was previously President, International of Pzena Investment Management Inc. and Managing Principal, Member of Executive Committee, and Portfolio Manager of its operating company in New York, where he led the development of the firm's International Value and Global Value strategies while managing the US Large Cap Value strategy. Prior to joining Pzena in 2003, Mr. Krishna was at Citigroup Asset Management, where he was Chief Investment Officer. He also has experience working with Alliance Capital and Credit Suisse First Boston in New York, Tokyo, and Singapore.</p>
	</div>
</section>
{{/short_panel}}

