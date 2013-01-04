<?php
set('profile_id', 'richard-smith');
set('profile_name', 'Richard Smith');
set('profile_title', 'Head of M&A and Corporate Finance, Tractus Asia');
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
		<p>Mr.&nbsp;Smith has 25 years of management and corporate finance experience in Asia and the Middle East. He has worked for Citibank, a Thai-based boutique investment bank, as well as leading his own corporate financial advisory services firm. He has particular expertise in sell-side deal structuring and transactions, introducing clients to over a hundred banks, corporations, angel investors, and private equity funds, while providing provided advice on projects valued at more than US$250 million. He has also arranged joint ventures in several countries in Asia.</p>
	</div>
</section>
{{/short_panel}}

