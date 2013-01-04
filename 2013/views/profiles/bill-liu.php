<?php
set('profile_id', 'bill-liu');
set('profile_name', 'Bill Liu');
set('profile_title', 'Vice President, NaviAsia Consulting Group');
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
		<p>Bill Liu is a China expert — connecting companies and people globally is what Bill’s entire work career is all about. At Bill’s current firm, NaviAsia, where he’s a consultant and Partner, he has consistently generated over 80% of NaviAsia’s business, which earned him being named <em>Crain’s Chicago Business’</em> 2006 Top China Consultant. He is a frequent guest lecturer at Kellogg School and an adjunct faculty of Shenyang Jianzhu University. He earned an MBA in Marketing, Finance, and International Business from Northwestern University Kellogg School of Management and a PhD in Environmental Engineering from University of Illinois at Urbana-Champaign. He sits on the Corporate Board of Directors for the Standard Rubber Company in Zhuihai, China and Shu-Te Group in Taiwan; is a member of the City of Chicago’s China Committee; involved in the Business Advisory Council for Dominican University and Benedictine University’s Graduate School of Business; and is the Chairperson and Founder of Asia-Pacific and the Chicago-West Committees for Kellogg’s Alumni Club of Chicago.</p>
	</div>
</section>
{{/short_panel}}