<?php
set('profile_panel_id', 'asean');
set('panel_title', 'ASEAN');
set('speakers', array('airlangga-hartarto', 'simon-kahn', 'bradley-lalonde'));
set('moderators', array('linda-lim'));
?>
{{#short_panel}}<a href="{{base_uri}}panels/{{profile_panel_id}}">{{/short_panel}}
<div class="image"><img src="{{base_uri}}images/panels/{{profile_panel_id}}.jpg" width="200" height="150" alt="{{panel_title}} panel"></div>
{{#short_panel}}<h2>{{panel_title}}</h2></a>{{/short_panel}}

<p>The ASEAN Region is one of the fastest growing regions in the world with a combined GDP (PPP) of US$3.1 trillion. However, it is usually overshadowed by India and China in the global stage. As we look forward to the next decade we need to answer several questions. What is the role of the ASEAN countries in the overall world economy? How can ASEAN navigate and emerge as a strong player on the global stage? What are the challenges that ASEAN faces that need to be overcome to be the next forerunner in Asia?</p>

{{>template/panelists}}