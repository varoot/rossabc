<?php
set('profile_panel_id', 'china');
set('panel_title', 'China');
set('speakers', array('dennis-teo', 'john-kwant', 'junhai-liu'));
set('moderators', array('brian-wu'));
?>
{{#short_panel}}<a href="{{base_uri}}panels/{{profile_panel_id}}">{{/short_panel}}
<div class="image"><img src="{{base_uri}}images/panels/{{profile_panel_id}}.jpg" width="200" height="150" alt="{{panel_title}} panel"></div>
{{#short_panel}}<h2>{{panel_title}}</h2></a>{{/short_panel}}

<p>This country of 1.3 billion consumers has enticed businesses ever since its doors were opened, but few foreign companies have been able to profit from the China market. During the 2012 China Panel, we will explore the ever-changing economic landscape of China and learn from market leaders on how profit from these changes.</p>

{{>template/panelists}}