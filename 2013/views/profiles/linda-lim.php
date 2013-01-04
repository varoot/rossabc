<?php
set('profile_id', 'linda-lim');
set('profile_name', 'Linda Lim');
set('profile_title', 'Professor of Strategy, Stephen M. Ross School of Business');
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
		<p>Prof. Linda Lim has been faculty advisor of the annual Asia Business Conference for 20 years. She also served as Director of the 50-year-old Center for Southeast Asian Studies from 2005-09. A native of Singapore, Prof. Lim obtained her degrees in economics from the universities of Cambridge (BA), Yale (MA) and Michigan (PhD). Her recent publications include “Globalizing State, Disappearing Nation: Foreign Participation in Singapore’s Economy”, “Rebalancing in East Asia” (both 2010), and “Southeast Asian Chinese Business and Regional Economic Development” (2011, forthcoming). Her current research is on changes in Singapore’s economic development model; and on foreign direct investment by Chinese companies in Southeast Asia.  She is the founder and editor of the refereed <em>Journal of Asian Business,</em> and regularly contributes articles on the Singapore economy to <em>The Straits Times</em> (Singapore newspaper)</p>
	</div>
</section>
{{/short_panel}}