<?php
set('profile_panel_id', 'india');
set('panel_title', 'India');
set('speakers', array('angela-chitkara', 'alex-berlin'));
set('moderators', false);
?>
{{#short_panel}}<a href="{{base_uri}}panels/{{profile_panel_id}}">{{/short_panel}}
<div class="image"><img src="{{base_uri}}images/panels/{{profile_panel_id}}.jpg" width="200" height="150" alt="{{panel_title}} panel"></div>
{{#short_panel}}<h2>{{panel_title}}</h2></a>{{/short_panel}}

<p>As one of the fastest growing economies in the world, India is a rapidly rising international power, and is increasingly becoming a key leader in global discussions about trade, climate change and social issues. However, there are questions related to India that experts in the academic and business world still struggle with: What are the most promising industries in India and which will enjoy the greatest future growth? What are the critical success parameters in building viable, sustainable businesses in India? How successful has India been in balancing rapid economic growth with environmental protection and growing income disparities? What are the challenges for Indian companies as they pursue their vision of becoming global leaders in their respective industries?</p>

{{>template/panelists}}
