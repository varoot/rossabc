<?php
set('profile_panel_id', 'technology');
set('panel_title', 'Technology');
set('speakers', array('craig-nastanski', 'michael-gus-schmedlen', 'hon-mun-yip'));
set('moderators', array(false));
?>
{{#short_panel}}<a href="{{base_uri}}panels/{{profile_panel_id}}">{{/short_panel}}
<div class="image"><img src="{{base_uri}}images/panels/{{profile_panel_id}}.jpg" width="200" height="150" alt="{{panel_title}} panel"></div>
{{#short_panel}}<h2>{{panel_title}}</h2></a>{{/short_panel}}

<p>Convergence of hardware, software, and services to create integrated IT infrastructure solutions is rapidly gaining popularity. Competition among hardware makers, software developers, and service providers is continuing to intensify. The Technology panel will seek to understand the market dynamics and competitive forces, among various players within Asia, which will be the key to determining the outcome of these trends.</p>

{{>template/panelists}}