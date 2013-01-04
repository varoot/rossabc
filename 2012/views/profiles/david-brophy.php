<?php
set('profile_id', 'david-brophy');
set('profile_name', 'David J. Brophy');
set('profile_title', 'Associate Professor of Finance, Stephen M. Ross School of Business');
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
		<p>David Brophy is a member of the Finance Faculty and the Entrepreneurial Studies Faculty at the Ross School of Business, where he teaches courses in financing research commercialization, venture capital, private equity, and valuation. He serves as director of the University of Michigan Center for Venture Capital and Private Equity Finance. Dr. Brophy has been a consultant to government agencies domestically and internationally, and has served on the Governor's Commission on High Technology in Michigan. He is active in the development of policy regarding the university role in technology transfer, entrepreneurial activity, and venture capital investment. After graduating from St. Francis Xavier University (B.A. and B.C.), he received his MBA from the University of Detroit and his PhD from the Ohio State University before teaching. His research focuses on pricing of initial public offerings of common stock and characteristics of the venture capital market.</p>
	</div>
</section>
{{/short_panel}}