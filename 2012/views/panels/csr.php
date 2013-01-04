<?php
set('profile_panel_id', 'csr');
set('panel_title', 'Corporate Social Responsibility');
set('speakers', array('steven-percy', 'jim-frey', 'david-tulauskas'));
set('moderators', array('aneel-karnani'));
?>
{{#short_panel}}<a href="{{base_uri}}panels/{{profile_panel_id}}">{{/short_panel}}
<div class="image"><img src="{{base_uri}}images/panels/{{profile_panel_id}}.jpg" width="200" height="150" alt="{{panel_title}} panel"></div>
{{#short_panel}}<h2>{{panel_title}}</h2></a>{{/short_panel}}

<p>Economies of emerging markets such as those in Asia are growing dramatically; companies and governments continue to address the opportunities and challenges of sustainability in business and society. Dealing with the dynamics and complexity of sustainability and social responsibility, businesses need to innovate and change their current mindset in order to succeed. The CSR panel will cover issues surrounding sustainable innovation, social innovation, and CSR-driven innovation in a rapidly growing Asia.</p>

{{>template/panelists}}