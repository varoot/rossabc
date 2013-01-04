<?php
set('profile_id', 'amiyatosh-purnanandam');
set('profile_name', 'Amiyatosh Purnanandam');
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
		<p>Amiyatosh graduated from the Johnson Graduate School of Management, Cornell University, in 2005 with a Ph.D. in Finance. He also holds a PGDM (MBA) from the Indian Institute of Management, Lucknow and B.S. (Electrical Engineering) from the Indian Institute of Technology, Kharagpur. Prior to joining the academia, Amiyatosh worked as an Assistant Vice President at ICICI Ltd., a leading bank of India. He also has consulting experience in the banking sector. Amiyatosh has published extensively in the top journals in Finance and Economics on topics covering a wide spectrum of finance. His main research interests are in banking, risk-management, investments and credit risk. He was awarded the Lehman Brother’s 2003 fellowship for Research Excellence in Finance for his dissertation work on risk-management. He was awarded the Bank One Chair in 2008-2009 by the Ross School of Business in recognition of his research contributions. He has won numerous grants from the FDIC for his work on banking and the connection between the banking and the real sector of the economy. His research has been widely cited by academics and policymakers. Amiyatosh’s current research focuses on mortgage-backed-securities and incentive conflicts in the financial sector. Amiyatosh’s main teaching interests are in the fields of corporate financial policies and firm valuation. He has taught courses at the undergraduate, MBA, Executive Education and PhD levels.  He has been nominated for teaching excellence awards by both MBA and PhD students at Ross.</p>
	</div>
</section>
{{/short_panel}}

