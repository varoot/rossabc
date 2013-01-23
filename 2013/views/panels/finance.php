<?php
set('profile_panel_id', 'finance');
set('panel_title', 'Finance');
set('speakers', array('zachary-emig', 'robert-pfaff', 'yuen-yuen-ang'));
set('moderators', array('uday-rajan'));
?>
{{#short_panel}}<a href="{{base_uri}}panels/{{profile_panel_id}}">{{/short_panel}}
<div class="image"><img src="{{base_uri}}images/panels/{{profile_panel_id}}.jpg" width="200" height="150" alt="{{panel_title}} panel"></div>
{{#short_panel}}<h2>{{panel_title}}</h2></a>{{/short_panel}}

<p>Asia has been leading the global economic recovery since the recent financial crisis. In the wake of the financial crisis, leaders from economies across the region have proposed various financial reforms. How will Asia’s public policies affect the financial landscape in the post-crisis era? What does this mean for the growth and maturation of Asian financial services companies? These questions and more are what the 2013 Finance panel will seek to address.</p>

{{>template/panelists}}
