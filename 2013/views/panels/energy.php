<?php
set('profile_panel_id', 'energy');
set('panel_title', 'Energy & Environment');
set('speakers', array('ujjwal-kumar', 'deborah-koh', 'joseph-osha'));
set('moderators', array('peter-adriaens'));
?>
{{#short_panel}}<a href="{{base_uri}}panels/{{profile_panel_id}}">{{/short_panel}}
<div class="image"><img src="{{base_uri}}images/panels/{{profile_panel_id}}.jpg" width="200" height="150" alt="{{panel_title}} panel"></div>
{{#short_panel}}<h2>{{panel_title}}</h2></a>{{/short_panel}}

<p>Like an untamable dragon, Asia is heavily influencing the world's future, especially in terms of energy and the environment. Currently, the demand for energy among developing nations in Asia is rapidly increasing. Between 1996 and 2006, Asia saw a 59.6% increase in total energy consumption. This trend not only offers significant business opportunities, but also poses great threats to energy sustainability. Our panelists will share their insights on energy trends in Asia, strategies to tackle these and other energy challenges, and the global influence of Asia's energy development.</p>

{{>template/panelists}}